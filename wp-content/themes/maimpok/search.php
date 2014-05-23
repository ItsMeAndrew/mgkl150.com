
<?php
/*
Template Name: Search Result
*/
?>
<?php get_header(); ?>

<div id="padd-middle" class="padd-middle-list padd-middle-archive">
	<div id="padd-middle-wrapper">

<div id="content">
	<div id="content-wrapper">		

<?php if (have_posts()) : ?>

		<div class="post-group post-group-index">
			<div class="post-group-title post-group-index-title">
				<h2><span>Search Results for "<?php echo get_search_query(); ?>"</h2>
			</div>

			<div class="post-list post-list-index">
	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
				<div class="post post-index" id="post-<?php the_ID(); ?>">
					<?php
						$def = get_template_directory_uri() . '/images/thumbnail.jpg';
						$img = padd_theme_get_thumbnail('paddimage',$def,PADD_HOME_THUMB_W,PADD_HOME_THUMB_H);
					?>
					<a href="<?php the_permalink() ?>"><img class="header" src="<?php echo $img; ?>" alt="<?php the_title(); ?>" /></a>
					<div class="post-title">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="post-entry">
						<?php 
							if (function_exists('tweetmeme')) {
								echo padd_tm_generate_button(); 
							}
							$post_method = get_option(PADD_THEME_SLUG . '_post_list_mode','teaser');
							padd_theme_content(); 
						?>
						<div class="clearer"></div>
					</div>
				</div>
	<?php endwhile; ?>
			</div>
		</div>

		<?php padd_page_navigation(); ?>

<?php else : ?>		

		<div class="post-group">
			<div class="post post-error">
				<div class="post-title">
					<h2>Not Found</h2>
				</div>
				<div class="post-entry">
					<p>No posts found containing the said keyword.</p>
				</div>
			</div>
		</div>

<?php endif; ?>

	</div>
</div>

<?php get_sidebar(); ?>

<div class="clearer"></div>

	</div>
</div>

<?php get_footer(); ?>