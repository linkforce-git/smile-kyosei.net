<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
if( ! isset( $pricePage ) ) $pricePage = false; // 治療費案内ページの場合true
?>
                    <input type="checkbox" id="price_aesthetic-crown_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_aesthetic-crown" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_aesthetic-crown_open">
                                <span class="txt">審美クラウン治療の費用<span class="note">(@1歯)</span></span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="ttl">審美クラウン(被せ物)治療の治療費構成</p>
                                <p class="txt">審美クラウン治療の費用は、以下<span class="color1">❶</span><span class="color2">❷</span>の合計金額で決定します。（別途、虫歯・歯周病等の治療費が必要になる場合があります。）</p>
                                <div class="bgBox">
                                    <dl class="outline">
                                        <dt class="color1">❶審美クラウン治療の本体料金</dt>
                                        <dd>（選ぶ素材によって変動。60,000円～278,000円）</dd>
                                        <dt class="color2">❷仮歯費用</dt>
                                        <dd>選ぶ素材により異なる。無料～33,000円</dd>
                                        <dd class="note">※上記は1本あたりの費用で、仮歯は2本分費用がかかります。</dd>
                                    </dl>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷×最大2本分</span></span></div>
                                </div>
                                <div class="col">
                                    <div class="bgBox simple">
                                        <p>総額：60,000円～311,000円<br>（1本あたり）</p>
                                    </div>
                                    <div class="bgBox simple">
                                        <p>月額：約8,600円～<br>（1本あたり）</p>
                                    </div>
                                </div>
                                <p class="txt">それでは順に個別の費用について説明します。</p>
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color1"><span class="num"><span>1</span></span><span class="txt">審美クラウン治療の本体料金</span></h3>
                                    <p class="txt">審美クラウン治療の本体料金（1歯あたり）は、治療に用いる「被せ物」と「土台」にどんな素材を選択するかにより変わってきます。</p>
                                    <div class="col">
                                        <div class="bgBox bg1">
                                            <p class="cap">治療に用いる「被せ物」と「土台」の選択肢</p>
                                            <ul class="material">
                                                <li>
                                                    <img src="/assets/img/price/2-1.svg">
                                                    <dl>
                                                        <dt><b>被せ物</b>（上部構造）…</dt>
                                                        <dd>ジルコニアセラミック（ディスクグラデーション）or<br> ジルコニアセラミック（ステイン法）or<br> ジルコニアセラミック（レイヤリング法）</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <img src="/assets/img/price/2-2.svg">
                                                    <dl>
                                                        <dt><b>土台</b>（コア）…</dt>
                                                        <dd>ゴールドコア or ファイバーコア</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                            <p class="note">※土台が必要ない場合や、現状の差し歯で使っている土台を流用できる場合、土台費用はかかりません。</p>
                                            <ul class="popupTrigger">
                                                <li><label for="mat1_open">※ 被せ物素材の違いについての解説はこちら</label></li>
                                                <li><label for="mat3_open">※ 土台素材の違いについての解説はこちら</label></li>
                                            </ul>
                                        </div>
                                        <div class="bgBox priceListBox">
                                            <p class="cap">選択素材別の料金一覧</p>
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ディスクグラデーション）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>なし</b></div>
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
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ステイン法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>なし</b></div>
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
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（レイヤリング法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>なし</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">218,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">D</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ディスクグラデーション）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ゴールドコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">前歯：</span><span class="num">100,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">小臼歯：</span><span class="num">110,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">大臼歯：</span><span class="num">120,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">E</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ステイン法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ゴールドコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">前歯：</span><span class="num">150,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">小臼歯：</span><span class="num">160,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">大臼歯：</span><span class="num">170,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">F</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（レイヤリング法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ゴールドコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">前歯：</span><span class="num">258,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">小臼歯：</span><span class="num">268,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">大臼歯：</span><span class="num">278,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">G</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ディスクグラデーション）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ファイバーコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">80,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">H</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ステイン法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ファイバーコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">130,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">I</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（レイヤリング法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ファイバーコア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">238,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color2"><span class="num"><span>2</span></span><span class="txt">仮歯費用</span></h3>
                                    <p class="txt">審美クラウン治療では、治療完了までに仮歯を2回作る必要があります。この際おつくりする仮歯の費用は選択する素材によって変わってきます。（仮歯は来院3回目の土台セット時に必要になります）</p>
                                    <div class="bgBox priceListBox">
                                        <p class="cap">仮歯の料金一覧（仮歯1本あたり）</p>
                                        <ul class="priceList">
                                            <li>
                                                <div class="code">A</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><span class="tag">仮歯</span><b>レジン</b></div><div class="note">（白いプラスチック）</div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">0</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">B</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><span class="tag">仮歯</span><b>ジルコニアセラミック</b></div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">33,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="ttl">別途虫歯などの治療費がかかる場合があります</p>
                                <p class="txt">周囲に虫歯や歯周病があり治療が必要な場合、所定の保険費用がかかります。費用はお口の状態によって変わります。カウンセリング時にご相談ください。</p>
                                <p class="txt">また、銀歯等現在お使いの被せ物の下に虫歯が見つかることもよくあることで、抜髄（神経を抜く治療）や感染根管治療（神経がない歯の根の先におこっている炎症の治療）」が必要になることもあります。当院では「抜髄」「感染根管治療」のうち、より丁寧な処置が必要となる症例の場合は自費治療となる場合があります（保険を使えない場合があります。）。その際の費用については<a href="<?= $pricePage ? '' : '/price' ?>#price_precision-root-canal-treatment">こちら</a>をご確認ください。</p>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_aesthetic-crown_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
