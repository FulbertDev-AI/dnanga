<?php
session_start();

// Priorité : 1. GET parameter, 2. Session, 3. Cookie, 4. Default (en)
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'fr', 'es'])) {
    $current_lang = $_GET['lang'];
    $_SESSION['lang'] = $current_lang;
    setcookie('lang', $current_lang, time() + (365 * 24 * 60 * 60), '/');
} elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['en', 'fr', 'es'])) {
    $current_lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], ['en', 'fr', 'es'])) {
    $current_lang = $_COOKIE['lang'];
} else {
    $current_lang = 'en';
}

require_once __DIR__ . '/../data/translations.php';
$t = $translations[$current_lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Global Tech Steward - Digital Infrastructure & Sustainable Innovation">
    <title>NANGA Ditorga</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/glassmorphism.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>