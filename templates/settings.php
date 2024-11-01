<?php

/**
 * @package		Stand_With_Ukraine
 * @author		Andrey Serb <imsadhappy@gmail.com>
 *
 * Admin Settings Page
 */

if ( ! defined( 'STAND_WITH_UKRAINE_URL' ) )
	die;

?>
<div class="wrap">

    <h2><?php esc_html_e(get_admin_page_title()) ?></h2>

    <form action="options.php?page=stand-with-ukraine" method="POST">

        <p><?php esc_html_e('Inform visitors of your website that you support Ukraine.', 'stand-with-ukraine') ?></p>
        <p><?php esc_html_e('Tell them how they can help - donate to Ukrainian Army and government.', 'stand-with-ukraine') ?></p>

        <h3><?php esc_html_e('Message formats', 'stand-with-ukraine') ?></h3>

        <div id="formats"><?php

            $formats = array(
                'line_top' => 'Sticky line (page top)',
                'line_bottom' => 'Sticky line (page bottom)',
                'notice_left' => 'Notice (bottom left)',
                'notice_right' => 'Notice (bottom right)'
            );

            foreach ( $formats as $format => $desc ) : ?>
                <label for="<?php esc_attr_e($format) ?>">
                    <input type="radio" name="format" value="<?php esc_attr_e($format) ?>" id="<?php esc_attr_e($format) ?>" <?php checked( get_option('stand_with_ukraine_selected_format', 'notice_left'), $format ) ?>>
                    <span>
                        <?php esc_html_e($desc, 'stand-with-ukraine') ?>
                        <img src="<?php echo esc_url( STAND_WITH_UKRAINE_URL . "assets/$format-preview.png" ) ?>" />
                    </span>
                </label>
            <?php endforeach ?>
        </div>

        <h3><?php esc_html_e('Message styles', 'stand-with-ukraine') ?></h3>

        <div id="styles"><?php

            $styles = array(
                'black_white' => 'Black on white',
                'white_black' => 'White on black',
                'national' => 'National colours'
            );

            foreach ( $styles as $style => $desc ) : ?>
                <label for="<?php esc_attr_e( $style ) ?>">
                    <input type="radio" name="style" value="<?php esc_attr_e( $style ) ?>" id="<?php esc_attr_e( $style ) ?>" <?php checked( get_option('stand_with_ukraine_selected_style', 'black_white'), $style ) ?>>
                    <span>
                        <?php esc_html_e($desc, 'stand-with-ukraine') ?>
                    </span>
                </label>
            <?php endforeach ?>
        </div>

        <?php
            submit_button();
        ?>
    </form>
    <?php include STAND_WITH_UKRAINE_DIR . 'templates/text.php' ?>
</div>

<style>
    #formats label {
        position: relative;
        display: inline-block;
        width: 300px;
        height: 200px;
        background: #ddd;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 3;
        margin: 10px;
    }
    #styles input,
    #formats input {
        opacity: 0;
        position: absolute;
    }
    #styles span,
    #formats span {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    #styles input:checked + span,
    #formats input:checked + span {
        box-shadow: 0 0 0 3px red inset;
        background: rgba(0,0,0,.1)
    }
    #formats img {
        width: 80%;
    }
    #styles label {
        position: relative;
        display: inline-block;
        width: 300px;
        height: 40px;
        text-align: center;
        line-height: 3;
        margin: 10px;
        border: 1px solid #ccc;
    }
    [for="black_white"] {
        background: white;
        color: black;
    }
    [for="white_black"] {
        background: black;
        color: white;
    }
    [for="national"] {
        background: transparent;
        box-shadow: 0 20px 0 inset #005bbb, 0 -20px 0 inset #ffd500;
        text-shadow: 1px 1px 1px rgba(0,0,0,.5);
        color: white;
    }
</style>
