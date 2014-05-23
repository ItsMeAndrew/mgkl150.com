
<div id="sidebar">
	<div id="sidebar-wrapper">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

<?php if (!is_home()) : ?>
<div class="box box-subscribe">
	<h2><span>Subscribe to My Blog</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">
			<?php padd_widget_funct_subscribe(); ?>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="box box-ads">
	<h2><span>Sponsors</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">
			<?php padd_widget_funct_sponsors(); ?>
		</div>
	</div>
</div>

<div class="box box-popular-posts">
	<h2><span>Popular Posts</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">
		<?php if (function_exists('akpc_most_popular')) : ?>
		<ul>
			<?php akpc_most_popular(5,'<li>','</li>'); ?>
		</ul>
		<?php else : ?>
		<p class="notice">You have to install <a href="http://wordpress.org/extend/plugins/popularity-contest/">Alex King's Popularity Contest</a> plugin.</p>
		<?php endif; ?>
		</div>
	</div>
</div>

<div class="box box-popular-posts">
	<h2><span>Blogroll</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">	
			<ul>
				<?php padd_theme_list_bookmarks(); ?>
			</ul>
		</div>
	</div>
</div>

<div class="box box-tweet">
	<h2><span>My Latest Tweet</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">
		<?php
			if (function_exists('twitter_messages')) {
				$padd_twitter = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_twitter'));
				twitter_messages($padd_twitter->get_username(), 1, false, true, '#', true, true, false);
			} else {
				echo '<p class="notice">You need <a href="http://wordpress.org/extend/plugins/twitter-for-wordpress/">Twitter for Wordpress</a> plugin in order to work.</p>';
			}
		?>
		</div>
	</div>
</div>

<div class="box box-featured-video">
	<h2><span>Featured Video</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">
			<?php padd_widget_funct_featured_video(); ?>
		</div>
	</div>
</div>

	<?php endif; ?>

	</div>
</div>


