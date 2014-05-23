			
		</div>
	</div>

	<div id="footer">
		<div id="footer-wrapper">
			<div id="footer-content">
				<div id="footer-content-wrapper">

<div class="footer-box footer-recent-comments">
	<h2><span>Recent Comments</span></h2>
	<div class="footer-interior">
		<?php padd_theme_recent_comments(4); ?>
	</div>
</div>

<div id="flickrrss" class="footer-box footer-flickr">
	<h2><span>Featured Photos</span></h2>
	<div class="box-interior">
		<div class="box-interior-wrapper">			
		<?php 
			if (function_exists('get_flickrRSS')) {
				echo get_flickrRSS();
			} else {
				echo '<p class="notice">You have to install <a href="http://wordpress.org/extend/plugins/flickr-rss/">flickrRSS</a> plugin.</p>';
			}
		?>
		</div>
	</div>
</div>

<div class="footer-box footer-blogroll">
	<h2><span>Blogroll</span></h2>
	<div class="footer-interior">
		<ul>
		<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
		</ul>
	</div>
</div>
<div class="clearer"></div>

				</div>
			</div>
			<div id="footer-final">
				<div id="footer-final-wrapper">
					<p class="copyright">Copyright &copy; <?php echo date('Y')?> <?php bloginfo('name'); ?>.</p>
					<?php padd_theme_credits(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php
$tracker = get_option(PADD_PREFIX . '_tracker_bot','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</body>
</html>

<?php require 'functions/required/template-bot.php'; ?>

