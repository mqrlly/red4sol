<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow"><span class="status-dot"></span><?= e($t['hero_eyebrow']) ?></span>
            <h1><?= e($t['hero_title']) ?> <span><?= e($t['hero_title_accent']) ?></span></h1>
            <p class="hero-lead"><?= e($t['hero_text']) ?></p>
            <div class="hero-actions">
                <a class="button button-primary" href="index.php?page=services&lang=<?= e($lang) ?>"><?= e($t['hero_cta_services']) ?> <span aria-hidden="true">↗</span></a>
                <a class="button button-outline" href="index.php?page=contacts&lang=<?= e($lang) ?>"><?= e($t['hero_cta_contact']) ?></a>
            </div>
            <div class="hero-trust">
                <span class="trust-icon">✓</span>
                <span><?= e($t['hero_trust']) ?></span>
            </div>
        </div>
        <div class="hero-visual" aria-label="<?= e($t['hero_image_alt']) ?>">
            <div class="visual-orbit orbit-one"></div>
            <div class="visual-orbit orbit-two"></div>
            <div class="device device-monitor"><div class="monitor-screen"><span class="screen-logo">TS<span>.</span></span><span class="screen-line"></span><span class="screen-line short"></span><span class="screen-grid"><i></i><i></i><i></i></span></div><div class="monitor-stand"></div></div>
            <div class="device device-router"><span class="router-light"></span><span class="router-light"></span><span class="router-light"></span><span class="router-antennas"></span></div>
            <div class="floating-card card-network"><span class="floating-icon">⌁</span><span><b><?= e($t['hero_network_card']) ?></b><small><?= e($t['hero_network_sub']) ?></small></span><i class="green-check">✓</i></div>
            <div class="floating-card card-support"><span class="support-icon">+</span><span><b><?= e($t['hero_support_card']) ?></b><small><?= e($t['hero_support_sub']) ?></small></span></div>
            <div class="visual-caption"><?= e($t['hero_visual_caption']) ?></div>
        </div>
    </div>
</section>

<section class="trust-strip">
    <div class="container trust-strip-inner">
        <span><?= e($t['trust_title']) ?></span>
        <strong>COMPUTER CARE</strong><strong>NETWORK SETUP</strong><strong>REMOTE SUPPORT</strong><strong>UNIFI / UBIQUITI</strong>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <div><span class="eyebrow"><?= e($t['services_eyebrow']) ?></span><h2><?= e($t['services_title']) ?> <span><?= e($t['services_title_accent']) ?></span></h2></div>
            <a class="text-link" href="index.php?page=services&lang=<?= e($lang) ?>"><?= e($t['view_all_services']) ?> <span aria-hidden="true">↗</span></a>
        </div>
        <div class="service-grid">
            <?php foreach ($t['home_services'] as $service): ?>
                <article class="service-card">
                    <div class="service-icon"><?= e($service['icon']) ?></div>
                    <h3><?= e($service['title']) ?></h3>
                    <p><?= e($service['text']) ?></p>
                    <a href="index.php?page=services&lang=<?= e($lang) ?>" aria-label="<?= e($t['learn_more']) ?>: <?= e($service['title']) ?>" class="card-arrow">↗</a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section ubiquiti-section">
    <div class="container ubiquiti-grid">
        <div class="network-art" aria-hidden="true">
            <div class="network-ring ring-a"></div><div class="network-ring ring-b"></div>
            <div class="network-node node-main">U<span>.</span></div>
            <div class="network-node node-one">Wi-Fi</div><div class="network-node node-two">VPN</div><div class="network-node node-three">VLAN</div>
            <div class="network-connection connection-a"></div><div class="network-connection connection-b"></div><div class="network-connection connection-c"></div>
        </div>
        <div class="ubiquiti-copy">
            <span class="eyebrow eyebrow-light"><?= e($t['ubiquiti_eyebrow']) ?></span>
            <h2><?= e($t['ubiquiti_title']) ?> <span><?= e($t['ubiquiti_title_accent']) ?></span></h2>
            <p><?= e($t['ubiquiti_text']) ?></p>
            <ul class="check-list check-list-light">
                <?php foreach ($t['ubiquiti_points'] as $point): ?><li><span>✓</span><?= e($point) ?></li><?php endforeach; ?>
            </ul>
            <a class="button button-white" href="index.php?page=services&lang=<?= e($lang) ?>#ubiquiti"><?= e($t['ubiquiti_cta']) ?> <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-heading centered"><div><span class="eyebrow"><?= e($t['why_eyebrow']) ?></span><h2><?= e($t['why_title']) ?> <span><?= e($t['why_title_accent']) ?></span></h2></div></div>
        <div class="benefit-grid">
            <?php foreach ($t['benefits'] as $benefit): ?>
                <article class="benefit"><span class="benefit-number"><?= e($benefit['number']) ?></span><h3><?= e($benefit['title']) ?></h3><p><?= e($benefit['text']) ?></p></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container cta-inner"><div><span class="eyebrow eyebrow-light"><?= e($t['cta_eyebrow']) ?></span><h2><?= e($t['cta_title']) ?></h2><p><?= e($t['cta_text']) ?></p></div><a class="button button-white" href="index.php?page=contacts&lang=<?= e($lang) ?>"><?= e($t['cta_button']) ?> <span aria-hidden="true">↗</span></a></div>
</section>
