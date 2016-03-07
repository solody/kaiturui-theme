<?php
function Lordly_Menu_Selected_CSS( $index ){
	global $Lordly_Menu_Selected_Index;
	
	if (!empty($Lordly_Menu_Selected_Index)){
		if ($index == $Lordly_Menu_Selected_Index) print(' class="Lordly_Header_Menu_Selected"');
	}
}
?>
<div class="Lordly_Header_Opacity"></div>

<div class="container_24 Lordly_MainBox">
    <div class="grid_24 Lordly_Header">
        <div class="grid_4 alpha Lordly_Header_Logo"></div>
        <div class="grid_20 omega Lordly_Header_Menu">
            <div class="Lordly_Header_Menu_Panel"></div>
            <div class="Lordly_Header_Menu_Content">
            <a href="/"<?php Lordly_Menu_Selected_CSS(1); ?>>首页</a>
            <a href="<?php ldy_page_link_by_slug('brands'); ?>"<?php Lordly_Menu_Selected_CSS(3); ?>>合作品牌</a>
            <a href="<?php ldy_page_link_by_slug('company'); ?>"<?php Lordly_Menu_Selected_CSS(2); ?>>公司简介</a>
            <a href="<?php echo get_category_link(get_cat_ID( '行业资讯' )); ?>"<?php Lordly_Menu_Selected_CSS(4); ?>>行业资讯</a>
            <a href="<?php echo get_category_link(get_cat_ID( '公司动态' )); ?>"<?php Lordly_Menu_Selected_CSS(5); ?>>公司动态</a>
            <a href="<?php ldy_page_link_by_slug('info_contact'); ?>"<?php Lordly_Menu_Selected_CSS(6); ?>>联系我们</a>
            </div>
        </div>
    </div>
    
    <div class="grid_24 Lordly_Body">