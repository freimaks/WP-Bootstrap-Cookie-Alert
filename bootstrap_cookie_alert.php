<?php
	  if ( ! defined( 'ABSPATH' ) ) {
		  exit;
    }
    
    add_action( 'wp_enqueue_scripts', 'bootstrap_cookie_alert_js' );
    function bootstrap_cookie_alert_js() {
        wp_register_style( 'cookie', 'https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css');
		    wp_enqueue_style('cookie');

        wp_register_script( 'cookie', 'https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js', array('jquery'), false, true);
        wp_enqueue_script('cookie');
    }

    add_action( 'wp_footer', 'bootstrap_cookie_alert', 20 );
    function bootstrap_cookie_alert() {
        echo '
        <div class="alert text-center cookiealert" role="alert">
            <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>
        
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                I agree
            </button>
        </div>
        ';
    }
?>
