<?php
//网站地图

$PAGE_TITLE = '网站地图';

$PAGE_NAV = '&nbsp;&nbsp;网站地图&nbsp;&nbsp;&gt;';
$PAGE_JS = '<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>';
$PAGE_CSS = '
<style>
.lanmu_info { float:left; width:280px; margin-right:38px;}
.lanmu_info_title {font-weight:bold; line-height:30px; border-bottom:3px dashed #DDD; padding-left:10px; }
.lanmu_info_content { padding:10px;}
</style>
';

$Lordly_Menu_Selected_Index = 4;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>



<div class="grid_24 alpha omega">

<div class="Lordly_info_mainbox">
<?php
the_post();
the_content();
?>
</div>

</div>

<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>