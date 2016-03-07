<?php
/*lordly主题函数文件*/
define('LDY_PTR',__dir__.'/');
define('LDY_ITR',get_stylesheet_directory_uri().'/');

function ldy_page_link_by_slug($slug, $type="page") { //slug
    global $wpdb;
    if ($type == "page") {
        $url_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'");
        echo get_permalink($url_id);
    }else {
        $url_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE slug = '".$slug."'");
        echo get_category_link($url_id);
    }
}

function ldy_page_link_by_slug_r($slug, $type="page") { //slug
    global $wpdb;
    if ($type == "page") {
        $url_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'");
        return get_permalink($url_id);
    }else {
        $url_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE slug = '".$slug."'");
        return get_category_link($url_id);
    }
}

/* 修改自父主题的twentyeleven_content_nav函数
暂时不计划使用
 */
function ldy_twentyeleven_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
            <div><?php //print_r($wp_query);
			
			if ($wp_query ->is_paged && $wp_query->max_num_pages >= 3 ){
				
				for ($page_id = 1; $page_id <= $wp_query->max_num_pages; $page_id++ ){
					if ($page_id == $wp_query ->query_vars['paged']) print('<span style="color:red;">'.get_page_link($page_id).'</span>');
					else print(get_page_link($page_id));
				}
				
			}
			
			 ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}

?>