<?php
// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Déterminer la langue courante
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    // Debug: afficher le changement de langue
    error_log("Langue changée vers: " . $_GET['lang']);
}

$currentLang = $_SESSION['lang'] ?? 'fr';

// Debug: afficher la langue actuelle
error_log("Langue actuelle: " . $currentLang);

// Charger le dictionnaire
$langFile = __DIR__ . "/lang/{$currentLang}.php";
if (!file_exists($langFile)) {
    $langFile = __DIR__ . '/lang/fr.php';
    error_log("Fichier de langue non trouvé, utilisation du français par défaut");
}

$TRANSLATIONS = require $langFile;

function t(string $key, array $params = []): string
{
    global $TRANSLATIONS;
    $text = $TRANSLATIONS[$key] ?? $key;
    foreach ($params as $name => $value) {
        $text = str_replace('{' . $name . '}', $value, $text);
    }
    return $text;
}

function current_lang(): string
{
    return $_SESSION['lang'] ?? 'fr';
}

function with_lang_url(string $url, string $lang = null): string
{
    // Si aucune langue spécifiée, utiliser la langue actuelle
    if ($lang === null) {
        $lang = current_lang();
    }

    // Nettoyer l'URL des paramètres de langue existants
    $url = preg_replace('/[?&]lang=[^&]*/', '', $url);

    // Ajouter le paramètre de langue
    $sep = (strpos($url, '?') === false) ? '?' : '&';
    return $url . $sep . 'lang=' . $lang;
}

// Debug: afficher les informations de session
error_log("Session ID: " . session_id());
error_log("Session lang: " . ($_SESSION['lang'] ?? 'non définie'));
