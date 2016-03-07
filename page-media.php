<?php
//其他媒体

$PAGE_TITLE = '其他媒体';

$PAGE_NAV = '&nbsp;&nbsp;其他媒体&nbsp;&nbsp;&gt;';
$PAGE_CSS = '
<style>

</style>
';

$Lordly_Menu_Selected_Index = 6;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>



<div class="grid_24 alpha omega">

<div class="Lordly_info_mainbox">
<?php
the_post();
the_content();
?>
　　　　<img src="http://res.wx.qq.com/mpres/htmledition/images/login/logo.png"><br>
<img src="<?php echo LDY_ITR; ?>skin/image/media/weixin.jpg">
</div>

</div>

<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>