<?php
/**
 * 404页
 */
 
 $PAGE_TITLE = '联系彩怒莉';

$PAGE_NAV = '&nbsp;&nbsp;联系彩怒莉&nbsp;&nbsp;&gt;';
$PAGE_JS = '<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>';
$PAGE_CSS = '
<style>
.lanmu_info { float:left; width:280px; margin-right:38px;}
.lanmu_info_title {font-weight:bold; line-height:30px; border-bottom:3px dashed #DDD; padding-left:10px; }
.lanmu_info_content { padding:10px;}
</style>
';
 
include('includes/HTMLHeader.inc.php');
include('includes/Header.inc.php');
?>

<div class="grid_24 alpha omega">

<div class="Lordly_info_mainbox">


<h3>该页面不存在！请检查您输入的网址是否有错误。</h3>
<!--
<?php get_search_form(); ?>


	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
-->
</div>
</div>

<?php
include('includes/Footer.inc.php');
include('includes/Nav.inc.php');
include('includes/HTMLFooter.inc.php');
?>