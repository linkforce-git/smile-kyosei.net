<?php
    // ボタンのリンク先判定用の変数
    if (!isset($column_mouthpiece_btn_type)) $column_mouthpiece_btn_type = '';
?>
<div class="commentWrap">
    <img class="logo" src="/assets/img/orthodontics/logo_w.png" alt="スマイル髙城歯科">
    <div class="comment">
        <h3 class="balloon">佐賀でマウスピース矯正なら当院にご相談ください</h3>
        <div class="picGrp">
            <picture class="portrait">
                <source type="image/webp" srcset="/assets/img/orthodontics/portrait.jpg.webp">
                <img src="/assets/img/orthodontics/portrait.jpg" alt="">
            </picture>
            <div class="job">院長</div>
            <div class="name">髙城秀典</div>
        </div>
    </div>
    <div class="gap30">
        <div class="smileRecordWrap inner">
            <img src="/assets/img/orthodontics/clearcorrect/smile_record/record.svg" alt="クリアコレクト マウスピース矯正 症例数全国3位（九州1位）年間相談者数600人">
            <div class="plaque">
                <picture>
                    <source type="image/webp" srcset="/assets/img/orthodontics/clearcorrect/smile_record/plaque.png.webp">
                    <img src="/assets/img/orthodontics/clearcorrect/smile_record/plaque.png" alt="" width="228" height="260">
                </picture>
            </div>
        </div>
        <p class="txta">はじめまして。スマイル髙城歯科の髙城です。<br>当院は佐賀市にあるマウスピース矯正専門クリニックです。世界NO.2の症例数を誇るクリアコレクト矯正において、全国NO.3、九州NO.1の臨床経験を有する経験豊富な矯正歯科です。近隣でマウスピース矯正をご検討の方はぜひご相談ください。</p>
<?php if ($column_mouthpiece_btn_type === 'maeba'): ?>
        <a class="btna" href="/orthodontics/plan_maeba?attr=plan"><div class="txt">前歯・出っ歯矯正<br>（19.8万円~）</div><div class="arw"></div></a>
<?php else: ?>
        <a class="btna" href="/orthodontics/"><div class="txt">矯正歯科トップへ</div><div class="arw"></div></a>
<?php endif; ?>
    </div>
</div>


<dl class="case">
    <div class="imgBox">
        <dt>マウスピース矯正 症例写真</dt>
        <dd>
            <div class="baPair">
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7105_be.jpg.webp">
                        <img src="/assets/img/column/case/7105_be.jpg">
                    </picture>
                    <div class="txt bef">Before</div>
                </div>
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7105_af.jpg.webp">
                        <img src="/assets/img/column/case/7105_af.jpg">
                    </picture>
                    <div class="txt aft">After</div>
                </div>
                <svg class="arw"><use xlink:href='#b_a'></use></svg>
            </div>
            <div class="baPair">
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/6920_be.jpg.webp">
                        <img src="/assets/img/column/case/6920_be.jpg">
                    </picture>
                    <div class="txt bef">Before</div>
                </div>
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/6920_af.jpg.webp">
                        <img src="/assets/img/column/case/6920_af.jpg">
                    </picture>
                    <div class="txt aft">After</div>
                </div>
                <svg class="arw"><use xlink:href='#b_a'></use></svg>
            </div>
            <div class="baPair">
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7265_be.jpg.webp">
                        <img src="/assets/img/column/case/7265_be.jpg">
                    </picture>
                    <div class="txt bef">Before</div>
                </div>
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7265_af.jpg.webp">
                        <img src="/assets/img/column/case/7265_af.jpg">
                    </picture>
                    <div class="txt aft">After</div>
                </div>
                <svg class="arw"><use xlink:href='#b_a'></use></svg>
            </div>
            <div class="baPair">
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7194_be.jpg.webp">
                        <img src="/assets/img/column/case/7194_be.jpg">
                    </picture>
                    <div class="txt bef">Before</div>
                </div>
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7194_af.jpg.webp">
                        <img src="/assets/img/column/case/7194_af.jpg">
                    </picture>
                    <div class="txt aft">After</div>
                </div>
                <svg class="arw"><use xlink:href='#b_a'></use></svg>
            </div>
            <div class="baPair">
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7036_be.jpg.webp">
                        <img src="/assets/img/column/case/7036_be.jpg">
                    </picture>
                    <div class="txt bef">Before</div>
                </div>
                <div class="pic">
                    <picture>
                        <source type="image/webp" srcset="/assets/img/column/case/7036_af.jpg.webp">
                        <img src="/assets/img/column/case/7036_af.jpg">
                    </picture>
                    <div class="txt aft">After</div>
                </div>
                <svg class="arw"><use xlink:href='#b_a'></use></svg>
            </div>
        </dd>
    </div>
    <div class="txtBox">
        <dt>施術名</dt>
        <dd>マウスピース矯正</dd>
        <dt>治療費用</dt>
        <dd>一式198,000円～738,000円程度</dd>
        <dd class="note">※別途診察料3,500円と事前シミュレーション料18,500円が必要です。</dd>
        <dt>リスク</dt>
        <dd>マウスピース装着による不快感・痛み、歯根吸収等の副作用があります。矯正後に後戻りすることがあります。</dd>
    </div>
</dl>