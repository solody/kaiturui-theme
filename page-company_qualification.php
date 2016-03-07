<?php
//公司资质

$PAGE_TITLE = '公司资质 - 关于彩怒莉';

$PAGE_SEO = '<meta name="keywords" content="公司资质,公司简介,彩怒莉公司">
<meta name="description" content="彩怒莉公司目前的经营领域主要有香水和其他化妆品。">
';

$PAGE_NAV = '&nbsp;&nbsp;<a href="'.ldy_page_link_by_slug_r('company').'">了解彩怒莉</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;公司资质&nbsp;&nbsp;&gt;';

$Lordly_Menu_Selected_Index = 2;
include('includes/HTMLHeader.inc.php');
include('includes/Header.inc.php');
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
include('includes/Footer.inc.php');
include('includes/Nav.inc.php');
include('includes/HTMLFooter.inc.php');
?>