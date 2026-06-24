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
                <button class="btn btn-secondary filter-btn" data-filter="renewable">
                    <?php echo $t['filter_renewable']; ?>
                </button>
            </div>
            
            <div class="grid grid-3" id="projects-grid">
                <div class="glass-card project-card" data-category="climate renewable">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_1_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_1_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_1_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
                </div>
                
                <div class="glass-card project-card" data-category="infrastructure">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_2_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_2_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_2_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
                </div>
                
                <div class="glass-card project-card" data-category="climate">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_3_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_3_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_3_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
                </div>
                
                <div class="glass-card project-card" data-category="renewable">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_4_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_4_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_4_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
                </div>
                
                <div class="glass-card project-card" data-category="infrastructure">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_5_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_5_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_5_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
                </div>
                
                <div class="glass-card project-card" data-category="infrastructure climate">
                    <div class="chip" style="margin-bottom: var(--stack-sm);">
                        <?php echo $t['project_6_tags']; ?>
                    </div>
                    <h3 style="margin-bottom: var(--stack-sm);"><?php echo $t['project_6_title']; ?></h3>
                    <p style="margin-bottom: var(--stack-md);"><?php echo $t['project_6_desc']; ?></p>
                    <a href="#" class="btn btn-secondary" style="width: 100%;">
                        <?php echo $t['view_project']; ?>
                    </a>
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
    display: none;
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