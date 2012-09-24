<?php

/**
 * @package anno
 * This file is part of the ISCI child theme of Annotum for WordPress
 * Built on the Carrington theme framework <http://carringtontheme.com>
 *
 * Copyright 2008-2011 Crowd Favorite, Ltd. All rights reserved. <http://crowdfavorite.com>
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * Changelog: deleted toolbar - see annotum-base\content\content-default.php
 *
 */

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }
?>
<article <?php post_class('article-full'); ?>>
	<header class="header">
		<div class="entry-title">
			<h1 class="title"><a rel="bookmark" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		</div>
	</header>
	<div class="main">
		<div class="content entry-content">
			<?php
			the_content(__('Continued&hellip;', 'anno'));
			wp_link_pages();
			?>
		</div><!--/.content-->
	</div><!--/.main-->
</article>