<?php
/**
 * @package FlashProxy
 * @version 1.0
 */

/*
  Plugin Name: Tor Flash Proxy
  Plugin URI: https://crypto.stanford.edu/flashproxy/
  Description: Allows your blog visitors to participate in the Flash Proxy anti-censorship system.
  Author: Andrew Lesser
  Version: 1.0
  Author URI: https://crypto.stanford.edu/flashproxy/
*/

function display_flashproxy_badge() {
  echo '<div class="flashproxy"><iframe src="//crypto.stanford.edu/flashproxy/embed.html" width="80" height="15" frameborder="0" scrolling="no"></iframe></div>'."\n";
}

add_action( 'wp_footer', 'display_flashproxy_badge' );
