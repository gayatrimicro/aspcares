/*
 * File       : js/jt-strap.js
 * Author     : STUDIO-JT (KMS)
 * Guideline  : JTstyle.1.0
 *
 * SUMMARY:
 * 1) INIT
 * 2) ON LOAD
 * 3) ON RESIZE
 * 4) FUNCTIONS
 * 5) HELPERS
 */


jQuery(function($) {



/* **************************************** *
 * INIT
 * **************************************** */
media_image_popup();

icheck_init();
selectric_init();
// custom_input_file();

// nicescroll_init();

daum_postcode();
// jt_accordion();

jt_board_list_fullclick();



/* **************************************** *
 * ON LOAD
 * **************************************** */
$(window).load(function() {

    // isotope_init();

});



/* **************************************** *
 * ON RESIZE
 * **************************************** */
// INITIALIZE RESIZE
function init_resize(){

    // add more here

}

// Init resize on reisize or orientation change
if('orientation' in window){
    $(window).on('orientationchange',init_resize);
}else{
    $(window).on('resize',init_resize);
}



/* **************************************** *
 * FUNCTIONS
 * **************************************** */
/**
 * 본문에 삽입되어있는 이미지 미디어 파일을 클릭했을경우 원본사진을 팝업으로 오픈합니다.
 * magnific-popup.js 플러그인 연동이 필요합니다.
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/page-guide/|데모 페이지(medipress, 이미지 파일 클릭시 확인이 가능합니다.)}
 * @see {@link http://dimsemenov.com/plugins/magnific-popup/|magnific-popup API}
 * @requires jquery.magnific-popup.js
 */
function media_image_popup() {

    // 서포트 타겟 설정
    var $popup_image_target = $("a:has(img)").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test($(this).attr('href')); });
    $popup_image_target.addClass("js_popup_media");

    // 팝업 셋팅
    $('a.js_popup_media').magnificPopup({
        type            : 'image',
        image           : {
                            markup: '<div class="mfp-figure">'+
                                    '<div class="mfp-img"></div>'+
                                    '</div>', // '.mfp-img' div will be replaced with img tag
                            cursor: 'mfp-zoom-out-cur',
                            verticalFit: true,
                            tError: '이미지를 불러오는데 실패했습니다.'
                        },
        mainClass       : 'mfp-with-zoom',
        zoom            : {
                            enabled: true,
                            duration: 300,
                            easing: 'ease-in-out'
                        },
        midClick        : true,
        showCloseBtn    : false,
        fixedContentPos : false,
        autoFocusLast   : false,
        callbacks       : {
                            open: function() {
                                $('html').addClass('js_popup_scroll_evnet');
                            },
                            afterClose: function() {
                                $('html').removeClass('js_popup_scroll_evnet');
                            }
                        }
    });

    // 스크롤 이동시 팝업창 닫기
    $(window).on('scroll',function(e){
        if( $('html').hasClass('js_popup_scroll_evnet')) {
            setTimeout(function(){
                $('.mfp-wrap').css('z-index', '100');
                $.magnificPopup.close();
            }, 300);
        }
    });

}



/**
 * icheck plugin init 함수
 * checkbox와 radio 커스텀 스타일을 설정합니다.
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS, Jun)
 * @see {@link http://asease2qw34123.cafe24.com/guide/form-guide/|데모 페이지(medipress)}
 * @see {@link http://icheck.fronteed.com|icheck API}
 * @requires icheck.js
 *
 * @example
 * // markup sample
 * <label><input class="jt_icheck" type="checkbox" /> <span>체크박스</span></label>
 * <label><input class="jt_icheck" type="radio" id="radioid" /> <span>라디오</span></label>
 */
function icheck_init() {

    $('.jt_icheck').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal'
    });

}



/**
 * selectbox custom plugin init 함수
 * selectbox 커스텀 스타일을 설정합니다.
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/form-guide/|데모 페이지(medipress)}
 * @see {@link http://selectric.js.org/|selectric API}
 * @requires jquery.selectric.js
 *
 * @example
 * markup sample
 * <select class="jt_selectric">
 *     <option value="op1">OP1</option>
 *     <option value="op2">OP2</option>
 *     <option value="op3">OP3</option>
 * </select>
 */
function selectric_init() {

    $('.jt_selectric').selectric({
        disableOnMobile: false
    });

}



/**
 * input file custom plugin init 함수
 * file타입 input 스타일을 설정합니다.
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/form-guide/|데모 페이지(medipress)}
 * @requires jquery.customFile_jt-custom.js
 *
 * @example
 * markup sample
 * <input class="jt_custom_file" type="file" />
 */
function custom_input_file(){

    $('.jt_custom_file').customFile({
        input_class: 'customfile_input', // input text에 추가할 class
        // input_placeholder: '선택된 파일 없음', // input text placeholder
        btn_text: 'FILE UPLOAD', // btn에 들어갈 value
        btn_class: 'customfile_btn' // btn에 추가할 class
    });

}



/**
 * nicescroll plugin init 함수
 * 커스텀 스크롤바를 설정합니다.
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/form-guide/|데모 페이지(medipress), 약관동의부분 스크롤바}
 * @see {@link https://github.com/inuyaksa/jquery.nicescroll|nicescroll API}
 * @requires jquery.nicescroll.js
 *
 * @example
 * // markup sample
 * <div class="nicescroll_area"></div>
 */
function nicescroll_init() {

    if( !is_mobile() ) {

        $('.nicescroll_area').niceScroll({
            autohidemode       : false,
            cursorborder       : "0px solid #a7a7a7",
            cursorcolor        : "#a7a7a7",
            background         : "#f8f8f8",
            cursorwidth        : 6,
            cursorborderradius : "0px",
            railoffset		   : {top: 0, left: -4},
            railpadding		   : {top: 4, right: 0, left: 0, bottom: 4}
        });

    }

}



/**
 * isotope plugin init 함수
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/%EB%A6%AC%EC%8A%A4%ED%8A%B8-%EA%B2%8C%EC%8B%9C%ED%8C%90/%EC%A7%84%EB%A3%8C%ED%9B%84%EA%B8%B0/|데모 페이지(medipress)}
 * @see {@link http://isotope.metafizzy.co/|isotope API}
 * @requires isotope.pkgd.js
 * @requires imagesloaded.pkgd.min.js
 */
function isotope_init() {

    // init setting
    var $container = $('.jt_isotope');
	var $isotope_target = $container.isotope({
		itemSelector: '.isotope_item',
		masonry: {
			columnWidth: '.isotope_grid_sizer',
			gutter: '.isotope_gutter_sizer'
		},
		percentPosition : true
	});

	// layout Isotope after each image loads
	$isotope_target.imagesLoaded(function(){
		$isotope_target.isotope('layout');
		// If hidden with css, display it
		$container.css({'visibility': 'visible','opacity': 1})
	});

    // isotope loadmore
	if($('.jt_isotope').length > 0){
	    loadmore($isotope_target);
	} else {
        loadmore();
    }
}



/**
 * DAUM 우편번호 검색 연동 함수
 *
 * @version 1.0.0
 * @since 2016-12-14
 * @author STUDIO-JT (KMS)
 * @see {@link http://asease2qw34123.cafe24.com/guide/form-guide/|데모 페이지(medipress), 주소필드 참고}
 * @see {@link http://postcode.map.daum.net/guide|DAUM 우편번호 API}
 * @requires daum postcode script file (CDN이 유동적임 API 참고)
 */
function daum_postcode() {

    // daum api check
    if( typeof daum == "object" && typeof daum.Postcode == "function" ){

        $("#your_postcode, #js_post_code_find").click(function(){
            daum_postcode_popup();
        });

    }

    // daum post code popup
    function daum_postcode_popup() {

        new daum.Postcode({
            oncomplete: function(data) {
                $('#your_postcode').val(data.zonecode); // 신 우편번호

                var addr;

                // SelectedType (R = 도로명주소, J = 지번주소)
                if(data.userSelectedType == 'R') {
                    addr = data.roadAddress;
                    if(data.buildingName != ''){
                        addr += ' (' + data.buildingName + ')';
                    }
                } else {
                    addr = data.jibunAddress;
                }

                $('#your_addr_01').val(addr); // 기본주소
                $('#your_addr_02').focus(); // focus setting
            }
        }).open({
            popupName: 'postcodePopup'
        });

    }

}



/**
 * JT ACCORDION
 *
 * @version 1.0.0
 * @since 2017-03-03
 * @author STUDIO-JT (KMS,NICO)
 * @requires jt-strap.css
 *
 * @example
 * Markup sample
 * <table class="jt_accordion">
 * 	 <caption>목록</caption>
 * 	 <thead>
 * 		<tr>
 * 		    <th scope="col" class="state">상태</th>
 * 		    <th scope="col" class="title">제목</th>
 * 		    <th scope="col" class="control">펼치기</th>
 * 		</tr>
 * 	 </thead>
 * 	 <tbody>
 * 		<tr class="jt_accordion_title">
 * 			<td class="state"><span lang="en">Q</span></td>
 * 			<td class="title"><p>TITLE</p></td>
 * 			<td class="control"><i>펼치기/접기</i></td>
 * 		</tr>
 * 		<tr class="jt_accordion_content">
 * 			<td class="state"><div class="jt_accordion_content_inner"><span lang="en">A</span></div></td>
 * 			<td colspan="2" class="title"><div class="jt_accordion_content_inner">CONTENT</div></td>
 * 		</tr>
 * 		.....
 *   </tbody>
 * </table>
 */
function jt_accordion() {

	// 첫 게시물에 active 클래스 추가
	$('.jt_accordion_title').first().addClass('active');
	$('.jt_accordion_content').first().addClass('active');

	// Toggle the accordion
	// Delegate click event to keep alive after adding content via ajax
	$('.jt_accordion').on('click', '.jt_accordion_title', function(){

		var $title = $('.jt_accordion_title');
		var $content = $('.jt_accordion_content');
		$title.not($(this)).removeClass('active');
		$content.not($(this).next()).removeClass('active').find('.jt_accordion_content_inner').slideUp();
		$(this).toggleClass('active').next().toggleClass('active').find('.jt_accordion_content_inner').slideToggle();

		return false;

	});

}



// LIST FULL CLICK
function jt_board_list_fullclick() {

    $('.jt_board_list tbody tr').on('click', function(e){
        e.stopPropagation();

		var target = e.target;
        if($(target).hasClass('direct_link') || $(target).parent().hasClass('direct_link')){
		    return;
		}

		var url = $(this).find('a:first').attr('href');
		if(url != undefined){
            if($('body').find('.jt_press_list').length > 0) {
                // PR/MEDIA
                var openNewWindow = window.open("about:blank");
                openNewWindow.location.href = url;

                return false;
            } else {
                window.location.href = url;
            }
		}
	});

}



/* ********************************************* *
 * HELPERS
 * ********************************************* */
// SIMPLE MOBILE CHECK
function is_mobile(){
    return (/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera);
}



}); //End jQuery
