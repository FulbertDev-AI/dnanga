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
                <h1 style="margin-bottom: var(--stack-sm);"><?php echo $t['certifications_title']; ?></h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto;">
                    <?php echo $t['certifications_subtitle']; ?>
                </p>
            </div>

            <!-- Grille des Certifications -->
            <div class="grid grid-3" style="margin-bottom: var(--stack-lg);">
                <!-- Cert 1 -->
                <div class="glass-card">
                    <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                        <?php echo $t['cert_1_date']; ?>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 18px;"><?php echo $t['cert_1_title']; ?></h3>
                    <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['cert_1_issuer']; ?></p>
                </div>
                <!-- Cert 2 -->
                <div class="glass-card">
                    <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                        <?php echo $t['cert_2_date']; ?>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 18px;"><?php echo $t['cert_2_title']; ?></h3>
                    <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['cert_2_issuer']; ?></p>
                </div>
                <!-- Cert 3 -->
                <div class="glass-card">
                    <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                        <?php echo $t['cert_3_date']; ?>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 18px;"><?php echo $t['cert_3_title']; ?></h3>
                    <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['cert_3_issuer']; ?></p>
                </div>
                <!-- Cert 4 -->
                <div class="glass-card">
                    <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                        <?php echo $t['cert_4_date']; ?>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 18px;"><?php echo $t['cert_4_title']; ?></h3>
                    <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['cert_4_issuer']; ?></p>
                </div>
                <!-- Cert 5 -->
                <div class="glass-card">
                    <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                        <?php echo $t['cert_5_date']; ?>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 18px;"><?php echo $t['cert_5_title']; ?></h3>
                    <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['cert_5_issuer']; ?></p>
                </div>
            </div>

            <!-- Section Compétences et Awards -->
            <div class="grid grid-2">
                <!-- Compétences (Skills) -->
                <div>
                    <h2 style="margin-bottom: var(--stack-md); font-size: 24px;"><?php echo $t['skills_title']; ?></h2>
                    <div class="glass-card" style="padding: var(--stack-md);">
                        
                        <div style="margin-bottom: 24px;">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_1']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">95%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--secondary); width: 95%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_2']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">90%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--secondary); width: 90%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_3']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">85%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--tertiary); width: 85%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_4']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">80%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--tertiary); width: 80%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_5']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">92%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--secondary); width: 92%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between" style="margin-bottom: 8px;">
                                <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_6']; ?></span>
                                <span class="text-sm" style="color: var(--on-surface-variant);">88%</span>
                            </div>
                            <div style="background: var(--surface-container-high); height: 8px; border-radius: var(--radius-full); overflow: hidden;">
                                <div style="background: var(--primary); width: 88%; height: 100%; border-radius: var(--radius-full);"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Awards -->
                <div>
                    <h2 style="margin-bottom: var(--stack-md); font-size: 24px;"><?php echo $t['awards_title']; ?></h2>
                    <div class="flex flex-col gap-md">
                        <div class="glass-card" style="display: flex; align-items: flex-start; gap: var(--stack-sm);">
                            <div style="width: 48px; height: 48px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
                            <div style="flex: 1;">
                                <h4 style="margin-bottom: 4px; font-size: 16px;"><?php echo $t['award_1_title']; ?></h4>
                                <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['award_1_org']; ?> • <?php echo $t['award_1_date']; ?></p>
                            </div>
                        </div>

                        <div class="glass-card" style="display: flex; align-items: flex-start; gap: var(--stack-sm);">
                            <div style="width: 48px; height: 48px; background: rgba(173, 198, 255, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--tertiary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
                            <div style="flex: 1;">
                                <h4 style="margin-bottom: 4px; font-size: 16px;"><?php echo $t['award_2_title']; ?></h4>
                                <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['award_2_org']; ?> • <?php echo $t['award_2_date']; ?></p>
                            </div>
                        </div>

                        <div class="glass-card" style="display: flex; align-items: flex-start; gap: var(--stack-sm);">
                            <div style="width: 48px; height: 48px; background: rgba(190, 198, 224, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
                            <div style="flex: 1;">
                                <h4 style="margin-bottom: 4px; font-size: 16px;"><?php echo $t['award_3_title']; ?></h4>
                                <p class="text-sm" style="color: var(--on-surface-variant);"><?php echo $t['award_3_org']; ?> • <?php echo $t['award_3_date']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
@media (max-width: 768px) {
    .grid-2,
    .grid-3 {
        grid-template-columns: 1fr !important;
    }
    
    .glass-card {
        padding: 20px !important;
    }
    
    h1 {
        font-size: 32px !important;
    }
    
    h2 {
        font-size: 24px !important;
    }
    
    .text-lg {
        font-size: 16px !important;
    }
    
    /* Awards en stacked sur mobile */
    .glass-card[style*="display: flex"] {
        flex-direction: row !important;
        align-items: flex-start !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>