<div id="floatBtn" class="hide">
<?php /*
<?php if (isset($btn_campaign_txt)): // キャンペーンボタン ?>
    <a class="btn_campaign" href="/orthodontics/monitor/" target="_blank"><span><?= $btn_campaign_txt ?></span></a>
<?php elseif (str_starts_with($_SERVER['REQUEST_URI'], '/orthodontics/case/')): // 矯正症例写真ページ ?>
    <label class="btn_search" for="case_search_open">歯並びで<br>絞り込む</label>
<?php elseif (str_starts_with($_SERVER['REQUEST_URI'], '/orthodontics/')): // 矯正カテゴリのページ ?>
    <a class="btn_mouthpiece" href="/orthodontics/plan_mouthpiece?attr=plan"><span class="price"><span class="num">19.8</span><br>万円〜</span><span class="txt">マウスピース矯正<br>(全顎)はこちら</span></a>
<?php elseif (str_starts_with($_SERVER['REQUEST_URI'], '/child-orthodontics/2nd_phase')): // 小児矯正2期のページ ?>
    <a class="btn_monitor" href="/orthodontics/monitor/" target="_blank">
        <picture class="pic1">
            <source type="image/webp" srcset="/assets/img/child-orthodontics/btn_monitor.png.webp">
            <img src="/assets/img/child-orthodonticsf/btn_monitor.png">
        </picture>
    </a>
<?php elseif (str_starts_with($_SERVER['REQUEST_URI'], '/recruit/')): // 求人情報ページ ?>
    <a class="btn btn_recruit" href="#entry"><svg><use xlink:href='#reserv'></use></svg>応募する</a>
<?php else: ?>
    <label class="btn btn_reserv" for="form_open"><svg><use xlink:href='#reserv'></use></svg>来院予約</label>
    <?php /* <a class="btn btn_tel" href="tel:0952270412"><svg><use xlink:href='#tel2'></use></svg>電話予約</a> * ?>
<?php endif; ?>
*/ ?>
</div>
<footer>
    <picture class="footer_pic">
        <source type="image/webp" srcset="/assets/img/footer_pic-sp.jpg.webp">
        <img src="/assets/img/footer_pic-sp.jpg">
    </picture>
    <div class="info">
        <div class="wrapper">
            <div class="access">
                <a class="logoGrp" href="<?= $logo_url ?>">
                    <div>
                        <img class="logo" src="/assets/img/logo.svg">
                    </div>
                    <div>
                        <div class="txt"><?= $logo_txt ?></div>
                        <img class="logo_txt1" src="/assets/img/logo_txt1.svg" alt="スマイル髙城歯科">
                    </div>
                </a>
                <div class="address">
                    <svg><use xlink:href='#address'></use></svg>
                    <p>〒840-0011 佐賀県佐賀市 北川副町江上95-1（<a href="https://goo.gl/maps/yVfGhwsGEL8o7hap8" target="_blank" rel="noopener noreferrer">マップを開く</a>）</p>
                </div>
                <table class="hours">
                    <thead>
                        <tr>
                            <th>診療時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th class="holiday">日/祝</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>10:00～14:00</th>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>／</td>
                            <td>●</td>
                            <td>●</td>
                            <td class="star">★</td>
                        </tr>
                        <tr>
                            <th>16:00～18:00</th>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                            <td>／</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                        </tr>
                    </tbody>
                </table>
                <p class="hoursTxt">★…日曜・祝日の診療時間は10:00～15:00<br>【休診日】水曜・木曜</p>
            </div>
            <div class="border"></div>
            <div class="contact">
                <p class="txt1">まずは無料カウンセリング予約から<br>お気軽にご来院ください</p>
                <label class="btn_reserv" for="form_open"><svg><use xlink:href='#reserv'></use></svg>24時間受付 WEB予約</label>
                <div class="tel1"><svg><use xlink:href='#tel2'></use></svg>お電話での予約はこちら</div>
                <a class="tel2" href="tel:0952270412">0952-27-0412</a>
                <p class="txt3">※診療時間内でお受けできます。</p>
                <div class="information-area"></div>
            </div>
        </div>
        <div class="instagram_link"><a href="https://www.instagram.com/smileshika.saga/" target="_blank" rel="noopener noreferrer"><span><svg><use xlink:href="#sns_instagram"></use></svg></span>Instagram</a></div>
    </div>
    <div class="lineFoot">
        <div class="wrapper">
            <p class="copyright">&copy; SMILE TAKAJO DENTAL</p>
            <a class="toTop" href="#"></a>
        </div>
    </div>
</footer>

<div id="pcLayout">
    <div class="bgvideo">
        <video id="pc_bgvideo" data-src="/assets/movie/bg01.mp4" type="video/mp4" autoplay muted loop playsinline></video>
        <script>
            (function(){
                const mql = window.matchMedia('(min-width: 768px)');
                function setVideoSrc(){
                    const pc_bgvideo = document.getElementById('pc_bgvideo');
                    if (mql.matches) {
                        pc_bgvideo.src = pc_bgvideo.dataset.src;
                        pc_bgvideo.load();
                    }
                }
                document.addEventListener('DOMContentLoaded', setVideoSrc);
                mql.addEventListener('change', setVideoSrc);
            })();
        </script>
    </div>
    <div class="pcLeft">
        <a class="logoGrp" href="/">
            <span class="logo"></span>
            <span class="logo_txt1"></span>
        </a>
    </div>
    <div class="pcRight">
        <div class="qrcode">
            <p class="txt">スマホサイトは<br>こちら</p>
            <div class="box"><img src="/assets/img/qrcode.svg"></div>
        </div>
    </div>
</div>

<input type="checkbox" id="form_open" class="popup_open">
<div id="form_popup" class="popupWrap">
    <label class="bg" for="form_open"></label>
    <div class="popup_body">
        <div class="reserv_info">
            <div class="reserv_ttl">無料カウンセリング予約<label class="form_close" for="form_open"><svg><use xlink:href='#close'></use></svg></label></div>
            <div class="wrapper">
                <div class="contact">
                    <p class="txt1">いつでも簡単ご予約</p>
                    <label class="btn_inputArea_open" for="inputArea_open"><svg class="ico_reserv"><use xlink:href='#reserv'></use></svg>24時間受付 WEB予約<svg class="arrow"><use xlink:href='#arrow_right2'></use></svg></label>
                    <div class="txt2">お電話での予約はこちら</div>
                    <a class="tel" href="tel:0952270412"><svg><use xlink:href='#tel2'></use></svg>0952-27-0412</a>
                    <p class="txt3">※下記の診療時間内でお受けできます。</p>
                    <div class="information-area"></div>
                </div>
                <div class="hours">
                    <table>
                        <thead>
                            <tr>
                                <th>診療時間</th>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th>土</th>
                                <th class="holiday">日/祝</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>10:00～14:00</th>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>／</td>
                                <td>●</td>
                                <td>●</td>
                                <td class="star">★</td>
                            </tr>
                            <tr>
                                <th>16:00～18:00</th>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                                <td>／</td>
                                <td>●</td>
                                <td>●</td>
                                <td>／</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>★…日曜・祝日の診療時間は10:00～15:00<br>【休診日】水曜・木曜</p>
                </div>
            </div>
            <div class="form_ctrl">
                <label class="form_ctrl_close" for="form_open"><svg><use xlink:href='#close'></use></svg>すべて閉じる</label>
            </div>
        </div>
        <input type="checkbox" id="inputArea_open">
        <div class="reserv_form">
            <div class="inputLayer">
                <h2 class="reserv_ttl form_ttl">
                    WEB予約お申込フォーム
                    <label class="form_back" for="inputArea_open"><svg><use xlink:href='#back'></use></svg></label>
                    <label class="form_close" for="form_open"><svg><use xlink:href='#close'></use></svg></label>
                </h2>
                <div class="wrapper">
                    <form id="contact_form" name="contact_form" action="" method="">
                        <dl class="formBox">
                            <div class="information-area"></div>
                            <div class="formHead">カウンセリング希望日時（水曜・木曜休診）</div>
                            <!-- ↓第一希望（年月日、時間）↓ -->
                            <div class="formUnit group">
                                <dt class="formUnitHead">
                                    <span class="item">第一希望</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="inputText inputText2">
                                        <picture class="pic pic1">
                                            <source type="image/webp" srcset="/assets/img/calender.png.webp">
                                            <img src="/assets/img/calender.png">
                                        </picture>
                                        <input type="text" id="date1" name="date1" maxlength="20" placeholder="日付を選択 ▼" readonly="">
                                    </div>
                                    <div class="checkBoxGrp timeGrp">
                                        <label class="inputCheck inputCheck1 time1 type1">
                                            <input id="time1-1" type="checkbox" name="time1[]" value="10:00～12:00" disabled="disabled">
                                            <span>10:00～12:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time1 type1">
                                            <input id="time1-2" type="checkbox" name="time1[]" value="12:00～14:00" disabled="disabled">
                                            <span>12:00～14:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time1 type3" style="display: none;">
                                            <input id="time1-4" type="checkbox" name="time1[]" value="10:00～15:00" disabled="disabled">
                                            <span>10:00～15:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time1 type1">
                                            <input id="time1-5" type="checkbox" name="time1[]" value="16:00～19:00" disabled="disabled">
                                            <span>16:00～19:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time1 type1">
                                            <input id="time1-7" type="checkbox" name="time1[]" value="何時でもOK" disabled="disabled">
                                            <span>何時でもOK</span>
                                        </label>
                                    </div>
                                </dd>
                            </div>
                            <!-- ↓第二希望（年月日、時間）↓ -->
                            <div class="formUnit group">
                                <dt class="formUnitHead">
                                    <span class="item">第二希望</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="inputText inputText2">
                                        <picture class="pic pic1">
                                            <source type="image/webp" srcset="/assets/img/calender.png.webp">
                                            <img src="/assets/img/calender.png">
                                        </picture>
                                        <input type="text" id="date2" name="date2" maxlength="20" placeholder="日付を選択 ▼" readonly="">
                                    </div>
                                    <div class="checkBoxGrp timeGrp">
                                        <label class="inputCheck inputCheck1 time2 type1">
                                            <input id="time2-1" type="checkbox" name="time2[]" value="10:00～12:00" disabled="disabled">
                                            <span>10:00～12:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time2 type1">
                                            <input id="time2-2" type="checkbox" name="time2[]" value="12:00～14:00" disabled="disabled">
                                            <span>12:00～14:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time2 type3" style="display: none;">
                                            <input id="time2-4" type="checkbox" name="time2[]" value="10:00～15:00" disabled="disabled">
                                            <span>10:00～15:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time2 type1">
                                            <input id="time2-5" type="checkbox" name="time2[]" value="16:00～19:00" disabled="disabled">
                                            <span>16:00～19:00</span>
                                        </label>
                                        <label class="inputCheck inputCheck1 time2 type1">
                                            <input id="time2-7" type="checkbox" name="time2[]" value="何時でもOK" disabled="disabled">
                                            <span>何時でもOK</span>
                                        </label>
                                    </div>
                                </dd>
                            </div>

                            <!-- ↓受けたい治療↓ -->
                            <div class="formUnit">
                                <dt class="formUnitHead">
                                    <span class="item">受けたい治療</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="checkBoxGrp active">
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-1" type="checkbox" name="purpose[]" value="マウスピース矯正">
                                            <span>マウスピース矯正</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-2" type="checkbox" name="purpose[]" value="マウスピース矯正（モニター）">
                                            <span>マウスピース矯正（モニター）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-14" type="checkbox" name="purpose[]" value="幼児・小学生矯正（1期矯正）">
                                            <span>幼児・小学生矯正（1期矯正）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-15" type="checkbox" name="purpose[]" value="中学・高校生矯正（2期矯正）">
                                            <span>中学・高校生矯正（2期矯正）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-3" type="checkbox" name="purpose[]" value="インプラント">
                                            <span>インプラント</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-12" type="checkbox" name="purpose[]" value="ウルトラフィットデンチャー（総入れ歯）">
                                            <span>ウルトラフィットデンチャー（総入れ歯）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-13" type="checkbox" name="purpose[]" value="美デンチャー（部分入れ歯）">
                                            <span>美デンチャー（部分入れ歯）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-4" type="checkbox" name="purpose[]" value="被せ物・詰め物治療">
                                            <span>被せ物・詰め物治療</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-5" type="checkbox" name="purpose[]" value="ラミネートべニア治療">
                                            <span>ラミネートべニア治療</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-6" type="checkbox" name="purpose[]" value="セラミック矯正">
                                            <span>セラミック矯正</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-7" type="checkbox" name="purpose[]" value="ホワイトニング">
                                            <span>ホワイトニング</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-8" type="checkbox" name="purpose[]" value="精密根管治療">
                                            <span>精密根管治療</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-9" type="checkbox" name="purpose[]" value="精密根管治療（モニター）">
                                            <span>精密根管治療（モニター）</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-10" type="checkbox" name="purpose[]" value="歯周病治療">
                                            <span>歯周病治療</span>
                                        </label><br>
                                        <label class="inputCheck inputCheck1">
                                            <input id="purpose-11" type="checkbox" name="purpose[]" value="審美複合治療">
                                            <span>審美複合治療</span>
                                        </label>
                                        <p class="comment">※自分に適した治療がよくわからない方はこちらを選んでください。（当院は精密根管治療を除き、虫歯だけの治療はおこなっていません。）</p>
                                    </div>
                                </dd>
                            </div>

                            <!-- ↓氏名↓ -->
                            <div class="formUnit">
                                <dt class="formUnitHead">
                                    <span class="item">氏名</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="inputText inputText1">
                                        <input type="text" id="name" name="name" maxlength="20" placeholder="笑顔 花子">
                                    </div>
                                </dd>
                            </div>

                            <!-- ↓メールアドレス↓ -->
                            <div class="formUnit">
                                <dt class="formUnitHead">
                                    <span class="item">メールアドレス</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="inputText inputText1">
                                        <input type="text" id="email" name="email" maxlength="50" placeholder="例）smile@smileshika.net">
                                    </div>
                                </dd>
                            </div>

                            <!-- ↓電話番号↓ -->
                            <div class="formUnit">
                                <dt class="formUnitHead">
                                    <span class="item">電話番号</span>
                                    <span class="required" aria-required="true">必須</span>
                                </dt>
                                <dd class="formUnitBody">
                                    <div class="inputText inputText1">
                                        <input type="text" id="tel" name="tel" maxlength="20" placeholder="例）0952-27-0412">
                                    </div>
                                </dd>
                            </div>
                            
                            <div class="privacyBox">
                                <label class="inputCheck inputCheck2">
                                    <input type="checkbox" id="privacy" name="privacy" value="個人情報保護方針に同意する" checked>
                                    <span><a class="link" href="/privacy" target="_blank">個人情報保護方針</a>に同意する</span>
                                </label>
                            </div>
                        </dl>
<?php /*
                        <div id="btnForm" class="btn_entry">予約を申し込む<svg><use xlink:href='#arrow_right'></use></svg></div>
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
*/ ?>
                    </form>
                </div>
                <div class="form_ctrl">
                    <label class="form_ctrl_back" for="inputArea_open"><svg><use xlink:href='#back'></use></svg>予約TOPに戻る</label>
                    <label class="form_ctrl_close" for="form_open"><svg><use xlink:href='#close'></use></svg>すべて閉じる</label>
                </div>
            </div>
        </div>
        <div class="thanksBox">
            <div class="thanks_popup_body">
                <div class="txtBox">
                    <h2 class="thanksHead">お申し込みいただき<br>誠にありがとうございます</h2>
                    <p class="mainText"><span class="b">まだ予約は確定していません。お電話で日程確認・調整の上、予約が確定します。<br></span>ご予約時間調整のため、担当スタッフよりご連絡します。<br>お電話でのご連絡の場合、<br>0952-27-0412 より発信します。<br>お手数をおかけしますが、ご対応くださいますようお願いいたします。</p>
                </div>
                <label class="thanks_close" for="form_open"><svg><use xlink:href='#close'></use></svg>閉じる</label>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/modernizr-custom.js?date=20241029"></script>
<script src="/assets/js/jquery.cookie.min.js"></script>

<!-- jquery validate -->
<script type="text/javascript" src="/assets/js/jquery-validation/jquery.validate.min.js"></script>

<!-- jquery-ui -->
<script type="text/javascript" src="/assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui-touch-punch-master/jquery.ui.touch-punch.min.js"></script>

<script src="/assets/js/slick-1.8.1/slick.min.js"></script>
<script src="/assets/js/calendarSettings.min.js?date=20250728"></script>
<script src="/assets/js/common.min.js?date=20250314"></script>
