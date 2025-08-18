<?php
    require_once(__DIR__."/../../../../../smile_ortho/case/archive/define.php");
    $setup_ref_id = '7143';
    $caseCount = 1;
?>
<div class="caseBox">
    <div class="ttl">深い噛み合わせ・出っ歯</div>
    <div class="be_af_unit">
        <div class="unit_ttl">BEFORE &amp; AFTER</div>
        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
        <?= be_af_pic($setup_ref_id); ?>
        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
    </div>
    <div class="setup_unit">
        <div class="unit_ttl">SIMULATION</div>
        <?php include(__DIR__."/../../../../../smile_ortho/setup/simList.php"); ?>
        <input type="range" class="setupRange">
    </div>
    <div class="comment">こちらの方は60歳から治療開始しています。歯列矯正は何歳からでも始められます！</div>
    <dl class="gap20">
        <dt class="h5a">治療プラン（治療期間）：</dt>
        <dd class="txta">9か月プラン</dd>
    </dl>
    <dl class="gap20">
        <dt class="h5a">治療費用一式：</dt>
        <dd class="txta">468,000円（モニター価格）</dd>
    </dl>
    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
</div>
