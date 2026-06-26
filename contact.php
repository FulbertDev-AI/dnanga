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
            <!-- Hero Section -->
            <div style="text-align: center; margin-bottom: var(--stack-lg);">
                <h1 style="margin-bottom: var(--stack-sm); font-size: 48px; letter-spacing: -0.02em;">
                    <?php echo $t['contact_hero_title']; ?>
                </h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto; color: var(--on-surface-variant);">
                    <?php echo $t['contact_hero_desc']; ?>
                </p>
            </div>

            <!-- Formulaire + Infos en grille -->
            <div class="grid grid-2" style="align-items: start;">
                
                <!-- Formulaire -->
                <div class="glass-card" style="padding: var(--stack-md);">
                    <h2 style="margin-bottom: var(--stack-md); font-size: 24px; color: var(--secondary);">
                        <?php echo $t['contact_form_title']; ?>
                    </h2>
                    <form action="#" method="POST" style="display: flex; flex-direction: column; gap: var(--stack-sm);">
                        <div class="grid" style="grid-template-columns: 1fr 1fr; gap: var(--stack-sm);">
                            <div>
                                <label for="name" class="label" style="display: block; margin-bottom: 8px; font-size: 11px;">
                                    <?php echo $t['form_name']; ?>
                                </label>
                                <input type="text" id="name" name="name" class="input" placeholder="<?php echo $t['form_name_placeholder']; ?>" required>
                            </div>
                            <div>
                                <label for="email" class="label" style="display: block; margin-bottom: 8px; font-size: 11px;">
                                    <?php echo $t['form_email']; ?>
                                </label>
                                <input type="email" id="email" name="email" class="input" placeholder="<?php echo $t['form_email_placeholder']; ?>" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="label" style="display: block; margin-bottom: 8px; font-size: 11px;">
                                <?php echo $t['form_subject']; ?>
                            </label>
                            <input type="text" id="subject" name="subject" class="input" placeholder="<?php echo $t['form_subject_placeholder']; ?>" required>
                        </div>
                        
                        <div>
                            <label for="message" class="label" style="display: block; margin-bottom: 8px; font-size: 11px;">
                                <?php echo $t['form_message']; ?>
                            </label>
                            <textarea id="message" name="message" class="input" rows="6" placeholder="<?php echo $t['form_message_placeholder']; ?>" required style="resize: vertical; min-height: 140px;"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: auto; align-self: flex-start; margin-top: var(--stack-sm);">
                            <?php echo $t['form_submit']; ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </form>
                </div>

                <!-- Partie droite : 3 cartes -->
                <div class="flex flex-col gap-md">
                    
                    <!-- Carte 1 : Current Location -->
                    <div class="glass-card" style="padding: var(--stack-md);">
                        <div class="flex items-center gap-sm" style="margin-bottom: var(--stack-sm);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <p class="label" style="font-size: 11px; color: var(--on-surface-variant);">
                                <?php echo $t['contact_location_title']; ?>
                            </p>
                        </div>
                        <div class="flex items-center gap-md" style="margin-bottom: var(--stack-sm);">
                            <div style="width: 48px; height: 48px; border-radius: 50%; overflow: hidden; background: var(--surface-container-high); flex-shrink: 0;">
                                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=100&h=100&fit=crop" 
                                    alt="Lomé" 
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h3 style="font-size: 18px; margin-bottom: 4px;"><?php echo $t['contact_location_city']; ?></h3>
                                <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                    <?php echo $t['contact_location_subtitle']; ?>
                                </p>
                            </div>
                        </div>
                        <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                    <?php echo $t['contact_timezone_label']; ?>
                                </span>
                                <span class="text-sm" style="font-weight: 600; font-size: 13px;">
                                    <?php echo $t['contact_timezone_value']; ?>
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                    <?php echo $t['contact_response_label']; ?>
                                </span>
                                <span class="text-sm" style="font-weight: 600; color: var(--secondary); font-size: 13px;">
                                    <?php echo $t['contact_response_value']; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Carte 2 : Professional Networks -->
                    <div class="glass-card" style="padding: var(--stack-md);">
                        <p class="label" style="font-size: 11px; color: var(--on-surface-variant); margin-bottom: var(--stack-md);">
                            <?php echo $t['contact_networks_title']; ?>
                        </p>
                        <div class="flex flex-col gap-sm">
                            <a href="https://www.linkedin.com/in/ditorga-nanga-7817a331a/" target="_blank" class="network-link" style="display: flex; align-items: center; justify-content: space-between; padding: 12px; background: var(--surface-container); border-radius: var(--radius); border: 1px solid var(--outline-variant); transition: all var(--transition-base); text-decoration: none;">
                                <div class="flex items-center gap-md">
                                    <div style="width: 36px; height: 36px; background: rgba(59, 130, 246, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                    </div>
                                    <div>
                                        <p style="font-weight: 600; font-size: 14px; margin-bottom: 2px;"><?php echo $t['contact_linkedin_title']; ?></p>
                                        <p class="text-sm" style="color: var(--on-surface-variant); font-size: 12px;"><?php echo $t['contact_linkedin_desc']; ?></p>
                                    </div>
                                </div>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--on-surface-variant)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            
                            <a href="https://github.com/FulbertDev-AI" target="_blank" class="network-link" style="display: flex; align-items: center; justify-content: space-between; padding: 12px; background: var(--surface-container); border-radius: var(--radius); border: 1px solid var(--outline-variant); transition: all var(--transition-base); text-decoration: none;">
                                <div class="flex items-center gap-md">
                                    <div style="width: 36px; height: 36px; background: rgba(255, 255, 255, 0.05); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--on-surface)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                    </div>
                                    <div>
                                        <p style="font-weight: 600; font-size: 14px; margin-bottom: 2px;"><?php echo $t['contact_github_title']; ?></p>
                                        <p class="text-sm" style="color: var(--on-surface-variant); font-size: 12px;"><?php echo $t['contact_github_desc']; ?></p>
                                    </div>
                                </div>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--on-surface-variant)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Carte 3 : Direct Line -->
                    <div class="glass-card direct-line-card" style="padding: var(--stack-md); background: rgba(78, 222, 163, 0.05); border-color: rgba(78, 222, 163, 0.2);">
                        <p class="label" style="font-size: 11px; color: var(--secondary); margin-bottom: 8px;">
                            <?php echo $t['contact_direct_title']; ?>
                        </p>
                        <h3 style="font-size: 20px; margin-bottom: 8px; color: var(--on-surface);">
                            <?php echo $t['contact_direct_email']; ?>
                        </h3>
                        <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.5;">
                            <?php echo $t['contact_direct_desc']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Hover effects pour les liens de réseaux */
.network-link:hover {
    border-color: var(--secondary) !important;
    transform: translateX(4px);
}

/* Carte Direct Line en mode clair */
[data-theme="light"] .direct-line-card {
    background: rgba(16, 185, 129, 0.08) !important;
    border-color: rgba(16, 185, 129, 0.25) !important;
}

/* Responsive */
@media (max-width: 768px) {
    .grid-2 {
        grid-template-columns: 1fr !important;
    }
    
    .glass-card {
        padding: 20px !important;
    }
    
    h1 {
        font-size: 36px !important;
    }
    
    .text-lg {
        font-size: 15px !important;
    }
    
    .input {
        font-size: 16px !important;
    }
    
    .btn {
        padding: 14px 20px !important;
        font-size: 16px !important;
        width: 100% !important;
    }
    
    .grid[style*="grid-template-columns: 1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    h1 {
        font-size: 42px !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>