<?php 
$ortho_msg = '';
$caseCat_EN = (isset($_GET['mal'])) ? $_GET['mal'] : '';


if (isset($caseCat_EN)) {
    switch($caseCat_EN) {
        case 'overbite':
            $ortho_msg = '出っ歯（上顎前突）選択時の';
            break;
        case 'underbite':
            $ortho_msg = '受け口（下顎前突）選択時の';
            break;
        case 'midline-shift':
            $ortho_msg = '中心のズレ（正中偏位）選択時の';
            break;
        case 'crowding':
            $ortho_msg = 'デコボコ歯（叢生・乱杭歯）選択時の';
            break;
        case 'deepbite':
            $ortho_msg = '深い噛み合わせ（過蓋咬合）選択時の';
            break;
        case 'openbite':
            $ortho_msg = '前歯が閉じない（開咬）選択時の';
            break;
        case 'spacing':
            $ortho_msg = 'すきっ歯（空隙歯列）選択時の';
            break;
        case 'edge-to-edge':
            $ortho_msg = '前歯がぶつかる（切端咬合）選択時の';
            break;
        case 'crossbite':
            $ortho_msg = '噛み合わせのズレ（交叉咬合）選択時の';
            break;
        case 'bimaxillary-protrusion':
            $ortho_msg = '口ゴボ（上下顎前突）選択時の';
            break;
        default:
            $ortho_msg = '絞り込みしていないときの';
            break;
    }
} else {
    $ortho_msg = '絞り込みしていないときの';
}
?>

<div class="banner" style="padding: 50px 0;"><?= $ortho_msg ?>バナー表示</div>
