<?php get_header(); ?>
	<div id="content" <?php Avada()->layout->add_class( 'content_class' ); ?> <?php Avada()->layout->add_style( 'content_style' ); ?>>
		<?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>
		
		<?php
		if ( Avada()->settings->get( 'search_new_search_position' ) == 'bottom' ) {
			get_template_part( 'templates/blog', 'layout' );
		?>
			<div class="fusion-clearfix"></div>
		<?php
		}
		?>
		
		<?php if ( Avada()->settings->get( 'search_new_search_position' ) != 'hidden' ) : ?>
		<div class="search-page-search-form search-page-search-form-<?php echo Avada()->settings->get( 'search_new_search_position' ); ?>">
			<?php
			// Render the post title
			echo avada_render_post_title( 0, FALSE, __( 'Need a new search?', 'Avada' ) ); ?>
			<p><?php echo __('If you didn\'t find what you were looking for, try a new search!', 'Avada'); ?></p>
			<form class="searchform seach-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="search-table">
					<div class="search-field">
						<input type="text" value="" name="s" class="s" placeholder="<?php _e( 'Search ...', 'Avada' ); ?>"/>
					</div>
					<div class="search-button">
						<input type="submit" class="searchsubmit" value="&#xf002;" />
					</div>
				</div>
			</form>
		</div>
		<?php endif; ?>
		<?php
		if ( Avada()->settings->get( 'search_new_search_position' ) == 'top' || Avada()->settings->get( 'search_new_search_position' ) == 'hidden' ) {
			get_template_part( 'templates/blog', 'layout' );
		}
		?>
	<?php else: ?>
	<div class="post-content">
		<?php
			$title = __( 'Couldn\'t find what you\'re looking for!', 'Avada' );
			echo do_shortcode( sprintf( '[title size="2" content_align="left" style_type="default"]%s[/title]', $title ) );
		?>
		<div class="error-page">
			<?php
			// First column
			echo do_shortcode( sprintf( '[one_third last="no" spacing="yes"]<h1 class="oops %s">%s</h1>[/one_third]', ( $sidebar_css != 'display:none') ? 'sidebar-oops' : '', __( 'Oops!', 'Avada' ) ) );

			// Second column
			$subheading = sprintf( '<h3>%s</h3>', __( 'Here are some useful links:', 'Avada' ) );
			$iconcolor = strtolower( Avada()->settings->get( 'checklist_icons_color' ) );
			$list_css = sprintf( '<style type="text/css">.post-content #checklist-1 li:before{color:%s !important;}.rtl .post-content #checklist-1 li:after{color:%s !important;}</style>', $iconcolor, $iconcolor );
			$useful_links_menu = wp_nav_menu( array( 'theme_location' => '404_pages', 'depth' => 1, 'container' => false, 'menu_id' => 'checklist-1', 'menu_class' => 'list-icon circle-yes list-icon-arrow', 'echo' => 0 ) );

			echo do_shortcode( sprintf( '[one_third last="no" spacing="yes" class="useful-links"]%s%s%s[/one_third]', $subheading, $list_css, $useful_links_menu ) );


			// Third column
			$subheading = sprintf( '<h3>%s</h3>', __( 'Try again!', 'Avada' ) );
			$info_text = sprintf( '<p>%s</p>', __( 'If you want to rephrase your query, here is your chance:', 'Avada' ) );
			$search_form = get_search_form( FALSE );

			echo do_shortcode( sprintf( '[one_third last="yes" spacing="yes"]%s%s%s[/one_third]', $subheading, $info_text, $search_form ) );
			?>
		</div>
	</div>
	<?php endif; ?>
	</div>
	<?php do_action( 'fusion_after_content' ); ?>
<?php get_footer();

// Omit closing PHP tag to avoid "Headers already sent" issues.
