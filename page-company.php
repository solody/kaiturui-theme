<?php
//了解彩怒莉首页

$PAGE_TITLE = '了解彩怒莉';

$PAGE_SEO = '<meta name="keywords" content="彩怒莉公司,公司简介,了解公司,广州彩怒莉">
<meta name="description" content="从信念与愿景、探索领域、业务体系、历程与展望四个方面对彩怒莉公司进行了解。">
';

$PAGE_NAV = '&nbsp;'.$PAGE_TITLE.'&nbsp;&gt;';
//$PAGE_CSS = '<link rel="stylesheet" href="skin/mosaic/mosaic.css" type="text/css" media="screen">';
//$PAGE_JS  = '<script type="text/javascript" src="skin/mosaic/mosaic.1.0.1.js"></script>';

$Lordly_Menu_Selected_Index = 2;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>



<div class="grid_24 alpha omega" style=" height:338px; background:#999; border:none; margin:0;">
<a href="<?php ldy_page_link_by_slug('company_belief'); ?>" title="信念与愿景"><img src="<?php echo LDY_ITR; ?>skin/image/company/a.png"></a>
</div>

<div class="grid_24 alpha omega" style=" height:145px; background:#999; border-top:1px solid #323232;">
    <div style="width:316px; height:145px; float:left; border-right:1px solid #323232;">
        <a href="<?php ldy_page_link_by_slug('company_profession'); ?>" title="探索领域"><img src="<?php echo LDY_ITR; ?>skin/image/company/b.png"></a>
    </div>
    <div style="width:316px; height:145px; float:left; border-right:1px solid #323232;">
        <a href="<?php ldy_page_link_by_slug('company_business'); ?>" title="业务体系"><img src="<?php echo LDY_ITR; ?>skin/image/company/c.png"></a>
    </div>
    <div style="width:316px; height:145px; float:left;">
        <a href="<?php ldy_page_link_by_slug('company_history'); ?>" title="历程与展望"><img src="<?php echo LDY_ITR; ?>skin/image/company/d.png"></a>
    </div>
</div>

<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>