<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_beauty-denture_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_beauty-denture" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_beauty-denture_open">
                                <span class="txt">美デンチャー（部分入れ歯）の費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt pink">美デンチャーの製作費は、以下<span class="color1">❶</span><span class="color2">❷</span>の合計金額で決定します。</p>
                                <div class="bgBox detail">
                                    <dl class="outline">
                                        <dt class="color1">❶初診料</dt>
                                        <dd>検査料として3,500円。<strong>カウンセリングのみの場合は無料。</strong></dd>
                                        <dt class="color2">❷デンチャーの本体料金</dt>
                                        <dd>義歯の本数・素材のプランにより異なる。</dd>
                                    </dl>
                                    <div class="col">
                                        <div class="bgBox priceListBox">
                                            <ul class="priceList">
                                                <li>
                                                    <div class="code">A</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="b2">ディスクグラデーション</span></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">1本義歯：</span><span class="num">200,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">2本義歯：</span><span class="num">210,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">3本義歯：</span><span class="num">220,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <p class="note">以降は1本増えるごとにプラス<br>1万円となります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">B</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="b2">ステイン法</span></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">1本義歯：</span><span class="num">250,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">2本義歯：</span><span class="num">280,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">3本義歯：</span><span class="num">310,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <p class="note">以降は1本増えるごとにプラス<br>3万円となります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="code">C</div>
                                                    <div class="txtBox">
                                                        <div class="choice">
                                                            <div class="unit"><span class="b2">レイヤリング法</span></div>
                                                        </div>
                                                        <div class="choicePrice">
                                                            <span class="row"><span class="cat">1本義歯：</span><span class="num">350,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">2本義歯：</span><span class="num">400,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <span class="row"><span class="cat">3本義歯：</span><span class="num">450,000</span><span class="yen">円</span><span class="tax">(税込)</span></span>
                                                            <p class="note">以降は1本増えるごとにプラス<br>5万円となります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="total"><span class="row">治療費＝</span><span class="row"><span class="color1">❶</span>＋<span class="color2">❷</span></span></div>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_beauty-denture_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
