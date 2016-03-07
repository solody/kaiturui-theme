<?php
//公司动态列表页

$PAGE_TITLE = get_the_title();
$PAGE_CSS = '<link type="text/css" rel="stylesheet" href="http://www.gzlordly.com/wp-includes/js/tinymce/plugins/spellchecker/css/content.css">
<link type="text/css" rel="stylesheet" href="http://www.gzlordly.com/wp-content/themes/twentyeleven/editor-style.css">
<link type="text/css" rel="stylesheet" href="http://www.gzlordly.com/wp-includes/js/tinymce/themes/advanced/skins/wp_theme/content.css">';

$cat_array = get_the_category();
foreach($cat_array as $cat){
	$PAGE_TITLE .= ' - '.$cat ->name;
}

$Lordly_Menu_Selected_Index = 4;
include('includes/HTMLHeader.inc.php');
include('includes/Header.inc.php');
?>


<div class="Lordly_Company_Contentbox" style="background-color:#FFF;">
<div class="Lordly_Company_Contentbox_back-button" onclick="history.back();">返回</div>
<?php while ( have_posts() ) : the_post(); ?>
        <h4><?php the_title(); ?></h4>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
<?php endwhile; // end of the loop. ?>
</div>

<?php
include('includes/Footer.inc.php');
include('includes/Nav.inc.php');
include('includes/HTMLFooter.inc.php');
?>