<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<div id="padd-middle">
	<div id="padd-middle-wrapper">

<div id="content">
	<div id="content-wrapper">

<?php if (have_posts()) : ?>

		<div class="post-group post-group-index">
			<div class="post-group-title post-group-index-title">
				<h2><span>Recent Posts</span></h2>
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
							if ('teaser' === $post_method) {
								padd_theme_content(); 
							} else {
								the_excerpt();
							}
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
			<div class="post-list">
				<div class="post post-error">
					<div class="post-title">
						<h2>Not Found</h2>
					</div>
					<div class="post-entry">
						<p>Sorry, but you are looking for something that isn't here.</p>
					</div>
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