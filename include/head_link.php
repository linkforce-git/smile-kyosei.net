<?php
    if ($_SERVER["HTTP_HOST"] === "www.smileshika.net") {
        $gtm_id = "GTM-KMHS5TQ"; // 本番
    } else {
        $gtm_id = "GTM-5TPFMRG"; // テスト
    }

    // フォームのCSRF対策
    session_start();
    if (!isset($_SESSION['csrf_token'])) {
        $token_byte = openssl_random_pseudo_bytes(16);
        $_SESSION['csrf_token'] = bin2hex($token_byte);
    }
    $csrf_token = $_SESSION['csrf_token'];

    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // ロゴ上のテキスト
    if (!isset($logo_txt)) {
        $logo_txt = '佐賀の矯正歯科・インプラントなら';
        // if (str_starts_with($url_path, '/orthodontics/')) {
        //     // 矯正カテゴリのページの場合
        //     $logo_txt = '佐賀で矯正歯科なら';
        // }
    }
    // ロゴのリンク先
    if (!isset($logo_url)) {
        $logo_url = '/';
        if (preg_match('#^/orthodontics/.+$#', $url_path)) {
            // 矯正カテゴリの下層ページの場合
            $logo_url = '/orthodontics/';
        } elseif (preg_match('#^/child-orthodontics/.+$#', $url_path)) {
            // 小児矯正カテゴリの下層ページの場合
            $logo_url = '/child-orthodontics/';
        }
    }
?>
<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?= $title ?></title>
<?php if (!empty($description)): ?>
<meta name="description" content="<?= $description ?>">
<?php endif; ?>
<?php if (!empty($thumbnail)): ?>
<meta name="thumbnail" content="<?= $thumbnail ?>">
<?php endif; ?>
<meta name="facebook-domain-verification" content="pf2bujtyvx6ukhzuohrfv5kooxbah1" />

<?php if (!empty($canonical)): ?>
<link rel="canonical" href="<?= $canonical ?>">
<?php endif; ?>
<link rel="icon" href="/favicon.ico">
<link rel="icon" href="/assets/img/logo.svg" type="image/svg+xml">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanmp_s.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@400;600&family=Lato&family=Marcellus&family=Outfit:wght@100..900&family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/js/slick-1.8.1/slick.css"/>
<link rel="stylesheet" href="/assets/js/slick-1.8.1/slick-theme.css"/>
<link rel="stylesheet" href="/assets/css/all.min.css?date=20250530">
<link href="/assets/js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
<link href="/assets/js/jquery-ui-1.12.1/jquery-ui.structure.min.css" rel="stylesheet">
<link href="/assets/js/jquery-ui-1.12.1/jquery-ui.theme.min.css" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?= $gtm_id ?>');</script>
<!-- End Google Tag Manager -->
