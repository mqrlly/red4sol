<?php
session_start();

$allowedPages = ['home', 'services', 'prices', 'about', 'contacts'];
$page = $_GET['page'] ?? 'home';
if (!in_array($page, $allowedPages, true)) {
    $page = 'home';
}

$supportedLanguages = ['lv', 'en', 'ru'];
if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLanguages, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'lv';

require __DIR__ . '/languages/' . $lang . '.php';
require __DIR__ . '/config/database.php';

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pageTitles = [
    'home' => $t['nav_home'],
    'services' => $t['nav_services'],
    'prices' => $t['nav_prices'],
    'about' => $t['nav_about'],
    'contacts' => $t['nav_contacts'],
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/navbar.php';
?>
<main id="main-content">
    <?php require __DIR__ . '/pages/' . $page . '.php'; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
