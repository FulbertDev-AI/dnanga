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
            <div class="cert-hero" style="display: flex; align-items: center; justify-content: space-between; gap: var(--stack-lg); margin-bottom: var(--stack-lg); padding: var(--stack-lg); border-radius: var(--radius-lg); background: var(--surface-container); border: 1px solid var(--outline-variant); position: relative; overflow: hidden;">
                <div style="flex: 1; z-index: 1;">
                    <h1 style="margin-bottom: var(--stack-sm); font-size: 40px; letter-spacing: -0.02em;">
                        <?php echo $t['cert_hero_title']; ?>
                    </h1>
                    <p class="text-lg" style="max-width: 500px; color: var(--on-surface-variant);">
                        <?php echo $t['cert_hero_desc']; ?>
                    </p>
                </div>
                <div style="flex-shrink: 0; width: 180px; height: 180px; background: var(--surface-container-high); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid var(--outline-variant); z-index: 1;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="7"></circle>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        <path d="M12 5l1.5 3 3.5.5-2.5 2.5.5 3.5-3-1.5-3 1.5.5-3.5-2.5-2.5 3.5-.5z" fill="var(--secondary)" opacity="0.3"></path>
                    </svg>
                </div>
                <!-- Effet de lumière subtil -->
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at top left, rgba(78, 222, 163, 0.05) 0%, transparent 50%); pointer-events: none;"></div>
            </div>

            <!-- Grille des Certifications avec images -->
            <div class="grid grid-3" style="margin-bottom: var(--stack-lg);">
                
                <!-- Cert 1 -->
                <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/Vice-lead TCC.png" 
                             alt="Vice-lead TCC" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_1_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_1_desc']; ?></p>
                        <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_1_takeaway_1']; ?></span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_1_takeaway_2']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cert 2 -->
                <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/Apprenez la Programmation Orientée Objet avec Python.png" 
                             alt="Security" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_2_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_2_desc']; ?></p>
                        <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_2_takeaway_1']; ?></span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_2_takeaway_2']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cert 3 -->
                <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/gx-africa.png" 
                             alt="Agile Leadership" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_3_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_3_desc']; ?></p>
                        <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_3_takeaway_1']; ?></span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span><?php echo $t['cert_3_takeaway_2']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cert 4 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/html5-css3.png" 
                 alt="Cloud Architecture" 
                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_4_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_4_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_4_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_4_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Cert 5 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/css-sass.png" 
                 alt="Data Science" 
                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_5_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_5_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_5_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_5_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cert 6 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/CSS, Bootstrap And JavaScript And Python Stack Course.png" 
                 alt="Data Science" 
                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_6_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_6_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_6_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_6_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cert 7 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/React.png" 
                 alt="" 
                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_7_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_7_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_7_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_7_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cert 8 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/tcp-ip.png" 
                 alt="Data Science" 
                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_8_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_8_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_8_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_8_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cert 9 -->
    <div class="glass-card cert-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 180px; overflow: hidden; background: var(--surface-container);">
            <img src="images/Maîtrisez les fondamentaux d'Excel.png" 
                alt="DevOps" 
                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
        </div>
        <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
            <h3 style="margin-bottom: 12px; font-size: 18px;"><?php echo $t['cert_9_title']; ?></h3>
            <p style="margin-bottom: var(--stack-md); flex: 1; font-size: 14px; color: var(--on-surface-variant);"><?php echo $t['cert_9_desc']; ?></p>
            <div style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                <p class="label" style="color: var(--secondary); margin-bottom: 12px; font-size: 11px;"><?php echo $t['key_takeaways']; ?></p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_9_takeaway_1']; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><?php echo $t['cert_9_takeaway_2']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>

            

    

            <!-- Section basse : Skills + Stats -->
            <div class="grid" style="grid-template-columns: 2fr 1fr 1fr; gap: var(--stack-md);">
                
                <!-- Mastery Progression -->
                <div class="glass-card" style="padding: var(--stack-md);">
                    <h2 style="margin-bottom: var(--stack-md); font-size: 22px;"><?php echo $t['skills_title']; ?></h2>
                    
                    <div style="margin-bottom: 20px;">
                        <div class="flex justify-between" style="margin-bottom: 8px;">
                            <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_1']; ?></span>
                            <span class="text-sm" style="color: var(--on-surface-variant);">95%</span>
                        </div>
                        <div style="background: var(--surface-container-high); height: 6px; border-radius: var(--radius-full); overflow: hidden;">
                            <div style="background: var(--secondary); width: 95%; height: 100%; border-radius: var(--radius-full);"></div>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <div class="flex justify-between" style="margin-bottom: 8px;">
                            <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_2']; ?></span>
                            <span class="text-sm" style="color: var(--on-surface-variant);">88%</span>
                        </div>
                        <div style="background: var(--surface-container-high); height: 6px; border-radius: var(--radius-full); overflow: hidden;">
                            <div style="background: var(--secondary); width: 88%; height: 100%; border-radius: var(--radius-full);"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between" style="margin-bottom: 8px;">
                            <span class="text-sm" style="font-weight: 500;"><?php echo $t['skill_3']; ?></span>
                            <span class="text-sm" style="color: var(--on-surface-variant);">92%</span>
                        </div>
                        <div style="background: var(--surface-container-high); height: 6px; border-radius: var(--radius-full); overflow: hidden;">
                            <div style="background: var(--secondary); width: 92%; height: 100%; border-radius: var(--radius-full);"></div>
                        </div>
                    </div>
                </div>

                <!-- Stats : Certifications -->
                <div class="glass-card stat-card" style="padding: var(--stack-md); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                    <div style="font-size: 48px; font-weight: 700; color: var(--secondary); line-height: 1; margin-bottom: 8px; font-family: var(--font-headline);">
                        9+
                    </div>
                    <p class="label" style="color: var(--on-surface-variant); font-size: 11px; letter-spacing: 0.1em;">
                        <?php echo $t['stats_certifications']; ?>
                    </p>
                </div>

                <!-- Stats : Awards -->
                <div class="glass-card stat-card" style="padding: var(--stack-md); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                    <div style="font-size: 48px; font-weight: 700; color: var(--secondary); line-height: 1; margin-bottom: 8px; font-family: var(--font-headline);">
                        0
                    </div>
                    <p class="label" style="color: var(--on-surface-variant); font-size: 11px; letter-spacing: 0.1em;">
                        <?php echo $t['stats_awards']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Hero responsive */
@media (max-width: 768px) {
    .cert-hero {
        flex-direction: column !important;
        text-align: center;
        padding: var(--stack-md) !important;
    }
    
    .cert-hero h1 {
        font-size: 28px !important;
    }
    
    .cert-hero p {
        margin: 0 auto;
    }
    
    .cert-hero > div:last-of-type {
        width: 120px !important;
        height: 120px !important;
    }
    
    .cert-hero svg {
        width: 60px !important;
        height: 60px !important;
    }
}

/* Cartes de certifications */
.cert-card {
    transition: all var(--transition-base) linear-out;
}

.cert-card:hover img {
    transform: scale(1.05);
}

.cert-card:hover {
    transform: translateY(-4px);
}

@media (max-width: 768px) {
    .cert-card > div:first-child {
        height: 160px !important;
    }
}

/* Section basse responsive */
@media (max-width: 1024px) {
    .grid[style*="grid-template-columns: 2fr 1fr 1fr"] {
        grid-template-columns: 1fr 1fr !important;
    }
    
    .grid[style*="grid-template-columns: 2fr 1fr 1fr"] > div:first-child {
        grid-column: 1 / -1;
    }
}

@media (max-width: 768px) {
    .grid[style*="grid-template-columns: 2fr 1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
    
    .stat-card {
        padding: var(--stack-md) !important;
    }
    
    .stat-card > div:first-child {
        font-size: 40px !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>