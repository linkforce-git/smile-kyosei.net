$(function(){
    // svg読み込み
    $.ajax({
        type: 'get',
        url: '/assets/svg/icons.svg?date=20240618'
    }).done(function(data) {
        let svg = $(data).find('svg');
        $('body #svgfile').prepend(svg);
    });

    // 全体で使う変数
    let window_wsize = $(window).width();
    let window_hsize = window.innerHeight;
    let urlHash = location.hash;
    let scroll = $(window).scrollTop();
    let spLayout = (window_wsize < 768);

    // リサイズ時の処理
    $(window).resize(function(){
        window_wsize = $(window).width();
        window_hsize = window.innerHeight;
        spLayout = (window_wsize < 768);
    }).trigger('resize');

    // 矯正カテゴリのH2追随の事前準備
    if ($('body#orthodontics').length) {
        $('.h1a').each(function(){
            $(this).wrap('<div class="h1a_wrap"></div>');
        });
    }
    if ($('body.ortho').length) {
        $('.h2a').each(function(){
            $(this).prepend('<div class="bg"></div>');
            $(this).wrap('<div class="h2a_wrap"></div>');
        });
    }
    // コラムのH2追随の事前準備
    if ($('body.column').length) {
        $('.mainContent h2').each(function(){
            $(this).prepend('<span class="bg"></span>');
            $(this).wrap('<div class="h2_wrap" style="height:'+$(this).outerHeight()+'px;"></div>');
        });
    }

    // スクロールイベント
    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        changeActive();

        // ヘッダーの状態切り替え
        if (!spLayout && scroll < 60) {
            $('header').addClass('top');
        } else {
            $('header').removeClass('top');
        }

        // フロートボタンの表示・非表示切り替え
        let floatBtnEnd = $('#contactArea').length ? $('#contactArea') : $('footer');
        if ( $('body.recruit').length ) {
            floatBtnEnd = $('#entry').length ? $('#entry') : floatBtnEnd; // 求人ページ
        }
        if ((scroll > window_hsize) && scroll < floatBtnEnd.offset().top - window_hsize - 1) {
            $('#floatBtn').removeClass('hide');
        } else {
            $('#floatBtn').addClass('hide');
        }

        // 固定背景の表示切り替え
        $('.fixedBg').each(function(){
            if ($(this).is(':visible') && scroll >= $(this).offset().top - window_hsize - 1 && scroll < $(this).offset().top + $(this).outerHeight()) {
                $(this).addClass('bgShow');
            } else {
                $(this).removeClass('bgShow');
            }
        });

        // 矯正カテゴリのH2追随
        if ($('body#orthodontics').length) {
            $('.h1a_wrap').each(function(){
                if (scroll >= $(this).offset().top - $('header').outerHeight() + 1) {
                    $(this).addClass('fixed');
                } else {
                    $(this).removeClass('fixed');
                }
                if (scroll >= $(this).parent().offset().top + $(this).parent().outerHeight() - window_hsize/2) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
        if ($('body.ortho').length) {
            $('.h2a_wrap').each(function(){
                if (scroll >= $(this).offset().top - $('header').outerHeight() + 1) {
                    $(this).addClass('fixed');
                } else {
                    $(this).removeClass('fixed');
                }
                if (scroll >= $(this).parent().offset().top + $(this).parent().outerHeight() - window_hsize/2) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
        // コラムのH2追随
        if ($('body.column').length) {
            $('.h2_wrap').each(function(){
                if (scroll >= $(this).offset().top - $('header').outerHeight() + 1) {
                    $(this).addClass('fixed');
                } else {
                    $(this).removeClass('fixed');
                }
                if (scroll >= $(this).parent().offset().top + $(this).parent().outerHeight()) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
    }).trigger('scroll');

    // アンカー付きURLでのアクセスした場合
    if (urlHash) {
        // 飛び先の要素がヘッダーに隠れないようにスクロール
        let position = $(urlHash).offset().top - $('header').outerHeight();
        $("html, body").animate({scrollTop:position}, 500, "swing");
    }

    // 訪問履歴の保存（Cookie付与）
    if (Modernizr.cookies && location.pathname.match(/^\/orthodontics\/.+/)) {
        $(window).scroll(function(){
            if (window_hsize < scroll) {
                $.cookie('read'+location.pathname.replace(/\//g, '_'), '1', { expires: 365, path: '/' });
            }
        });
    }

    // スムーススクロール
    $('a[href^="#"]').click(function(){
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        if (target.hasClass('toggleWrap') || target.hasClass('tglBox')) {
            $(href+'_open').prop('checked', true).change();
        }
        if (! target.hasClass('toggleWrap')) {
            let position = target.offset().top - $('header').outerHeight();
            $("html, body").animate({scrollTop:position}, 500, "swing");
        }
        return false;
    });

    // ドラッグスクロールを有効化
    jQuery.prototype.mousedragscrollable = function() {
        let target;
        $(this).each(function(i, e){
            $(e).mousedown(function(event){
                event.preventDefault();
                target = $(e);
                $(e).data({
                    down: true,
                    move: false,
                    x: event.clientX,
                    y: event.clientY,
                    scrollleft: $(e).scrollLeft(),
                    scrolltop: $(e).scrollTop(),
                });
                return false;
            });
            $(e).click(function(event){
                if ($(e).data("move")) {
                    return false;
                }
            });
        });
        $(document).mousemove(function(event){
            if ($(target).data("down")) {
                event.preventDefault();
                let move_x = $(target).data("x") - event.clientX;
                let move_y = $(target).data("y") - event.clientY;
                if (move_x !== 0 || move_y !== 0) {
                    $(target).data("move", true);
                } else {
                    return;
                }
                $(target).scrollLeft($(target).data("scrollleft") + move_x);
                $(target).scrollTop($(target).data("scrolltop") + move_y);
                return false;
            }
        }).mouseup(function(event){
            $(target).data("down", false);
            return false;
        });
    };
    $('.dragScroll').mousedragscrollable();

    // お知らせの読み込み
    document.querySelectorAll('.information-area').forEach(function(area, i) {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/information/ajax/index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                area.insertAdjacentHTML('beforeend', xhr.responseText);
            }
        }
        xhr.send(null);
    });

    // 折り畳みの開閉
    $('.toggle_open').change(function(){
        let target = $('#'+$(this).attr("id").replace(/_open[0-9]*$/g, ''));
        let position = target.offset().top - $('header').outerHeight();
        $("html, body").animate({scrollTop:position}, 300, "swing");
    });

    // メニューの現在ページをアクティブにする
    //   各ページでcurrent_menuを定義
    //   headerで対応するメニューを定義
//    if( ( typeof current_menu !== 'undefined' ) && ( current_menu.length != 0 ) ) {
//        $('#'+current_menu).addClass('active');
//    }

    // スマホ版メニューの場合、サブメニューを開いたとき対象箇所へ移動
    let no_autoscroll = false;
    if ($('header .btn_menu').is(':visible')) {
        $('.submenu_open, .subnav_open').click(function(){
            $(this).change(function(){
                if ($(this).prop('checked')) {
                    let startpos = $('#navGrp1').offset().top;
                    let targetpos = $('#'+$(this).attr("id")).parent().offset().top;
                    let movepos = targetpos - startpos;
                    $("header nav > .wrapper").animate({scrollTop:movepos}, 500, "swing");
                }
            });
        });
    }

    // スマホ版メニューの場合、メニューを開いた際に対象のサブメニューを開く
    //   設定例：<script type="text/javascript">let opened_menu = ['menu-guide_open', 'ceramic_open'];</script>
    //   　　　　「#menu-guide_open:checkbox」「#ceramic_open:checkbox」のチェックボックスがチェック済みになる。
    if ($('header .btn_menu').is(':visible')) {
        $('#menu_open').change(function(){
            if ($(this).prop('checked')) { // メニューオープン時
                if( ( typeof opened_menu !== 'undefined' ) && ( opened_menu.length != 0 ) ) {
                    let mvtarget = '';

                    // メニューを開く
                    setTimeout(function(){

                        $.each(opened_menu, function(i, val) {
                            let menu_name = '#'+val+':checkbox';
                            if( $(menu_name).length ) {
                                $(menu_name).prop('checked', true).change();

                                if( mvtarget == '' ) {
                                    mvtarget = menu_name;
                                }
                            }
                        });
                    }, 300);

                    // 開いたメニューにスクロール
                    setTimeout(function(){
                        // 移動
                        let startpos = $('#navGrp1').offset().top;
                        let targetpos = $(mvtarget).parent().offset().top;
                        let movepos = targetpos - startpos;
                        $("header nav > .wrapper").animate({scrollTop:movepos}, 500, "swing");
                    }, 500);

                    // メニューをアクティブに（.navHead2、.navHead3）
                    if( ( typeof current_menu !== 'undefined' ) && ( current_menu.length != 0 ) ) {
                        setTimeout(function(){
                            $('#'+current_menu).addClass('active1');
                        }, 1000);
                        setTimeout(function(){
                            $('#'+current_menu).removeClass('active1');
                            $('#'+current_menu).addClass('active2');
                        }, 1300);
                    }
                } else {
                    // メニューをアクティブに（.navHead1）
                    if( ( typeof current_menu !== 'undefined' ) && ( current_menu.length != 0 ) ) {
                        setTimeout(function(){
                            $('#'+current_menu).addClass('active1');
                        }, 500);
                        setTimeout(function(){
                            $('#'+current_menu).removeClass('active1');
                            $('#'+current_menu).addClass('active2');
                        }, 800);
                    }
                }
            } else { // メニュークローズ時、サブメニューを閉じる
                $('.subnav_open').prop('checked', false);
                $('.submenu_open').prop('checked', false);
                setTimeout(function(){
                    $("header nav > .wrapper").animate({scrollTop:0}, 0, "swing");
                }, 100);

                // メニューを非アクティブに
                $('#'+current_menu).removeClass('active1');
                $('#'+current_menu).removeClass('active2');

            }
        });
    }


    // 電話番号の近くの予約ボタンを押したときにポップアップの動作を変える
    $('#contactArea .btn_reserv, footer .btn_reserv, body.ortho .contactBox .btn, body.ortho .btnWrap .btna:has(+.tel)').click(function(){
        $('#form_popup').addClass('direct');
    });

    // 予約フォームの開閉
    $('#form_open').change(function(){
        if ($(this).prop('checked')) {
            // 予約フォームのポップアップ表示時に仮想URLを発行
            window.dataLayer = window.dataLayer || [];
            dataLayer.push({'trackPageview': '/form', 'event': 'loadready'});
        } else {
            // 予約フォーム全体を閉じた時に、クラスを戻す
            $('#form_popup').removeClass('direct thanks');
        }
    });

    // トップページのFVの高さ調整
    if ($('body#top').length) {
        let show_area_hsize = window_hsize - (spLayout ? 0 : 60);
        let fv_wrapper_hsize = $('#fv>.wrapper').innerHeight();
        if (show_area_hsize < fv_wrapper_hsize) {
            let scale = (show_area_hsize - 110) / (fv_wrapper_hsize - 110);
            $('#fv>.wrapper').css({'transform-origin':'left 90px', 'transform':'scale('+scale+')'});
            $('#fv').css('height', (show_area_hsize + 90)+'px');
            $('#fv .scroll').css('right', '-'+(100 * (1-scale) / scale) +'%');
            $('#fv .scroll').css('bottom', '-'+(40 * (1-scale) / scale) +'px');
        }
    }

    // 「診療の流れ」「治療費案内」ページ
    if ($('body#process, body#price').length) {
        // アンカー付きURLでのアクセスした場合
        if (urlHash) {
            $(urlHash+'_open').prop('checked', true).change();
        }
    }

    // 「良質な医療を提供するための取り組み」ページ
    if ($('body#quality').length) {
        let page = 1;
        let maxPage = $('.effortSec').length + 1;
        while (page < maxPage) {
            if (scroll >= $('#effort'+page+'>.wrapper').offset().top - window_hsize - 1) {
                $('#effort'+page).addClass('show');
                page++;
            } else {
                break;
            }
        }
        let tmpPage = page;
        while (tmpPage < maxPage) {
            $('#effort'+tmpPage).css('height', '100vh');
            tmpPage++;
            if (tmpPage < maxPage) {
                $('#effort'+tmpPage).css('display', 'none');
            } else {
                $('#messageArea').css('display', 'none');
                $('footer').css('height', '0');
                if (!spLayout) {
                    $('.bodyWrapper').css('border-radius', '10px 10px 0 0');
                    $('body').css('padding-bottom', '0');
                }
            }
        }
        $(window).scroll(function(){
            if (page < maxPage && $('#effort'+page).is(':visible') && scroll >= $('#effort'+page+'>.wrapper').offset().top - window_hsize - 1) {
                let tmpPage = page;
                page++;
                setTimeout(function(){
                    $('#effort'+tmpPage).addClass('show');
                },400);
                setTimeout(function(){
                    $('#effort'+tmpPage).css('height', 'auto');
                    tmpPage++;
                    if (tmpPage < maxPage) {
                        $('#effort'+tmpPage).css('display', 'block');
                    } else {
                        $('#messageArea').css('display', 'block');
                        $('footer').css('height', 'auto');
                        if (!spLayout) {
                            $('.bodyWrapper').css('border-radius', '');
                            $('body').css('padding-bottom', '');
                        }
                    }
                },1000);
            }
        });
        $('.pageLink').click(function(){
            let newPage = $(this).data('page');
            while (page < newPage) {
                $('#effort'+page).addClass('show');
                $('#effort'+page).css('height', 'auto');
                page++;
                if (page < maxPage) {
                    $('#effort'+page).css('display', 'block');
                } else {
                    $('#messageArea, footer').css('display', 'block');
                }
            }
            let position = $('#effort'+newPage+'>.wrapper').offset().top - window_hsize;
            $("html, body").animate({scrollTop:position}, 500, "swing");
        });
    }

    // デンチャーページ
    if ($('body#ultra-fit-denture').length) {
        $('.controller').draggable({
            axis: "x", 
            containment: "parent" ,
            drag: function( event, ui ) {
                let tmpW = ui.position.left;
                $(this).next(".inner").children(".imgL").css('width', tmpW);
            }
        });
    }

    // セットアップ画像のカルーセル（フェード切り替え）
    $('.setupList').each(function(i, elem){
        const setupList =  $(elem);
        let setupLen;
        let userInput = false;
        let loopTimeoutID, playTimeoutID;
        setupList.on('init', function(event, slick){
            setupLen = slick.slideCount;
        }).slick({
            arrows: false, //左右の矢印
            fade: true,
            speed: 0, //切り替わりに要するスピード（ミリ秒）
            autoplay: true,
            autoplaySpeed: 120,
            pauseOnFocus: false,
            pauseOnHover: false,
            swipe: false,
            draggable: false,
        }).on('afterChange', function(event, slick, currentSlide){
            if (!userInput && currentSlide >= setupLen - 1) {
                $(this).slick('slickPause');
                loopTimeoutID = setTimeout(function(){
                    setupList.slick('slickGoTo', 0, false);
                }, 1000);
                playTimeoutID = setTimeout(function(){
                    setupList.slick('slickPlay');
                }, 2000);
            }
        });
        if (setupList.next().hasClass('setupRange')) {
            const setupRange =  setupList.next();
            setupRange.val(0).attr('min', 0).attr('max', (setupLen - 1));
            setupList.on('afterChange', function(event, slick, currentSlide){
                setupRange.val(currentSlide).change(); // スライドに合わせてつまみを移動
            });

            setupRange.on('input change', function(){
                setupList.slick('slickGoTo', setupRange.val(), false); // 指定のスライドへ移動
            }).on('mousedown touchstart touchmove keydown', function(){
                userInput = true;
                clearTimeout(loopTimeoutID);
                clearTimeout(playTimeoutID);
                setupList.slick('slickPause');
            }).on('mouseup touchend keyup', function(){
                userInput = false;
                if (setupList.slick('slickCurrentSlide') < setupLen - 1) {
                    playTimeoutID = setTimeout(function(){
                        setupList.slick('slickPlay');
                    }, 1000);
                } else {
                    loopTimeoutID = setTimeout(function(){
                        setupList.slick('slickGoTo', 0, false);
                    }, 1000);
                    playTimeoutID = setTimeout(function(){
                        setupList.slick('slickPlay');
                    }, 2000);
                }
            });
        }
    });
    $('.setupRange').on('input change', function(){
        const activeColor = $(this).css('color');
        const inactiveColor = $(this).parent().css('color').replace('rgb(', 'rgba(').replace(')', ', 0.2)');
        const ratio = (this.value - this.min) / (this.max - this.min) * 100;
        $(this).css('background', `linear-gradient(90deg, ${activeColor} ${ratio}%, ${inactiveColor} ${ratio}%)`);
    });

    // コラム一覧のページ分割、ページ送り機能
    /*
    if ($('.column_archive .columnList').length) {
        let limit = 10;
        let columnList = $('.columnList');
        let columnItems = columnList.children('li:visible');
        let maxPage = Math.ceil(columnItems.length / limit);
        let pageParam = getParam('page');
        let page = ~~pageParam; //pageパラメータを整数化
        // ページ番号を正規化
        if (page < 1) page = 1;
        else if (page > maxPage) page = maxPage;
        // pageパラメータがあった場合はコラム先頭までスクロール
        if (pageParam !== null) {
            $(window).scrollTop(columnList.parent().offset().top);
            // 正規化でページ番号を修正した場合はURLを書き換え
            if (page !== ~~pageParam) {
                history.replaceState(null, '', location.pathname+'?page='+page);
            }
        }

        // ページ外のコラムを非表示
        columnItems.each(function(index){
            if (index < (page-1) * limit || page * limit <= index) {
                $(this).css('display', 'none');
            }
        });

        // ページ送りリンクを追加
        let pager = $('<div class="pager"></div>').insertAfter(columnList);
        // prev
        if (page == 1) {
            pager.append('<span class="prev inactive"></span>');
        } else {
            pager.append('<a class="prev" href="?page='+(page-1)+'"></a>');
        }
        // num
        for (let i = 1; i <= maxPage; i++) {
            if (i == page) {
                pager.append('<span class="num current">'+i+'</span>');
            } else {
                pager.append('<a class="num" href="?page='+i+'">'+i+'</a>');
            }
        }
        // next
        if (page == maxPage) {
            pager.append('<span class="next inactive"></span>');
        } else {
            pager.append('<a class="next" href="?page='+(page+1)+'"></a>');
        }
    }

    function getParam(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    */

    /* ********************************************
    //   表示アニメーション
    /* ******************************************** */
    // 画面内に入った要素を可視化
    function changeActive() {
        $(".ani").each(function(){
            var aniPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = window.innerHeight;
            if (scroll > aniPos - windowHeight*5/6){
                $(this).addClass("active");
            } 
        });
    }

    /* ********************************************
    //   フォーム関連
    /* ******************************************** */

    /*
       予約申し込み（ポップアップ）
    */
    var contactForm = $("form#contact_form");
    //   バリデート
	var contactValidator = contactForm.validate({
		ignore: {},
		rules: {
			date1:{
				required: true,
			},
			'time1[]':{
				required: true,
			},
			date2:{
				required: true,
			},
			'time2[]':{
				required: true,
			},
			'purpose[]':{
				required: true,
			},
			name :{
				required: true,
			},
			email:{
				required: true,
				email: true,
			},
			tel :{
				required: true,
                telnum: true,
			},
			privacy :{
				required: true,
			},
		},
		messages: {
			date1 :{
				required: "第一希望を選択してください",
			},
			'time1[]':{
				required: "第一希望を選択してください",
			},
			date2:{
				required: "第二希望を選択してください",
			},
			'time2[]':{
				required: "第二希望を選択してください",
			},
			'purpose[]':{
				required: "受けたい治療を選択してください",
			},
			name :{
				required: "氏名を入力してください",
			},
			email :{
				required: "メールアドレスを入力してください",
				email: "メールアドレスの形式で入力してください",
			},
			tel :{
				required: "電話番号を入力してください",
                telnum: "電話番号の形式で入力してください",
			},
			privacy :{
				required: "個人情報保護方針をご確認ください",
			},
        },
		groups: {
			datetime1: "date1 time1[]",
			datetime2: "date2 time2[]",
		},
        errorPlacement: function(error, element){
            error.appendTo(element.parent().parent());
        }
	});
	// フォームサブミット（Ajax版）
	$('#btnForm').on('click',function(e){
        e.preventDefault();

		if( contactForm.valid() ){

			// 操作対象のフォーム要素を取得
			var $form = $("#contact_form");

			// 送信ボタンを取得
			var $button = $form.find('#btnForm');

            // disabledの場合無効
            if ( $button.hasClass('disabled') ){
                console.log('button is disabled.');
                return;
            }

			// 送信
			$.ajax({
				url: '/send',
				type: 'post',
				data: $form.serialize(),
				timeout: 10000,  // 単位はミリ秒

				// 送信前
				beforeSend: function(xhr, settings) {
					// ボタンを無効化し、二重送信を防止
                    $button.addClass('disabled');
				},
				// 応答後
				complete: function(xhr, textStatus) {
					// ボタンを有効化し、再送信を許可
                    $button.removeClass('disabled');
				},

				// 通信成功時の処理
                success: function (result, textStatus, xhr) {
					if (result == "success") {
                        // 仮想URLの発行
                        window.dataLayer = window.dataLayer || [];
                        dataLayer.push({'trackPageview': '/thanks', 'event': 'loadready'});

                        // 入力を消してサンクスを表示
                        $form[0].reset();        // 入力値を初期化
                        $('#form_popup').addClass('thanks');

					} else {
                        console.log(result);
						alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
					}
				},

				// 通信失敗時の処理
                error: function (xhr, textStatus, error) {
                    console.log('通信エラー');
                    console.log(xhr);
                    console.log(textStatus);
                    console.log(error);
					alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
				}
			});
		} else {
            $("#form_popup .reserv_form .wrapper").animate({scrollTop: 0}, {queue: false});
        }
	});

    /*
       見学＆業務体験　申込フォーム
    */
    var workplaceTourForm = $("form#workplace_tour_form");
    //   バリデート
    var wtValidator = workplaceTourForm.validate({
        ignore: {},
        rules: {
            wt_name: {
                required: true,
            },
            wt_tel: {
                required: true,
                telnum: true,
            },
            wt_email: {
                required: true,
                email: true,
            },
            tourJoin :{
				required: true,
            },
            wt_privacy: {
                required: true,
            },
        },
        messages: {
            wt_name: {
                required: "氏名を入力してください",
            },
            wt_tel: {
                required: "電話番号を入力してください",
                telnum: "電話番号の形式で入力してください",
            },
            wt_email: {
                required: "メールアドレスを入力してください",
                email: "メールアドレスの形式で入力してください",
            },
            tourJoin :{
                required: "希望を選択してください",
            },
            wt_privacy: {
                required: "個人情報保護方針をご確認ください",
            },
        },
        errorPlacement: function(error, element){
            error.appendTo(element.parent().parent());
        }
    });
    // フォームサブミット（Ajax版）
    $('#btnWorkplaceTourForm').on('click',function(e){
        e.preventDefault();

        if( workplaceTourForm.valid() ){

            // 操作対象のフォーム要素を取得
            var $form = $("#workplace_tour_form");

            // 送信ボタンを取得
            var $button = $form.find('#btnWorkplaceTourForm');

            // disabledの場合無効
            if ( $button.hasClass('disabled') ){
                console.log('button is disabled.');
                return;
            }

            // 送信
            $.ajax({
                url: '/recruit/send',
                type: 'post',
                data: $form.serialize(),
                timeout: 10000,  // 単位はミリ秒

                // 送信前
                beforeSend: function(xhr, settings) {
                    // ボタンを無効化し、二重送信を防止
                    $button.addClass('disabled');
                },
                // 応答後
                complete: function(xhr, textStatus) {
                    // ボタンを有効化し、再送信を許可
                    $button.removeClass('disabled');
                },

                // 通信成功時の処理
                success: function (result, textStatus, xhr) {
                    if (result == "success") {
                        // 仮想URLの発行
                        window.dataLayer = window.dataLayer || [];
                        dataLayer.push({'trackPageview': '/recruit/thanks', 'event': 'loadready'});

                        // 入力を消してサンクスを表示
                        $form[0].reset();        // 入力値を初期化
                        $('#wt_form_thanks_open').prop('checked', true).change();

                    } else {
                        console.log(result);
                        alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
                    }
                },

                // 通信失敗時の処理
                error: function (xhr, textStatus, error) {
                    console.log('通信エラー');
                    console.log(xhr);
                    console.log(textStatus);
                    console.log(error);
                    alert('フォーム送信に失敗しました。時間をおいて再度実行してください。');
                }
            });
        }
    });


	//全角ひらがな･カタカナのみ
	jQuery.validator.addMethod("kana", function(value, element) {
		return this.optional(element) || /^([ァ-ヶーぁ-ん]+)$/.test(value);
		}, "全角ひらがな･カタカナを入力してください"
	);

	//全角ひらがなのみ
	jQuery.validator.addMethod("hiragana", function(value, element) {
		return this.optional(element) || /^([ぁ-ん]+)$/.test(value);
		}, "全角ひらがなを入力してください"
	);

	//全角カタカナのみ
	jQuery.validator.addMethod("katakana", function(value, element) {
		return this.optional(element) || /^([ァ-ヶー]+)$/.test(value);
		}, "全角カタカナを入力してください"
	);

	//半角カタカナのみ
	jQuery.validator.addMethod("hankana", function(value, element) {
		return this.optional(element) || /^([ｧ-ﾝﾞﾟ]+)$/.test(value);
		}, "半角カタカナを入力してください"
	);

	//半角アルファベット（大文字･小文字）のみ
	jQuery.validator.addMethod("alphabet", function(value, element) {
		return this.optional(element) || /^([a-zA-z\s]+)$/.test(value);
		}, "半角英字を入力してください"
	);

	//半角アルファベット（大文字･小文字）もしくは数字のみ
	jQuery.validator.addMethod("alphanum", function(value, element) {
		return this.optional(element) || /^([a-zA-Z0-9]+)$/.test(value);
		}, "半角英数字を入力してください"
	);

	//郵便番号（例:012-3456）
	jQuery.validator.addMethod("postnum", function(value, element) {
//		return this.optional(element) || /^\d{3}\-\d{4}$/.test(value);
		return this.optional(element) || /^\d{3}\-\d{4}$|^[0-9]{7}$/.test(value);
		}, "郵便番号を入力してください（例:123-4567）"
	);

	//携帯番号（例:010-2345-6789）
	jQuery.validator.addMethod("mobilenum", function(value, element) {
		return this.optional(element) || /^0\d0-\d{4}-\d{4}$/.test(value);
		}, "携帯番号を入力してください（例:010-2345-6789）"
	);

	//電話番号（例:012-345-6789）
	jQuery.validator.addMethod("telnum", function(value, element) {
//		return this.optional(element) || /^[0-9-]{12}$/.test(value);
		return this.optional(element) || /^(0\d{1,4}[\s-]?\d{1,4}[\s-]?\d{4})$/.test(value);  //　日本のみ
//		return this.optional(element) || /^(?:\+?\d+-(?:\d+-)?)?\d+(?:-\d+){2}$|^\+?\d+$/.test(value);  // 国際番号含む
		}, "電話番号を入力してください（例:012-345-6789）"
	);


	// フォームのエンター押下時にタブ移動させる
	$('form').on('keydown', 'input, button, select', function(e) {
		if (e.keyCode == 13) {
			if ($(this).attr('type') == 'submit') return;

			var form = $(this).closest('form');
			var focusable = form.find('input, button[type="submit"], select, textarea')
				.not('[readonly]').filter(':visible');

			if (e.shiftKey) {
				focusable.eq(focusable.index(this) - 1).focus();
			} else {
				var next = focusable.eq(focusable.index(this) + 1);
				if (next.length) {
					next.focus();
				} else {
					focusable.eq(0).focus();
				}
			}

			e.preventDefault();
		}
	});


	// フォーム選択・入力イベント発火（GTM用）
    $( 'input[type="radio"], input[type="checkbox"], select' ).change( function() {
        var name = $(this).attr("name");
        if (!name) return;
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'event',
            'category': 'form_event',
            'action': 'select',
            'label': name,
        });
    } );
    $( 'input[type="text"], input[type="number"], input[type="email"], input[type="tel"]' ).focus( function() {
        var name = $(this).attr("name");
        if (!name) return;
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'event',
            'category': 'form_event',
            'action': 'select',
            'label': name,
        });
    } );
    $( '[id^="btn"]' ).click( function() {
        var name = $(this).attr("id");
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'event',
            'category': 'form_event',
            'action': 'click',
            'label': name,
        });
    } );
});
