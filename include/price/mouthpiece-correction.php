<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_mouthpiece-correction_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_mouthpiece-correction" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_mouthpiece-correction_open">
                                <span class="txt">マウスピース矯正の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="ttl">マウスピース矯正の治療費構成</p>
                                <p class="txt">マウスピース矯正に必要な治療費は、以下<span class="color1">❶</span><span class="color2">❷</span><span class="color3">❸</span><span class="color4">❹</span>の合計金額で決定します。</p>
                                <div class="bgBox">
                                    <dl class="outline">
                                        <dt class="color1">❶初診料(検査・診察費)</dt>
                                        <dd>検査料として3,500円。<strong>カウンセリングのみの場合は無料。</strong></dd>
                                        <dt class="color2">❷シミュレーション作成費</dt>
                                        <dd>18,500円</dd>
                                        <dt class="color3">❸診察費(矯正開始後)</dt>
                                        <dd>通院1回につき900円(月1回程度)。</dd>
                                        <dt class="color4">❹治療費用</dt>
                                        <dd>症状により異なる。198,000円～738,000円程度</dd>
                                    </dl>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span>＋<span class="color3">❸</span>＋<span class="color4">❹</span></span></div>
                                </div>
                                <p class="txt">それでは順に個別の費用について説明します。</p>

                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color1"><span class="num"><span>1</span></span><span class="txt">初診料(検査・診察費)</span></h3>
                                    <p class="txt">無料カウンセリングに来院した際、検査・診察を受ける場合は、<b>初診料として3500円</b>をいただいています。カウンセリングだけ受けてお帰りになる場合は無料です。</p>
                                </div>
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color2"><span class="num"><span>2</span></span><span class="txt">シミュレーション作成費</span></h3>
                                    <p class="txt">カウンセリング・診察後、更に検討を進める場合、<b>治療計画の立案と3Dシミュレーションの作成費用として18,500円</b>をいただいています。</p>
                                </div>
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color3"><span class="num"><span>3</span></span><span class="txt">診察費(矯正開始後)</span></h3>
                                    <p class="txt">進捗チェック・各種処置・虫歯 ／ 歯周病チェックにかかる諸経費として、1回につき900円いただいています。通院頻度は月1回程度です。</p>
                                </div>
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color4"><span class="num"><span>4</span></span><span class="txt">治療費用</span></h3>
                                    <p class="txt">マウスピース矯正の治療費用目安は<b>一式198,000円～738,000円程度</b>です（症状により異なります）。</p>
                                    <div class="col">
                                        <div class="bgBox priceListBox">
                                            <p class="cap">❶前歯20本矯正の料金例</p>
                                            <img src="/assets/img/price/5-1.svg">
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>3か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">【モニター】一式：</span><br><span class="num">198,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">10,400</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回10,601円)</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>6か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">一式：</span><span class="num">398,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">20,900</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回21,406円)</span></span>
                                                        </div>
                                                        <div class="choicePrice monitor">→モニター<span class="num">20,000</span><span class="yen">円</span>割引</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>12か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">一式：</span><span class="num">598,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">31,400</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回32,211円)</span></span>
                                                        </div>
                                                        <div class="choicePrice monitor">→モニター<span class="num">100,000</span><span class="yen">円</span>割引</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bgBox priceListBox">
                                            <p class="cap">❷全顎矯正の料金例</p>
                                            <img src="/assets/img/price/5-2.svg">
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>3か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">【モニター】一式：</span><br><span class="num">198,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">10,400</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回10,601円)</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>6か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">一式：</span><span class="num">398,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">20,900</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回21,406円)</span></span>
                                                        </div>
                                                        <div class="choicePrice monitor">→モニター<span class="num">20,000</span><span class="yen">円</span>割引</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>12か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">一式：</span><span class="num">598,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">31,400</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回32,211円)</span></span>
                                                        </div>
                                                        <div class="choicePrice monitor">→モニター<span class="num">100,000</span><span class="yen">円</span>割引</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">D</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><b>18か月プラン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">一式：</span><span class="num">738,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><br><span class="row normal"><span class="cat">デンタルクレジット分割例：</span><br><span class="hp">20回払 月々</span><span class="num">38,800</span><span class="yen">円～</span><span class="tax">(税込)</span> <span class="first">(初回38,825円)</span></span>
                                                        </div>
                                                        <div class="choicePrice monitor">→モニター<span class="num">90,000</span><span class="yen">円</span>割引</div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a class="btn_campaign" href="/orthodontics/monitor/" target="_blank"><span>マウスピース矯正モニター募集中!<br>最大 100,000円 OFF</span></a>
                                        </div>
                                    </div>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_mouthpiece-correction_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
