<?php
// 開閉機能を付ける場合は、開閉フラグをtrueにしてから、本ファイルを呼び出すこと。
if( ! isset( $viewToggle ) ) $viewToggle = false; // 開閉フラグ（true：開閉あり）
?>
                    <input type="checkbox" id="price_aesthetic-inlay_open" class="toggle_open"<?= $viewToggle ? '' : ' checked'; ?>>
                    <div id="price_aesthetic-inlay" class="toggleWrap priceWrap">

<?php if( $viewToggle ): ?>
                        <h2 class="listHead">
                            <label class="listHeadWrap" for="price_aesthetic-inlay_open">
                                <span class="txt">審美インレー治療の費用<span class="note">（@1歯）</span></span><span class="btn_toggle"></span>
                            </label>
                        </h2>
<?php endif; ?>
                        <div class="listBody">
                            <div class="listBodyWrap">
                                <p class="txt">審美インレー治療の費用は、一式48,000円です。<br>※なお当院で選択できるインレー(詰め物)素材はジルコニアセラミックのみとなります。</p>
                                <div class="bgBox simple">
                                    <p>審美インレー治療の料金<br>一式：48,000円</p>
                                </div>
                                <p class="ttl">別途虫歯などの治療費がかかる場合があります</p>
                                <p class="txt">周囲に虫歯や歯周病があり治療が必要な場合、所定の保険費用がかかります。費用はお口の状態によって変わります。カウンセリング時にご相談ください。</p>
<?php if( $viewToggle ): ?>
                                <label class="btn_toggle" for="price_aesthetic-inlay_open"></label>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php
// リセット
$viewToggle = false;
?>
