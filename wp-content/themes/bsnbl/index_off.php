<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>










		<div id="container">
			<div id="content" role="main">
<?php
	// Home featured widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>


			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 /*get_template_part( 'loop', 'index' );*/
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<!--<?php get_sidebar(); ?>-->
<script type="text/javascript">
/*adding relevent class on each recent posts items*/
/*$(".advanced-recent-posts li.item:last").addClass("last");*/
$(".advanced-recent-posts li.item::nth-child(10n+1)").addClass("one")
$(".advanced-recent-posts li.item::nth-child(10n+2)").addClass("two")
$(".advanced-recent-posts li.item::nth-child(10n+3)").addClass("three")
$(".advanced-recent-posts li.item::nth-child(10n+4)").addClass("four")
$(".advanced-recent-posts li.item::nth-child(10n+5)").addClass("five")
$(".advanced-recent-posts li.item::nth-child(10n+6)").addClass("six")
$(".advanced-recent-posts li.item::nth-child(10n+7)").addClass("seven")
$(".advanced-recent-posts li.item::nth-child(10n+8)").addClass("eight")
$(".advanced-recent-posts li.item::nth-child(10n+9)").addClass("nine")
$(".advanced-recent-posts li.item::nth-child(10n)").addClass("ten")



/*hover animation: opacity changes as mouse hovers*/
$(".advanced-recent-posts .item a").hover(
function() {
$(this).stop().animate({"opacity": "0.7"}, "fast");
},
function() {
$(this).stop().animate({"opacity": "0"}, "fast");
});
 




</script>
<?php get_footer(); ?>
