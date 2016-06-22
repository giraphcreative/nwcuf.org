<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" class="site-content content-narrow" role="main">

			<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>

			<p>Looking for the scholarships page? <a href="https://nwcuf.org/scholarships-and-grants">Click here</a>. Otherwise, feel free to try searching for what you need below.</p>

			<?php print get_search_form(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();

?>