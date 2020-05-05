<?php

/*
Plugin Name: Lb Demo
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: achaitanyajami
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

define( 'LIVEBLOG_PATH', plugin_dir_path( __FILE__ ) );

require_once LIVEBLOG_PATH . '/custom-post/liveblog.php';
require_once LIVEBLOG_PATH . '/custom-page/page.php';