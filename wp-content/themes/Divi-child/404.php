<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<div>
					<h2>404</h2>
					<p>Page not found!</p>
				</div>
				<div>
					<?php wp_list_pages() ?>
					<?php get_search_form() ?>
				</div>

			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
