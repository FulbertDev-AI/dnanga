document.addEventListener('DOMContentLoaded', function() {
    const langToggle = document.getElementById('lang-toggle');
    const langMenu = document.getElementById('lang-menu');
    const langOptions = document.querySelectorAll('.lang-option');
    const html = document.documentElement;
    
    // Récupérer la langue actuelle définie par PHP
    const currentLang = html.getAttribute('lang') || 'en';
    
    // Mettre en surbrillance la langue active dans le menu
    langOptions.forEach(option => {
        if (option.getAttribute('data-lang') === currentLang) {
            option.style.background = 'rgba(255, 255, 255, 0.1)';
            option.style.fontWeight = '600';
        }
    });
    
    // Ouvrir/fermer le menu
    langToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        langMenu.style.display = langMenu.style.display === 'none' ? 'block' : 'none';
    });
    
    // Fermer le menu si on clique ailleurs
    document.addEventListener('click', function() {
        langMenu.style.display = 'none';
    });
    
    // Changement de langue
    langOptions.forEach(option => {
        option.addEventListener('click', function() {
            const lang = this.getAttribute('data-lang');
            
            // sessionStorage est isolé par onglet (contrairement à localStorage)
            sessionStorage.setItem('lang', lang);
            
            // Mettre à jour l'URL et recharger la page
            const url = new URL(window.location.href);
            url.searchParams.set('lang', lang); 
            window.location.href = url.toString();
        });
    });
});