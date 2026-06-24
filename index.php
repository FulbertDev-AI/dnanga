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
            <div class="glass-card" style="text-align: center; padding: var(--stack-lg) var(--stack-md);">
                <p class="label" style="color: var(--secondary); margin-bottom: var(--stack-sm);">
                    <?php echo $t['hero_subtitle']; ?>
                </p>
                <h1 style="margin-bottom: var(--stack-md);">
                    <?php echo $t['hero_title_1']; ?><br>
                    <span style="color: var(--secondary);"><?php echo $t['hero_title_2']; ?></span>
                </h1>
                <p class="text-lg" style="max-width: 600px; margin: 0 auto var(--stack-md);">
                    <?php echo $t['hero_description']; ?>
                </p>
                <div class="flex justify-center gap-sm" style="flex-wrap: wrap;">
                    <a href="projects.php" class="btn btn-primary">
                        <?php echo $t['cta_projects']; ?>
                    </a>
                    <a href="contact.php" class="btn btn-secondary">
                        <?php echo $t['cta_contact']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: var(--stack-lg);">
                <?php echo $t['section_disciplines_title']; ?>
            </h2>
            <div class="grid grid-3">
                <div class="glass-card">
                    <h3 style="color: var(--secondary); margin-bottom: var(--stack-sm);">
                        <?php echo $t['discipline_1_title']; ?>
                    </h3>
                    <p><?php echo $t['discipline_1_desc']; ?></p>
                </div>
                <div class="glass-card">
                    <h3 style="color: var(--tertiary); margin-bottom: var(--stack-sm);">
                        <?php echo $t['discipline_2_title']; ?>
                    </h3>
                    <p><?php echo $t['discipline_2_desc']; ?></p>
                </div>
                <div class="glass-card">
                    <h3 style="color: var(--primary); margin-bottom: var(--stack-sm);">
                        <?php echo $t['discipline_3_title']; ?>
                    </h3>
                    <p><?php echo $t['discipline_3_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>