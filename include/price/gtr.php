<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_gtr_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_gtr" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_gtr_open">
                                <span class="txt">GTR（歯周組織再生誘導法）の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt">GTR(歯周組織再生誘導法)の治療は、1歯あたり88,000円です。</p>
                                <div class="bgBox simple">
                                    <p>GTR(歯周組織再生誘導法)の料金<br>1歯あたり 88,000円</p>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_gtr_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
