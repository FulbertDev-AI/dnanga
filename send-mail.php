<?php
session_start();

// Importation de PHPMailer
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nettoyer les entrées
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));
    
    // Validation basique
    if (empty($name) || empty($email) || empty($message)) {
        header('Location: contact.php?status=error&message=missing_fields');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?status=error&message=invalid_email');
        exit;
    }
    
    $mail = new PHPMailer(true);
    
    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';           // Serveur SMTP Gmail
        $mail->SMTPAuth = true;                    // Activer l'authentification
        $mail->Username = 'contact.fulbert@gmail.com';  // TON email Gmail
        $mail->Password = 'eirefwdgkcplzbhk';                      // MOT DE PASSE D'APPLICATION (voir ci-dessous)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        
        // Destinataires
        $mail->setFrom($email, $name);             // L'email du visiteur
        $mail->addAddress('contact.fulbert@gmail.com', 'NANGA Ditorga'); // Ton email de réception
        
        // Répondre à l'expéditeur
        $mail->addReplyTo($email, $name);
        
        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message du portfolio : ' . $subject;
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5;'>
                <div style='max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px;'>
                    <h2 style='color: #333; margin-bottom: 20px;'>Nouveau message du portfolio</h2>
                    
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'><strong>Nom :</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'>$name</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'><strong>Email :</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'>$email</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'><strong>Sujet :</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #ddd;'>$subject</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; vertical-align: top;'><strong>Message :</strong></td>
                            <td style='padding: 10px 0;'>$message</td>
                        </tr>
                    </table>
                    
                    <p style='margin-top: 30px; color: #666; font-size: 12px;'>
                        Message envoyé depuis le portfolio de NANGA Ditorga
                    </p>
                </div>
            </div>
        ";
        
        // Version texte (au cas où)
        $mail->AltBody = "Nouveau message du portfolio\n\nNom: $name\nEmail: $email\nSujet: $subject\n\nMessage:\n$message";
        
        $mail->send();
        
        // Redirection avec message de succès
        header('Location: contact.php?status=success');
        exit;
        
    } catch (Exception $e) {
        // Erreur lors de l'envoi
        error_log("Erreur PHPMailer: {$mail->ErrorInfo}");
        header('Location: contact.php?status=error&message=send_failed');
        exit;
    }
} else {
    // Accès direct interdit
    header('Location: contact.php');
    exit;
}
?>