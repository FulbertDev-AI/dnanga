<?php
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if (!in_array($current_lang, ['en', 'fr', 'es'])) {
    $current_lang = 'en';
}
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main style="padding-top: 80px;">
    <section class="section">
        <div class="container">
            <!-- En-tête -->
            <div style="text-align: center; margin-bottom: var(--stack-lg);">
                <h1 style="margin-bottom: var(--stack-sm);"><?php echo $t['contact_title']; ?></h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto;">
                    <?php echo $t['contact_subtitle']; ?>
                </p>
            </div>

            <!-- Formulaire + Infos en grille -->
            <div class="grid grid-2" style="align-items: start;">
                
                <!-- Formulaire -->
                <div class="glass-card" style="padding: var(--stack-md);">
                    <form action="#" method="POST" style="display: flex; flex-direction: column; gap: var(--stack-sm);">
                        <div>
                            <label for="name" class="text-sm" style="display: block; margin-bottom: 8px; font-weight: 500;">
                                <?php echo $t['form_name']; ?>
                            </label>
                            <input type="text" id="name" name="name" class="input" placeholder="<?php echo $t['form_name_placeholder']; ?>" required>
                        </div>
                        
                        <div>
                            <label for="email" class="text-sm" style="display: block; margin-bottom: 8px; font-weight: 500;">
                                <?php echo $t['form_email']; ?>
                            </label>
                            <input type="email" id="email" name="email" class="input" placeholder="<?php echo $t['form_email_placeholder']; ?>" required>
                        </div>
                        
                        <div>
                            <label for="subject" class="text-sm" style="display: block; margin-bottom: 8px; font-weight: 500;">
                                <?php echo $t['form_subject']; ?>
                            </label>
                            <input type="text" id="subject" name="subject" class="input" placeholder="<?php echo $t['form_subject_placeholder']; ?>" required>
                        </div>
                        
                        <div>
                            <label for="message" class="text-sm" style="display: block; margin-bottom: 8px; font-weight: 500;">
                                <?php echo $t['form_message']; ?>
                            </label>
                            <textarea id="message" name="message" class="input" rows="5" placeholder="<?php echo $t['form_message_placeholder']; ?>" required style="resize: vertical; min-height: 120px;"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: var(--stack-sm);">
                            <?php echo $t['form_submit']; ?>
                        </button>
                    </form>
                </div>

                <!-- Informations de contact -->
                <div class="flex flex-col gap-md">
                    <div class="glass-card" style="padding: var(--stack-md);">
                        <h3 style="margin-bottom: var(--stack-md);"><?php echo $t['contact_info_title']; ?></h3>
                        
                        <div style="display: flex; align-items: flex-start; gap: var(--stack-sm); margin-bottom: var(--stack-md);">
                            <div style="width: 40px; height: 40px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div>
                                <p class="text-sm" style="color: var(--on-surface-variant); margin-bottom: 4px;"><?php echo $t['contact_email_label']; ?></p>
                                <p style="font-weight: 500; word-break: break-word;"><?php echo $t['contact_email_value']; ?></p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: flex-start; gap: var(--stack-sm);">
                            <div style="width: 40px; height: 40px; background: rgba(173, 198, 255, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tertiary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <p class="text-sm" style="color: var(--on-surface-variant); margin-bottom: 4px;"><?php echo $t['contact_location_label']; ?></p>
                                <p style="font-weight: 500;"><?php echo $t['contact_location_value']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card" style="padding: var(--stack-md);">
                        <div style="display: flex; align-items: center; gap: var(--stack-sm);">
                            <div style="width: 12px; height: 12px; background: var(--secondary); border-radius: 50%; box-shadow: 0 0 0 4px rgba(78, 222, 163, 0.2); flex-shrink: 0;"></div>
                            <p class="text-sm" style="margin: 0; font-weight: 500;">
                                <?php echo $t['contact_availability']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
@media (max-width: 768px) {
    .grid-2 {
        grid-template-columns: 1fr !important;
    }
    
    .glass-card {
        padding: 20px !important;
    }
    
    h1 {
        font-size: 32px !important;
    }
    
    .text-lg {
        font-size: 16px !important;
    }
    
    .input {
        font-size: 16px !important; /* Évite le zoom sur iOS */
    }
    
    .btn {
        padding: 14px 20px !important;
        font-size: 16px !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>