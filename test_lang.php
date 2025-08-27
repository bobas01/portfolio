<?php
// Test simple des langues
include_once './i18n.php';

echo "<h1>Test des langues</h1>";
echo "<p>Langue actuelle: <strong>" . current_lang() . "</strong></p>";
echo "<p>Session ID: " . session_id() . "</p>";
echo "<p>Session lang: " . ($_SESSION['lang'] ?? 'non définie') . "</p>";
echo "<p>GET lang: " . ($_GET['lang'] ?? 'non défini') . "</p>";

echo "<h2>Test des traductions</h2>";
echo "<p>Bonjour: " . t('hero.name') . "</p>";
echo "<p>Rôle: " . t('hero.role') . "</p>";

echo "<h2>Liens de test</h2>";
echo "<p><a href='?lang=fr'>Changer vers Français</a></p>";
echo "<p><a href='?lang=en'>Changer vers Anglais</a></p>";
echo "<p><a href='?debug=1'>Mode Debug</a></p>";

echo "<h2>Test des URLs</h2>";
echo "<p>URL index.php: " . with_lang_url('./index.php') . "</p>";
echo "<p>URL index.php FR: " . with_lang_url('./index.php', 'fr') . "</p>";
echo "<p>URL index.php EN: " . with_lang_url('./index.php', 'en') . "</p>";
