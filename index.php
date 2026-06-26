<?php
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if (!in_array($current_lang, ['en', 'fr', 'es'])) {
    $current_lang = 'en';
}
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main style="padding-top: 70px;">
    
    <!-- HERO SECTION -->
    <section style="padding: 40px 0 60px;">
        <div class="container">
            <div class="grid grid-2" style="align-items: center; gap: 40px;">
                
                <!-- Texte -->
                <div class="fade-in">
                    <h1 style="margin-bottom: 20px; line-height: 1.1; font-size: 42px;">
                        <span style="color: var(--on-background);"><?php echo $t['hero_title_1']; ?></span><br>
                        <span style="color: var(--on-background);"><?php echo $t['hero_title_2']; ?></span><br>
                        <span style="color: var(--secondary);"><?php echo $t['hero_title_3']; ?></span>
                    </h1>
                    <p style="color: var(--on-surface-variant); margin-bottom: 24px; font-size: 16px; line-height: 1.6; max-width: 550px;">
                        <?php echo $t['hero_description']; ?>
                    </p>
                    <div class="flex gap-sm" style="flex-wrap: wrap;">
                        <a href="projects.php?lang=<?php echo $current_lang; ?>" class="btn btn-primary">
                            <?php echo $t['hero_cta_projects']; ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#" class="btn btn-secondary">
                            <?php echo $t['hero_cta_cv']; ?>
                        </a>
                    </div>
                </div>

                <!-- Photo -->
                <div class="fade-in" style="position: relative;">
                    <div class="glass-card" style="padding: 0; overflow: hidden; border: 1px solid var(--outline-variant);">
                        <div style="width: 100%; aspect-ratio: 4/5; background: var(--surface-container); position: relative; max-height: 430px;">
                            <img src="images/Nanga_ditorga.jpeg" 
                                alt="NANGA Ditorga" 
                                style="width: 100%; height: 100%; object-fit: cover; object-position: top;">
                        </div>
                        <div style="padding: 16px; text-align: center; background: var(--surface-container); border-top: 1px solid var(--outline-variant);">
                            <p style="font-family: var(--font-headline); font-size: 24px; font-weight: 700; color: var(--on-background); letter-spacing: 0.5px;">
                                <?php echo $t['hero_name']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section style="padding: 40px 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 32px;" class="fade-in">
                <h2 style="margin-bottom: 12px; font-size: 32px;"><?php echo $t['skills_title']; ?></h2>
                <p style="color: var(--on-surface-variant); max-width: 700px; margin: 0 auto; font-size: 16px;">
                    <?php echo $t['skills_subtitle']; ?>
                </p>
            </div>

            <div class="grid grid-4" style="gap: 20px;">
                <!-- Skill 1 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_1_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_1_desc']; ?></p>
                </div>

                <!-- Skill 2 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_2_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_2_desc']; ?></p>
                </div>

                <!-- Skill 3 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_3_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_3_desc']; ?></p>
                </div>

                <!-- Skill 4 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_4_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_4_desc']; ?></p>
                </div>

                <!-- Skill 5 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87m-4-12a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_5_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_5_desc']; ?></p>
                </div>

                <!-- Skill 6 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_6_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_6_desc']; ?></p>
                </div>

                <!-- Skill 7 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_7_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_7_desc']; ?></p>
                </div>

                <!-- Skill 8 -->
                <div class="glass-card skill-card fade-in" style="padding: 24px;">
                    <div style="width: 44px; height: 44px; background: rgba(78, 222, 163, 0.1); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3 style="margin-bottom: 8px; font-size: 17px;"><?php echo $t['skill_8_title']; ?></h3>
                    <p style="font-size: 14px; color: var(--on-surface-variant); line-height: 1.5;"><?php echo $t['skill_8_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- TECH STACK SECTION -->
    <section style="padding: 40px 0;">
        <div class="container">
            <div style="margin-bottom: 32px;" class="fade-in">
                <h2 style="margin-bottom: 12px; font-size: 32px;"><?php echo $t['stack_title']; ?></h2>
                <p style="color: var(--on-surface-variant); max-width: 700px; font-size: 16px;">
                    <?php echo $t['stack_subtitle']; ?>
                </p>
            </div>

            <div class="grid grid-3" style="gap: 20px;">
                <!-- Interface -->
                <div class="glass-card fade-in" style="padding: 24px;">
                    <h3 style="margin-bottom: 20px; font-size: 15px; color: var(--secondary); display: flex; align-items: center; gap: 8px; font-weight: 600; letter-spacing: 0.5px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        <?php echo $t['stack_category_interface']; ?>
                    </h3>
                    <div class="flex flex-col gap-sm">
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React.js" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_react']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_ts']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_figma']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="TailwindCSS" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_tailwind']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML/CSS/JS" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_html']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="var(--secondary)"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            <span><?php echo $t['stack_framer']; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div class="glass-card fade-in" style="padding: 24px;">
                    <h3 style="margin-bottom: 20px; font-size: 15px; color: var(--secondary); display: flex; align-items: center; gap: 8px; font-weight: 600; letter-spacing: 0.5px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                        <?php echo $t['stack_category_backend']; ?>
                    </h3>
                    <div class="flex flex-col gap-sm">
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_python']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/rust/rust-original.svg" alt="Rust" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_rust']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" alt="Django" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_django']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP/Laravel" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_php']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_mysql']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/oracle/oracle-original.svg" alt="Oracle" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_oracle']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java/Spring Boot" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_java']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_postgresql']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg" alt="Golang" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_golang']; ?></span>
                        </div>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="glass-card fade-in" style="padding: 24px;">
                    <h3 style="margin-bottom: 20px; font-size: 15px; color: var(--secondary); display: flex; align-items: center; gap: 8px; font-weight: 600; letter-spacing: 0.5px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        <?php echo $t['stack_category_devops']; ?>
                    </h3>
                    <div class="flex flex-col gap-sm">
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_git']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_github']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" style="width: 24px; height: 24px;">
                            <span><?php echo $t['stack_docker']; ?></span>
                        </div>
                        <div class="tech-badge">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                            <span><?php echo $t['stack_cicd']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section style="padding: 40px 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 32px;" class="fade-in">
                <h2 style="margin-bottom: 12px; font-size: 32px;"><?php echo $t['projects_section_title']; ?></h2>
            </div>

            <div class="grid grid-3" style="gap: 20px;">
                <!-- Project 1 -->
                <div class="glass-card project-card fade-in" style="padding: 0; overflow: hidden;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/Portfolio.png" 
                             alt="GreenCredit Ledger" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: 20px;">
                        <div class="flex gap-sm" style="margin-bottom: 12px; flex-wrap: wrap;">
                            <span class="chip">React & PHP/Laravel</span>
                            <span class="chip">Portfolio</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 19px;"><?php echo $t['project_1_title']; ?></h3>
                        <p style="margin-bottom: 16px; color: var(--on-surface-variant); font-size: 14px; line-height: 1.5;"><?php echo $t['project_1_desc']; ?></p>
                        <a href="https://dnanga.wasmer.app/" target="_blank" class="btn btn-secondary" style="width: 100%; font-size: 14px; padding: 10px 16px;">
                            <?php echo $t['project_1_cta']; ?>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="glass-card project-card fade-in" style="padding: 0; overflow: hidden;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/sara_farms.png" 
                             alt="EcoOptima AI" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: 20px;">
                        <div class="flex gap-sm" style="margin-bottom: 12px; flex-wrap: wrap;">
                            <span class="chip">HTML/CSS/JS & PHP</span>
                            <span class="chip">Agriculture</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 19px;"><?php echo $t['project_2_title']; ?></h3>
                        <p style="margin-bottom: 16px; color: var(--on-surface-variant); font-size: 14px; line-height: 1.5;"><?php echo $t['project_2_desc']; ?></p>
                        <a href="https://github.com/FulbertDev-AI/Sara_Farms.git" target="_blank" class="btn btn-secondary" style="width: 100%; font-size: 14px; padding: 10px 16px;">
                            <?php echo $t['project_2_cta']; ?>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="glass-card project-card fade-in" style="padding: 0; overflow: hidden;">
                    <div style="width: 100%; height: 200px; overflow: hidden; background: var(--surface-container);">
                        <img src="images/greenguard_cli.png" 
                             alt="IronCore API Gateway" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </div>
                    <div style="padding: 20px;">
                        <div class="flex gap-sm" style="margin-bottom: 12px; flex-wrap: wrap;">
                            <span class="chip">Rust & Go</span>
                            <span class="chip">Climate Tech</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 19px;"><?php echo $t['project_3_title']; ?></h3>
                        <p style="margin-bottom: 16px; color: var(--on-surface-variant); font-size: 14px; line-height: 1.5;"><?php echo $t['project_3_desc']; ?></p>
                        <a href="#" class="btn btn-secondary" style="width: 100%; font-size: 14px; padding: 10px 16px;">
                            <?php echo $t['project_3_cta']; ?>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL BANNER -->
    <section style="padding: 40px 0 60px;">
        <div class="container">
            <div class="fade-in" style="background: linear-gradient(135deg, #2d3133 0%, #1d2022 100%); border-radius: 24px; padding: 60px 40px; text-align: center; border: 1px solid var(--outline-variant);">
                <h2 style="margin-bottom: 16px; font-size: 36px; letter-spacing: -0.02em; line-height: 1.2;">
                    <span style="color: var(--on-background);"><?php echo $t['banner_title_1']; ?></span>
                    <span style="color: var(--secondary);"> <?php echo $t['banner_title_2']; ?></span><br>
                    <span style="color: var(--on-background);"><?php echo $t['banner_title_3']; ?></span>
                </h2>
                <p style="color: var(--on-surface-variant); max-width: 500px; margin: 0 auto 28px; font-size: 15px;">
                    <?php echo $t['banner_desc']; ?>
                </p>
                <div class="flex justify-center gap-sm" style="flex-wrap: wrap;">
                    <a href="contact.php?lang=<?php echo $current_lang; ?>" class="btn btn-primary" style="padding: 14px 28px;">
                        <?php echo $t['banner_cta_call']; ?>
                    </a>
                    <a href="contact.php?lang=<?php echo $current_lang; ?>" class="btn btn-secondary" style="padding: 14px 28px; background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2);">
                        <?php echo $t['banner_cta_contact']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
/* Tech badges */
.tech-badge {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 14px;
    background: var(--surface-container);
    border-radius: var(--radius);
    border: 1px solid var(--outline-variant);
    font-size: 14px;
    transition: all var(--transition-base);
}

.tech-badge:hover {
    border-color: var(--secondary);
    transform: translateX(4px);
}

.tech-badge img {
    width: 24px;
    height: 24px;
    object-fit: contain;
}

/* Skill cards hover */
.skill-card:hover {
    transform: translateY(-4px);
    border-color: var(--secondary);
}

/* Project cards */
.project-card:hover img {
    transform: scale(1.05);
}

/* Fade-in animation */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive */
@media (max-width: 768px) {
    .grid-4,
    .grid-3,
    .grid-2 {
        grid-template-columns: 1fr !important;
    }
    
    h1 {
        font-size: 28px !important;
    }
    
    h2 {
        font-size: 24px !important;
    }
    
    .tech-badge {
        font-size: 13px;
        padding: 8px 12px;
    }
    
    .glass-card {
        padding: 20px !important;
    }
    
    section {
        padding: 30px 0 !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    
    h1 {
        font-size: 36px !important;
    }
}

@media (max-width: 768px) {
    .grid-2 {
        display: flex;
        flex-direction: column-reverse;
    }
    
    /* Le reste du responsive existe déjà */
    .grid-4,
    .grid-3 {
        grid-template-columns: 1fr !important;
    }
    
    /* ... le reste ... */
}
</style>

<script>
// Intersection Observer pour les animations fade-in
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
});
</script>

<?php include 'includes/footer.php'; ?>