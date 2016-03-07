<?php
//品牌页-MARC JACOBS 马克.雅可布

$PAGE_TITLE = 'MARC JACOBS 马克.雅可布';

$PAGE_NAV = '&nbsp;<a href="'.ldy_page_link_by_slug_r('brands').'">合作品牌</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;'.$PAGE_TITLE.'&nbsp;&nbsp;&gt;';

$Lordly_Menu_Selected_Index = 3;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>

<div class="Lordly_Brands_ArticleBox">
<img class="Lordly_Brands_ArticleImg" src="<?php echo LDY_ITR; ?>skin/image/brands/article/marcjacobs.png" />

<?php include('includes/BrandsMenu.inc.php'); ?>

<?php while ( have_posts() ) : the_post(); ?>
        <h4><?php the_title(); ?></h4>
        <p>官方网站：<a href="http://www.marcjacobs.com/" title="MARC JACOBS 马克.雅可布" target="_blank" class="Lordly_outsite_link">http://www.marcjacobs.com/</a></p>
        <p>代理产品：<a href="http://www.marcjacobs.com/marc-jacobs/fragrance/" title="MARC JACOBS 马克.雅可布" target="_blank" class="Lordly_outsite_link">香水</a></p>
        
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
<?php endwhile; // end of the loop. ?>

</div>


<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>