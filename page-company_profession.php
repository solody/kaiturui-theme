<?php
//经营领域

$PAGE_TITLE = '经营领域 - 关于凯途锐';

$PAGE_SEO = '<meta name="keywords" content="经营领域,公司简介,凯途锐公司">
<meta name="description" content="凯途锐公司目前的经营领域主要有香水和其他化妆品。">
';

$PAGE_NAV = '&nbsp;&nbsp;<a href="'.ldy_page_link_by_slug_r('company').'">了解凯途锐</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;经营领域&nbsp;&nbsp;&gt;';

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