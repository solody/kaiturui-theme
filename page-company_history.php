<?php
//了解凯途锐首页

$PAGE_TITLE = '历程与展望 - 了解凯途锐';

$PAGE_SEO = '<meta name="keywords" content="历程与展望,公司简介,凯途锐公司">
<meta name="description" content="深圳市凯途锐贸易有限公司于2002年4月29号正式成立。在过去10年中，深圳凯途锐不断发展壮大，先后与中国宝洁及众多世界著名香水品牌建立合作关系，拥有稳定庞大的终端营销网络，现已成为高端品牌化妆品在中国内地首要的传播者之一。">
';

$PAGE_NAV = '&nbsp;&nbsp;<a href="'.ldy_page_link_by_slug_r('company').'">了解凯途锐</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;历程与展望&nbsp;&nbsp;&gt;';

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