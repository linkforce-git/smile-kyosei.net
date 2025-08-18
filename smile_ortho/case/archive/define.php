<?php
    define('CASE_CAT_DEFAULT', ['overbite' => true, 'underbite' => true, 'midline-shift' => true, 'crowding' => true, 'deepbite' => true,
                           'openbite' => true, 'spacing' => true, 'edge-to-edge' => true, 'bimaxillary-protrusion' => true, 'crossbite' => true]);
    define('CASE_NOTE_BASIC', '費用補足：<br>別途診察料3,500円と事前シミュレーション料18,500円が必要です。<br>リスク：<br>マウスピース装着による不快感・痛み、歯根吸収等の副作用があります。矯正後に後戻りすることがあります。');

    function in_page() {
        global $caseCount, $caseLimit, $casePage;
        $caseCount++;
        if ($caseLimit * ($casePage - 1) < $caseCount && $caseCount <= $caseLimit * $casePage) {
if( ( $caseCount % 10 ) == 6 ) {
// 不正咬合に応じたバナーを表示
include(__DIR__."/../../../include/ortho_banner.php");
}
            return true;
        } else {
            return false;
        }
    }

    function be_af_pic($setup_ref_id) {
        return '<div class="pic">
                    <picture class="be">
                        <source type="image/webp" srcset="/assets/img/orthodontics/case/'.$setup_ref_id.'_be.jpg.webp">
                        <img src="/assets/img/orthodontics/case/'.$setup_ref_id.'_be.jpg" alt="">
                    </picture>
                    <picture class="af">
                        <source type="image/webp" srcset="/assets/img/orthodontics/case/'.$setup_ref_id.'_af.jpg.webp">
                        <img src="/assets/img/orthodontics/case/'.$setup_ref_id.'_af.jpg" alt="">
                    </picture>
                </div>';
    }
?>
