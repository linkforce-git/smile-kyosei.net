<?php
    $mal_JP = ['overbite' => '出っ歯', 'underbite' => '受け口', 'midline-shift' => '中心のズレ', 'crowding' => 'デコボコ歯', 'deepbite' => '深い噛み合わせ',
                'openbite' => '前歯が閉じない', 'spacing' => 'すきっ歯', 'edge-to-edge' => '前歯がぶつかる', 'bimaxillary-protrusion' => '口ゴボ', 'crossbite' => '噛み合わせのズレ'];
    $caseCat_EN = $caseCat_JP = '';
    if (isset($_GET['mal']) && isset($mal_JP[$_GET['mal']])) {
        $caseCat_EN = $_GET['mal'];
        $caseCat_JP = $mal_JP[$caseCat_EN];
        $caseCat[$caseCat_EN] = true;
    }
    if (isset($_GET['page'])) $casePage = (int) $_GET['page'];

    $title = ($caseCat_JP ? '「'.$caseCat_JP.'」の矯正' : '矯正治療の').'症例写真と治療期間・費用｜佐賀スマイル髙城歯科';
    $description = ($caseCat_JP ? '「'.$caseCat_JP.'」' : '出っ歯・デコボコ歯（叢生・乱杭）・すきっ歯など、様々な不正咬合').'の矯正症例写真をご紹介します。';
    $canonical = 'https://www.smileshika.net/smile_ortho/case/'.($caseCat_EN ? '?mal='.$caseCat_EN : '');
    include(__DIR__."/../../include/head_link.php");
?>
<script type="text/javascript">
    let opened_menu = ['menu-guide_open', 'orthodontics_open'];
    let current_menu = ['menu-ortho_case'];
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "矯正歯科TOP",
        "item": "https://www.smileshika.net/smile_ortho/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "矯正症例写真",
        "item": "https://www.smileshika.net/smile_ortho/case/"
<?php if ($caseCat_JP): ?>
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "<?= $caseCat_JP ?>",
        "item": "https://www.smileshika.net/smile_ortho/case/?mal=<?= $caseCat_EN ?>"
<?php endif; ?>
    }]
}
</script>
</head>
<body id="ortho_case" class="ortho">
<div class="bodyWrapper">

<?php include(__DIR__."/../../include/header.php"); ?>

<main>
    <section>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/smile_ortho/">矯正歯科TOP</a></li>
<?php if ($caseCat_JP): ?>
                <li><a href="/smile_ortho/case/">矯正症例写真</a></li>
                <li><?= $caseCat_JP ?></li>
<?php else: ?>
                <li>矯正症例写真</li>
<?php endif; ?>
            </ol>
        </nav>
        <div class="h1a">
            <picture class="h1bg">
                <source type="image/webp" srcset="/assets/img/orthodontics/h_case.jpg.webp">
                <img src="/assets/img/orthodontics/h_case.jpg" alt="">
            </picture>
            <div class="en">CASE</div>
            <h1 class="ttl">矯正症例写真</h1>
        </div>
        <label class="btn_search" for="case_search_open">歯並びの種類で絞り込む</label>
        <div class="wrapper">
            <h2 class="h3a"><?= ($caseCat_JP ? '「'.$caseCat_JP.'」' : '全て') ?>の症例写真</h2>

<?php include(__DIR__."/archive/caseList.php"); ?>

<?php if ($caseCount > 0): ?>
            <div class="pager">
<?php
        $maxPage = (int)ceil((string)($caseCount / $caseLimit));
        if ($casePage == 1 || $casePage == $maxPage) {
            $pagerRange = 4;
        } elseif ($casePage == 2 || $casePage == $maxPage - 1) {
            $pagerRange = 3;
        } else {
            $pagerRange = 2;
        }
        function createParam($page) {
            global $caseCat_EN;
            if ($page == 1) {
                return ($caseCat_EN ? '?mal='.$caseCat_EN : '');
            } else {
                return '?'.($caseCat_EN ? 'mal='.$caseCat_EN.'&amp;' : '').'page='.$page;
            }
        }
?>
<?php   if ($casePage > 1): ?>
                <a class="prev" href="/smile_ortho/case/<?= createParam($casePage - 1) ?>"></a>
<?php   else: ?>
                <span class="prev inactive"></span>
<?php   endif; ?>

<?php   for ($pageNum = 1; $pageNum <= $maxPage; $pageNum++):
            if ($pageNum >= $casePage - $pagerRange && $pageNum <= $casePage + $pagerRange):
                if ($pageNum != $casePage): ?>
                <a class="num" href="/smile_ortho/case/<?= createParam($pageNum) ?>"><?= $pageNum ?></a>
<?php           else: ?>
                <span class="num current"><?= $pageNum ?></span>
<?php           endif; ?>
<?php       endif; ?>
<?php   endfor; ?>

<?php   if ($casePage < $maxPage): ?>
                <a class="next" href="/smile_ortho/case/<?= createParam($casePage + 1) ?>"></a>
<?php   else: ?>
                <span class="next inactive"></span>
<?php   endif; ?>
            </div>
<?php endif; ?>


<?php 
// 不正咬合に応じたバナーを表示
include(__DIR__."/../../include/ortho_banner.php");
?>
        </div>
    </section>



<?php include(__DIR__."/../../include/ortho_footer_nav.php"); ?>
</main>

<input type="checkbox" id="case_search_open">
<div class="search_popup">
    <label class="search_bg" for="case_search_open"></label>
    <label class="search_close" for="case_search_open"></label>
    <div class="search_popup_inner">
        <ul class="search_list">
            <li><a class="item<?= ($caseCat_EN === 'overbite' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=overbite"><img src="/assets/img/orthodontics/malocclusion/mal1_s.png" alt="" width="146" height="110"><div class="ttl">出っ歯</div><div class="sub">（上顎前突）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'underbite' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=underbite"><img src="/assets/img/orthodontics/malocclusion/mal2_s.png" alt="" width="146" height="110"><div class="ttl">受け口</div><div class="sub">（下顎前突）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'midline-shift' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=midline-shift"><img src="/assets/img/orthodontics/malocclusion/mal3_s.png" alt="" width="146" height="110"><div class="ttl">中心のズレ</div><div class="sub">（正中偏位）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'crowding' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=crowding"><img src="/assets/img/orthodontics/malocclusion/mal4_s.png" alt="" width="146" height="110"><div class="ttl">デコボコ歯</div><div class="sub">（叢生・乱杭歯）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'deepbite' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=deepbite"><img src="/assets/img/orthodontics/malocclusion/mal5_s.png" alt="" width="146" height="110"><div class="ttl">深い噛み合わせ</div><div class="sub">（過蓋咬合）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'openbite' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=openbite"><img src="/assets/img/orthodontics/malocclusion/mal6_s.png" alt="" width="146" height="110"><div class="ttl">前歯が閉じない</div><div class="sub">（開咬）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'spacing' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=spacing"><img src="/assets/img/orthodontics/malocclusion/mal7_s.png" alt="" width="146" height="110"><div class="ttl">すきっ歯</div><div class="sub">（空隙歯列）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'edge-to-edge' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=edge-to-edge"><img src="/assets/img/orthodontics/malocclusion/mal8_s.png" alt="" width="146" height="110"><div class="ttl">前歯がぶつかる</div><div class="sub">（切端咬合）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'crossbite' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=crossbite"><img src="/assets/img/orthodontics/malocclusion/mal10_s.png" alt="" width="146" height="110"><div class="ttl">噛み合わせのズレ</div><div class="sub">（交叉咬合）</div></a></li>
            <li><a class="item<?= ($caseCat_EN === 'bimaxillary-protrusion' ? ' current' : '') ?>" href="/smile_ortho/case/?mal=bimaxillary-protrusion"><img src="/assets/img/orthodontics/malocclusion/mal9_s.png" alt="" width="146" height="110"><div class="ttl">口ゴボ</div><div class="sub">（上下顎前突）</div></a></li>
        </ul>
    </div>
</div>

<?php include(__DIR__."/../../include/footer.php"); ?>

</div><!-- /.bodyWrapper -->
</body>
</html>
