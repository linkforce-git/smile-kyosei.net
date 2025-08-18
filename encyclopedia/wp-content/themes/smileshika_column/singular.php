<?php
    $page_name = get_the_title();
    $title = $page_name.'｜スマイル式矯正';
    $description = '';
    $canonical = get_the_permalink();
    include(__DIR__."/../../../../include/head_link.php");
    $cat = get_the_category()[0];
    $cat_ids = [];
    $cat_slug = $cat->slug;
    $cat_name = $cat->name;
    if ($cat->parent !== 0) {
        $cat_ids = array_reverse(get_ancestors($cat->term_id, 'category'));
    }
    if ($cat_slug !== 'aesthetic') {
        $cat_ids[] = $cat->term_id;
    }
?>
<?php get_header(); ?>
<script type="text/javascript">
<?php if ($cat_ids && get_category($cat_ids[0])->slug === 'orthodontics__'): ?>
    let opened_menu = ['menu-guide_open', 'orthodontics_open'];
    let current_menu = ['menu-column_ortho'];
<?php else: ?>
    let current_menu = ['menu-column'];
<?php endif; ?>
</script>
<script type="application/ld+json">
{
<?php $json_num = 1; ?>
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": <?= $json_num++ ?>,
        "name": "TOP",
        "item": "https://www.smileshika.net/"
    },{
        "@type": "ListItem",
        "position": <?= $json_num++ ?>,
        "name": "矯正百科事典",
        "item": "https://www.smileshika.net/encyclopedia/"
<?php if ($cat_slug !== ''): ?>
    },{
        "@type": "ListItem",
        "position": <?= $json_num++ ?>,
        "name": $cat_slug,
        "item": "<?= esc_url(get_term_link($cat->term_id, 'category')); ?>"
<?php endif; ?>
    },{
        "@type": "ListItem",
        "position": <?= $json_num++ ?>,
        "name": "<?= esc_html($page_name); ?>",
        "item": "<?= esc_url($canonical); ?>"
    }]
}
</script>
</head>
<body class="column">
<div class="bodyWrapper">

<?php include(__DIR__."/../../../../include/header.php"); ?>

<main>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div id="firstView2" class="fv">
        <div class="wrapper">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">TOP</a></li>
                    <li><a href="/encyclopedia/">矯正百科事典</a></li>
<?php if ($cat_slug !== ''): ?>
                    <li><a href="/encyclopedia/<?= $cat_slug ?>"><?= $cat_name; ?></a></li>
<?php endif; ?>
                    <li><?= esc_html($page_name); ?></li>
                </ol>
            </nav>
            <div class="fvMain">
<?php
    $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : '/assets/img/column/fv.jpg';
?>
                <picture class="pic">
                    <source type="image/webp" srcset="<?= esc_url($thumb_url); ?>.webp">
                    <img src="<?= esc_url($thumb_url); ?>">
                </picture>
                <div class="ttlGrp">
                    <div class="cat">矯正百科事典</div>
                    <h1 class="pageTitle"><?= esc_html($page_name); ?></h1>
                    <div class="date">公開日：<?php the_time('Y年n月j日'); ?></div>
                </div>
            </div>
            <div class="scWrap">
                <div class="scroll">SCROLL<div class="line"></div></div>
            </div>
        </div>
    </div>
    <section class="mainSec">
        <div class="wrapper mainContent">
<?php /*
            <p><?= nl2br(esc_html(post_custom('overview')), false); ?></p>
*/ ?>
<?php //  include(__DIR__."/../../../../include/column/sv_doctor.php"); ?>
            <?php the_content(); ?>
        </div>
    </section>
    <section class="mainSec supervisionSec">
        <div class="wrapper">
<?php   include(__DIR__."/../../../../include/column/author_area.php"); ?>
        </div>
    </section>
<?php   if ($cat_ids && get_category($cat_ids[0])->slug === 'orthodontics__'): ?>
    <section class="mainSec mouthpieceSec">
<?php       include(__DIR__."/../../../../include/column/mouthpiece_correction.php"); ?>
    </section>    
<?php   endif; ?>
    <section class="mainSec">
        <div class="wrapper">
            <div class="related_links">
<?php   if ($cat_ids && get_category($cat_ids[0])->slug === 'orthodontics__'): ?>
<?php       include(__DIR__."/../../../../include/column/orthodontics_link.php"); ?>
<?php   endif; ?>
<?php   $related_links_head = post_custom('related_links_head');
        $related_link_units = array_map(null, (array)post_custom('related_link_txt'), (array)post_custom('related_link_url'));
        if ($related_links_head): ?>
                <div class="linkGrp">
                    <h2 class="head"><?= esc_html($related_links_head); ?></h2>
                    <ul>
<?php       foreach ($related_link_units as $link_unit): ?>
                        <li class="item"><a href="<?= esc_url($link_unit[1]); ?>"><?= esc_html($link_unit[0]); ?></a></li>
<?php       endforeach; ?>
                    </ul>
                </div>
<?php   endif; ?>
<?php   $related_column = post_custom('related_column');
        if ($related_column): ?>
                <div class="linkGrp">
                    <h2 class="head">おすすめの矯正関連コラム</h2>
                    <ul>
<?php       foreach ((array)$related_column as $column_id): ?>
                        <li class="item"><a href="<?= esc_url(get_the_permalink($column_id)); ?>"><?= esc_html(get_the_title($column_id)); ?></a></li>
<?php       endforeach; ?>
                    </ul>
                </div>
<?php   endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
</main>

<?php include(__DIR__."/../../../../include/footer.php"); ?>

</div><!-- /.bodyWrapper -->
<?php get_footer(); ?>
</body>
</html>
