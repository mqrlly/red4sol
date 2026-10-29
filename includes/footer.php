<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <a class="brand footer-brand" href="index.php?page=home&lang=<?= e($lang) ?>">
                <span class="brand-mark"><span></span><span></span><span></span><span></span></span>
                <span class="brand-name">TECH<span>SERVICE</span><small><?= e($t['brand_tagline']) ?></small></span>
            </a>
            <p class="footer-description"><?= e($t['footer_description']) ?></p>
        </div>
        <div>
            <h2><?= e($t['footer_links']) ?></h2>
            <a href="index.php?page=services&lang=<?= e($lang) ?>"><?= e($t['nav_services']) ?></a>
            <a href="index.php?page=prices&lang=<?= e($lang) ?>"><?= e($t['nav_prices']) ?></a>
            <a href="index.php?page=about&lang=<?= e($lang) ?>"><?= e($t['nav_about']) ?></a>
        </div>
        <div>
            <h2><?= e($t['nav_contacts']) ?></h2>
            <p><?= e($t['phone_placeholder']) ?></p>
            <p><?= e($t['email_placeholder']) ?></p>
            <p><?= e($t['address_placeholder']) ?></p>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© <?= date('Y') ?> TECH SERVICE</span>
        <span><?= e($t['footer_note']) ?></span>
    </div>
</footer>
<script src="assets/js/script.js"></script>
</body>
</html>
