<?php
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if (!in_array($current_lang, ['en', 'fr', 'es'])) {
    $current_lang = 'en';
}
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main style="padding-top: 80px; min-height: 100vh; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
    
    <!-- Arrière-plan animé : engrenages -->
    <div class="gears-background">
        <svg class="gear gear-1" viewBox="0 0 100 100" width="120" height="120">
            <path d="M50 10 L55 20 L65 15 L63 27 L75 28 L68 38 L78 45 L67 50 L73 60 L62 60 L62 72 L52 67 L47 77 L42 67 L32 72 L35 60 L24 60 L30 50 L19 45 L29 38 L22 28 L34 27 L32 15 L42 20 Z" fill="var(--surface-container-high)" opacity="0.3"/>
            <circle cx="50" cy="50" r="15" fill="var(--background)"/>
        </svg>
        <svg class="gear gear-2" viewBox="0 0 100 100" width="80" height="80">
            <path d="M50 10 L55 20 L65 15 L63 27 L75 28 L68 38 L78 45 L67 50 L73 60 L62 60 L62 72 L52 67 L47 77 L42 67 L32 72 L35 60 L24 60 L30 50 L19 45 L29 38 L22 28 L34 27 L32 15 L42 20 Z" fill="var(--surface-container-high)" opacity="0.3"/>
            <circle cx="50" cy="50" r="15" fill="var(--background)"/>
        </svg>
        <svg class="gear gear-3" viewBox="0 0 100 100" width="100" height="100">
            <path d="M50 10 L55 20 L65 15 L63 27 L75 28 L68 38 L78 45 L67 50 L73 60 L62 60 L62 72 L52 67 L47 77 L42 67 L32 72 L35 60 L24 60 L30 50 L19 45 L29 38 L22 28 L34 27 L32 15 L42 20 Z" fill="var(--surface-container-high)" opacity="0.3"/>
            <circle cx="50" cy="50" r="15" fill="var(--background)"/>
        </svg>
    </div>

    <!-- Conteneur principal -->
    <div class="container" style="position: relative; z-index: 5; text-align: center; max-width: 700px; margin: 0 auto; padding: 20px;">

        <!-- Titre avec animation de frappe -->
        <h1 style="margin-bottom: var(--stack-sm); font-size: 36px; letter-spacing: -0.02em; color: var(--on-background);">
            <span id="typing-text"></span><span class="cursor" style="animation: blink 1s infinite; color: var(--secondary);">|</span>
        </h1>

        <!-- Description -->
        <p class="text-lg" style="color: var(--on-surface-variant); margin-bottom: var(--stack-md); max-width: 500px; margin-left: auto; margin-right: auto;">
            <?php echo $t['blog_coming_soon_desc']; ?>
        </p>

        <!-- Compteur de bugs -->
        <div style="background: var(--surface-container); border-radius: var(--radius); padding: var(--stack-sm); margin-bottom: var(--stack-md); border: 1px solid var(--outline-variant); display: inline-block; min-width: 200px;">
            <p class="label" style="font-size: 12px; color: var(--on-surface-variant); margin-bottom: 8px;">
                <?php echo $t['blog_bug_counter']; ?>
            </p>
            <div style="font-size: 48px; font-weight: 700; color: var(--secondary); font-family: var(--font-headline);">
                <span id="bug-count">0</span>
            </div>
            <p class="text-sm" style="color: var(--on-surface-variant);">
                <?php echo $t['blog_bugs_fixed']; ?>
            </p>
        </div>

        <!-- Instructions du jeu -->
        <p class="text-sm" style="color: var(--tertiary); margin-bottom: var(--stack-md); font-weight: 500;">
            <?php echo $t['blog_game_instruction']; ?>
        </p>

        <!-- Bouton retour -->
        <a href="index.php?lang=<?php echo $current_lang; ?>" class="btn btn-primary">
            <?php echo $t['nav_home']; ?>
        </a>
    </div>

    <!-- Zone de jeu : les bugs apparaissent ici (z-index plus élevé) -->
    <div id="game-area" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 10;"></div>

    <!-- Message de victoire -->
    <div id="victory-message" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: var(--surface-container); border: 2px solid var(--secondary); border-radius: var(--radius-lg); padding: var(--stack-md); z-index: 100; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.3); max-width: 90%; width: 400px;">
        <h2 style="color: var(--secondary); margin-bottom: var(--stack-sm);"> <?php echo $t['blog_victory_title']; ?></h2>
        <p style="margin-bottom: var(--stack-md);"><?php echo $t['blog_victory_desc']; ?></p>
        <button class="btn btn-secondary" onclick="resetGame()">
            <?php echo $t['blog_play_again']; ?>
        </button>
    </div>

</main>

<style>
/* Animations des engrenages */
.gears-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.gear {
    position: absolute;
    animation: rotate 10s linear infinite;
}

.gear-1 {
    top: 10%;
    left: 10%;
}

.gear-2 {
    top: 60%;
    right: 15%;
    animation-duration: 8s;
    animation-direction: reverse;
}

.gear-3 {
    bottom: 20%;
    left: 20%;
    animation-duration: 12s;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0; }
}

/* Bugs (insectes) */
.bug {
    position: absolute;
    width: 40px;
    height: 40px;
    cursor: pointer;
    pointer-events: auto;
    animation: bugAppear 0.3s ease-out, bugFloat 3s ease-in-out infinite;
    transition: transform 0.2s;
    z-index: 10;
}

.bug:hover {
    transform: scale(1.2);
}

.bug.squashed {
    animation: bugSquash 0.3s ease-out forwards;
}

@keyframes bugAppear {
    from {
        opacity: 0;
        transform: scale(0) rotate(0deg);
    }
    to {
        opacity: 1;
        transform: scale(1) rotate(360deg);
    }
}

@keyframes bugFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes bugSquash {
    to {
        opacity: 0;
        transform: scale(0) rotate(720deg);
    }
}

/* Effet de particules quand on écrase un bug */
.particle {
    position: absolute;
    width: 8px;
    height: 8px;
    background: var(--secondary);
    border-radius: 50%;
    pointer-events: none;
    animation: particleExplode 0.6s ease-out forwards;
    z-index: 11;
}

@keyframes particleExplode {
    to {
        opacity: 0;
        transform: translate(var(--tx), var(--ty)) scale(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .gear {
        width: 60px !important;
        height: 60px !important;
    }
    
    h1 {
        font-size: 28px !important;
    }
    
    .text-lg {
        font-size: 15px !important;
    }
    
    .bug {
        width: 35px !important;
        height: 35px !important;
        font-size: 28px !important;
    }
    
    #bug-count {
        font-size: 40px !important;
    }
}
</style>

<script>
// Traductions pour le jeu
const translations = {
    en: {
        typing: 'Blog Under Construction',
        bugs: ['🐛', '', '🦟', '🐜', '🕷️'],
        victory: 'Amazing! You fixed 10 bugs!',
        playAgain: 'Play Again'
    },
    fr: {
        typing: 'Blog en Construction',
        bugs: ['🐛', '🪲', '🦟', '', '🕷️'],
        victory: 'Incroyable ! Vous avez corrigé 10 bugs !',
        playAgain: 'Rejouer'
    },
    es: {
        typing: 'Blog en Construcción',
        bugs: ['🐛', '', '🦟', '🐜', '🕷️'],
        victory: '¡Increíble! ¡Corregiste 10 bugs!',
        playAgain: 'Jugar de Nuevo'
    }
};

const currentLang = '<?php echo $current_lang; ?>';
const t = translations[currentLang];
let bugCount = 0;
const targetBugs = 10;
let gameInterval;

// Animation de frappe
const typingText = t.typing;
let charIndex = 0;
const typingElement = document.getElementById('typing-text');

function typeText() {
    if (charIndex < typingText.length) {
        typingElement.textContent += typingText.charAt(charIndex);
        charIndex++;
        setTimeout(typeText, 100);
    }
}

// Créer un bug
function createBug() {
    const gameArea = document.getElementById('game-area');
    const bug = document.createElement('div');
    bug.className = 'bug';
    bug.innerHTML = t.bugs[Math.floor(Math.random() * t.bugs.length)];
    bug.style.fontSize = '32px';
    bug.style.left = Math.random() * (window.innerWidth - 50) + 'px';
    bug.style.top = Math.random() * (window.innerHeight - 50) + 'px';
    
    bug.addEventListener('click', function(e) {
        if (this.classList.contains('squashed')) return;
        
        this.classList.add('squashed');
        bugCount++;
        document.getElementById('bug-count').textContent = bugCount;
        
        // Créer des particules
        createParticles(e.clientX, e.clientY);
        
        setTimeout(() => this.remove(), 300);
        
        if (bugCount >= targetBugs) {
            showVictory();
        }
    });
    
    gameArea.appendChild(bug);
    
    // Supprimer le bug après 5 secondes s'il n'est pas cliqué
    setTimeout(() => {
        if (!bug.classList.contains('squashed')) {
            bug.style.opacity = '0';
            setTimeout(() => bug.remove(), 300);
        }
    }, 5000);
}

// Créer des particules
function createParticles(x, y) {
    for (let i = 0; i < 8; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particle.style.setProperty('--tx', (Math.random() - 0.5) * 100 + 'px');
        particle.style.setProperty('--ty', (Math.random() - 0.5) * 100 + 'px');
        document.body.appendChild(particle);
        setTimeout(() => particle.remove(), 600);
    }
}

// Afficher le message de victoire
function showVictory() {
    clearInterval(gameInterval);
    document.getElementById('victory-message').style.display = 'block';
}

// Réinitialiser le jeu
function resetGame() {
    bugCount = 0;
    document.getElementById('bug-count').textContent = '0';
    document.getElementById('victory-message').style.display = 'none';
    document.getElementById('game-area').innerHTML = '';
    startGame();
}

// Démarrer le jeu
function startGame() {
    gameInterval = setInterval(createBug, 1500);
}

// Initialisation
window.addEventListener('DOMContentLoaded', function() {
    setTimeout(typeText, 500);
    setTimeout(startGame, 2000);
});
</script>

<?php include 'includes/footer.php'; ?>