<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_home-teeth-whitening_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_home-teeth-whitening" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_home-teeth-whitening_open">
                                <span class="txt">ホームホワイトニングの費用</span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="ttl">ホームホワイトニングの治療費構成</p>
                                <p class="txt">ホームホワイトニングとは、当院で作成したマウスピースに専用のジェルを塗布し、自身で装着して歯を白くする治療です。初回治療費は30,000円で、料金にはマウスピース代と専用ジェル代が含まれています。</p>
                                <p class="txt">専用ジェルは1本あたりおよそ1週間分です。初回治療分がなくなった後は、ジェルの追加購入費用のみかかります。必要なジェル本数は目標とする白さにより変わってきます。カウンセリング時に詳しくご説明します。</p>
                                <div class="bgBox simple">
                                    <p>初回治療費（上下顎マウスピース＋専用ジェル4本）<br>一式：30,000円</p>
                                </div>
                                <div class="bgBox simple">
                                    <p>追加ジェル料金<br>1本：1,600円</p>
                                </div>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_home-teeth-whitening_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
