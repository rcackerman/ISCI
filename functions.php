<?php

/**
 * @package anno
 * This file is part of the ISCI child theme for Annotum for WordPress
 * Built on the Carrington theme framework <http://carringtontheme.com>
 *
 * Copyright 2008-2011 Crowd Favorite, Ltd. All rights reserved. <http://crowdfavorite.com>
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }


function annotum_child_assets() {
	if (!is_admin()) {
		$main =  trailingslashit(get_bloginfo('stylesheet_directory')) . 'assets/main/';
		$v = ANNO_VER;

		// Styles
		wp_enqueue_style('annotum-child', $main.'css/main.css', array('anno'), $v, 'screen');
	}
}
add_action('wp', 'annotum_child_assets');

?>
