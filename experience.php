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
            <div style="text-align: center; margin-bottom: var(--stack-lg);">
                <h1 style="margin-bottom: var(--stack-sm);"><?php echo $t['experience_title']; ?></h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto;">
                    <?php echo $t['experience_subtitle']; ?>
                </p>
            </div>
            
            <!-- Filtres -->
            <div class="flex justify-center gap-sm" style="margin-bottom: var(--stack-lg); flex-wrap: wrap;" id="exp-filters">
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
                <div class="timeline-item" data-category="climate" style="position: relative; margin-bottom: var(--stack-lg);">
                    <div class="glass-card" style="width: 45%; margin-left: auto; padding: var(--stack-md);">
                        <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                            <?php echo $t['exp_1_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 4px;"><?php echo $t['exp_1_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: var(--stack-sm);"><?php echo $t['exp_1_company']; ?></p>
                        <p style="margin-bottom: var(--stack-sm);"><?php echo $t['exp_1_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="text-sm" style="color: var(--on-surface-variant);">
                                <strong style="color: var(--secondary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_1_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--secondary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 2 : Digital Infrastructure -->
                <div class="timeline-item" data-category="digital" style="position: relative; margin-bottom: var(--stack-lg);">
                    <div class="glass-card" style="width: 45%; padding: var(--stack-md);">
                        <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                            <?php echo $t['exp_2_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 4px;"><?php echo $t['exp_2_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: var(--stack-sm);"><?php echo $t['exp_2_company']; ?></p>
                        <p style="margin-bottom: var(--stack-sm);"><?php echo $t['exp_2_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="text-sm" style="color: var(--on-surface-variant);">
                                <strong style="color: var(--tertiary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_2_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--tertiary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 3 : Climate Tech -->
                <div class="timeline-item" data-category="climate" style="position: relative; margin-bottom: var(--stack-lg);">
                    <div class="glass-card" style="width: 45%; margin-left: auto; padding: var(--stack-md);">
                        <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                            <?php echo $t['exp_3_period']; ?>
                        </div>
                        <h3 style="color: var(--secondary); margin-bottom: 4px;"><?php echo $t['exp_3_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: var(--stack-sm);"><?php echo $t['exp_3_company']; ?></p>
                        <p style="margin-bottom: var(--stack-sm);"><?php echo $t['exp_3_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="text-sm" style="color: var(--on-surface-variant);">
                                <strong style="color: var(--secondary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_3_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--secondary); border-radius: 50%; border: 4px solid var(--surface);"></div>
                </div>
                
                <!-- Expérience 4 : Digital Infrastructure -->
                <div class="timeline-item" data-category="digital" style="position: relative; margin-bottom: var(--stack-lg);">
                    <div class="glass-card" style="width: 45%; padding: var(--stack-md);">
                        <div class="chip" style="margin-bottom: var(--stack-sm); display: inline-block;">
                            <?php echo $t['exp_4_period']; ?>
                        </div>
                        <h3 style="color: var(--tertiary); margin-bottom: 4px;"><?php echo $t['exp_4_role']; ?></h3>
                        <p style="font-weight: 600; margin-bottom: var(--stack-sm);"><?php echo $t['exp_4_company']; ?></p>
                        <p style="margin-bottom: var(--stack-sm);"><?php echo $t['exp_4_desc']; ?></p>
                        <div class="achievements" style="border-top: 1px solid var(--outline-variant); padding-top: var(--stack-sm);">
                            <p class="text-sm" style="color: var(--on-surface-variant);">
                                <strong style="color: var(--tertiary);">Key Achievements:</strong><br>
                                <?php echo $t['exp_4_achievements']; ?>
                            </p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 16px; height: 16px; background: var(--tertiary); border-radius: 50%; border: 4px solid var(--surface);"></div>
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

@media (max-width: 768px) {
    .timeline-item .glass-card {
        width: 85% !important;
        margin-left: 0 !important;
    }
    
    .timeline-item > div:last-child {
        left: 15% !important;
    }
}

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

/* Cacher la ligne verticale sur mobile */
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
    }
    
    .timeline-item > div:last-child {
        display: none !important; /* Cacher aussi les points */
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .timeline-item .glass-card {
        width: 45% !important;
    }
}
</style>
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