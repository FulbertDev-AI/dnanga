<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Valider les données
    $errors = [];
    
    if (empty($nom)) {
        $errors[] = "Le nom est requis";
    }
    
    if (empty($email)) {
        $errors[] = "L'email est requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis";
    }

    // Si pas d'erreurs, enregistrer dans la base de données
    if (empty($errors)) {
        // Paramètres de connexion à la base de données
        $servername = "localhost"; // ou l'adresse de votre serveur
        $username = "root";
        $password = "";
        $dbname = "portfolioProdb";

        try {
            // Créer une connexion
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Définir le mode d'erreur PDO sur exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparer la requête SQL
            $stmt = $conn->prepare("INSERT INTO contact (nom, email, message) VALUES (:nom, :email, :message)");
            
            // Lier les paramètres
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            
            // Exécuter la requête
            $stmt->execute();
            
            // Rediriger ou afficher un message de succès
            header("Location: merci.html"); // Créez une page de remerciement
            exit();
            
        } catch(PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
        
        // Fermer la connexion
        $conn = null;
    } else {
        // Afficher les erreurs
        foreach ($errors as $error) {
            echo "<p>Erreur: $error</p>";
        }
    }
} else {
    // Si quelqu'un essaie d'accéder directement au script
    echo "Accès non autorisé";
}
?>