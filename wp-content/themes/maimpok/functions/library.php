<?php

/********************************************/
/**** Widget Functions **********************/
/********************************************/

/**
 * Renders the subscription list.
 */
function padd_widget_funct_subscribe() {
	$padd_sb_feedburner = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_feedburner'));
	$padd_sb_twitter = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_twitter'));
	$padd_sb_facebook = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_facebook'));
?>
<ul>
	<li class="rss"><span><a href="<?php echo $padd_sb_feedburner; ?>" title="RSS Feed">Subscribe via RSS</a></span></li>
	<li class="email"><span><a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $padd_sb_feedburner->get_username(); ?>" title="RSS Email">Subscribe via Email</a></span></li>
	<li class="twitter"><span><a href="<?php echo $padd_sb_twitter; ?>" class="icon-twitter">Follow my Tweets</a></span></li>
	<li class="facebook"><span><a href="<?php echo $padd_sb_facebook; ?>" class="icon-facebook">Be my Facebook Fan</a></span></li>
</ul>
<?php
}

/**
 * Renders the subscription list.
 */
function padd_widget_funct_subscribe_home() {
	$padd_sb_feedburner = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_feedburner'));
	$padd_sb_twitter = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_twitter'));
	$padd_sb_facebook = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_facebook'));
?>
<ul>
	<li class="rss">
		<a href="<?php echo $padd_sb_feedburner; ?>" title="RSS Feed"><span>Subscribe via RSS</span></a>
		<span>Get latest updates via RSS</span>
	</li>
	<li class="email">
		<a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $padd_sb_feedburner->get_username(); ?>" title="RSS Email"><span>Subscribe via Email</span></a>
		<span>Email updates in your inbox</span>
	</li>
	<li class="twitter">
		<a href="<?php echo $padd_sb_twitter; ?>" class="icon-twitter"><span>Follow my Tweets</span></a>
		<span>Yes, tweet me all the way</span>
	</li>
	<li class="facebook">
		<a href="<?php echo $padd_sb_facebook; ?>" class="icon-facebook"><span>Be my Facebook Fan</span></a>
		<span>Meet me at Facebook</span>
	</li>
</ul>
<?php
}

/**
 * Renders the Feedburner subscription form.
 *
 * @param string $description
 */
function padd_widget_funct_feedburner($description='Sign up for the email subscription.') {
	$sbfb = unserialize(get_option(PADD_THEME_SLUG . '_sn_username_feedburner'));
?>
<p><?php echo $description; ?></p>
<form id="subscribe" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520'); return true">
	<span><input type="text" value="Email address" onfocus="if (this.value == 'Email address') {this.value = '';}" onblur="if (this.value == '') { this.value = 'Email address'; }" name="email" /></span>
	<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=<?php echo $sbfb->get_username(); ?>" name="url" />
	<input type="hidden" value="News Subscribe" name="title" />
</form>
<?php
}

/**
 * Renders the advertisements.
 *
 */
function padd_widget_funct_sponsors() {
	global $ad_default_250, $ad_default_125;
?>
<div class="ads0">
	<?php
		$sqbtn_0 = unserialize(get_option(PADD_THEME_SLUG . '_ads_250250_1'));
		$sqbtn_0 = $sqbtn_0->is_empty() ? $ad_default_250 : $sqbtn_0; 
		$sqbtn_0->set_css_class('ads0');
		echo $sqbtn_0;
	?>
</div>
<div>
	<?php
		$sqbtn_1 = unserialize(get_option(PADD_THEME_SLUG . '_ads_125125_1'));
		$sqbtn_1 = $sqbtn_1->is_empty() ? $ad_default_125 : $sqbtn_1; 
		$sqbtn_1->set_css_class('ads1');
		$sqbtn_2 = unserialize(get_option(PADD_THEME_SLUG . '_ads_125125_2'));
		$sqbtn_2 = $sqbtn_2->is_empty() ? $ad_default_125 : $sqbtn_2; 
		$sqbtn_2->set_css_class('ads2');
		echo $sqbtn_1 . $sqbtn_2;
	?>
</div>	
<div>
	<?php
		$sqbtn_3 = unserialize(get_option(PADD_THEME_SLUG . '_ads_125125_3'));
		$sqbtn_3 = $sqbtn_3->is_empty() ? $ad_default_125 : $sqbtn_3; 
		$sqbtn_3->set_css_class('ads3');
		$sqbtn_4 = unserialize(get_option(PADD_THEME_SLUG . '_ads_125125_4'));
		$sqbtn_4 = $sqbtn_4->is_empty() ? $ad_default_125 : $sqbtn_4; 
		$sqbtn_4->set_css_class('ads4');
		echo $sqbtn_3 . $sqbtn_4;
	?>	
</div>
<?php
}

/**
 * Renders the featured video
 *
 */
function padd_widget_funct_featured_video() {
	$featured = get_option(PADD_THEME_SLUG . '_featured_video');
	echo stripslashes($featured);
}



/********************************************/
/**** Functions used for hooking filters ****/
/********************************************/

/**
 * Alters the rendering of the list of pages.
 *
 * @param string $string
 * @return string
 */
function padd_theme_alter_list_pages($string) {
	$string = str_replace(array("\n","\r","\t"),'', $string);

	$pattern = array('/<ul[^<>]*>/','/<\/ul[^<>]*>/');
	$replace = array('','');
	$string = preg_replace($pattern,$replace,$string);
	$pattern = array('/<a[^<>]*>/','/<\/a[^<>]*>/');
	$replace = array('$0<span><span>','</span></span>$0');
	$string = preg_replace($pattern,$replace,$string);

	$string = str_replace(array('</a><li','</li></li>'),array('</a></li><li','</li>'),$string);
	return $string;
}

/**
 * Alters the rendering of the main navigation menu.
 *
 * @param string $string
 * @return string
 */
function padd_theme_alter_page_menu($string) {
	$string = padd_theme_alter_list_pages($string);
	$pattern = array('/<div[^<>]*>/','/<\/div[^<>]*>/');
	$replace = array('','');
	$string = preg_replace($pattern,$replace,$string);
	$pattern = array('/<a[^<>]*>/','/<\/a[^<>]*>/');
	$replace = array('$0<span class="l"><span class="r"><span class="c">','</span></span></span>$0');
	$string = preg_replace($pattern,$replace,$string);
	return $string;
}

/**
 * Alters the rendering of the link by wrapping the HTML tag.
 *
 * @param string $string
 * @return string
 */
function padd_theme_alter_links($string) {
	$pattern = array('/<a[^<>]*>/','/<\/a[^<>]*>/');
	$replace = array('<span><span>$0','$0</span></span>');
	$string = preg_replace($pattern,$replace,$string);
	return $string;
}

/***********************************************/
/**** Add filters when necessary  **************/
/***********************************************/

//add_filter('wp_list_pages','padd_theme_alter_links');
//add_filter('wp_list_categories','padd_theme_alter_links');
//add_filter('wp_list_bookmarks','padd_theme_alter_links');
//add_filter('get_archives_link','padd_theme_alter_links');




/***********************************************/
/**** Functions used for modifying the look ****/
/***********************************************/

/**
 * Displays the main navigation menu.
 */
function padd_theme_page_menu() {
	add_filter('wp_page_menu','padd_theme_alter_page_menu');
	echo '<ul>';
	wp_page_menu('show_home=1&title_li=');
	echo '</ul>';
	remove_filter('wp_page_menu','padd_theme_alter_page_menu');
}

/**
 * Hides the popularity contenst.
 *
 * @global <type> $akpc
 * @global <type> $post
 * @param string $str
 * @return string
 */
function padd_theme_cleanup($str) {
	global $akpc, $post;
	$show = true;
	$show = apply_filters('akpc_display_popularity', $show, $post);
	if (is_feed() || is_admin_page() || get_post_meta($post->ID, 'hide_popularity', true) || !$show) {
		return $str;
	}
	return $str.'';
}

/**
 * Renders the list of bookmarks.
 */
function padd_theme_list_bookmarks() {
	$array = array();
	$array[] = 'category_before=';
	$array[] = 'category_after=';
	$array[] = 'categorize=0';
	$array[] = 'title_li=';
	wp_list_bookmarks(implode('&',$array));
}

/**
 * Renders the list of comments.
 *
 * @param string $comment
 * @param string $args
 * @param string $depth
 */
function padd_theme_list_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment" id="comment-<?php comment_ID(); ?>">
			<div class="comment-details">
				<div class="comment-author">
					<div class="comment-avatar"><?php echo get_avatar($comment,'53'); ?></div>
					<span class="author"><?php echo get_comment_author_link(); ?></span>
					<span class="time"><?php echo get_comment_date('M j, Y'); ?></span>
					<?php edit_comment_link(__('Edit Comment'),'<span class="edit">','</span>') ?>
				</div>
				<div class="comment-details-interior">
					<div class="tb"></div>
					<div class="comment-details-interior-wrapper">
						<?php comment_text(); ?>
						<?php if ($comment->comment_approved == '0') : ?>
						<p class="comment-notice"><?php _e('My comment is awaiting moderation.') ?></p>
						<?php endif; ?>
					</div>
					<div class="tb"></div>
				</div>
				<div class="clearer"></div>
			</div>
		</div>
	<?php
}

/**
 * Render the list of trackbacks.
 *
 * @param string $comment
 * @param string $args
 * @param string $depth
 */
function padd_theme_list_trackbacks($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="pings-<?php comment_ID() ?>">
		<?php comment_author_link(); ?>
	<?php
}

function padd_theme_count_comments($count) {
	if (!is_admin()) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}
add_filter('get_comments_number', 'padd_theme_count_comments',0);

/**
 * Renders the list of recent posts.
 */
function padd_theme_recent_post() {
	echo '<ul>';
	wp_get_archives('type=postbypost&limit=5');
	echo '</ul>';
}

/**
 * Renders the list of children categories in a given parent category.
 *
 * @param int $cat_id
 */
function padd_theme_get_categories($cat_id) {
	if ('' != get_the_category_by_ID($cat_id)) {
		echo '<li>';
		echo '<a href="' . get_category_link($cat_id) . '">' . get_the_category_by_ID($cat_id) . '</a>';
		if ('' != (get_category_children($cat_id))) {
			echo '<ul>';
			wp_list_categories('hide_empty=0&title_li=&child_of=' . $cat_id);
			echo '</ul>';
		}
	echo '</li>';
	}
}

/**
 * Renders the list of recent comments.
 *
 * @global object $wpdb
 * @global array $comments
 * @global array $comment
 * @param int $limit
 */
function padd_theme_recent_comments($limit=5) {
	global $wpdb, $comments, $comment;

	if ( !$comments = wp_cache_get( 'recent_comments', 'widget' ) ) {
		$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $limit");
		wp_cache_add( 'recent_comments', $comments, 'widget' );
	}
	echo '<ul class="recentcomments">';
	if ( $comments ) :
		foreach ( (array) $comments as $comment) :
			echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
		endforeach;
	endif;
	echo '</ul>';
}

function padd_theme_content($max_char=400,$more_link_text='') {
	$content = get_the_content($more_link_text,true);
	if (!empty($content)) {
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		$content = strip_tags($content);
	}
	if (strlen($_GET['p']) > 0) {
		$content = "<p>" . $content . "</p>";
	} else if (strlen($content)>$max_char) {
		$content = substr($content,0,$max_char);
		$content = "<p>" . $content . "...</p>";
	} else {
		$content = "<p>" . $content . "</p>";
	}
	echo $content;
}

function padd_theme_get_content($max_char=400,$more_link_text='') {
	$content = get_the_content($more_link_text,true);
	if (!empty($content)) {
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		$content = strip_tags($content);
	}
	if (strlen($_GET['p']) > 0) {
		$content = "<p>" . $content . "</p>";
	} else if (strlen($content)>$max_char) {
		$content = substr($content,0,$max_char);
		$content = "<p>" . $content . "...</p>";
	} else {
		$content = "<p>" . $content . "</p>";
	}
	return $content;
}

/**
 * Capture the first image from the post.
 *
 * @global object $post
 * @global object $posts
 * @return string
 */
function padd_theme_capture_first_image($p=null) {
	$firstImg = '';
	if (empty($p)) {
		global $post, $posts;
		$firstImg = '';
		ob_start(); ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$firstImg = $matches[1][0];
	} else {
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $p->post_content, $matches);
		$firstImg = $matches[1][0];
	}
	return $firstImg;
}

/**
 * Returns the thumbnailed image.
 *
 * @param string $cust_field
 * @param string $def_img
 * @param int $w
 * @param int $h
 */
function padd_theme_get_thumbnail($cust_field,$def_img,$w,$h) {
	$padd_scrp = get_template_directory_uri() . '/functions/thumb/thumb.php?';
	$padd_image = '';
	$padd_image_def = get_template_directory_uri() . '/images/thumbnail.jpg';

	$customfields = get_post_custom();
	if (empty($customfields[$cust_field][0])) {
		$padd_image = padd_theme_capture_first_image();
	} else {
		$padd_image = $customfields[$cust_field][0];
	}

	if (empty($padd_image)) {
		$imgpath = $def_img;
	} else {
		$imgpath = $padd_scrp . 'src=' . $padd_image . '&amp;w=' . $w . '&amp;h=' . $h . '&amp;zc=1';
	}
	
	return $imgpath;
}

/**
 * Renders the featured posts in home page.
 */
function padd_featured_posts() {
	wp_reset_query(); 
	$featured = get_option(PADD_THEME_SLUG . '_featured_cat_id','1');
	$count = get_option(PADD_THEME_SLUG . '_featured_cat_limit');
	query_posts('showposts=' . $count . '&cat=' . $featured);
	$padd_scrp = get_theme_root_uri() . '/' . PADD_THEME_SLUG . '/functions/thumb/thumb.php?';
	$i = 1;
?>
<div id="s3slider">
	<ul id="s3sliderContent">
<?php while (have_posts()) : the_post(); ?>
	<?php $customfields = get_post_custom(); ?>
	<?php
		$img = isset($customfields['paddimage-gallery'][0]) ? $customfields['paddimage-gallery'][0] : '';
		$src = get_permalink();
		if (empty($img)) {
			$img = padd_theme_capture_first_image();
			if (empty($img)) {
				$imgpath = $padd_image_def;
			} else {
				$imgpath = $padd_scrp . 'src=' . $img . '&amp;w=' . PADD_GALL_THUMB_W . '&amp;h=' . PADD_GALL_THUMB_H . '&amp;zc=1';
			}
		} else {
			$imgpath = $padd_scrp . 'src=' . $img . '&amp;w=' . PADD_GALL_THUMB_W . '&amp;h=' . PADD_GALL_THUMB_H . '&amp;zc=1';
		}
	?>
		<li class="s3sliderImage" id="featured-<?php echo $i; ?>">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgpath; ?>" alt="" /></A>
			<span class="right"><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong><br /><?php padd_theme_content(); ?></span>
		</li>
	<?php $i++; ?>
<?php endwhile; ?>
		 <div class="clear s3sliderImage"></div>
	</ul>
</div>
<?php
	wp_reset_query();
}

/**
 * Renders the TweetMeme button.
 */
function padd_tm_generate_button() {
    global $post;
    $url = '';
    if (get_post_status($post->ID) == 'publish') {   
        $url = get_permalink();
    } 
    
    $button = '<div class="tweetmeme_button" style="float: left; padding: 0 8px 0 0">'.
                  '<script type="text/javascript">
                    tweetmeme_url = \'' . $url . '\';';
                        
    if (get_option('tm_source')) {
        $button .= 'tweetmeme_source = \'' . urlencode(get_option('tm_source')) . '\';';
    } 
    
    $button .= '
    </script><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>';

    return $button;
}

/** 
 * Renders the related posts
 *
 * @param int|string $post_ID
 */
function padd_related_posts($post_ID) {
	$enabled = get_option(PADD_THEME_SLUG . '_rp_enable');
	if ($enabled) {
		
		$tag_ids = array();
		$cat_ids = array();
		
		$tags = wp_get_post_tags($post_ID);
		foreach($tags as $tag) {
			$tag_ids[] = $tag->term_id;
		}
		
		$cats = get_the_category($post_ID);
		if ($cats) {
			foreach($cats as $cat) {
				$cat_ids[] = $cat->term_id;
			}
		}

		$args = array(
					'post__not_in' => array($post_ID),
					'showposts' => intval(get_option(PADD_THEME_SLUG . '_rp_max',5)),
					'caller_get_posts' => 1
				); 
		if (!empty($tag_ids) && get_option(PADD_THEME_SLUG . '_consider_tags','1') === '1') {
			$args['tag__in'] = $tag_ids;
		}
		if (!empty($cat_ids) && get_option(PADD_THEME_SLUG . '_consider_categories','1') === '1') {
			$args['category__in'] = $cat_ids;
		}
		
		$rp_query = new wp_query($args);

		if ($rp_query->have_posts()) {
			echo '<ul>';
			while ($rp_query->have_posts()) {
				$rp_query->the_post();
			?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php
			}
			echo '</ul>';
		} else {
			echo '<p>There are no related posts on this entry.</p>';
		}
	} else {
		echo '<p>Related posts has been disabled.</p>';
	}

}
/**
 * Calculates the nearest round.
 *
 * 
 */
function padd_nearest_round($num, $to_nearest) {
   return floor($num/$to_nearest)*$to_nearest;
}

/**
 * Renders the page navigation.
 */
function padd_page_navigation() {
	global $wpdb, $wp_query;
	if (!is_single()) {
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = intval(get_option(PADD_THEME_SLUG . '_pgn_pages_to_show'));
		$larger_page_to_show = intval(get_option(PADD_THEME_SLUG . '_pgn_larger_page_numbers'));
		$larger_page_multiple = intval(get_option(PADD_THEME_SLUG . '_pgn_larger_page_numbers_multiple'));
		$pages_to_show_minus_1 = $pages_to_show - 1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		$larger_per_page = $larger_page_to_show*$larger_page_multiple;
		$larger_start_page_start = (padd_nearest_round($start_page, 10) + $larger_page_multiple) - $larger_per_page;
		$larger_start_page_end = padd_nearest_round($start_page, 10) + $larger_page_multiple;
		$larger_end_page_start = padd_nearest_round($end_page, 10) + $larger_page_multiple;
		$larger_end_page_end = padd_nearest_round($end_page, 10) + ($larger_per_page);
		if($larger_start_page_end - $larger_page_multiple == $start_page) {
			$larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
			$larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
		}
		if($larger_start_page_start <= 0) {
			$larger_start_page_start = $larger_page_multiple;
		}
		if($larger_start_page_end > $max_page) {
			$larger_start_page_end = $max_page;
		}
		if($larger_end_page_end > $max_page) {
			$larger_end_page_end = $max_page;
		}
		if($max_page > 1) {
			$pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), 'Page %CURRENT_PAGE% of %TOTAL_PAGES%');
			$pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
			echo $before.'<div class="pagination">'."\n";
			if(!empty($pages_text)) {
				echo '<span class="pages">'.$pages_text.'</span>';
			}
			if ($start_page >= 2 && $pages_to_show < $max_page) {
				$first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), '&laquo; First');
				echo '<a href="'.clean_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">'.$first_page_text.'</a>';
				echo '<span class="extend">...</span>';
			}
			if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
				for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), '%PAGE_NUMBER%');
					echo '<a href="'.clean_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			previous_posts_link('&laquo; Prev');
			for($i = $start_page; $i  <= $end_page; $i++) {						
				if($i == $paged) {
					$current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), '%PAGE_NUMBER%');
					echo '<span class="current">'.$current_page_text.'</span>';
				} else {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), '%PAGE_NUMBER%');
					echo '<a href="'.clean_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			next_posts_link('Next &raquo;', $max_page);
			if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
				for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), '%PAGE_NUMBER%');
					echo '<a href="'.clean_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			if ($end_page < $max_page) {
				echo '<span class="extend">...</span>';
				$last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page),'Last &raquo;');
				echo '<a href="'.clean_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$last_page_text.'</a>';
			}
			echo '</div>'.$after."\n";
		}
	}
}

/** 
 * Renders the theme credits.
 */
function padd_theme_credits() {
	do_action(__FUNCTION__);
}

?>
