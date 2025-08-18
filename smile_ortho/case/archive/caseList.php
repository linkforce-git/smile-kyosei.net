<?php
    require_once(__DIR__."/define.php");

    if (!isset($caseCat)) {
        $caseCat = CASE_CAT_DEFAULT;
    } else {
        $caseCat += array_map(fn($cat) => false, CASE_CAT_DEFAULT);
    }

    if (!isset($caseLimit)) $caseLimit = 10;
    if (!isset($casePage)) $casePage = 1;
    $caseCount = 0;
?>
            <ul class="caseList">
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '7188'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <div class="comment">こちらの方は抜歯せず、前歯のみを動かして治療しました</div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7024'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '7265'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">5か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">318,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '7194'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '6918'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '7342'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '7046'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['spacing'] || $caseCat['midline-shift']) && in_page()): $setup_ref_id = '7117'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯・中心のズレ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['openbite'] || $caseCat['crowding']) && in_page()): $setup_ref_id = '6920'; ?>
                <li class="caseBox">
                    <h3 class="ttl">前歯が閉じない・デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crossbite'] && in_page()): $setup_ref_id = '7066'; ?>
                <li class="caseBox">
                    <h3 class="ttl">噛み合わせのズレ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['underbite'] && in_page()): $setup_ref_id = '7036'; ?>
                <li class="caseBox">
                    <h3 class="ttl">受け口</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '7105'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['spacing']) && in_page()): $setup_ref_id = '7181'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯・すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['deepbite'] || $caseCat['overbite']) && in_page()): $setup_ref_id = '7143'; ?>
                <li class="caseBox">
                    <h3 class="ttl">深い噛み合わせ・出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
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
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '6840'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '6949'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '6959'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '7149'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['spacing'] && in_page()): $setup_ref_id = '7380'; ?>
                <li class="caseBox">
                    <h3 class="ttl">すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['underbite'] && in_page()): $setup_ref_id = '7096'; ?>
                <li class="caseBox">
                    <h3 class="ttl">受け口</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['spacing']) && in_page()): $setup_ref_id = '7318'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯・すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">12か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">498,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '6838'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">12か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">498,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '6988'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '7289'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['crowding'] || $caseCat['edge-to-edge']) && in_page()): $setup_ref_id = '7061'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯・前歯がぶつかる</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7116'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['crowding'] || $caseCat['edge-to-edge']) && in_page()): $setup_ref_id = '7352'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯・前歯がぶつかる</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7213'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['overbite'] && in_page()): $setup_ref_id = '7344'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>

<?php if (($caseCat['midline-shift'] || $caseCat['crossbite']) && in_page()): $setup_ref_id = '7027'; ?>
                <li class="caseBox">
                    <h3 class="ttl">中心のズレ・嚙み合わせのズレ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">24か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">748,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7303'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7200'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['spacing']) && in_page()): $setup_ref_id = '7208'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯・すきっ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">21か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">718,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['midline-shift'] || $caseCat['crowding']) && in_page()): $setup_ref_id = '7044'; ?>
                <li class="caseBox">
                    <h3 class="ttl">中心のズレ・デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">21か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">718,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['deepbite']) && in_page()): $setup_ref_id = '6795'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯・深い噛み合わせ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">24か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">748,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['deepbite']) && in_page()): $setup_ref_id = '6794'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯・深い噛み合わせ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">24か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">748,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite'] || $caseCat['bimaxillary-protrusion']) && in_page()): $setup_ref_id = '7046b'; ?>
                <li class="caseBox">
                    <h3 class="ttl">口ゴボ・出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7274'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['deepbite'] ) && in_page()): $setup_ref_id = '7266'; ?>
                <li class="caseBox">
                    <h3 class="ttl">深い噛み合わせ</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">6か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">378,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite']) && in_page()): $setup_ref_id = '7527'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">9か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">468,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if (($caseCat['overbite']) && in_page()): $setup_ref_id = '7293'; ?>
                <li class="caseBox">
                    <h3 class="ttl">出っ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">12か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">498,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7314'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7052'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">24か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">748,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
<?php if ($caseCat['crowding'] && in_page()): $setup_ref_id = '7315'; ?>
                <li class="caseBox">
                    <h3 class="ttl">デコボコ歯</h3>
                    <div class="be_af_unit">
                        <div class="unit_ttl">BEFORE &amp; AFTER</div>
                        <input type="checkbox" id="orthoCase<?= $caseCount ?>" class="be_af_tgl">
                        <?= be_af_pic($setup_ref_id); ?>
                        <label class="be_af_btn" for="orthoCase<?= $caseCount ?>"><span class="txt be">BEFORE</span><span class="txt af">AFTER</span></label>
                    </div>
                    <div class="setup_unit">
                        <div class="unit_ttl">SIMULATION</div>
                        <?php include(__DIR__."/../../setup/simList.php"); ?>
                        <input type="range" class="setupRange">
                    </div>
                    <dl class="gap20">
                        <dt class="h5a">治療プラン（治療期間）：</dt>
                        <dd class="txta">15か月プラン</dd>
                    </dl>
                    <dl class="gap20">
                        <dt class="h5a">治療費用一式：</dt>
                        <dd class="txta">618,000円（モニター価格）</dd>
                    </dl>
                    <div class="noteBox"><?= CASE_NOTE_BASIC ?></div>
                </li>
<?php endif; ?>
            </ul>
<?php if ($caseCount === 0): ?>
            <p class="txta">この症例の写真は準備中です。</p>
<?php endif; ?>
