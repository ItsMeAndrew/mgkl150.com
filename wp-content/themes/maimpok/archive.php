<?php
/*
Template Name: Archive
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
				<?php if (is_category()) : ?>
				<h2><span>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</span></h2>
				<?php elseif (is_tag()) : ?>
				<h2><span>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</span></h2>
				<?php elseif (is_day()) : ?>
				<h2><span>Archive for <?php the_time('F j, Y'); ?></span></h2>
				<?php elseif (is_month()) : ?>
				<h2><span>Archive for <?php the_time('F Y'); ?></span></h2>
				<?php elseif (is_year()) : ?>
				<h2><span>Archive for <?php the_time('Y'); ?></span></h2>
				<?php elseif (is_author()) : ?>
				<h2><span>Author Archive</span></h2>
				<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
				<h2><span>Blog Archives</span></h2>
				<?php endif; ?>			
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
			<div class="post post-error">
				<div class="post-title">
					<h2>Not Found</h2>
				</div>
				<div class="post-entry">
				<?php
					if (is_category()) :
						printf('<p>Sorry, but there aren\'t any posts in the %s category yet.</p>', single_cat_title('',false));
					elseif (is_date()) :
						echo('<p>Sorry, but there aren\'t any posts with this date.</p>');
					elseif (is_author()) :
						$userdata = get_userdatabylogin(get_query_var('author_name'));
						printf('<p>Sorry, but there aren\'t any posts by %s yet.</p>', $userdata->display_name);
					else :
						echo '<p>There are no posts found.</p>';
					endif;
				?>
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

