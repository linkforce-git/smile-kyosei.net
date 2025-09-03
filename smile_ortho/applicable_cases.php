<?php
    $title = '矯正できる歯並び／矯正できない歯並びを症例で解説｜佐賀スマイル髙城歯科';
    $description = '矯正治療で様々な不正咬合を矯正できます。ただし顎骨形状そのものに以上がある場合は矯正できないことがあります。詳しく解説します。';
    $canonical = 'https://www.smileshika.net/smile_ortho/applicable_cases';
    include(__DIR__."/../include/head_link.php");

    // 症例紹介用
    require_once(__DIR__."/../smile_ortho/case/archive/define.php");
    if (!isset($caseCat)) {
        $caseCat = CASE_CAT_DEFAULT;
    } else {
        $caseCat += array_map(fn($cat) => false, CASE_CAT_DEFAULT);
    }
?>
<script type="text/javascript">
    let opened_menu = ['menu-guide_open', 'smile_ortho_open'];
    let current_menu = ['menu-ortho_applicable_cases'];
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "矯正歯科TOP",
        "item": "https://www.smileshika.net/smile_ortho/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "矯正できる歯並び／矯正できない歯並び",
        "item": "https://www.smileshika.net/smile_ortho/"
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "矯正できる歯並び／矯正できない歯並び",
        "item": "https://www.smileshika.net/smile_ortho/applicable_cases"
    }]
}
</script>
</head>
<body id="ortho_applicable_cases" class="ortho">
<div class="bodyWrapper">

<?php include(__DIR__."/../include/header.php"); ?>

<main>
    <section>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/smile_ortho/">矯正歯科TOP</a></li>
                <li>矯正できる歯並び ／ 矯正できない歯並び</li>
            </ol>
        </nav>
        <div class="h1a">
            <picture class="h1bg">
                <source type="image/webp" srcset="/assets/img/orthodontics/h_whatis.jpg.webp">
                <img src="/assets/img/orthodontics/h_whatis.jpg" alt="">
            </picture>
            <div class="en">WHAT IS</div>
            <h1 class="ttl">矯正できる歯並び ／ <br>矯正できない歯並び</h1>
            <div class="sub">～不正咬合の種類と治療適応の可否～</div>
        </div>
        <div class="wrapper">
            <p class="txta">矯正治療は多くの不正咬合（悪い歯並び）を改善できますが、矯正治療だけでは改善が難しいケースもあります。<br>このページでは不正咬合の種類と矯正治療の適応可否について説明します。</p>

            <div class="sv_doctor">
                <picture class="portrait">
                    <source type="image/webp" srcset="/assets/img/orthodontics/portrait.jpg.webp">
                    <img src="/assets/img/orthodontics/portrait.jpg" alt="">
                </picture>
                <div>
                    <div class="balloon">私が解説します</div>
                    <div class="txtGrp">
                        <div class="clinic">スマイル髙城歯科</div>
                        <div class="name"><span class="job">院長</span>髙城秀典</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="h2a">
            <h2 class="ttl">不正咬合の種類と<br>矯正の可否</h2>
        </div>
        <div class="wrapper">
            <h3 class="h3a">どの歯並びでお悩みですか？</h3>
            <div class="gap30">
                <p class="txta">以下は不正咬合の一覧です。<br>クリックすると、その不正咬合の詳細と「どんなケースが矯正で改善できるか」、また「どんなケースが矯正では難しいか（外科治療が必要になるか）」を確認できます。</p>
                <ul class="malocclusion_list">
                    <li><a class="item" href="#malocclusion1"><img src="/assets/img/orthodontics/malocclusion/mal1_s.png" alt="" width="146" height="110"><div class="ttl">出っ歯</div><div class="sub">（上顎前突）</div></a></li>
                    <li><a class="item" href="#malocclusion2"><img src="/assets/img/orthodontics/malocclusion/mal2_s.png" alt="" width="146" height="110"><div class="ttl">受け口</div><div class="sub">（下顎前突）</div></a></li>
                    <li><a class="item" href="#malocclusion3"><img src="/assets/img/orthodontics/malocclusion/mal3_s.png" alt="" width="146" height="110"><div class="ttl">中心のズレ</div><div class="sub">（正中偏位）</div></a></li>
                    <li><a class="item" href="#malocclusion4"><img src="/assets/img/orthodontics/malocclusion/mal4_s.png" alt="" width="146" height="110"><div class="ttl">デコボコ歯</div><div class="sub">（叢叢生・乱杭歯・八重歯）</div></a></li>
                    <li><a class="item" href="#malocclusion5"><img src="/assets/img/orthodontics/malocclusion/mal5_s.png" alt="" width="146" height="110"><div class="ttl">深い噛み合わせ</div><div class="sub">（過蓋咬合）</div></a></li>
                    <li><a class="item" href="#malocclusion6"><img src="/assets/img/orthodontics/malocclusion/mal6_s.png" alt="" width="146" height="110"><div class="ttl">前歯が閉じない</div><div class="sub">（開咬）</div></a></li>
                    <li><a class="item" href="#malocclusion7"><img src="/assets/img/orthodontics/malocclusion/mal7_s.png" alt="" width="146" height="110"><div class="ttl">すきっ歯</div><div class="sub">（空隙歯列）</div></a></li>
                    <li><a class="item" href="#malocclusion8"><img src="/assets/img/orthodontics/malocclusion/mal8_s.png" alt="" width="146" height="110"><div class="ttl">前歯がぶつかる</div><div class="sub">（切端咬合）</div></a></li>
                    <li><a class="item" href="#malocclusion9"><img src="/assets/img/orthodontics/malocclusion/mal9_s.png" alt="" width="146" height="110"><div class="ttl">口ゴボ</div><div class="sub">（上下顎前突）</div></a></li>
                    <li><a class="item" href="#malocclusion10"><img src="/assets/img/orthodontics/malocclusion/mal10_s.png" alt="" width="146" height="110"><div class="ttl">噛み合わせのズレ</div><div class="sub">（交叉咬合）</div></a></li>
                </ul>
                <p class="txta">それではそれぞれの不正咬合について、ケース別に矯正治療の適応 ／ 不適応をみていきましょう。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion1">
        <h2 class="h2a">
            <span class="tag">出っ歯</span>
            <span class="kana">じょうがくぜんとつ</span>
            <span class="ttl">上顎前突</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal1.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal1.jpg" alt="">
                </picture>
                <p class="txta">上顎前突とは上顎の前歯が突出している状態です。原因別に次の2タイプに分類され、矯正歯科で治療できるものとできないものがあります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span>上顎骨の<em>出っ張りが軽度</em></span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal1_1.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal1_1.jpg" alt="">
                    </picture>
                    <p class="note">上顎骨の出っ張りが軽度（歯が傾斜して突出しているだけ）</p>
                </div>
                <p class="txta">このタイプは矯正治療によって歯並びを改善することができます。（改善できる度合は症状により異なります。）<br>矯正装置で前歯に力を加えて傾斜角を補正し、出っ歯を矯正できます。</p>
            </div>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span>上顎骨の<em>出っ張りが重度</em></span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal1_2.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal1_2.jpg" alt="">
                    </picture>
                    <p class="note">上顎骨の出っ張りが重度</p>
                </div>
                <p class="txta">軽度の症状であれば矯正治療である程度の改善が可能ですが、重度の場合は矯正治療のみで改善することはできません。<br>形成外科にて上顎骨後方移動術（Le Fort Ⅰ型骨切り術）をおこなったうえで、矯正治療を併用して治療します。大学病院の口腔外科や形成外科での治療が必要です。</p>
            </div>

            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit = 2;
    $applicable_cases = 'overbite'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion2">
        <h2 class="h2a">
            <span class="tag">受け口</span>
            <span class="kana">かがくぜんとつ</span>
            <span class="ttl">下顎前突</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal2.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal2.jpg" alt="">
                </picture>
                <p class="txta">下顎前突とは、下の歯が上の歯よりも前に飛び出している状態です。受け口も前述の出っ歯と同様に次の2タイプに分類され、矯正治療で改善できるものとできないものがあります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span>下顎骨の<em>出っ張りが軽度</em></span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal2_1.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal2_1.jpg" alt="">
                    </picture>
                    <p class="note">下顎骨の出っ張りが軽度</p>
                </div>
                <p class="txta">このタイプは矯正治療によって歯並びを改善することができます。（改善できる度合は症状により異なります。）<br>矯正装置で下の前歯に力を加えて傾斜角を補正し、受け口を改善できます。</p>
            </div>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span>下顎骨の<em>出っ張りが重度</em></span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal2_2.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal2_2.jpg" alt="">
                    </picture>
                    <p class="note">下顎そのものが飛び出している</p>
                </div>
                <p class="txta">軽度の症状であれば矯正治療である程度の改善が可能ですが、重度の場合は矯正治療のみで改善することはできません。<br>形成外科や口腔外科にて下顎骨後方移動術をおこなったうえで、矯正治療を併用して治療する必要があります。</p>
            </div>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 2;
    $applicable_cases = 'underbite'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion3">
        <h2 class="h2a">
            <span class="tag">中心のズレ</span>
            <span class="kana">せいちゅうへんい</span>
            <span class="ttl">正中偏位</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal3.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal3.jpg" alt="">
                </picture>
                <p class="txta">正中偏位とは、上の歯と下の歯の歯列の中心が顔の中央ラインからずれている状態を指します。原因別に以下の3タイプに分類でき、矯正歯科で改善できるものとできないものがあります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span><em>前歯のデコボコ</em>による<br>正中のズレ</span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal3_1.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal3_1.jpg" alt="">
                    </picture>
                    <p class="note">前歯の歯並びがデコボコになることにより生じた正中のズレ</p>
                </div>
                <p class="txta">歯列弓(歯列のアーチ)が左右対称で奥歯は綺麗に左右対称に並んでいるものの、前歯だけがデコボコして正中がズレているタイプです。このタイプは矯正治療が可能です。<br>歯列弓を少し拡大するか、小臼歯あたりを抜歯してスペースを作り、前歯のデコボコを解消することによってズレを解消します。3～7mm程度のズレであればおおよそ改善できます。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span><em>歯列全体</em>が<br>左右どちらかに<em>寄っている</em></span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal3_2.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal3_2.jpg" alt="">
                    </picture>
                    <p class="note">歯並び全体がどちらかに寄っている</p>
                </div>
                <p class="txta">歯列弓(歯列のアーチ)の形は左右対称なものの、歯列全体が左右どちらかに寄っているタイプです（上図では右奥歯方向に歯列が寄っています）。このタイプも矯正が可能です。<br>歯列全体を順番に反対側にずらしていくか、あるいは前歯を移動したい方向の小臼歯を抜歯してスペースを作り、前歯を移動して正中を揃えます。3～7mm程度のズレであれば問題なく解消できることがほとんどです。</p>
            </div>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span><em>顔面骨格の非対称</em>による<br>正中のズレ</span></h3>
            <p class="txta">この場合、矯正治療だけでは十分な改善が得られません。口腔外科や形成外科での外科治療が必要です。</p>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 1;
    $applicable_cases = 'midline-shift'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion4">
        <h2 class="h2a">
            <span class="tag">デコボコの歯</span>
            <span class="kana">そうせい</span>
            <span class="ttl">叢生</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal4.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal4.jpg" alt="">
                </picture>
                <p class="txta">叢生（そうせい）とは、乱杭歯（らんくいば）とも呼び、主に歯列スペースの不足によって生じるデコボコ歯並びのことです。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span>抜歯などで<em>スペースが作れる</em></span></h3>
            <p class="txta">多くの場合、叢生は矯正歯科での改善が可能です。<br>抜歯や歯列弓（歯列アーチ）の拡大によってスペースを作り、矯正器具できれいに歯を整列しなおすことで歯並びを改善できます。</p>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span>骨格的な問題があり<em>スペースが作れない</em></span></h3>
            <p class="txta">顎の骨が異常に小さいなどの問題がある場合は、口腔外科や形成外科での治療が必要です。</p>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 2;
    $applicable_cases = 'crowding'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion5">
        <h2 class="h2a">
            <span class="tag">深い噛み合わせ</span>
            <span class="kana">かがいこうごう</span>
            <span class="ttl">過蓋咬合</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal5.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal5.jpg" alt="">
                </picture>
                <p class="txta">過蓋咬合とはディープバイトとも呼び、上顎の前歯が下顎の前歯を過度に覆っている状態を指します。多くの場合、上顎の大きさに対して下顎が小さい状態です。<br>過蓋咬合は、顎骨の形状（大きさ）、奥歯の高さ、前歯の傾斜・長さなど、様々な不正が原因となって起こり、矯正難易度が非常に高い不正咬合タイプです。<br>原因別に以下の2タイプに分類でき、矯正歯科で改善できるものとできないものがあります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span>上下顎の<em>サイズ差が小さい</em></span></h3>
            <div class="gap30">
                <div class="pictxt2">
                    <picture class="picc">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal5_1.png.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal5_1.png" alt="">
                    </picture>
                    <p class="note">下顎が上顎より小さいものの、差が軽微なタイプ</p>
                </div>
                <p class="txta">下顎が上顎よりも小さいものの、そのサイズ差が軽微なタイプです。このタイプは矯正歯科での改善が可能です。<br>下顎の前歯を前方に移動させながら圧下（押し込む）することで上下の歯の位置関係を整えます。必要に応じて奥歯を挺出（ていしゅつ・引っ張り出す）して噛み合わせの高さを変えることもあります。</p>
            </div>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span>上下顎の<em>サイズ差が大きい</em></span></h3>
            <div class="gap30">
                <div class="pictxt2">
                    <picture class="picc">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal5_2.png.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal5_2.png" alt="">
                    </picture>
                    <p class="note">上下顎のサイズ差が大きい</p>
                </div>
                <p class="txta">下顎が上顎よりも小さく、そのサイズ差が重度なタイプです。このタイプは矯正歯科で症状をある程度改善することはできますが、最適な噛み合わせとされるレベル（上下前歯の前後関係が2～3mm程度）にまで改善することは困難です。<br>こうした重度の過蓋咬合症例は、口腔外科や形成外科にて下顎骨前方移動術をおこなったうえで、矯正治療で歯並びを調整する必要があります。</p>
            </div>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 2;
    $applicable_cases = 'deepbite'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion6">
        <h2 class="h2a">
            <span class="tag">前歯が閉じない</span>
            <span class="kana">かいこう</span>
            <span class="ttl">開咬</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal6.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal6.jpg" alt="">
                </picture>
                <p class="txta">
                    開咬とは、上下の歯をかみ合わせたきに前歯が接触せず、隙間ができる状態の歯並びです。<br>
                    開咬の矯正は、<br>
                    <em>①前歯を押し倒して（傾斜移動）、<br>
                    ②奥歯を押し下げる（圧下する）</em><br>
                    という移動を組み合わせて実現します。<br>
                    ワイヤー矯正は②圧下の動きが苦手です。そのため開咬矯正にワイヤー矯正は不向きなことが多いです。逆にマウスピースは①傾斜移動も②圧下も得意です。開咬症例はマウスピースが最も得意とする症例のひとつです。
                </p>
            </div>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 2;
    $applicable_cases = 'openbite'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion7">
        <h2 class="h2a">
            <span class="tag">すきっ歯</span>
            <span class="kana">くうげきしれつ</span>
            <span class="ttl">空隙歯列</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal7.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal7.jpg" alt="">
                </picture>
                <p class="txta">ほとんどのすきっ歯は矯正歯科で治療することができます。ただし、隙間の大きさによっては通常の矯正歯科では治療できないことがあります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span><em>隙間が6mm以下程度</em>の<br>すきっ歯</span></h3>
            <p class="txta">通常の矯正方法（ワイヤー矯正、マウスピース矯正）で治療が可能です。</p>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span><em>隙間が7mm以上程度</em>の<br>すきっ歯</span></h3>
            <p class="txta">通常の矯正方法（ワイヤー矯正、マウスピース矯正）だけで隙間を閉じるのは難しいことがあります。この場合は通常の矯正に加え、セラミック素材で歯の形状を変える「セラミック矯正」をおこないます。</p>


            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 2;
    $applicable_cases = 'spacing'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion8">
        <h2 class="h2a">
            <span class="tag">前歯がぶつかる</span>
            <span class="kana">せったんこうごう</span>
            <span class="ttl">切端咬合</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal8.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal8.jpg" alt="">
                </picture>
                <p class="txta">切端咬合とは、上下の前歯がちょうど切端（歯の先端）で接触し、通常の咬み合わせで見られるわずかな重なりがない状態です。切端咬合は、矯正治療で改善することが可能です。通常は下顎の前歯を後方に移動・整列することで改善しますが、移動スペースがない場合は小臼歯を抜歯するなどしてスペースを作ります。</p>
            </div>

            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 1;
    $applicable_cases = 'edge-to-edge'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion9">
        <h2 class="h2a">
            <span class="tag">口ゴボ</span>
            <span class="kana">じょうげがくぜんとつ</span>
            <span class="ttl">上下顎前突</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal9.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal9.jpg" alt="">
                </picture>
                <p class="txta">上下顎前突（じょうげがくぜんとつ）は、上顎と下顎の両方が前方に突出している状態です。原因別に次の2タイプに分類でき、矯正治療で改善できる症例とできない症例があります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span>骨格には問題がなく、<em>歯の位置や角度に問題</em>がある</span></h3>
            <div class="gap30">
                <div class="pictxt1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/mal9_1.jpg.webp">
                        <img src="/assets/img/orthodontics/applicable_cases/mal9_1.jpg" alt="">
                    </picture>
                    <p class="note">前歯が傾斜して飛び出している（顎の骨は問題ない）</p>
                </div>
                <p class="txta">このタイプの場合、矯正治療によって歯並びを整えることで上下顎前突を改善できます。<br>矯正装置で前歯に力を加えて傾斜角を補正し、上下顎前突を改善します。</p>
            </div>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span>骨格に問題があり、<em>顎そのものが突出</em>している</span></h3>
            <p class="txta">顎の骨の位置・形状そのものに問題がある場合、矯正治療だけでは十分に改善できない場合があります。軽度の症例であればある程度の改善は可能ですが、重度の場合は形成外科手術が必要になります。</p>



            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 1;
    $applicable_cases = 'bimaxillary-protrusion'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section id="malocclusion10">
        <h2 class="h2a">
            <span class="tag">噛み合わせのズレ</span>
            <span class="kana">こうさこうごう</span>
            <span class="ttl">交叉咬合</span>
        </h2>
        <div class="wrapper">
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/malocclusion/mal10.jpg.webp">
                    <img src="/assets/img/orthodontics/malocclusion/mal10.jpg" alt="">
                </picture>
                <p class="txta">交叉咬合とは、歯列が途中で交叉してしまっている歯並びです。通常、ヒトの歯は上の歯が下の歯を覆うように配列していますが、歯列が途中で交叉し、部分的に下の歯が上の歯を覆っている状態です。交叉咬合は矯正治療だけで改善できる場合とできない場合があります。</p>
            </div>

            <h3 class="h3a able"><span class="tag">矯正できるタイプ</span><span><em>交叉の度合が軽度</em></span></h3>
            <p class="txta">交叉が部分的で軽度な場合は矯正治療のみで改善することができます。この場合、下顎の歯列弓を小さくするか、あるいは上顎の歯列弓を拡大することで上下顎の位置と大きさを整え、交叉を解消します。</p>

            <h3 class="h3a unable"><span class="tag">矯正できないタイプ</span><span><em>交叉の度合が重度</em></span></h3>
            <p class="txta">交叉部位が広く下顎が大きすぎる場合や、あるいは顎全体に変形が認められるような場合、矯正治療のみでの交叉解消は困難です。この場合、口腔外科や形成外科での外科治療が必要になります。</p>



            <h3 class="h3a">スマイル式矯正での治療症例</h3>
            <div class="gap30">
<?php
    $caseLimit += 1;
    $applicable_cases = 'crossbite'; // 「矯正できる歯並び ／矯正できない歯並び」のページ用変数
    include(__DIR__."/../smile_ortho/case/archive/caseList.php");
?>
            </div>

            <h3 class="h3a">治療費と期間の目安<br>（モニター適応時）</h3>
            <div class="gap30">
                <p class="txta">
                    <b>超軽度：</b>¥198,000（3か月以内）<br>
                    <b>軽度：</b>¥378,000～498,000（～1年半）<br>
                    <b>中度：</b>¥648,000～¥808,000（1年半～2年半）<br>
                    <b>重度：</b>¥838,000～¥958,000（2年半以上）
                </p>
                <p class="txta">※金額はすべて税込み表示です。</p>
            </div>
        </div>
    </section>
    <section>
        <div class="h2a">
            <h2 class="ttl">矯正方式の種類について</h2>
        </div>
        <div class="wrapper">
            <h3 class="h3a">矯正治療は「ワイヤー矯正」だけではありません</h3>
            <div class="gap30">
                <p class="txta">矯正治療といったら下の写真のような「歯にワイヤーを固定する治療」をイメージしたりしませんか？</p>
                <picture class="pica">
                    <source type="image/webp" srcset="/assets/img/orthodontics/applicable_cases/wire.jpg.webp">
                    <img src="/assets/img/orthodontics/applicable_cases/wire.jpg" alt="" width="300" height="160">
                </picture>
                <p class="txta">実は矯正治療は「ワイヤー矯正」だけではありません。大人の矯正は3種類あり、それぞれメリット・デメリットが違い、得意な症例も違います。次のページでは3つの矯正方式の違いや特長を詳しく解説していきます。</p>
            </div>
        </div>
        <div class="link_nextPage">
            <div class="ttl">次ページ</div>
            <div class="link"><a href="/orthodontics/ortho_type">矯正治療の種類と違い</a></div>
        </div>
        <div class="wrapper">
            <div class="link_related">
                <p class="item"><a href="/orthodontics/">矯正歯科トップへ</a></p>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="sv_doctor">
                <picture class="portrait">
                    <source type="image/webp" srcset="/assets/img/orthodontics/portrait.jpg.webp">
                    <img src="/assets/img/orthodontics/portrait.jpg" alt="">
                </picture>
                <div>
                    <div class="balloon">私が監修しました</div>
                    <div class="txtGrp">
                        <div class="clinic">スマイル髙城歯科</div>
                        <div class="name"><span class="job">院長</span>髙城秀典</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include(__DIR__."/../include/ortho_footer_nav.php"); ?>
</main>

<?php include(__DIR__."/../include/footer.php"); ?>

</div><!-- /.bodyWrapper -->
</body>
</html>
