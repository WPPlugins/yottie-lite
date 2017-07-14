<?php
/*
Plugin Name: Elfsight Yottie Lite
Description: Lite version of YouTube Channel Plugin for WordPress. Select desired videos and YouTube channels to display them on your website. Manage 100+ parameters to customize the plugin as you wish.
Plugin URI: https://elfsight.com/youtube-channel-plugin-yottie/wordpress/
Version: 1.2.0
Author: Elfsight
Author URI: https://elfsight.com/
*/

if (!defined('ABSPATH')) exit;

define('YOTTIE_LITE_SLUG', 'yottie-lite');
define('YOTTIE_LITE_VERSION', '1.2.0');
define('YOTTIE_LITE_FILE', __FILE__);
define('YOTTIE_LITE_PATH', plugin_dir_path(__FILE__));
define('YOTTIE_LITE_URL', plugin_dir_url( __FILE__ ));
define('YOTTIE_LITE_PLUGIN_SLUG', plugin_basename( __FILE__ ));
define('YOTTIE_LITE_TEXTDOMAIN', 'yottie');
define('YOTTIE_LITE_PRO_URL', 'https://apps.elfsight.com/?utm_source=markets&utm_medium=wordpressorg&utm_content=adminpanel&utm_campaign=YTWPlite');

require_once(ABSPATH . implode(DIRECTORY_SEPARATOR, array('wp-admin', 'includes', 'plugin.php')));

if (!is_plugin_active('elfsight-yottie/elfsight-yottie.php')) {
	require_once(YOTTIE_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'yottie-defaults.php')));
	require_once(YOTTIE_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'yottie-admin.php')));
	require_once(YOTTIE_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'yottie-shortcode.php')));
	require_once(YOTTIE_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'yottie-lib.php')));
}

?>