<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php?page=home&lang=<?= e($lang) ?>" aria-label="<?= e($t['brand']) ?> — <?= e($t['nav_home']) ?>">
            <span class="brand-mark"><span></span><span></span><span></span><span></span></span>
            <span class="brand-name">TECH<span>SERVICE</span><small><?= e($t['brand_tagline']) ?></small></span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav">
            <span class="menu-toggle-lines"></span>
            <span class="sr-only"><?= e($t['menu']) ?></span>
        </button>

        <nav class="main-nav" id="main-nav" aria-label="<?= e($t['navigation']) ?>">
            <a class="<?= $page === 'home' ? 'active' : '' ?>" href="index.php?page=home&lang=<?= e($lang) ?>"><?= e($t['nav_home']) ?></a>
            <a class="<?= $page === 'services' ? 'active' : '' ?>" href="index.php?page=services&lang=<?= e($lang) ?>"><?= e($t['nav_services']) ?></a>
            <a class="<?= $page === 'prices' ? 'active' : '' ?>" href="index.php?page=prices&lang=<?= e($lang) ?>"><?= e($t['nav_prices']) ?></a>
            <a class="<?= $page === 'about' ? 'active' : '' ?>" href="index.php?page=about&lang=<?= e($lang) ?>"><?= e($t['nav_about']) ?></a>
            <a class="<?= $page === 'contacts' ? 'active' : '' ?>" href="index.php?page=contacts&lang=<?= e($lang) ?>"><?= e($t['nav_contacts']) ?></a>
        </nav>

        <div class="language-switch" aria-label="<?= e($t['language']) ?>">
            <?php foreach (['lv' => 'LV', 'en' => 'EN', 'ru' => 'RU'] as $code => $label): ?>
                <a class="<?= $lang === $code ? 'selected' : '' ?>"
                   href="index.php?page=<?= e($page) ?>&lang=<?= e($code) ?>"
                   lang="<?= e($code) ?>"
                   aria-current="<?= $lang === $code ? 'page' : 'false' ?>"><?= e($label) ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</header>
