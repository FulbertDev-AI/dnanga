# Portfolio de NANGA Ditorga

Portfolio personnel et site vitrine conçu pour présenter les compétences, projets, parcours professionnel, certifications et contact d’un développeur full-stack orienté architecture logicielle et innovation durable.

Ce projet est une application web PHP statique/templated, construite sans framework backend, avec un système de design personnalisé, une navigation multilangue et des interactions front-end légères.

## 1. Vue d’ensemble

Le site a pour objectif de :

- présenter le profil professionnel et la proposition de valeur du développeur
- mettre en avant des projets techniques et des réalisations concrètes
- exposer le parcours professionnel, les certifications et les compétences
- faciliter les prises de contact via un formulaire d’e-mail
- proposer une expérience visuelle moderne, premium et responsive
- supporter plusieurs langues (anglais, français, espagnol)

Le site est pensé comme un portfolio de type personal brand / developer portfolio, avec une esthétique “glassmorphism” et un design orienté qualité d’expérience, plutôt qu’un framework applicatif classique.

## 2. Stack technique

### Front-end
- HTML5
- CSS3
- JavaScript vanilla
- Design system custom (variables, layout, components, responsive CSS)
- Dark / light mode via thème dynamique
- animations d’apparition au scroll

### Back-end
- PHP 7+ / PHP 8 compatible
- templates PHP inclusifs
- fichiers de contenu centralisés par page
- gestion multi-langues via tableau de traductions

### Intégration email
- PHPMailer
- SMTP Gmail
- formulaire de contact côté serveur

### Outils / dépendances
- Composer n’est pas nécessaire pour le fonctionnement de base du site
- PHPMailer est livré dans le dossier vendor
- Images locales stockées dans le dossier images/

## 3. Architecture du projet

```text
.
├── index.php                  # page d’accueil
├── projects.php               # page des projets
├── experience.php             # parcours professionnel
├── certifications.php         # certifications
├── blog.php                   # blog / placeholder / mini-app
├── contact.php                # page de contact + formulaire
├── send-mail.php              # traitement du formulaire de contact
├── data/
│   └── translations.php       # dictionnaire de traductions multilingues
├── includes/
│   ├── header.php             # haut de page HTML + CSS + meta
│   ├── navbar.php             # navigation principale
│   ├── footer.php             # pied de page
│   └── components/
│       ├── button.php
│       ├── glass-card.php
│       ├── project-card.php
│       ├── section-title.php
│       ├── skill-bar.php
│       ├── timeline-item.php
│       └── stat-box.php
├── css/
│   ├── variables.css
│   ├── reset.css
│   ├── typography.css
│   ├── glassmorphism.css
│   ├── layout.css
│   ├── components.css
│   ├── responsive.css
│   ├── light-mode.css
│   └── dark-mode.css
├── js/
│   ├── main.js
│   ├── mobile-nav.js
│   ├── scroll-effects.js
│   ├── theme-toggle.js
│   └── language-switcher.js
├── images/
│   └── assets visuelles du portfolio
├── vendor/
│   └── phpmailer/
├── CV_NANGA_Ditorga.pdf
├── README.md
└── ...
```

## 4. Fonctionnalités

### 4.1 Multi-langue
Le site supporte 3 langues :
- Anglais (`en`)
- Français (`fr`)
- Espagnol (`es`)

La logique est contrôlée dans :
- `index.php`
- `contact.php`
- `projects.php`
- et le tableau centralisé dans `data/translations.php`

Cette approche rend la maintenance des libellés simple et permet de scalabiliser le contenu sans dupliquer le HTML.

### 4.2 Thème visuel
Le projet exploite un système de thème adaptatif :
- `data-theme="dark"` par défaut
- support de mode clair et sombre
- variables CSS centralisées dans `css/variables.css`

### 4.3 Portfolio & projets
Les pages principales exposent :
- un bloc hero
- compétences clés
- stack technique
- projets mis en avant
- parcours professionnel
- certifications
- page de contact

### 4.4 Formulaire de contact
Le formulaire envoie un e-mail via SMTP avec PHPMailer.

Flux :
1. validation côté serveur des champs
2. validation email
3. envoi via SMTP Gmail
4. redirection vers `contact.php` avec statut success/error

## 5. Prérequis

Pour exécuter ce projet localement :

- PHP 7.4+ (recommandé 8.x)
- un serveur local compatible PHP (WAMP / XAMPP / Laragon / PHP built-in server)
- accès internet pour les polices Google Fonts et les icônes externes
- navigateur moderne

## 6. Installation et lancement

### Option 1 : WAMP / XAMPP

1. Placez le dossier du projet dans le dossier racine web de votre serveur :
   - WAMP : `c:/wamp64/www/`
   - XAMPP : `C:/xampp/htdocs/`

2. Démarrez Apache.

3. Ouvrez le projet dans le navigateur :
   - `http://localhost/dnanga/`

### Option 2 : PHP interne

```bash
php -S localhost:8000
```

Puis ouvrez :

```text
http://localhost:8000
```

## 7. Configuration du formulaire de contact

Le fichier `send-mail.php` contient des identifiants SMTP codés en dur :

- adresse Gmail d’envoi
- mot de passe d’application
- configuration SMTP

Cela est fonctionnel pour un prototypage rapide, mais ce n’est pas une bonne pratique en production.

### Recommandation de sécurité
Il faudrait absolument remplacer cette configuration par :

- des variables d’environnement
- un fichier `.env` avec gestion sécurisée
- exclusion du secret du dépôt Git
- rotation du mot de passe d’application si utilisé en production

Exemple académique de refactor proposé :

```php
$mail->Username = $_ENV['SMTP_USERNAME'];
$mail->Password = $_ENV['SMTP_PASSWORD'];
```

## 8. Points d’architecture remarquables

### 8.1 Structure modulaire sans framework
Le site repose sur une logique très simple :
- pages dédiées pour chaque section
- includes front-end pour les éléments réutilisables
- fichiers CSS organisés par responsabilité
- données centralisées dans `translations.php`

Cette architecture convient parfaitement à un portfolio personnel ou à une vitrine technique.

### 8.2 Séparation des préoccupations
Le code est lisible et cohérent :
- HTML structurel dans les pages
- layout partagé dans `includes/`
- contenus dynamiques côté PHP
- styles dans `css/`
- interactions dans `js/`

### 8.3 Évolutivité
Le projet est facilement extensible pour :
- ajouter de nouveaux projets
- intégrer un CMS ou un backend de contenu
- remplacer la logique de traduction par un système de locale plus robuste
- migrer vers un stack moderne comme Symfony, Laravel ou Next.js

## 9. Sécurité et qualité

### Risques actuels à corriger
- identifiants SMTP codés en dur dans le code
- validation HTML côté serveur minimaliste
- dépendances manquantes en production si l’environnement n’est pas correctement configuré
- absence de mécanisme de protection CSRF sur le formulaire
- absence de journalisation centralisée des erreurs métier

### Recommandations senior
- externaliser les secrets dans `.env`
- ajouter une validation plus stricte au niveau des champs
- sécuriser l’application avec des headers HTTP de type CSP, HSTS, X-Frame-Options
- refactoriser le formulaire en service dédié
- ajouter des tests fonctionnels élémentaires
- utiliser une base de données si le site devient plus dynamique

## 10. Déploiement

Le site peut être déployé sur :
- un hébergement classique PHP (Hostinger, OVH, CPanel, VPS)
- AWS / Azure / DigitalOcean avec Apache ou Nginx
- un serveur statique + backend PHP séparé si le projet évolue

### Bonnes pratiques pour la prod
- activer SSL/TLS
- fixer les contenus externes
- mettre à jour PHPMailer
- sécuriser les entrées utilisateurs
- ne jamais committer les secrets

## 11. Projets et contenus représentés

Le site présente un ensemble de réalisations qui couvrent :
- développement web full-stack
- architecture applicative
- intégration UI / UX
- infrastructure et cloud
- solutions liées au climat et à l’innovation durable
- outils et produits orientés impact technologique

Les pages `projects.php`, `experience.php`, `certifications.php` et `index.php` constituent le cœur démonstratif du portfolio.

## 12. Points forts du code

- architecture simple et lisible
- composants front réutilisables
- forte cohérence visuelle
- navigation intuitive
- système de traduction centralisé
- mise en avant claire du profil technique et professionnel

## 13. Points à améliorer

- centraliser la configuration SMTP dans un fichier dédié
- externaliser les secrets
- ajouter des tests automatisés
- nettoyer certains contenus redondants ou dupliqués dans `translations.php`
- harmoniser les libellés et les doublons de projets
- ajouter un back-office pour gérer le contenu sans modifier le code source

## 14. Licence et usage

Ce projet est un portfolio personnel. Sauf indication contraire, le code et les contenus sont destinés à l’usage de démonstration, de communication professionnelle et de présentation technique.

## 15. Conclusion

Ce portfolio est un excellent exemple d’application web personnelle orientée marketing technique, avec une forte identité visuelle et une structure suffisante pour présenter un profil de développeur senior ou de consultant tech en production.

Il est fonctionnel, élégant et lisible, mais il gagnerait à être renforcé côté sécurité, configuration et maintenabilité si l’objectif est de passer en environnement de production à plus grande échelle.

---

Auteur : NANGA Ditorga
Type : portfolio personnel / site vitrine / showcase technique

Pour toute question ou amélioration, le point d’entrée est la page de contact du site ou le formulaire SMTP configuré dans `send-mail.php`.
