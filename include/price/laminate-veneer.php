<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_laminate-veneer_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_laminate-veneer" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_laminate-veneer_open">
                                <span class="txt">ラミネートべニア治療の費用<span class="note">（@1歯）</span></span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <div class="bgBox detail">
                                    <p class="txt">ラミネートべニア治療の費用は、1歯あたり60,000円～218,000円です。選択する素材により料金は異なります。</p>
                                    <div class="col">
                                        <div class="bgBox bg1">
                                            <p class="cap">ラミネートべニアの素材選択肢</p>
                                            <ul class="material">
                                                <li>
                                                    <img src="/assets/img/price/4-1.svg">
                                                    <dl>
                                                        <dt><b>被せ物</b>（上部構造）…</dt>
                                                        <dd>ジルコニアセラミック（ディスクグラデーション）or<br>ジルコニアセラミック（ステイン法）or<br>ジルコニアセラミック（レイヤリング法）</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bgBox priceListBox">
                                            <p class="cap">選択素材別の料金一覧</p>
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>ジルコニアセラミック（ディスクグラデーション）</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">60,000</span><span class="yen">円</span><span class="tax">(税込)</span>
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
                                                            <span class="num">110,000</span><span class="yen">円</span><span class="tax">(税込)</span>
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
                                                            <span class="num">218,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_laminate-veneer_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
