<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm_id ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="svgfile"></div>

<?php
    $logo_tag = $_SERVER['REQUEST_URI'] === '/' ? 'h1' : 'div';
?>
<header class="top">
    <div class="lineHead">
        <div class="wrapper">
            <a class="logoGrp" href="<?= $logo_url ?>">
                <div>
                    <img class="logo" src="/assets/img/logo.svg">
                </div>
                <<?= $logo_tag ?>>
                    <span class="txt"><?= $logo_txt ?></span>
                    <img class="logo_txt1" src="/assets/img/logo_txt1.svg" alt="スマイル髙城歯科">
                </<?= $logo_tag ?>>
            </a>
            <label class="btn_reserv" for="form_open"><svg><use xlink:href='#reserv'></use></svg><span>ご予約</span></label>
            <label class="btn_menu" for="menu_open"><span></span></label>
        </div>
    </div>
    <input type="checkbox" id="menu_open">
    <nav>
        <div class="menu_ttl">
            <a class="menu_top" href="/"><svg class="icon1"><use xlink:href='#arrow_right'></use></svg><span class="text1">TOP</span></a>
            MENU
            <label class="menu_close" for="menu_open"><svg><use xlink:href='#close'></use></svg></label>
        </div>
        <div class="wrapper">
            <div id="navGrp1" class="navGrp">
                <input type="checkbox" id="menu-price_open" class="submenu_open">
                <label class="navHead1" for="menu-price_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">プラン ・ 料金</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-price-top" class="navHead3 btn_underline" href="/price/">
                                    <span class="text1">プラン・料金 トップ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price-simulator" class="navHead3 btn_underline" href="/price/simulator">
                                    <span class="text1">専用シミュレータ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price-comprehensive" class="navHead3 btn_underline" href="/price/comprehensive">
                                    <span class="text1">マウスピース矯正（全額）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price-partial" class="navHead3 btn_underline" href="/price/partial">
                                    <span class="text1">前歯・出っ歯矯正（部分矯正）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price-monitor" class="navHead3 btn_underline" href="/price/monitor">
                                    <span class="text1">矯正モニター募集</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>

                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp2" class="navGrp">
                <input type="checkbox" id="menu-smile_ortho_open" class="submenu_open">
                <label class="navHead1" for="menu-smile_ortho_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">スマイル式矯正とは？</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-smile_ortho-top" class="navHead3 btn_underline" href="/smile_ortho/">
                                    <span class="text1">スマイル式矯正とは？ トップ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-smile_ortho-price_commitment" class="navHead3 btn_underline" href="/smile_ortho/price_commitment">
                                    <span class="text1">安さの理由</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-smile_ortho-pride" class="navHead3 btn_underline" href="/smile_ortho/pride">
                                    <span class="text1">品質向上へのこだわり</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-smile_ortho-applicable_cases" class="navHead3 btn_underline" href="/smile_ortho/applicable_cases">
                                    <span class="text1">矯正できる歯並び</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-prismile_ortho-case" class="navHead3 btn_underline" href="/smile_ortho/case">
                                    <span class="text1">症例一覧</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-smile_ortho-flow" class="navHead3 btn_underline" href="/smile_ortho/flow">
                                    <span class="text1">矯正開始後の流れ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp3" class="navGrp">
                <a id="menu-clinic" class="navHead1 simple" href="/clinic/">
                    <span class="text1">クリニック一覧</span>
                    <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                </a>
            </div><!-- /.navGrp -->

            <div id="navGrp4" class="navGrp">
                <input type="checkbox" id="menu-knowledge_open" class="submenu_open">
                <label class="navHead1" for="menu-knowledge_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">歯列矯正のイロハ</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-knowledge-top" class="navHead3 btn_underline" href="/knowledge/">
                                    <span class="text1">歯列矯正のイロハ トップ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-principle" class="navHead3 btn_underline" href="/knowledge/principle">
                                    <span class="text1">歯が動く仕組み</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-mouthpiece_type" class="navHead3 btn_underline" href="/knowledge/mouthpiece_type">
                                    <span class="text1">ワイヤーとマウスピースの違い</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-mouthpiece" class="navHead3 btn_underline" href="/knowledge/about_mouthpiece">
                                    <span class="text1">マウスピース矯正とは？</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price" class="navHead3 btn_underline" href="/knowledge/ortho_type">
                                    <span class="text1">マウスピース矯正の種類と違い</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-suresmile" class="navHead3 btn_underline" href="/knowledge/suresmile">
                                    <span class="text1">シュアスマイルとは？</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-period" class="navHead3 btn_underline" href="/knowledge/period">
                                    <span class="text1">マウスピース矯正の治療期間</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-knowledge-risk" class="navHead3 btn_underline" href="/knowledge/risk">
                                    <span class="text1">マウスピース矯正のリスク・副作用</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>

                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->


            <div id="navGrp5" class="navGrp">
                <a id="menu-encyclopedia" class="navHead1 simple" href="/encyclopedia/">
                    <span class="text1">矯正百科事典</span>
                    <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                </a>
            </div><!-- /.navGrp -->

<?php /*
            <div id="navGrp1a" class="navGrp">
                <label class="navHead1" for="indications-guide_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">当院で解消できる悩み</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list line2">
                            <p class="item">
                                <a id="menu-indications-guide" class="navHead3 btn_underline" href="/indications-guide/">
                                    <span class="text1">解消できる悩み<br>TOP（一覧）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-whiten-silver-tooth" class="navHead3 btn_underline" href="/indications-guide/whiten-silver-tooth">
                                    <span class="text1">銀歯を白く<br>したい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-whiten-insurance-postcrown" class="navHead3 btn_underline" href="/indications-guide/whiten-insurance-postcrown">
                                    <span class="text1">保険の差し歯を<br>白くしたい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-gums-around-postcrown-are-darkened" class="navHead3 btn_underline" href="/indications-guide/gums-around-postcrown-are-darkened">
                                    <span class="text1">差し歯を入れた<br>歯茎が黒い</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-base-of-postcrown-is-exposed" class="navHead3 btn_underline" href="/indications-guide/base-of-postcrown-is-exposed">
                                    <span class="text1">差し歯と歯茎の<br>隙間が黒い</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-fix-chipped-tooth" class="navHead3 btn_underline" href="/indications-guide/fix-chipped-tooth">
                                    <span class="text1">欠けた歯を<br>治したい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-recover-missing-tooth" class="navHead3 btn_underline" href="/indications-guide/recover-missing-tooth">
                                    <span class="text1">抜けた歯を<br>治したい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-improve-dentition" class="navHead3 btn_underline" href="/indications-guide/improve-dentition">
                                    <span class="text1">歯並びを<br>改善したい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-shape-teeth-as-ideal" class="navHead3 btn_underline" href="/indications-guide/shape-teeth-as-ideal">
                                    <span class="text1">歯の形を理想<br>どおりにしたい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-whiten-teeth" class="navHead3 btn_underline" href="/indications-guide/whiten-teeth">
                                    <span class="text1">歯を白くしたい</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                            <a id="menu-denervated-tooth-has-discolored" class="navHead3 btn_underline" href="/indications-guide/denervated-tooth-has-discolored">
                                <span class="text1">神経を抜いた歯が変色してきた</span>
                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                            </a>
                            </p>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp2a" class="navGrp">
                <input type="checkbox" id="menu-guide_open" class="submenu_open">
                <label class="navHead1" for="menu-guide_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">治療メニュー</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <div class="column_list">
                                <div class="item">
                                    <input type="checkbox" id="orthodontics_open" class="subnav_open">
                                    <label class="navHead2" for="orthodontics_open">
                                        <img class="icon1" src="/assets/svg/icons/menu1.svg" />
                                        <span class="text1">矯正歯科治療</span>
                                        <span class="iconplus"></span>
                                    </label>
                                    <div class="megamenu2">
                                        <p class="item">
                                            <a id="menu-orthodontics" class="navHead3 btn_underline" href="/orthodontics/">
                                                <span class="text1">矯正歯科トップ</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">矯正治療の基礎知識</div>
                                        <p class="item">
                                            <a id="menu-ortho_principle" class="navHead3 btn_underline" href="/orthodontics/principle">
                                                <span class="text1">歯が動くしくみ</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-ortho_applicable_cases" class="navHead3 btn_underline" href="/orthodontics/applicable_cases">
                                                <span class="text1">矯正できる歯並び ／ <br>矯正できない歯並び</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-ortho_type" class="navHead3 btn_underline" href="/orthodontics/ortho_type">
                                                <span class="text1">矯正治療の種類と違い</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">マウスピース矯正の基礎知識</div>
                                        <p class="item">
                                            <a id="menu-about_mouthpiece" class="navHead3 btn_underline" href="/orthodontics/about_mouthpiece">
                                                <span class="text1">マウスピース矯正とは？</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-mouthpiece_type" class="navHead3 btn_underline" href="/orthodontics/mouthpiece_type">
                                                <span class="text1">マウスピース矯正の<br>種類と違い</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-mouthpiece_number" class="navHead3 btn_underline" href="/orthodontics/mouthpiece_number">
                                                <span class="text1">マウスピース矯正の<br>効果と枚数の関係</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-mouthpiece_risk" class="navHead3 btn_underline" href="/orthodontics/risk">
                                                <span class="text1">マウスピース矯正の<br>リスク・副作用</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-mouthpiece_treatment" class="navHead3 btn_underline" href="/orthodontics/treatment">
                                                <span class="text1">マウスピース矯正中の<br>注意事項と診療内容</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">矯正症例写真</div>
                                        <p class="item">
                                            <a id="menu-ortho_case" class="navHead3 btn_underline" href="/orthodontics/case/">
                                                <span class="text1">矯正症例写真</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">当院矯正の特長</div>
                                        <p class="item">
                                            <a id="menu-ortho_concept" class="navHead3 btn_underline" href="/orthodontics/concept">
                                                <span class="text1">矯正品質向上へのこだわり</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-ortho_price_commitment" class="navHead3 btn_underline" href="/orthodontics/price_commitment">
                                                <span class="text1">低価格実現へのこだわり</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-clearcorrect_features" class="navHead3 btn_underline" href="/orthodontics/clearcorrect_features">
                                                <span class="text1">当院が「クリアコレクト」を<br>選ぶ理由</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-suresmile" class="navHead3 btn_underline" href="/orthodontics/suresmile">
                                                <span class="text1">シュアスマイルの<br>特徴と違い</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <p class="item">
                                            <a id="menu-ortho_faq" class="navHead3 btn_underline" href="/orthodontics/faq">
                                                <span class="text1">当院の矯正治療に関するQ&amp;A</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">矯正プランと料金のご案内</div>
                                        <p class="item">
                                            <a id="menu-plan_mouthpiece" class="navHead3 btn_underline" href="/orthodontics/plan_mouthpiece?attr=plan">
                                                <span class="text1">マウスピース矯正（全顎）</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-plan_maeba_ortho" class="navHead3 btn_underline" href="/orthodontics/plan_maeba?attr=plan">
                                                <span class="text1">前歯・出っ歯矯正（部分矯正）</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-plan_ceramic_ortho" class="navHead3 btn_underline" href="/orthodontics/plan_ceramic_ortho">
                                                <span class="text1">セラミック矯正</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-ortho_lowprice_reason" class="navHead3 btn_underline" href="/orthodontics/lowprice_reason">
                                                <span class="text1">当院の矯正歯科が安い理由</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-mouthpiece-monitor" class="navHead3 btn_underline" href="/orthodontics/monitor/" target="_blank">
                                                <span class="text1">矯正モニター募集</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">矯正歯科コラム</div>
                                        <p class="item">
                                            <a id="menu-lp_mouthpiece02" class="navHead3 btn_underline" href="/lp/mouthpiece02/#truthArea" target="_blank">
                                                <span class="text1">誰も言わない歯列矯正の事実</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-column_ortho" class="navHead3 btn_underline column" href="/column/ortho">
                                                <picture class="bg1">
                                                    <source type="image/webp" srcset="/assets/img/menubg1_sp.jpg.webp">
                                                    <img src="/assets/img/menubg1.jpg" alt="">
                                                </picture>
                                                <span class="textGrp">
                                                    <span class="textColumn">COLUMN</span>
                                                    <span class="text1">矯正歯科コラム</span>
                                                </span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                    </div><!-- /.megamenu2 -->
                                </div><!-- /.item -->

                                <div class="item">
                                    <input type="checkbox" id="child-orthodontics_open" class="subnav_open">
                                    <label class="navHead2" for="child-orthodontics_open">
                                        <img class="icon1" src="/assets/svg/icons/menu7.svg" />
                                        <span class="text1">子どもの歯並び矯正</span>
                                        <span class="iconplus"></span>
                                    </label>
                                    <div class="megamenu2">
                                        <p class="item">
                                            <a id="menu-child-orthodontics" class="navHead3 btn_underline" href="/child-orthodontics/">
                                                <span class="text1">子どもの歯並び矯正トップ</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">子どもの矯正の基礎知識</div>
                                        <p class="item">
                                            <a id="menu-child-ortho_formation_timing" class="navHead3 btn_underline" href="/child-orthodontics/formation_timing">
                                                <span class="text1">子どもの歯並びは<br>いつ決まる？</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-child-ortho_timing" class="navHead3 btn_underline" href="/child-orthodontics/timing">
                                                <span class="text1">子どもの矯正は<br>いつから始めるべき？</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-child-ortho_cost" class="navHead3 btn_underline" href="/child-orthodontics/cost">
                                                <span class="text1">子どもの矯正の<br>費用はどれくらい？</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-child-ortho_demerit" class="navHead3 btn_underline" href="/child-orthodontics/demerit">
                                                <span class="text1">治療を始める前に：<br>小児矯正が抱える課題とは</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">当院の小児矯正の特長</div>
                                        <p class="item">
                                            <a id="menu-child-ortho_mft" class="navHead3 btn_underline" href="/child-orthodontics/mft">
                                                <span class="text1">次世代の小児1期矯正<br>マウスピース小児矯正</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>

                                        <div class="menuCat">矯正プランと料金のご案内</div>
                                        <p class="item">
                                            <a id="menu-child-ortho_1st_phase" class="navHead3 btn_underline" href="/child-orthodontics/1st_phase">
                                                <span class="text1">幼児・小学生矯正プラン<br>（1期矯正）</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-child-ortho_2nd_phase" class="navHead3 btn_underline" href="/child-orthodontics/2nd_phase">
                                                <span class="text1">中学生・高校生矯正プラン<br>（2期矯正）</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                    </div><!-- /.megamenu2 -->
                                </div><!-- /.item -->

                                <div class="item">
                                    <input type="checkbox" id="implant-allon4_open" class="subnav_open">
                                    <label class="navHead2" for="implant-allon4_open">
                                        <img class="icon1" src="/assets/svg/icons/menu2.svg" />
                                        <span class="text1">インプラント / All on 4</span>
                                        <span class="iconplus"></span>
                                    </label>
                                    <div class="megamenu2">
                                        <p class="item">
                                            <a id="menu-implant" class="navHead3 btn_underline" href="/menu-guide/implant">
                                                <span class="text1">インプラント トップ</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-all-on-4" class="navHead3 btn_underline" href="/menu-guide/all-on-4">
                                                <span class="text1">オールオンフォー<br>（All on 4）</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-alveolar-bone-regeneration" class="navHead3 btn_underline" href="/menu-guide/alveolar-bone-regeneration">
                                                <span class="text1">歯槽骨再生治療</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-lp-implant" class="navHead3 btn_underline" href="/lp/implant/" target="_blank">
                                                <img class="iconpickup" src="/assets/svg/icons/menu_pickup.svg" />
                                                <span class="text1">2分で分かる！<br>当院のインプラント</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                    </div><!-- /.megamenu2 -->
                                </div><!-- /.item -->

                                <div class="item">
                                    <input type="checkbox" id="ceramic_open" class="subnav_open">
                                    <label class="navHead2" for="ceramic_open">
                                        <img class="icon1" src="/assets/svg/icons/menu3.svg" />
                                        <span class="text1">セラミック治療</span>
                                        <span class="iconplus"></span>
                                    </label>
                                    <div class="megamenu2">
                                        <p class="item">
                                            <a id="menu-aesthetic-crown" class="navHead3 btn_underline" href="/menu-guide/aesthetic-crown">
                                                <span class="text1">審美クラウン</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-aesthetic-inlay" class="navHead3 btn_underline" href="/menu-guide/aesthetic-inlay">
                                                <span class="text1">審美インレー</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a id="menu-laminate-veneer" class="navHead3 btn_underline" href="/menu-guide/laminate-veneer">
                                                <span class="text1">ラミネートベニア</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                        <p class="item">
                                            <a class="navHead3 btn_underline" href="/orthodontics/plan_ceramic_ortho">
                                                <span class="text1">セラミック矯正</span>
                                                <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </p>
                                    </div><!-- /.megamenu2 -->
                                </div><!-- /.item -->

                                <div class="item">
                                    <input type="checkbox" id="denture_open" class="subnav_open">
                                    <label class="navHead2" for="denture_open">
                                        <img class="icon1" src="/assets/svg/icons/menu6.svg" />
                                        <span class="text1">デンチャー（入れ歯）</span>
                                        <span class="iconplus"></span>
                                    </label>
                                    <div class="megamenu2">
                                        <div class="item">
                                            <a id="menu-ultra-fit-denture" class="navHead3 btn_underline" href="/menu-guide/ultra-fit-denture">
                                                <span class="text1">ウルトラフィットデンチャー<br>（総入れ歯）</span>
                                                <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </div><!-- /.item -->

                                        <div class="item">
                                            <a id="menu-beauty-denture" class="navHead3 btn_underline" href="/menu-guide/beauty-denture">
                                                <span class="text1">美デンチャー<br>（部分入れ歯）</span>
                                                <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                                            </a>
                                        </div><!-- /.item -->
                                    </div>
                                </div><!-- /.item -->
                            </div>

                            <div class="column_list">
                                <div class="item">
                                    <a id="menu-precision-root-canal-treatment" class="navHead2 simple" href="/menu-guide/precision-root-canal-treatment">
                                        <img class="icon1" src="/assets/svg/icons/menu4.svg" />
                                        <span class="text1">精密根管治療</span>
                                        <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                                    </a>
                                </div><!-- /.item -->

                                <div class="item">
                                    <a id="menu-teeth-cleaning" class="navHead2 simple" href="/menu-guide/teeth-cleaning">
                                        <img class="icon1" src="/assets/svg/icons/menu5.svg" />
                                        <span class="text1">クリーニング</span>
                                        <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                                    </a>
                                </div><!-- /.item -->

                                <div class="item">
                                    <a id="menu-home-teeth-whitening" class="navHead2 simple" href="/menu-guide/home-teeth-whitening">
                                        <img class="icon1" src="/assets/svg/icons/menu6.svg" />
                                        <span class="text1">ホワイトニング</span>
                                        <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                                    </a>
                                </div><!-- /.item -->
                            </div>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp3a" class="navGrp">
                <a id="menu-pride" class="navHead1 simple" href="/pride">
                    <span class="text1">審美性追求へのこだわり</span>
                    <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                </a>
            </div><!-- /.navGrp -->

            <div id="navGrp4a" class="navGrp">
                <input type="checkbox" id="process-price_open" class="submenu_open">
                <label class="navHead1" for="process-price_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">診療の流れ ・ 治療費案内</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-process" class="navHead3 btn_underline" href="/process">
                                    <span class="text1">診療の流れ</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-price" class="navHead3 btn_underline" href="/price">
                                    <span class="text1">治療費案内</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-monitor" class="navHead3 btn_underline" href="/monitor">
                                    <span class="text1">モニター募集のご案内</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp5a" class="navGrp">
                <input type="checkbox" id="clinic_open" class="submenu_open">
                <label class="navHead1" for="clinic_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">クリニック紹介 / アクセス</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-hospital-director" class="navHead3 btn_underline" href="/hospital-director">
                                    <span class="text1">院長紹介</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-quality" class="navHead3 btn_underline" href="/quality">
                                    <span class="text1">良質な医療を提供するための取り組み</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-equipment" class="navHead3 btn_underline" href="/equipment">
                                    <span class="text1">設備紹介</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-hours-access" class="navHead3 btn_underline" href="/hours-access">
                                    <span class="text1">診療時間 / アクセス</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp6a" class="navGrp">
                <input type="checkbox" id="recruit_open" class="submenu_open">
                <label class="navHead1" for="recruit_open">
                    <svg class="icon1"><use xlink:href='#menulist'></use></svg>
                    <span class="text1">求人情報</span>
                    <span class="icon2"><svg><use xlink:href='#arrow_up'></use></svg></span>
                </label>
                <div class="megamenu1">
                    <div class="wrapper">
                        <div class="megamenu_list">
                            <p class="item">
                                <a id="menu-job1-3" class="navHead3 btn_underline" href="/recruit/job1-8">
                                    <span class="text1">歯科助手・補助業務<br>（パート・アルバイト）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job1-3" class="navHead3 btn_underline" href="/recruit/job1-7">
                                    <span class="text1">歯科衛生士求人<br>（パート・アルバイト）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job1-6" class="navHead3 btn_underline" href="/recruit/job1-6">
                                    <span class="text1">歯科衛生士求人</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job1" class="navHead3 btn_underline" href="/recruit/job1">
                                    <span class="text1"><span class="bold"></span>歯科衛生士求人<br>（審美スペシャリスト）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job1-2" class="navHead3 btn_underline" href="/recruit/job1-2">
                                    <span class="text1"><span class="bold"></span>歯科衛生士求人<br>（ペリオスペシャリスト）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job5" class="navHead3 btn_underline" href="/recruit/job5">
                                    <span class="text1">歯科技工士求人</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job3" class="navHead3 btn_underline" href="/recruit/job3">
                                    <span class="text1">歯科医師求人（常勤）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                            <p class="item">
                                <a id="menu-job10" class="navHead3 btn_underline" href="/recruit/job10">
                                    <span class="text1">受付マネージャー職（正職員）</span>
                                    <svg class="icon1"><use xlink:href='#arrow_right'></use></svg>
                                </a>
                            </p>
                        </div><!-- /.megamenu_list -->
                    </div><!-- /.wrapper -->
                </div><!-- /.megamenu1 -->
            </div><!-- /.navGrp -->

            <div id="navGrp7a" class="navGrp">
                <a id="menu-column" class="navHead1 simple" href="/column/">
                    <span class="text1">審美・矯正歯科コラム</span>
                    <svg class="icon3"><use xlink:href='#arrow_right'></use></svg>
                </a>
            </div><!-- /.navGrp -->
*/ ?>


            <label class="menu_close2" for="menu_open">
                <span class="text1">CLOSE</span>
                <svg class="icon1"><use xlink:href='#close'></use></svg>
            </label>

        </div>
    </nav>
</header>
