<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<!--<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div> #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="elementMeta">
						<?php twentyten_posted_on(); ?> | <?php twentyten_posted_in(); ?> <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link"> | ', '</span>' ); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					
				</div><!-- #post-## -->

				<?php if (pp_has_pagination()) : ?>
    <div class="pagination">

        <!-- the previous page -->
        <?php pp_the_pagination(); if (pp_has_previous_page()) : ?>
            <a href="<?php pp_the_previous_page_permalink(); ?>" class="prev">newer stories</a>
        <?php else : ?>
            <span class="current prev">newer stories</span>
        <?php endif; pp_rewind_pagination(); ?>

        <!-- the page links -->
        <?php while(pp_has_pagination()) : pp_the_pagination(); ?>
            <?php if (pp_is_current_page()) : ?>
                <span class="current"><?php pp_the_page_num(); ?></span>
            <?php else : ?>
                <a href="<?php pp_the_page_permalink(); ?>"><?php pp_the_page_num(); ?></a>
            <?php endif; ?>
        <?php endwhile; pp_rewind_pagination(); ?>

        <!-- the next page -->
        <?php pp_the_pagination(); if (pp_has_next_page()) : ?>
            <a href="<?php pp_the_next_page_permalink(); ?>" class="next">older stories</a>
        <?php else : ?>
            <span class="current next">older stories</span>
        <?php endif; pp_rewind_pagination(); ?>

    </div>
<?php endif; ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
