<?php
// Déterminer la page actuelle pour le lien actif
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="glass-nav" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; padding: 16px 0;">
    <div class="container">
        <div class="flex items-center justify-between">
            <a href="index.php?lang=<?php echo $current_lang; ?>" class="flex items-center gap-sm">
                <span style="font-family: var(--font-headline); font-size: 20px; font-weight: 700; color: var(--on-background);">
                    GTS
                </span>
            </a>
            
            <ul class="flex items-center gap-md hide-mobile">
                <li><a href="index.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><?php echo $t['nav_home']; ?></a></li>
                <li><a href="projects.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>"><?php echo $t['nav_projects']; ?></a></li>
                <li><a href="experience.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'experience.php') ? 'active' : ''; ?>"><?php echo $t['nav_experience']; ?></a></li>
                <li><a href="blog.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>"><?php echo $t['nav_blog']; ?></a></li>
                <li><a href="certifications.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'certifications.php') ? 'active' : ''; ?>"><?php echo $t['nav_certifications']; ?></a></li>
                <li><a href="contact.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><?php echo $t['nav_contact']; ?></a></li>
            </ul>
            
            <div class="flex items-center gap-sm">
                <button class="icon-btn" id="theme-toggle" aria-label="Toggle theme">
                    <svg id="theme-icon-dark" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <svg id="theme-icon-light" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
                
                <div class="relative" style="position: relative;">
                    <button class="icon-btn" id="lang-toggle" aria-label="Change language">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </button>
                    <div id="lang-menu" style="display: none; position: absolute; top: 50px; right: 0; background: var(--surface-container); border-radius: var(--radius); padding: 8px; min-width: 120px; border: 1px solid var(--outline-variant);">
                        <button class="lang-option" data-lang="en" style="display: block; width: 100%; text-align: left; padding: 8px 12px; background: transparent; border: none; color: var(--on-surface); cursor: pointer; border-radius: var(--radius-sm);">English</button>
                        <button class="lang-option" data-lang="fr" style="display: block; width: 100%; text-align: left; padding: 8px 12px; background: transparent; border: none; color: var(--on-surface); cursor: pointer; border-radius: var(--radius-sm);">Français</button>
                        <button class="lang-option" data-lang="es" style="display: block; width: 100%; text-align: left; padding: 8px 12px; background: transparent; border: none; color: var(--on-surface); cursor: pointer; border-radius: var(--radius-sm);">Español</button>
                    </div>
                </div>
                
                <button class="icon-btn show-mobile" id="mobile-menu-toggle" aria-label="Menu">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<div id="mobile-menu" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: var(--surface-container); z-index: 999; padding: 80px 20px 20px;">
    <ul class="flex flex-col gap-md">
        <li><a href="index.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_home']; ?></a></li>
        <li><a href="projects.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'projects.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_projects']; ?></a></li>
        <li><a href="experience.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'experience.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_experience']; ?></a></li>
        <li><a href="blog.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_blog']; ?></a></li>
        <li><a href="certifications.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'certifications.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_certifications']; ?></a></li>
        <li><a href="contact.php?lang=<?php echo $current_lang; ?>" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" style="font-size: 24px;"><?php echo $t['nav_contact']; ?></a></li>
    </ul>
</div>

<style>
.nav-link {
    color: var(--on-surface-variant);
    font-size: 14px;
    font-weight: 500;
    transition: color var(--transition-base);
    position: relative;
}

.nav-link:hover,
.nav-link.active {
    color: var(--secondary);
    font-weight: 600;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--secondary);
    transition: width var(--transition-base);
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 100%;
}

.lang-option:hover {
    background: rgba(255, 255, 255, 0.05);
}

[data-theme="light"] .lang-option:hover {
    background: rgba(16, 185, 129, 0.1);
}
</style>