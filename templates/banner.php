<?php

/**
 * @package		Stand_With_Ukraine
 * @author		Andrey Serb <imsadhappy@gmail.com>
 *
 * Line Template
 */

if ( ! defined( 'STAND_WITH_UKRAINE_DIR' ) )
	die;

?>
<a id="stand-with-ukraine-notice"
    class="stand-with-ukraine stand-with-ukraine-<?php esc_attr_e(get_option('stand_with_ukraine_selected_format', 'notice_left')) ?> stand-with-ukraine-<?php esc_attr_e(get_option('stand_with_ukraine_selected_style', 'black_white')) ?>"
    href="javascript:void(0)"><b><?php
    esc_html_e("We #StandWithUkraine",'stand-with-ukraine')
?>.</b> <br><?php
    esc_html_e("Learn how you can help too!",'stand-with-ukraine')
?><span></span></a>

<div id="stand-with-ukraine-popup">
<div>
<div>
    <?php include STAND_WITH_UKRAINE_DIR . 'templates/text.php' ?>
</div>
</div>
</div>

<style>
#stand-with-ukraine-popup.active,
#stand-with-ukraine-notice {
    display: block !important;
}
.stand-with-ukraine-line_top { top: 0 }
body.admin-bar .stand-with-ukraine-line_top { top: 32px }
@media (max-width: 782px) {
body.admin-bar .stand-with-ukraine-line_top { top: 46px }
}
@media (max-width: 600px) {
body.admin-bar .stand-with-ukraine-line_top {
    top: 0;
    z-index: 99998
}
}
.stand-with-ukraine-line_bottom { bottom: 0 }
.stand-with-ukraine-line_top,
.stand-with-ukraine-line_bottom {
    display: block;
    position: fixed;
    left: 0;
    right: 0;
    z-index: 100500;
    text-align:center;
    text-decoration: none !important;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
    font-size: 16px;
    line-height: 32px;

}
.stand-with-ukraine-line_top br,
.stand-with-ukraine-line_bottom br { display: none }
.stand-with-ukraine-notice_left,
.stand-with-ukraine-notice_right {
    border-radius: 28px;
    display: block;
    position: fixed;
    bottom: 20px;
    z-index: 100500;
    text-align: center;
    text-decoration: none !important;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
    font-size: 16px;
    line-height: 20px;
    box-shadow: 0 10px 10px rgba(0,0,0,.2)
}

.stand-with-ukraine span {
    display: inline-block;
    position: absolute;
    width: 36px;
    height: 36px;
    overflow: hidden;
    border-radius: 36px;
    background: white;
}
.stand-with-ukraine span:before,
.stand-with-ukraine span:before {
    content: '';
    display: block;
    width: 36px;
    height: 36px;
    box-shadow: 0 18px 0 inset #005bbb, 0 -18px 0 inset #ffd500;
}
.stand-with-ukraine-notice_left span {
    top: 7px;
    left: 7px;
}
.stand-with-ukraine-notice_right span {
    top: 7px;
    right: 7px;
}

.stand-with-ukraine-line_top span,
.stand-with-ukraine-line_bottom span {
    margin: 1px 7px;
    width: 32px;
    height: 32px;
}
.stand-with-ukraine-line_top.stand-with-ukraine-national span,
.stand-with-ukraine-line_bottom.stand-with-ukraine-national span {
    display: none;
}

.stand-with-ukraine-notice_left {
    left: 20px;
    padding: 4px 20px 6px 52px;
    text-align: left;
}
.stand-with-ukraine-notice_right {
    right: 20px;
    padding: 4px 52px 6px 20px;
    text-align: right;
}
.stand-with-ukraine-black_white {
    color: black !important;
    background: white;
}
.stand-with-ukraine-white_black {
    color: white !important;
    background: black;
}
.stand-with-ukraine-national {
    color: white !important;
    background: #005bbb;
    box-shadow: 0 18px 0 inset #005bbb, 0 -18px 0 inset #ffd500;
    text-shadow: 1px 1px 1px rgba(0,0,0,.5);
}
.stand-with-ukraine-notice_left.stand-with-ukraine-national,
.stand-with-ukraine-notice_right.stand-with-ukraine-national {
    padding: 4px 20px 6px 20px;
    text-align: center
}
.stand-with-ukraine-notice_left.stand-with-ukraine-national span,
.stand-with-ukraine-notice_right.stand-with-ukraine-national span {
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: auto !important;
    height: auto !important;
    z-index: -1;
}

.stand-with-ukraine-notice_left.stand-with-ukraine-national span:before,
.stand-with-ukraine-notice_right.stand-with-ukraine-national span:before {
    content: '';
    display: block;
    width: 100%;
    height: 50px;
    box-shadow: 0 25px 0 inset #005bbb, 0 -25px 0 inset #ffd500;
}
#stand-with-ukraine-popup {
    display: none;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,.4);
    z-index: 100501;
    cursor: pointer;
}
#stand-with-ukraine-popup h1 {
    font-size: 40px;
    font-weight: bold;
    line-height: 40px;
    text-align: center;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
}
#stand-with-ukraine-popup p {
    font-size: 16px;
    line-height: 24px;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
    margin: 0 0 20px;
    color: black;
}
#stand-with-ukraine-popup a {
    color: black;
    text-decoration: underline;
}
#stand-with-ukraine-popup.active {
    display: block;
}
#stand-with-ukraine-popup > div {
    background: white;
    width: 80%;
    height: 80%;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    margin: auto;
    max-width: 600px;
    min-width: 300px;
    min-height: 300px;
    box-shadow: 0 0 20px rgba(0,0,0,.4);
}
#stand-with-ukraine-popup > div:before,
#stand-with-ukraine-popup > div:after {
    position: absolute;
    right: 20px;
    top: -36px;
    content: ' ';
    height: 24px;
    width: 0px;
    background-color: white;
    box-shadow: 0 0 0 1px white;
}

#stand-with-ukraine-popup > div:before {
    transform: rotate(45deg);
}
#stand-with-ukraine-popup > div:after {
    transform: rotate(-45deg);
}
#stand-with-ukraine-popup > div > div {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    padding: 40px;
    overflow: auto;
    cursor: text;
}
#stand-with-ukraine-popup .wba {
    word-break: break-all;
}
@media (max-width: 768px) {
    #stand-with-ukraine-popup h1 {
        font-size: 32px;
    }
    #stand-with-ukraine-popup > div > div { padding: 20px; }
    #stand-with-ukraine-popup > div {
        width: 90%;
    }
}
</style>

<script>
    (function(notice, popup){
        notice.addEventListener('click', function(){
            popup.classList.toggle('active')
        });
        popup.addEventListener('click', function(event){
            if (event.target === popup) popup.classList.toggle('active')
        });
    })(document.getElementById('stand-with-ukraine-notice'),
        document.getElementById('stand-with-ukraine-popup'))
</script>
