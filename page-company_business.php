<?php
//了解彩怒莉首页

$PAGE_TITLE = '业务体系 - 了解彩怒莉';

$PAGE_SEO = '<meta name="keywords" content="产品供应,香水批发,销售培训,营销策划,门店设计,公司简介,彩怒莉公司">
<meta name="description" content="彩怒莉公司的业务体系主要有产品供应服务和产品营销服务两方面。产品供应服务即是提供各种高端进口品牌的香水及其它化妆品的供货服务。产品营销服务则有产品知识培训、销售技能培训、营销方案策划、品牌及店面形象设计等。">
';

$PAGE_NAV = '&nbsp;&nbsp;<a href="'.ldy_page_link_by_slug_r('company').'">了解彩怒莉</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;业务体系&nbsp;&nbsp;&gt;';

$Lordly_Menu_Selected_Index = 2;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>



<div class="grid_24 alpha omega">

    <table cellpadding="0" cellspacing="0" class="Lordly_Company">
        <tr>
        <td class="Lordly_Company_Leftmenu">
            <?php include('includes/CompanyMenu.inc.php'); ?>
        </td>
        <td>
        <div class="Lordly_Company_Contentbox">
             <?php the_post();
                   the_content(); ?> 
        </div>
        </td>
        </tr>
    </table>

</div>


<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>