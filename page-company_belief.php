<?php
//信念与愿景

$PAGE_TITLE = '信念与愿景 - 了解凯途锐';

$PAGE_SEO = '<meta name="keywords" content="信念与愿景,公司简介,凯途锐公司">
<meta name="description" content="本着尊重品牌的原创精神，正确营造品牌的专业形象，为中国内地的消费者提供最具质量保障及最卓越的品牌产品，满足消费者高品位美的享受，同时，为国内外各高端品牌文化交流提供一个广阔的平台，促使国内外消费者更好地进行奢侈品文化的沟通和交流。">
';

$PAGE_NAV = '&nbsp;&nbsp;<a href="'.ldy_page_link_by_slug_r('company').'">了解凯途锐</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;信念与愿景&nbsp;&nbsp;&gt;';

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