<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_implant_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_implant" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_implant_open">
                                <span class="txt">インプラント治療の費用<span class="note">（@1歯）</span></span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="ttl">インプラント治療の治療費構成</p>
                                <p class="txt">インプラント治療に必要な治療費は、以下<span class="color1">❶</span><span class="color2">❷</span><span class="color3">❸</span>の合計金額で決定します。（別途、虫歯・歯周病等の治療費が必要になる場合があります。）</p>
                                <div class="bgBox config">
                                    <dl class="outline">
                                        <dt class="color1">❶インプラント治療の本体料金</dt>
                                        <dd>選ぶ素材によって変動。420,000円～828,000円</dd>
                                        <dt class="color2">❷歯槽骨再生治療の費用（必要な場合のみ発生）</dt>
                                        <dd>術式により異なる。33,000円～132,000円</dd>
                                        <dt class="color3">❸仮歯費用</dt>
                                        <dd>選ぶ素材により異なる。無料～33,000円</dd>
                                        <dd class="note">※上記は1本あたりの費用で、仮歯は3本分費用がかかります。</dd>
                                    </dl>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span>＋<span class="color3">❸×最大3本分</span></span></div>
                                </div>
                                <div class="col">
                                    <div class="bgBox simple">
                                        <p>総額：420,000円～993,000円<br>（1本あたり）</p>
                                    </div>
                                    <div class="bgBox simple">
                                        <p>月額：5,700円～<br>（1本あたり）</p>
                                    </div>
                                </div>
                                <p class="txt">それでは順に個別の費用について説明します。</p>

                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color1"><span class="num"><span>1</span></span><span class="txt">インプラント治療の本体料金</span></h3>
                                    <p class="txt">インプラント治療の本体料金（1歯あたり）は、治療に用いる「被せ物」と「土台」にどんな素材を選択するかで変わってきます。</p>
                                    <div class="col">
                                        <div class="bgBox bg1">
                                            <p class="cap">治療に用いるパーツの素材選択肢</p>
                                            <ul class="material">
                                                <li>
                                                    <img src="/assets/img/price/1-1.svg">
                                                    <dl>
                                                        <dt><b>被せ物</b>（上部構造）…</dt>
                                                        <dd>ジルコニアセラミック（ディスクグラデーション） or<br> ジルコニアセラミック（ステイン法）or<br> ジルコニアセラミック（レイヤリング法）</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <img src="/assets/img/price/1-2.svg">
                                                    <dl>
                                                        <dt><b>土台</b>（アバットメント）…</dt>
                                                        <dd>チタン or ジルコニア</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                            <ul class="popupTrigger">
                                                <li><label for="mat1_open">※ 被せ物素材の違いについての解説はこちら</label></li>
                                                <li><label for="mat2_open">※ 土台素材の違いについての解説はこちら</label></li>
                                            </ul>
                                        </div>
                                        <div class="bgBox priceListBox">
                                            <p class="cap">選択素材別の本体料金一覧</p>
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ディスクグラデーション）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>チタン</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">420,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ディスクグラデーション）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ジルコニア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">550,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（ステイン法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ジルコニア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">720,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">D</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="tag">被せ物</span><b>ジルコニアセラミック<br>（レイヤリング法）</b></div>
                                                            <div class="plus"></div>
                                                            <div class="unit"><span class="tag">土台</span><b>ジルコニア</b></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="num">828,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color2"><span class="num"><span>2</span></span><span class="txt">歯槽骨再生治療の費用</span></h3>
                                    <p class="txt">インプラントは「歯槽骨に人工歯根を埋め込む治療」です。歯槽骨に十分な厚みや幅がなければ施術できません。そのような場合は、歯槽骨を増やす「歯槽骨再生治療」をおこなうことになり、別途費用がかかります。</p>
                                    <div class="bgBox priceListBox">
                                        <p class="cap">歯槽骨再生治療の費用（必要な場合のみ発生）</p>
                                        <ul class="priceList">
                                            <li>
                                                <div class="code">A</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>サイナスリフト</b></div><div class="note">※1歯あたり</div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="row"><span class="cat">S</span><span class="num">88,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><span class="row"><span class="cat">M</span><span class="num">132,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">B</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>ソケットリフト</b></div><div class="note">※1歯あたり</div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">33,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">C</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>GBR</b></div><div class="note">（骨誘導再生法）</div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="row"><span class="cat">S</span><span class="num">60,000</span><span class="yen">円</span><span class="tax">(税込)</span></span><span class="row"><span class="cat">M</span><span class="num">80,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="code">D</div>
                                                <div class="txtBox">
                                                    <div class="choice">
                                                        <div class="unit"><b>ソケットプリザベーション</b></div>
                                                    </div>
                                                    <div class="choicePrice">
                                                        <span class="num">33,000</span><span class="yen">円</span><span class="tax">(税込)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="bgBox detail">
                                    <h3 class="priceDetailTtl color3"><span class="num"><span>3</span></span><span class="txt">仮歯費用</span></h3>
                                    <p class="txt">インプラント治療では、治療完了までに仮歯を3回作る必要があります。この際おつくりする仮歯の費用は選択する素材によって変わってきます。（仮歯はインプラントを埋入する一次処置の際に必要になります）</p>
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
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_implant_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
