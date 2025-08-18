<?php
    global $wp_query;
    $max_pages = $wp_query->max_num_pages;
    $paged = get_query_var('paged') ?: 1;

    $cat_slug = '';
    $cat_name = '';
    $page_name = '矯正百科事典';
    $title = $page_name.'｜スマイル式矯正';
    $cat = get_queried_object();
    $cat_ids = [];
    if (isset($cat)) {
        $cat_slug = $cat->slug;
        $cat_name = $cat->name;
        $page_name = '「' .$cat->name. '」に関する記事一覧';
        $title = $cat->name.'｜矯正百科事典｜スマイル式矯正';

        if ($cat->parent !== 0) {
            $cat_ids = array_reverse(get_ancestors($cat->term_id, 'category'));
        }
        if ($cat_slug !== 'aesthetic') {
            $cat_ids[] = $cat->term_id;
        }
    }
    $description = '';


    // カテゴリ一覧
	$args = array(
		'orderby' => 'id',
		'order' => 'asc',
		'hide_empty' => 0,
	);
	$categories = get_categories( $args );


    include(__DIR__."/../../../../include/head_link.php");
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
    }]
}
</script>
</head>
<body class="column_archive encyclopedia">
<div class="bodyWrapper">

<?php include(__DIR__."/../../../../include/header.php"); ?>

<main>
    <div id="firstView1" class="fv">
        <picture class="pic">
            <source type="image/webp" srcset="/assets/img/encyclopedia/archive_fv-sp.jpg.webp">
            <img src="/assets/img/encyclopedia/archive_fv-sp.jpg">
        </picture>
        <div class="wrapper">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">TOP</a></li>
                    <li><a href="/encyclopedia/">矯正百科事典</a></li>
<?php if ($cat_slug !== ''): ?>
                    <li><?= esc_html($page_name); ?></li>
<?php else: ?>
                    <li>関連記事</li>
<?php endif; ?>
                </ol>
            </nav>
            <div class="txtBox">
                <div class="pageTitle">
                    <div class="en">ENCYCLOPEDIA</div>
                    <h1 class="jp">矯正百科事典</h1>
                </div>
            </div>
            <div class="scroll">SCROLL<div class="line"></div></div>
        </div>
    </div>

    <section class="secSearch">
        <div class="wrapper">
<?php get_search_form(); ?>
        </div>
    </section>


<?php if ($cat_slug !== ''): ?>
    <section>
        <div class="wrapper">
            <h2 class="secTitle"><span>「<?= $cat->name ?>」に関する記事一覧<?php if ($paged !== 1) echo ' ('.$paged.'/'.$max_pages.')'; ?></span><svg><use xlink:href='#smile'></use></svg></h2>
<?php if (have_posts()): ?>
            <ul class="columnList">
<?php   while (have_posts()): the_post(); ?>
<?php
            $post_cat = get_the_terms(get_the_ID(), 'category');
            $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : '/assets/img/column/fv.jpg';
?>
                <li class="item">
                    <picture>
                        <source type="image/webp" srcset="<?= esc_url($thumb_url); ?>.webp">
                        <img class="pic" src="<?= esc_url($thumb_url); ?>">
                    </picture>
                    <div class="txtBox">
                        <div class="date">公開日：<?php the_time('Y年n月j日'); ?></div>
                        <h3 class="columnTitle"><a class="titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="txt"><?= esc_html(str_replace(PHP_EOL, '', post_custom('overview'))); ?></p>
                        <div class="category"><?= esc_html($post_cat[0]->name); ?></div>
                    </div>
                </li>
<?php   endwhile; ?>
            </ul>
            <div class="pagination">
<?php
    if ($max_pages <= 11) {
        $mid_size = 9;
    } else {
        $mid_size = 8 - min(5, $paged - 1, $max_pages - $paged);
    }
    echo paginate_links([
        'mid_size' => $mid_size,
        'prev_text' => '',
        'next_text' => '',
    ]);
?>
            </div>
<?php else: ?>
            <p class="nothing">記事がありません</p>
<?php endif; ?>
        </div>
    </section>
<?php endif; ?>


    <section>
        <div class="wrapper">
            <h2 class="secTitle"><span>テーマから探す</span><svg><use xlink:href='#smile'></use></svg></h2>
            <ul class="categoryList">
                <?php foreach( $categories as $category ) : ?>
                    <li>
                        <!--取得したIDを使用し、get_category_linkでリンクを取得-->
                        <a href="<?php echo get_category_link( $category->term_id ); ?>">
                            <!--カテゴリ名を表示-->
                            <?php echo $category->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

</main>

<?php include(__DIR__."/../../../../include/footer.php"); ?>

</div><!-- /.bodyWrapper -->
<?php get_footer(); ?>
</body>
</html>
