<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_teeth-cleaning_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_teeth-cleaning" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_teeth-cleaning_open">
                                <span class="txt">クリーニングの費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt">歯のクリーニング費用は、1回あたり4,000円です。</p>
                                <div class="bgBox simple">
                                    <p>歯のクリーニング費用<br>1回あたり 4,000円</p>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_teeth-cleaning_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
