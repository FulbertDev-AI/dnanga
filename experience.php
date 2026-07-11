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
                <button class="btn btn-secondary filter-btn" data-filter="digital">
                    <?php echo $t['filter_digital']; ?>
                </button>
                <button class="btn btn-secondary filter-btn" data-filter="climate">
                    <?php echo $t['filter_climate_exp']; ?>
                </button>
            </div>
            
            <!-- Timeline -->
            <div class="timeline" id="experience-timeline" style="position: relative; max-width: 900px; margin: 0 auto;">
                <!-- Ligne verticale -->
                <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 2px; height: 100%; background: linear-gradient(to bottom, var(--secondary), var(--tertiary));"></div>
                
                <!-- Expérience 1 : Climate Tech -->
                <div class="timeline-item" data-category="climate" style="position: relative; margin-bottom: var(--stack-sm);">
                    <div class="glass-card" style="width: 45%; margin-left: auto; padding: 20px;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px;">
                            <?php echo $t['exp_1_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 4px; font-size: 18px;"><?php echo $t['exp_1_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_1_company']; ?></p>
                        <p style="margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_1_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 12px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                <strong style="color: var(--secondary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_1_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--secondary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 2 : Digital Infrastructure -->
                <div class="timeline-item" data-category="digital" style="position: relative; margin-bottom: var(--stack-sm);">
                    <div class="glass-card" style="width: 45%; padding: 20px;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px;">
                            <?php echo $t['exp_2_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 4px; font-size: 18px;"><?php echo $t['exp_2_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_2_company']; ?></p>
                        <p style="margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_2_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 12px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                <strong style="color: var(--tertiary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_2_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--tertiary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 3 : Climate Tech -->
                <div class="timeline-item" data-category="climate" style="position: relative; margin-bottom: var(--stack-sm);">
                    <div class="glass-card" style="width: 45%; margin-left: auto; padding: 20px;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px;">
                            <?php echo $t['exp_3_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 4px; font-size: 18px;"><?php echo $t['exp_3_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_3_company']; ?></p>
                        <p style="margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_3_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 12px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                <strong style="color: var(--secondary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_3_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--secondary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 4 : Digital Infrastructure -->
                <div class="timeline-item" data-category="digital" style="position: relative; margin-bottom: var(--stack-sm);">
                    <div class="glass-card" style="width: 45%; padding: 20px;">
                        <div class="chip" style="margin-bottom: 12px; display: inline-block; font-size: 12px;">
                            <?php echo $t['exp_4_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 4px; font-size: 18px;"><?php echo $t['exp_4_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_4_company']; ?></p>
                        <p style="margin-bottom: 12px; font-size: 14px;"><?php echo $t['exp_4_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: 12px;">
                            <p class="text-sm" style="color: var(--on-surface-variant); font-size: 13px;">
                                <strong style="color: var(--tertiary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_4_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--tertiary); border-radius: 50%; border: 4px solid var(--surface);"></div>
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

.timeline-item.hidden {
    display: none;
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

/* Responsive pour la timeline */
@media (max-width: 768px) {
    .timeline > div:first-child {
        display: none !important;
    }
    
    .timeline-item {
        margin-left: 0 !important;
        padding-left: 0 !important;
    }
    
    .timeline-item .glass-card {
        width: 100% !important;
        margin-left: 0 !important;
        padding: 16px !important;
    }
    
    .timeline-item > div:last-child {
        display: none !important;
    }
    
    .timeline-item h3 {
        font-size: 16px !important;
    }
    
    .timeline-item p {
        font-size: 13px !important;
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
    .timeline-item .glass-card {
        width: 45% !important;
    }
    
    .durability-banner h2 {
        font-size: 26px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('#exp-filters .filter-btn');
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            timelineItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>