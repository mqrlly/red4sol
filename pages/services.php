<section class="page-hero"><div class="container"><span class="eyebrow"><?= e($t['services_eyebrow']) ?></span><h1><?= e($t['nav_services']) ?> <span><?= e($t['page_hero_accent']) ?></span></h1><p><?= e($t['services_intro']) ?></p></div></section>
<section class="section section-light"><div class="container"><div class="service-grid service-grid-large">
<?php foreach ($t['all_services'] as $index => $service): ?>
    <article class="service-card"><div class="service-card-top"><div class="service-icon"><?= e($service['icon']) ?></div><span class="service-index"><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span></div><h3><?= e($service['title']) ?></h3><p><?= e($service['text']) ?></p></article>
<?php endforeach; ?>
</div></div></section>
<section class="section ubiquiti-section" id="ubiquiti"><div class="container"><div class="section-heading section-heading-inverse"><div><span class="eyebrow eyebrow-light"><?= e($t['ubiquiti_eyebrow']) ?></span><h2><?= e($t['ubiquiti_title']) ?> <span><?= e($t['ubiquiti_title_accent']) ?></span></h2></div><p><?= e($t['ubiquiti_text']) ?></p></div>
<div class="ubiquiti-service-grid"><?php foreach ($t['ubiquiti_services'] as $item): ?><article class="ubiquiti-service"><span>✓</span><div><h3><?= e($item['title']) ?></h3><p><?= e($item['text']) ?></p></div></article><?php endforeach; ?></div>
<p class="disclaimer"><?= e($t['ubiquiti_disclaimer']) ?></p>
</div></section>
<section class="cta-band"><div class="container cta-inner"><div><h2><?= e($t['cta_title']) ?></h2><p><?= e($t['cta_text']) ?></p></div><a class="button button-white" href="index.php?page=contacts&lang=<?= e($lang) ?>"><?= e($t['cta_button']) ?> ↗</a></div></section>
