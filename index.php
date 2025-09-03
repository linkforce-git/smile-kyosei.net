<?php
    $title = '歯が動く仕組み｜歯列矯正のイロハ｜スマイル式矯正';
    $description = 'テストページです';
//    $canonical = '';
    include(__DIR__."/include/head_link.php");
?>
<script type="text/javascript">
    let opened_menu = ['menu-knowledge_open'];
    let current_menu = ['menu-knowledge-principle'];
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "スマイル式矯正TOP",
        "item": "https://www.smile-kyosei.test/"
    },{
        "@type": "ListItem",
        "position": 2,
        "name": "歯列矯正のイロハ",
        "item": "https://www.smile-kyosei.test/knowledge/"
    },{
        "@type": "ListItem",
        "position": 3,
        "name": "歯が動く仕組み",
        "item": "https://www.smile-kyosei.test/knowledge/principle"
    }]
}
</script>
</head>
<body id="ortho_principle" class="ortho">
<div class="bodyWrapper">

<?php include(__DIR__."/include/header.php"); ?>

<main>
    <section>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">スマイル式矯正</a></li>
                <li><a href="/knowledge/">歯列矯正のイロハ</a></li>
                <li>歯が動く仕組み</li>
            </ol>
        </nav>
        <div class="h1a">
            <picture class="h1bg">
                <source type="image/webp" srcset="/assets/img/orthodontics/h_whatis.jpg.webp">
                <img src="/assets/img/orthodontics/h_whatis.jpg" alt="">
            </picture>
            <div class="en">WHAT IS</div>
            <h1 class="ttl">テストページ</h1>
            <div class="sub">歯列矯正の原理をわかりやすく解説</div>
        </div>
        <div class="wrapper">
            <p class="txta">普段びくともしない頑丈な歯を、歯列矯正ではどのようにして動かしているのでしょうか？このページでは矯正治療の原理について解説していきます。</p>

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

            <div class="tocBox">
                <div class="ttl">もくじ</div>
                <ol class="list">
                    <li class="link"><a href="#sec1">1. 矯正の基本原理</a></li>
                    <li class="link"><a href="#sec2">2. 歯の動かし方の種類とは？</a></li>
                    <li class="link"><a href="#sec3">3. 歯の整列スペースはどう作る？</a></li>
                    <li class="link"><a href="#sec4">4. 治療計画の立て方とは？</a></li>
                    <li class="link"><a href="#sec5">5. どんな歯並びも矯正できるの？</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="sec1">
        <div class="h2a">
            <h2 class="ttl">矯正の基本原理</h2>
        </div>
        <div class="wrapper">
            <h3 class="h3a">「骨の代謝」を利用して<br>歯を動かす</h3>
            <div class="gap30">
                <p class="txta">歯列矯正では、ヒトの体に元々備わっている機能である「骨の代謝」を利用して歯を動かします。</p>
                <picture class="picc">
                    <img src="/assets/img/orthodontics/principle/basis1.png" alt="" width="350" height="200">
                </picture>
                <p class="txta">ヒトの骨は新陳代謝を繰り返すことで、骨の弾力や強さを保っています。骨を壊す細胞（破骨細胞）と骨を作る細胞（骨芽細胞）があり、両者が働きあうことで骨は常に作り替わっています。歯列矯正ではこれらの仕組みを利用して、歯の周りにある骨（歯槽骨）を壊す・作ることで歯を動かしています。</p>
            </div>

            <h3 class="h3a">矯正力によって<br>歯が動くプロセス</h3>
            <div class="gap40">
                <div class="gap30">
                    <picture class="picb">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/basis2_1.png.webp">
                        <img src="/assets/img/orthodontics/principle/basis2_1.png" alt="" width="288" height="220">
                    </picture>
                    <p class="txta">↑これは歯周組織の断面図です。<br>歯根の周りには「歯根膜」という薄い膜があり、歯と歯槽骨の間でクッションの役割を果たしています。</p>
                </div>
                <div class="gap30">
                    <picture class="picb">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/basis2_2.png.webp">
                        <img src="/assets/img/orthodontics/principle/basis2_2.png" alt="" width="288" height="220">
                    </picture>
                    <p class="txta">矯正装置を取り付けて歯に矯正力をかけると「歯根膜」に変化が起きます。圧縮側（右側）の歯根膜は縮み、反対側の歯根膜は引っ張られ、左右の歯根膜の厚みが変化します。</p>
                </div>
                <div class="gap30">
                    <picture class="picb">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/basis2_3.png.webp">
                        <img src="/assets/img/orthodontics/principle/basis2_3.png" alt="" width="288" height="220">
                    </picture>
                    <p class="txta">歯根膜には「変化した厚みを元に戻そうとする性質」があります。この性質により、<em>圧縮側では骨を溶かす細胞（破骨細胞）</em>が活性化し、<em>引っ張られた側では骨を作る細胞（骨芽細胞）</em>が活性化します。</p>
                </div>
                <div class="gap30">
                    <picture class="picb">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/basis2_4.png.webp">
                        <img src="/assets/img/orthodontics/principle/basis2_4.png" alt="" width="288" height="220">
                    </picture>
                    <p class="txta">破骨細胞と骨芽細胞が活性化すると、圧縮側では骨が無くなり、引っ張られた側では骨ができます。このように歯に力を加えて骨の代謝を促すことで歯は移動していきます。</p>
                </div>
            </div>

            <h3 class="h3a">矯正力を何度も調整して<br>歯を動かす</h3>
            <p class="txta">歯に矯正力を加えると、歯はひと月で0.5mmから1mmくらい移動します。実際の矯正においては、この移動を連続的におこなうために「歯が少し移動したら矯正力を調整する」という工程を何度も繰り返します。そして約半年から2年ほどかけて歯を動かし続け、歯並びを改善していきます。</p>
        </div>
    </section>
    <section id="sec2">
        <div class="h2a">
            <div class="sub">歯の動かし方の種類とは？</div>
            <h2 class="ttl">歯の移動様式</h2>
        </div>
        <div class="wrapper">
            <p class="txta">矯正治療は様々な「歯の動かし方（移動様式）」を組み合わせることで実現しています。ここからは移動様式の種類について解説していきます。</p>

            <h3 class="h3a">歯の移動方法は大きく6種類</h3>
            <div class="gap30">
                <p class="txta">歯の移動様式には「傾斜移動」「歯体移動」「回転」「挺出」「圧下」「トルク」の6つがあり、これらを組み合わせることで歯並びを改善していきます。</p>
                <picture class="picb">
                    <img src="/assets/img/orthodontics/principle/move.png" alt="" width="280" height="280">
                </picture>
            </div>

            <h3 class="h3a">挺出（引っ張り出す）</h3>
            <div class="gap30">
                <picture class="picb">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/move1.png.webp">
                    <img src="/assets/img/orthodontics/principle/move1.png" alt="" width="180" height="200">
                </picture>
                <p class="txta">
                    <em>「挺出」は歯根を引っ張り出す動き</em>です。<br>
                    <a href="/orthodontics/ortho_type#sec1">ワイヤー矯正</a>では隣接する歯などを固定源としてワイヤーで挺出したい方向に力を加えます（他にも方法があります）。<br>
                    <a href="/orthodontics/ortho_type#sec2">マウスピース矯正</a>では、<em>アタッチメント（下図）</em>を歯に装着し、挺出したい方向に力を加えます。
                </p>
                <p class="txta">ワイヤー矯正は挺出が得意です。逆にマウスピース矯正は苦手です。</p>
                <div class="boxa">
                    <h4 class="h4a">アタッチメントとは？</h4>
                    <div class="gap20">
                        <picture class="pica s">
                            <source type="image/webp" srcset="/assets/img/orthodontics/principle/move1_1.jpg.webp">
                            <img src="/assets/img/orthodontics/principle/move1_1.jpg" alt="">
                        </picture>
                        <p class="txta">アタッチメントは樹脂でできた突起です。歯に一時的に取り付けて力の支点や作用点とすることで、より複雑な動きが可能となります。歯と同じ色で目立たず、治療完了後は簡単に取り外すことができます。</p>
                    </div>
                </div>
            </div>

            <h3 class="h3a">圧下（押し下げる）</h3>
            <div class="gap30">
                <picture class="picb">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/move2.png.webp">
                    <img src="/assets/img/orthodontics/principle/move2.png" alt="" width="180" height="210">
                </picture>
                <p class="txta">
                    <em>「圧下」とは、歯を押し下げる動き</em>です。<br>
                    ワイヤー矯正では、ワイヤーの曲げによって歯茎方向に力をかけるか、ゴムでブラケットを引っ張って実現します。<br>
                    マウスピース矯正では、アタッチメントで圧下方向に力をかけて実現します。<br>
                    マウスピース矯正は圧下が得意です。逆にワイヤー矯正は圧下が苦手です。
                </p>
            </div>

            <h3 class="h3a">回転</h3>
            <div class="gap30">
                <picture class="picb">
                    <img src="/assets/img/orthodontics/principle/move3.png" alt="" width="200" height="130">
                </picture>
                <p class="txta">
                    <em>歯を回転させる動き</em>です。<br>
                    ワイヤー矯正では、ブラケットを歯の中心からずらして取り付けることで、ブラケットに通したワイヤーが真っすぐに戻ろうとしてブラケットを中心方向に引っ張る力を活用します。<br>
                    マウスピース矯正では、マウスピースの形状を「対象の歯を回したい方向にずらして作る」ことで実現します。
                </p>
            </div>

            <h3 class="h3a">傾斜移動</h3>
            <div class="gap30">
                <picture class="picb">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/move4.png.webp">
                    <img src="/assets/img/orthodontics/principle/move4.png" alt="" width="180" height="200">
                </picture>
                <p class="txta">
                    <em>「傾斜移動」とは、根っこの先を軸にして歯を傾ける（あるいは傾いている歯を起こす）動き</em>です。<br>
                    動かし方はワイヤー矯正もマウスピース矯正も同じです。歯冠上部を「傾斜させたい方向に押す」ことによって実現します。<br>
                    マウスピース矯正は傾斜移動が得意で、ワイヤー矯正よりも早く歯を移動できます。傾斜移動をよく使う出っ歯の矯正は、マウスピース矯正のほうがより早く治療が進むことが多いです。
                </p>
            </div>

            <h3 id="sec2_5" class="h3a">歯体移動（歯の並行移動）</h3>
            <div class="gap30">
                <picture class="picb">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/move5.png.webp">
                    <img src="/assets/img/orthodontics/principle/move5.png" alt="" width="180" height="200">
                </picture>
                <p class="txta"><em>「歯体移動」とは歯根を平行に移動させる動き</em>です。「歯列矯正といえばこの動き」と思うかもしれませんが、実はとても難易度が高い動きです。</p>
                <div class="pictxt">
                    <picture class="picb">
                        <img src="/assets/img/orthodontics/principle/move5_1.png" alt="" width="276" height="140">
                    </picture>
                    <p class="note">参考：図解!矯正治療が面白いほどわかる本</p>
                </div>
                <p class="txta">歯槽骨に歯が埋まっている状態は、田んぼに木の杭が刺さった状態によく似ています。想像してみてください。どうすれば田んぼに刺さった杭を綺麗に並行移動させられるでしょうか。杭の地面から出ている部分を手で押しても杭は斜めに傾くだけです。難しいどころか、そんな事不可能に感じませんか？</p>
                <div class="pictxt">
                    <picture class="picb">
                        <img src="/assets/img/orthodontics/principle/move5_2.png" alt="" width="240" height="200">
                    </picture>
                    <p class="note">参考：図解!矯正治療が面白いほどわかる本</p>
                </div>
                <p class="txta">歯列矯正では「歯冠をつかむ」ことで並行移動を実現します。歯冠とは歯茎から出ている部分の歯のことです。「つかむ」とは、歯冠全体に力をかけることです。歯冠の一部に矯正力がかかると上の図のように歯は斜めに倒れようとしますが、歯冠をしっかりとつかむことで歯が倒れることを防ぎつつ歯全体に力をかけ、下の図のように並行移動させることができます。</p>
                <div class="pictxt">
                    <picture class="picb">
                        <img src="/assets/img/orthodontics/principle/move5_3.png" alt="" width="246" height="200">
                    </picture>
                    <p class="note">参考：図解!矯正治療が面白いほどわかる本</p>
                </div>
                <p class="txta">歯冠をつかむためには、ワイヤー矯正では太い角ワイヤー（断面が長方形のワイヤー）を用います。</p>
                <div class="pic_move5_4">
                    <div class="pictxt">
                        <picture class="picb">
                            <img src="/assets/img/orthodontics/principle/move5_4_1.png" alt="" width="130" height="154">
                        </picture>
                        <p class="note">丸いワイヤーを着けると、部分的に力がかかり歯は斜めに動く</p>
                    </div>
                    <div class="pictxt">
                        <picture class="picb">
                            <img src="/assets/img/orthodontics/principle/move5_4_2.png" alt="" width="130" height="154">
                        </picture>
                        <p class="note">角ワイヤーを着けると、ワイヤーはブラケットにぴったりはまって歯全体に力がかかり、並行移動が可能</p>
                    </div>
                </div>
                <p class="txta">マウスピース矯正では専用のアタッチメント（歯に樹脂を着けて力をかける）を用いて力をかけることで並行移動が可能です。</p>
            </div>

            <h3 class="h3a">トルク</h3>
            <div class="gap30">
                <picture class="picb">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/move6.png.webp">
                    <img src="/assets/img/orthodontics/principle/move6.png" alt="" width="180" height="200">
                </picture>
                <p class="txta">歯冠の位置を変えることなく歯根を傾ける動きです。ワイヤー矯正では通常、角ワイヤーで歯冠をつかみつつワイヤーをねじれさせることによって実現します。</p>
                <div class="pictxt">
                    <picture class="picb">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/move6_1.png.webp">
                        <img src="/assets/img/orthodontics/principle/move6_1.png" alt="" width="158" height="200">
                    </picture>
                    <p class="note">参考：図解!矯正治療が面白いほどわかる本</p>
                </div>
                <p class="txta">マウスピース矯正でも同様に、アッタチメントを用いてねじれの力をかけることで歯を動かします。マウスピース矯正では歯を包み込んでねじれの力をかけることができるため、ワイヤー矯正よりも正確にトルクを効かせることができます。</p>
            </div>
        </div>
    </section>
    <section id="sec3">
        <div class="h2a">
            <div class="sub">歯の移動スペースはどう作る？</div>
            <h2 class="ttl">歯列スペースの確保様式</h2>
        </div>
        <div class="wrapper">
            <h3 class="h3a">歯並びが悪い原因の多くは<br>スペース不足！</h3>
            <div class="gap30">
                <picture class="picc">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space.png.webp">
                    <img src="/assets/img/orthodontics/principle/space.png" alt="" width="285" height="150">
                </picture>
                <p class="txta">不正咬合（歯並びが悪い）の原因は、多くの場合「歯のスペースの不足」にあります。顎の骨が小さい・歯が大きい・歯が多いなどの理由で歯が並ぶスペースが足りなくなることで、歯がガタガタにねじれて生えたり、前歯が押し出されて出っ歯になったりしてしまいます。</p>
                <p class="txta">スペース不足のまま無理やり歯並びを整えようとしても、歯をうまく並べられなかったり、治療完了後に後戻りしてしまったりします。</p>
                <p class="txta">ここでは、特に叢生（ガタガタの歯並び）や出っ歯の矯正で必要となる歯列スペースの確保の方法についてご紹介します。</p>
            </div>

            <h3 id="sec3_1" class="h3a"><span class="hnum">スペース確保の方法<span class="numGrp"><span class="num">1</span>/5</span></span>IPR（歯を少し削る）</h3>
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space1.jpg.webp">
                    <img src="/assets/img/orthodontics/principle/space1.jpg" alt="">
                </picture>
                <p class="txta">IPRは、歯と歯の間のエナメル質をわずかに削る処置で、ほとんどすべての症例でおこなう処置です。<br>削る量は約0.1〜0.6ミリ程度とわずかです。侵襲性が低い処置ではありますが、確保できるスペースが少ないことが弱点です。IPRだけでは十分なスペースが確保できない場合、別な手法でもスペースを確保しなければいけません。</p>
            </div>

            <h3 class="h3a"><span class="hnum">スペース確保の方法<span class="numGrp"><span class="num">2</span>/5</span></span>歯列弓を広げる</h3>
            <div class="gap30">
                <picture class="picc">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space2.png.webp">
                    <img src="/assets/img/orthodontics/principle/space2.png" alt="" width="347" height="100">
                </picture>
                <p class="txta">歯列のアーチを外側に広げることによってスペースを確保するという方法です。先ほどのIPRと比べてより多くのスペースを確保できます。<br>歯列弓がV字型だったり、歯が一部内側を向いているような症例において有効な方法です。</p>
                <div class="pic_space2_1">
                    <picture class="pica">
                        <source type="image/webp" srcset="/assets/img/orthodontics/principle/space2_1.jpg.webp">
                        <img src="/assets/img/orthodontics/principle/space2_1.jpg" alt="">
                    </picture>
                    <p class="note">←V字型歯列弓の例。歯列弓を広げることで2・3番の整列スペースを確保できる。</p>
                </div>
                <p class="txta">歯列弓の拡大はいくつか注意しなければいけない点があり、以下のようなときには別な方法でスペースを作る必要があります。</p>
                <p class="txta"><em>✓2・3番が前に出ることになるため、出っ歯な印象になるリスクがある</em>（出っ歯気味な症例には使えない）</p>
                <p class="txta"><em>✓歯列を広げるため、頬の印象が変わるリスクがある</em>（顔貌変化を気にする場合は使えない）</p>
                <p class="txta">また歯列弓を広げても顎の骨の形は変わらないため、歯列弓の拡大には限度もあり、必要なスペースを確保しきれない場合もあります。<br>そこで検討するのが、次の「親知らず抜歯（歯列の遠心移動）」や「小臼歯抜歯」という方法です。</p>
            </div>

            <h3 class="h3a"><span class="hnum">スペース確保の方法<span class="numGrp"><span class="num">3</span>/5</span></span>歯列を後方に移動する</h3>
            <div class="gap30">
                <picture class="picc">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space3.png.webp">
                    <img src="/assets/img/orthodontics/principle/space3.png" alt="" width="347" height="130">
                </picture>
                <p class="txta">歯列の幅を広げるのではなく、歯列全体を後方（遠心）に移動することによってスペースを確保する方法です。通常、親知らずを上下4本抜歯したうえで全体を後方に移動させます。</p>
                <p class="txta">歯列弓拡大とくらべて頬の印象もそれほど変わらず、また出っ歯気味であっても選択できる方法です。ただ、すべての歯を後方に移動することになるため治療期間が長くなり、費用も高くなりがちです。また、もともと奥歯の噛み合わせに問題がない歯並びの場合、奥歯を動かすことによってかみ合わせに違和感が生じるリスクもあります。</p>
                <p class="txta">こうした費用面と噛み合わせの乱れリスクを回避する選択肢が、次の「小臼歯抜歯」という方法です。</p>
            </div>

            <h3 class="h3a"><span class="hnum">スペース確保の方法<span class="numGrp"><span class="num">4</span>/5</span></span>小臼歯を抜歯する</h3>
            <div class="gap30">
                <picture class="pica s">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space4.jpg.webp">
                    <img src="/assets/img/orthodontics/principle/space4.jpg" alt="">
                </picture>
                <p class="txta">小臼歯を抜いてスペースを確保する方法です。歯列弓を拡大することにより生じる「前歯の前方移動」と、歯列を後方移動することにより生じる「奥歯の噛み合わせの乱れ・治療費の増大」の両方を回避できる方法です。それゆえ、「出っ歯気味だが奥歯の歯並びは気になっていない」という歯並びの方に有効な方法です。</p>
                <p class="txta">不正咬合が軽度な場合、小臼歯を抜歯すると“スペースが空きすぎてしまう”ことがあります。こうした場合に用いるのが次の「（抜歯するのではなく）セラミックで歯を小さくする」という方法です。</p>
            </div>

            <h3 class="h3a"><span class="hnum">スペース確保の方法<span class="numGrp"><span class="num">5</span>/5</span></span>セラミックで歯を小さくする</h3>
            <div class="gap30">
                <picture class="pica">
                    <source type="image/webp" srcset="/assets/img/orthodontics/principle/space5.jpg.webp">
                    <img src="/assets/img/orthodontics/principle/space5.jpg" alt="" width="280" height="220">
                </picture>
                <p class="txta">この方法は、小臼歯を抜くのではなく「小臼歯を小さくすることによってスペースを作る」という方法です。<br>この方法は以下の条件が揃ったときにとても有効な手段です。</p>
                <h4 class="h5a">適応条件：</h4>
                <p class="txta">
                    ①IPRだけではスペースが足りない<br>
                    ②歯列弓の拡大・後方移動が不適切<br>
                    ③小臼歯を抜歯するしか方法がない<br>
                    ④小臼歯を抜歯すると隙間ができる（そこまでスペースを必要としない）
                </p>
                <p class="txta">上のイラストのように、歯冠部を削り、そこに「小さめに作った被せ物」を設置します。これによって抜歯せずに必要十分なスペースを確保することができます。</p>
                <p class="txta">この方法は一般的な矯正歯科ではあまり選択できない方法です。</p>
            </div>
        </div>
    </section>
    <section id="sec4">
        <div class="h2a">
            <h2 class="ttl">治療計画立案の流れ</h2>
        </div>
        <div class="wrapper">
            <p class="txta">ここでは、矯正医がどのような手順や考え方で治療計画を立ていくかをご紹介します。</p>

            <div id="planning1" class="tglBox sec">
                <input type="checkbox" id="planning1_open" class="tglBox_open">
                <h3 class="tglHead">
                    <label class="tglHeadWrap" for="planning1_open">
                        <span class="hnum">治療計画立案の流れ<span class="numGrp"><span class="num">1</span>/3</span></span>
                        <span class="txt">まずは診断に<br>必要な資料を集める</span>
                    </label>
                </h3>
                <div class="tglBody">
                    <div class="tglBodyWrap">
                        <p class="txta">まずは診断に必要な情報を集め、問題点を把握するところから始めます。</p>
                        <h4 class="h4a">診断のために必要となる資料</h4>
                        <p class="txta">
                            ・顔貌写真（様々な角度・表情のお顔の写真）<br>
                            ・口腔内写真<br>
                            ・石膏模型 ／ 歯列スキャンデータ<br>
                            ・レントゲン写真<br>
                            ・CTデータ（3DのX線写真）
                        </p>
                    </div>
                </div>
            </div>

            <div id="planning2" class="tglBox">
                <input type="checkbox" id="planning2_open" class="tglBox_open">
                <h3 class="tglHead">
                    <label class="tglHeadWrap" for="planning2_open">
                        <span class="hnum">治療計画立案の流れ<span class="numGrp"><span class="num">2</span>/3</span></span>
                        <span class="txt">症例の問題点を探す</span>
                    </label>
                </h3>
                <div class="tglBody">
                    <div class="tglBodyWrap">
                        <p class="txta">つぎに、集めた資料を元に不正咬合の原因や治療の妨げとなる要素などの問題点を見つけ出します。注目すべき点はいくつかあるため順番にご紹介します。</p>

                        <h4 class="h4a">臼歯関係</h4>
                        <div class="gap20">
                            <picture class="picc">
                                <source type="image/webp" srcset="/assets/img/orthodontics/principle/planning2_1.png.webp">
                                <img src="/assets/img/orthodontics/principle/planning2_1.png" alt="" width="306" height="105">
                            </picture>
                            <p class="txta">歯を嚙み合わせた際に「Ⅰ級」の画像のとおり第一臼歯の山と谷がかっちり正常に合わさっている状態が理想的です。Ⅱ級とⅢ級はそれぞれ臼歯関係が前後にずれている場合で、出っ歯や受け口の原因となります。</p>
                        </div>

                        <h4 class="h4a">顎間関係</h4>
                        <div class="gap20">
                            <p class="txta">元々の顎の位置や角度に異常がないか確認します。「上顎・下顎の前後位置」「下顎の角度が大きい・小さい」「咬合平面の傾き」などです。</p>
                            <picture class="picc">
                                <img src="/assets/img/orthodontics/principle/planning2_2.png" alt="" width="274" height="100">
                            </picture>
                            <p class="txta">これらの異常が著しい場合、出っ歯・受け口・過蓋咬合・開咬などの原因となります。</p>
                        </div>

                        <h4 class="h4a">前歯の前後位置・<br>噛み合わせの深さ</h4>
                        <div class="gap20">
                            <p class="txta">次に上下の前歯の前後位置をチェックします。前歯の位置関係に異常がある場合は横顔のEラインが崩れてしまいます。必要に応じて前後の歯の位置や角度の修正を検討します。</p>
                            <picture class="picc">
                                <img src="/assets/img/orthodontics/principle/planning2_3.png" alt="" width="300" height="300">
                            </picture>
                        </div>

                        <h4 class="h4a">歯を並べるスペース</h4>
                        <div class="gap20">
                            <p class="txta">歯が重なり合って並ぶ「叢生」や、横から見た際の歯並びが山なりになっている「スピーカーブ」や前歯が前側に倒れている「上顎前突・下顎前突」の場合は、歯が窮屈に並んでいるところを綺麗に並べ直すため、その分のスペースが必要となります。</p>
                            <picture class="picc">
                                <source type="image/webp" srcset="/assets/img/orthodontics/principle/planning2_4.png.webp">
                                <img src="/assets/img/orthodontics/principle/planning2_4.png" alt="" width="309" height="100">
                            </picture>
                            <p class="txta">例えばこのように叢生がある歯並びをスペースを確保せずに配列すると、歯列は前方に拡大され口元が突出した印象となってしまいます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="planning3" class="tglBox">
                <input type="checkbox" id="planning3_open" class="tglBox_open">
                <h3 class="tglHead">
                    <label class="tglHeadWrap" for="planning3_open">
                        <span class="hnum">治療計画立案の流れ<span class="numGrp"><span class="num">3</span>/3</span></span>
                        <span class="txt">治療ゴールをイメージし、<br>治療計画を立てる</span>
                    </label>
                </h3>
                <div class="tglBody">
                    <div class="tglBodyWrap">
                        <p class="txta">上記のような情報を踏まえたうえで、治療ゴールをイメージし治療計画を立てていきます。</p>

                        <h4 class="h4a">Ⅰ級仕上げ・Ⅱ級仕上げ・<br>Ⅲ級仕上げを検討</h4>
                        <div class="gap20">
                            <p class="txta">臼歯関係がもともとⅠ級の場合は、Ⅰ級仕上げにします。Ⅰ級仕上げとは、歯並びの最終ゴールをⅠ級で終えることです。もともと正常である臼歯関係をいかに崩さずに歯並びが悪い部分を改善するかがポイントとなります。</p>
                            <p class="txta">元々がⅡ級やⅢ級の場合にも、原則は「Ⅰ級仕上げ」を目指します。しかし、状態によってはⅡ級やⅢ級が重篤で「Ⅱ級仕上げ・Ⅲ級仕上げ」にしかできない場合や、「Ⅱ級仕上げ・Ⅲ級仕上げ」にするほうが無理にⅠ級を目指すよりも全体的にバランスがとれる場合もあります。</p>
                            <picture class="picc">
                                <img src="/assets/img/orthodontics/principle/planning3_1.png" alt="" width="310" height="88">
                            </picture>
                            <p class="txta">Ⅰ級、Ⅱ級、Ⅲ級どの仕上げであっても、前歯の噛み合わせが正常であり、かつ小臼歯の山と谷が綺麗に合わさっている状態となります。</p>
                        </div>

                        <h4 class="h4a">前歯の前後関係・<br>確保するスペースの検討</h4>
                        <p class="txta">前歯の前後関係をどのように修正するか検討します。加えて、叢生やスピーカーブなどを修正する場合はどの程度のスペースを確保する必要があるか確認します。</p>

                        <h4 class="h4a">スペースの確保様式を検討する</h4>
                        <p class="txta">必要なスペースをどのような方法で確保するか検討します。スペース確保様式は前の章でご紹介した通り、小臼歯の抜歯やIPRなどがあります。</p>

                        <h4 class="h4a">歯の1本1本の動きを検討する</h4>
                        <div class="gap20">
                            <p class="txta">最後にそれぞれの歯をどのような順番でどのように動かすのかおおよその治療方針を決めていきます。</p>
                            <p class="txta">マウスピース矯正の場合は、歯科医師が決めた治療方針をもとにマウスピースメーカーが治療設計をおこないます。治療設計は歯科医師が必ずチェックし、もし設計に問題がある場合は医師がより具体的に移動方法を指示し修正していきます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec5">
        <div class="h2a">
            <h2 class="ttl">どんな歯並びでも<br>矯正できるの？</h2>
        </div>
        <div class="wrapper">
            <p class="txta">歯並びの乱れにはさまざまな種類があります。次のページでは、矯正できる不正咬合についてご紹介いたします。ご自身に当てはまる不正咬合があるか見てみてください。</p>
        </div>
        <div class="link_nextPage">
            <div class="ttl">次ページ</div>
            <div class="link"><a href="/orthodontics/applicable_cases">矯正できる歯並び ／ <br>矯正できない歯並び</a></div>
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
<?php include(__DIR__."/include/ortho_footer_nav.php"); ?>
</main>

<?php include(__DIR__."/include/footer.php"); ?>

</div><!-- /.bodyWrapper -->
</body>
</html>
