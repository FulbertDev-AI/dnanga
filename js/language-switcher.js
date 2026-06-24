document.addEventListener('DOMContentLoaded', function() {
    const langToggle = document.getElementById('lang-toggle');
    const langMenu = document.getElementById('lang-menu');
    const langOptions = document.querySelectorAll('.lang-option');
    const html = document.documentElement;
    
    // Get current language from HTML
    const currentLang = html.getAttribute('lang') || 'en';
    
    // Update active state in menu
    langOptions.forEach(option => {
        if (option.getAttribute('data-lang') === currentLang) {
            option.style.background = 'rgba(255, 255, 255, 0.1)';
            option.style.fontWeight = '600';
        }
    });
    
    langToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        langMenu.style.display = langMenu.style.display === 'none' ? 'block' : 'none';
    });
    
    document.addEventListener('click', function() {
        langMenu.style.display = 'none';
    });
    
    langOptions.forEach(option => {
        option.addEventListener('click', function() {
            const lang = this.getAttribute('data-lang');
            
            // Save to localStorage
            localStorage.setItem('lang', lang);
            
            // Get current URL and remove existing lang parameter
            const url = new URL(window.location.href);
            url.searchParams.set('lang', lang);
            
            // Redirect
            window.location.href = url.toString();
        });
    });
});