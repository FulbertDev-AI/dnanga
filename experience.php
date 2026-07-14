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
            <!-- En-tête de la page -->
            <div style="text-align: center; margin-bottom: var(--stack-md);">
                <h1 style="margin-bottom: var(--stack-sm);"><?php echo $t['experience_title']; ?></h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto;">
                    <?php echo $t['experience_subtitle']; ?>
                </p>
            </div>
            
            <!-- Filtres -->
            <div class="flex justify-center gap-sm" style="margin-bottom: var(--stack-md); flex-wrap: wrap;" id="exp-filters">
                <button class="btn btn-secondary filter-btn active" data-filter="all">
                    <?php echo $t['filter_all']; ?>
                </button>
                <button class="btn btn-secondary filter-btn" data-filter="professional">
                    <?php echo $t['filter_professional']; ?>
                </button>
                <button class="btn btn-secondary filter-btn" data-filter="volunteer">
                    <?php echo $t['filter_volunteer']; ?>
                </button>
            </div>
            
            <!-- Grille des expériences -->
            <div class="grid grid-3" id="experience-grid" style="margin-bottom: var(--stack-lg);">
                
                <!-- Expérience 1 : Professional -->
                <div class="glass-card exp-card" data-category="professional" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content;">
                            <?php echo $t['exp_1_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_1_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_1_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_1_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--secondary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_1_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Expérience 2 : Professional -->
                <div class="glass-card exp-card" data-category="professional" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content;">
                            <?php echo $t['exp_2_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_2_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_2_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_2_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--tertiary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_2_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Expérience 3 : Volunteer -->
                <div class="glass-card exp-card" data-category="volunteer" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content;">
                            <?php echo $t['exp_3_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_3_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_3_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_3_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--secondary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_3_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Expérience 4 : Professional -->
                <div class="glass-card exp-card" data-category="professional" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content;">
                            <?php echo $t['exp_4_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_4_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_4_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_4_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--tertiary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_4_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Expérience 5 : Volunteer -->
                <div class="glass-card exp-card" data-category="volunteer" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content; background: rgba(78, 222, 163, 0.15); color: var(--secondary);">
                            <?php echo $t['exp_5_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_5_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_5_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_5_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--secondary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_5_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Expérience 6 : Volunteer -->
                <div class="glass-card exp-card" data-category="volunteer" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px; width: fit-content; background: rgba(78, 222, 163, 0.15); color: var(--secondary);">
                            <?php echo $t['exp_6_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 8px; font-size: 20px;"><?php echo $t['exp_6_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 16px; font-size: 15px; color: var(--on-background);"><?php echo $t['exp_6_company']; ?></p>
                        <p style="margin-bottom: 16px; font-size: 14px; color: var(--on-surface-variant); line-height: 1.6; flex: 1;"><?php echo $t['exp_6_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 16px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px; line-height: 1.6;">
                                <strong style="color: var(--tertiary); display: block; margin-bottom: 8px;">Key Achievements:</strong>
                                <?php echo $t['exp_6_achievements']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bannière de durabilité -->
            <div class="durability-banner" style="margin-top: var(--stack-lg);">
                <div style="text-align: center; padding: var(--stack-lg) var(--stack-md);">
                    <h2 style="margin-bottom: var(--stack-sm); font-size: 28px;">
                        <?php echo $t['exp_banner_title']; ?>
                    </h2>
                    <p class="text-lg" style="max-width: 600px; margin: 0 auto var(--stack-md); color: var(--on-surface-variant); font-style: italic;">
                        "<?php echo $t['exp_banner_quote']; ?>"
                    </p>
                    <div class="flex justify-center gap-sm" style="flex-wrap: wrap;">
                        <a href="CV_NANGA_Ditorga.pdf" target="_blank" class="btn btn-primary">
                            <?php echo $t['exp_banner_cta_resume']; ?>
                        </a>
                        <a href="https://github.com/FulbertDev-AI" target="_blank" class="btn btn-secondary">
                            <?php echo $t['exp_banner_cta_github']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.filter-btn.active {
    background: var(--secondary);
    color: var(--on-secondary);
    border-color: var(--secondary);
}

[data-theme="light"] .filter-btn.active {
    background: var(--primary);
    color: var(--on-primary);
    border-color: var(--primary);
}

.exp-card {
    transition: all var(--transition-base) linear-out;
}

.exp-card.hidden {
    display: none !important;
}

.exp-card:hover {
    transform: translateY(-4px);
}

/* Bannière de durabilité avec fond distinct */
.durability-banner {
    background: var(--surface-container);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    position: relative;
    overflow: hidden;
}

.durability-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(
        circle at top left,
        rgba(78, 222, 163, 0.08) 0%,
        transparent 50%
    );
    pointer-events: none;
}

[data-theme="light"] .durability-banner {
    background: var(--surface-container-low);
    border: 1px solid rgba(16, 185, 129, 0.15);
}

[data-theme="light"] .durability-banner::before {
    background: radial-gradient(
        circle at top left,
        rgba(16, 185, 129, 0.06) 0%,
        transparent 50%
    );
}

/* Responsive */
@media (max-width: 768px) {
    .grid-3 {
        grid-template-columns: 1fr !important;
    }
    
    .exp-card {
        padding: 20px !important;
    }
    
    .durability-banner {
        border-radius: var(--radius-md);
    }
    
    .durability-banner h2 {
        font-size: 22px !important;
    }
    
    .durability-banner .text-lg {
        font-size: 14px !important;
    }
    
    .durability-banner .btn {
        width: 100%;
        max-width: 280px;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('#exp-filters .filter-btn');
    const expCards = document.querySelectorAll('.exp-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            expCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>