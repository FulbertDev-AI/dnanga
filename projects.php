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
            <div style="text-align: center; margin-bottom: var(--stack-lg);">
                <h1 style="margin-bottom: var(--stack-sm);"><?php echo $t['projects_title']; ?></h1>
                <p class="text-lg" style="max-width: 700px; margin: 0 auto;">
                    <?php echo $t['projects_subtitle']; ?>
                </p>
            </div>
            
            <div class="flex justify-center gap-sm" style="margin-bottom: var(--stack-md); flex-wrap: wrap;" id="project-filters">
                <button class="btn btn-secondary filter-btn active" data-filter="all">
                    <?php echo $t['filter_all']; ?>
                </button>
                <button class="btn btn-secondary filter-btn" data-filter="infrastructure">
                    <?php echo $t['filter_infrastructure']; ?>
                </button>
                <button class="btn btn-secondary filter-btn" data-filter="climate">
                    <?php echo $t['filter_climate']; ?>
                </button>
                <!-- <button class="btn btn-secondary filter-btn" data-filter="renewable">
                    <?php echo $t['filter_renewable']; ?>
                </button> -->
            </div>
            
            <div class="grid grid-3" id="projects-grid">
                <!-- Projet 1 -->
                <div class="glass-card project-card" data-category="infrastructure" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/Portfolio.png" 
                            alt="Smart Grid" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <!-- <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_1_tags']; ?>
                        </div> -->
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_1_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_1_desc']; ?></p>
                        <a href="https://dnanga.wasmer.app/" target="_blank" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Projet 2 -->
                <div class="glass-card project-card" data-category="infrastructure" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/sara_farms.png" 
                             alt="Cloud Infrastructure" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_2_tags']; ?>
                        </div>
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_2_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_2_desc']; ?></p>
                        <a href="https://github.com/FulbertDev-AI/Sara_Farms.git" target="_blank" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Projet 3 -->
                <div class="glass-card project-card" data-category="climate" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/zitro-cli.png" 
                             alt="Carbon Tracking" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                            alt="Carbon Tracking" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_3_tags']; ?>
                        </div>
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_3_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_3_desc']; ?></p>
                        <a href="#" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Projet 4 -->
                <div class="glass-card project-card" data-category="infrastructure" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/it-orientation.png" 
                            alt="It-orientation" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_4_tags']; ?>
                        </div>
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_4_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_4_desc']; ?></p>
                        <a href="https://it-orientation.vercel.app/" target="_blank" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Projet 5 -->
                <div class="glass-card project-card" data-category="infrastructure" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/komita.png" 
                             alt="Disaster Response" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_5_tags']; ?>
                        </div>
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_5_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_5_desc']; ?></p>
                        <a href="https://github.com/FulbertDev-AI/komita.git" target="_blank" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Projet 6 -->
                <div class="glass-card project-card" data-category="infrastructure" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/citil.png" 
                            alt="citil" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: var(--stack-md); flex: 1; display: flex; flex-direction: column;">
                        <div class="chip" style="margin-bottom: var(--stack-sm);">
                            <?php echo $t['project_6_tags']; ?>
                        </div>
                        <h3 style="margin-bottom: var(--stack-sm); font-size: 20px;"><?php echo $t['project_6_title']; ?></h3>
                        <p style="margin-bottom: var(--stack-md); flex: 1;"><?php echo $t['project_6_desc']; ?></p>
                        <a href="https://github.com/FulbertDev-AI/CITIL_F.git" target="_blank" class="btn btn-secondary" style="width: 100%;">
                            <?php echo $t['view_project']; ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bannière de collaboration -->
            <div class="collaboration-banner" style="margin-top: var(--stack-lg);">
                <div style="text-align: center; padding: var(--stack-lg) var(--stack-md);">
                    <h2 style="margin-bottom: var(--stack-sm); font-size: 32px;">
                        <?php echo $t['banner_title']; ?>
                    </h2>
                    <p class="text-lg" style="max-width: 600px; margin: 0 auto var(--stack-md); color: var(--on-surface-variant);">
                        <?php echo $t['banner_desc']; ?>
                    </p>
                <div class="flex justify-center gap-sm" style="flex-wrap: wrap;">
                <a href="contact.php?lang=<?php echo $current_lang; ?>" class="btn btn-primary">
                    <?php echo $t['banner_cta_contact']; ?>
                </a>
                <a href="CV_NANGA_Ditorga.pdf" target="_blank" class="btn btn-secondary">
                    <?php echo $t['banner_cta_cv']; ?>
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

.project-card {
    transition: all var(--transition-base) linear-out;
}

.project-card.hidden {
    display: none !important;
}

.project-card:hover img {
    transform: scale(1.05);
}

/* Responsive pour les images */
@media (max-width: 768px) {
    .glass-card[style*="height: 200px"] {
        height: 180px !important;
    }
    
    h2 {
        font-size: 24px !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .glass-card[style*="height: 200px"] {
        height: 200px !important;
    }
}

/* Bannière de collaboration avec fond distinct */
.collaboration-banner {
    background: var(--surface-container);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    position: relative;
    overflow: hidden;
}

/* Effet de lumière subtil en haut à gauche (comme sur la capture) */
.collaboration-banner::before {
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

[data-theme="light"] .collaboration-banner {
    background: var(--surface-container-low);
    border: 1px solid rgba(16, 185, 129, 0.15);
}

[data-theme="light"] .collaboration-banner::before {
    background: radial-gradient(
        circle at top left,
        rgba(16, 185, 129, 0.06) 0%,
        transparent 50%
    );
}

/* Responsive */
@media (max-width: 768px) {
    .collaboration-banner {
        border-radius: var(--radius-md);
    }
    
    .collaboration-banner h2 {
        font-size: 24px !important;
    }
    
    .collaboration-banner .text-lg {
        font-size: 15px !important;
    }
    
    .collaboration-banner .btn {
        width: 100%;
        max-width: 280px;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .collaboration-banner h2 {
        font-size: 28px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category').includes(filter)) {
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