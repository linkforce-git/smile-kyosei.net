<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_ceramic-correction_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_ceramic-correction" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_ceramic-correction_open">
                                <span class="txt">セラミック矯正の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <div class="bgBox detail">
                                    <p class="txt">セラミック矯正の治療費は、上顎／下顎いずれか6本で一式360,000円～1,308,000円です。被せ物の素材により料金が変わります。</p>
                                    <div class="bgBox priceListBox">
                                        <p class="cap">被せ物の素材別セラミック矯正の料金</p>
                                        <ul class="priceList">
                                            <li>
                                                <div class="code">A</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>ジルコニアセラミック（ディスクグラデーション）</b></div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">360,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">B</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>ジルコニアセラミック（ステイン法）</b></div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">660,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">C</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>ジルコニアセラミック（レイヤリング法）</b></div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">1,308,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="txt">セラミック矯正で用いる被せ物の土台は、当院で選択できる素材のうち最も美しい「ファイバーコア」を使用します。また治療中の仮歯はレジンとなります。（別料金でセラミックの仮歯をご用意することもできます。ご相談ください。）</p>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_ceramic-correction_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
