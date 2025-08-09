<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_precision-root-canal-treatment_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_precision-root-canal-treatment" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_precision-root-canal-treatment_open">
                                <span class="txt">精密根管治療の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt">231,000円～479,000円です。以下<span class="color1">❶</span><span class="color2">❷</span><span class="color3">❸</span>の合計金額で決まります。</p>
                                <div class="bgBox">
                                    <dl class="outline">
                                        <dt class="color1">❶初診料（検査・診察）</dt>
                                        <dd>3,000円程度（保険診療）</dd>
                                        <dt class="color2">❷精密根管治療の本体料金</dt>
                                        <dd>前歯：148,000円</dd>
                                        <dd>小臼歯：178,000円</dd>
                                        <dd>大臼歯：198,000円</dd>
                                        <dt class="color3">❸被せ物・土台(コア)費用</dt>
                                        <dd>選ぶ素材によって変動。80,000円～278,000円</dd>
                                    </dl>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span>＋<span class="color3">❸</span></span></div>
                                </div>
                                <div class="col">
                                    <div class="bgBox simple">
                                        <p>定価総額：<br>231,000円～479,000円</p>
                                    </div>
                                    <div class="bgBox simple">
                                        <p>月額：6,700円～</p>
                                        <div class="note">※初診料はローンでお支払いできません</div>
                                    </div>
                                </div>
                                <h3 class="ttl">モニター価格のご案内</h3>
                                <p class="txt">当院では、症例情報の外部公開や、サービス改善のための詳細なアンケート等にご協力いただける治療モニターを募集しています。モニター価格は以下のとおりです。</p>
                                <div class="bgBox">
                                    <dl class="outline">
                                        <dt class="color1">❶初診料（検査・診察）</dt>
                                        <dd>3,000円程度（保険診療）</dd>
                                        <dt class="color2">❷精密根管治療の本体料金</dt>
                                        <dd><strong>前歯：58,000円</strong> （90,000円OFF）</dd>
                                        <dd><strong>小臼歯：68,000円</strong> （110,000円OFF）</dd>
                                        <dd><strong>大臼歯：78,000円</strong> （120,000円OFF）</dd>
                                        <dt class="color3">❸被せ物・土台(コア)費用</dt>
                                        <dd>選ぶ素材によって変動。80,000円～278,000円</dd>
                                    </dl>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span>＋<span class="color3">❸</span></span></div>
                                </div>
                                <div class="col">
                                    <div class="bgBox simple">
                                        <p>モニター総額：<br>141,000円～359,000円</p>
                                    </div>
                                    <div class="bgBox simple">
                                        <p>月額：3,800円～</p>
                                        <div class="note">※初診料はローンでお支払いできません</div>
                                    </div>
                                </div>
                                <p class="txt">モニター希望の方は、フォームよりお申込み時に「精密根管治療（モニター）」を選択してご予約ください。なお、モニター条件等はクリニック来院時にお問い合わせください。</p>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_precision-root-canal-treatment_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
