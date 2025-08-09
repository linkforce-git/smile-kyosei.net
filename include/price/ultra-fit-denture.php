<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_ultra-fit-denture_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_ultra-fit-denture" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_ultra-fit-denture_open">
                                <span class="txt">ウルトラフィットデンチャー（総入れ歯）の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt">ウルトラフィットデンチャーの製作費は、以下<span class="color1">❶</span><span class="color2">❷</span>の合計金額で決定します。</p>
                                <div class="bgBox detail">
                                    <dl class="outline">
                                        <dt class="color1">❶初診料</dt>
                                        <dd>検査料として3,500円。<strong>カウンセリングのみの場合は無料。</strong></dd>
                                        <dt class="color2">❷デンチャーの本体料金</dt>
                                        <dd>片顎・両顎により異なる。1,100,000円~2,200,000円</dd>
                                    </dl>
                                    <div class="col">
                                        <div class="bgBox priceListBox">
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>片顎</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row strikethrough"><span class="cat">一式：</span><span class="num">1,100,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice discount">
                                                            <div class="percentage"><span>52<span class="per">%</span><br>OFF</span></div>
                                                            <div>
                                                                <div class="cat">期間限定価格</div>
                                                                <div><span class="num">520,000</span><span class="yen">円</span><span class="tax">(税込)</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>全顎</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row strikethrough"><span class="cat">一式：</span><span class="num">2,200,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice discount">
                                                            <div class="percentage"><span>55<span class="per">%</span><br>OFF</span></div>
                                                            <div>
                                                                <div class="cat">期間限定価格</div>
                                                                <div><span class="num">980,000</span><span class="yen">円</span><span class="tax">(税込)</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span></span></div>
                                </div>
                                <div class="col">
                                    <div class="bgBox simple">
                                        <p><b>総額：<br>1,103,500円～2,203,500円</b></p>
                                    </div>
                                </div>

                                <div class="bgBox detail option">
                                    <p class="ttl">ジルコニア義歯オプション</p>
                                    <div class="col">
                                        <div class="bgBox priceListBox">
                                            <p class="cap">片顎の料金</p>
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>レイヤリング法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">1,440,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>ステイン法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">730,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>ディスクグラデーション法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">400,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="bgBox priceListBox">
                                            <p class="cap">両顎の費用</p>
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>レイヤリング法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">2,880,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>ステイン法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">1,460,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>ディスクグラデーション法</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">800,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_ultra-fit-denture_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
