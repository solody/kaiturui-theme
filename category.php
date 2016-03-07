<?php
//公司动态列表页


$Lordly_Menu_Selected_Index = 4;
include('includes/HTMLHeader.inc.php');
include('includes/Header.inc.php');
?>

<div class="Lordly_newslist_box">

    <div class="Lordly_newslist_box_menu">
        <div class="Lordly_newslist_box_menu_title"><?php
            $news_category_ob = get_category( get_query_var('cat') );
			print($news_category_ob ->name);
            $child_categories = get_categories(array('parent'=>$news_category_ob->term_id,'hide_empty'=>0,'hierarchical'=>true));
		
		?></div>
        <ul>
    <?php
	if (count($child_categories) > 0){
        foreach($child_categories as $category){
		    print('<li><a href="'.get_category_link($category ->term_id).'" title="'.$category ->name.'">'.$category ->name.'</a></li>');
	    }
	}else{
		print('<li><div style=" margin:20px 10px 20px 10px; text-align:center;">没有子分类！</div></li>');
	}
	?>
                <?php
				$parent_id = $news_category_ob ->parent;
				if ($parent_id != 0) {
					$p_category = get_category( $news_category_ob ->parent );
				?>
            <li><a href="<?php print(get_category_link($p_category ->term_id)); ?>" title="<?php print($p_category ->name); ?>">返回</a></li>
                <?php
				}
				?>
        </ul>
    </div>
    
    <div class="Lordly_newslist_box_content">

        <div class="Lordly_newslist_box_content_cat-des"><?php
        print($news_category_ob ->description);
		?></div>

<?php if ( have_posts() ) : ?>
<ul class="Lordly_newslist_box_content_list">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

<li class="Lordly_newslist_box_content_list_item">
    <div class="Lordly_newslist_box_content_list_item_header">
        <h6 class="Lordly_newslist_box_content_list_item_header_title"><a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
        <span class="Lordly_newslist_box_content_list_item_header_info"><?php
        //$_temp_post = get_post(get_the_id());
		print($post->post_date); 
		print('&nbsp;&nbsp;By&nbsp;&nbsp;');
		the_author();
		?></span>
    </div>
    <div class="Lordly_newslist_box_content_list_item_summary"><?php 
	
	   //去除HTML标记
	   print( htmlspecialchars( mb_substr( strip_tags(get_the_content()), 0, 150 )) );
	
	 ?></div>
</li>

				<?php endwhile; ?>
</ul>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>

<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
<?php endif; ?>

    </div>
</div>

<?php
include('includes/Footer.inc.php');
include('includes/Nav.inc.php');
include('includes/HTMLFooter.inc.php');
?>