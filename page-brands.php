<?php
//合作品牌首页

$PAGE_TITLE = '合作品牌';

$PAGE_NAV = '&nbsp;'.$PAGE_TITLE.'&nbsp;&gt;';
$PAGE_CSS = '<link rel="stylesheet" href="'.LDY_ITR.'skin/mosaic/mosaic.css" type="text/css" media="screen">
<style type="text/css">
.mosaic-block { border:none;  margin:0px;}
.mosaic-overlay {text-decoration:none; }
.mosaic_textbox { margin:15px 20px; color:#FFF; }
</style>
';
$PAGE_JS  = '<script type="text/javascript" src="'.LDY_ITR.'skin/mosaic/mosaic.1.0.1.js"></script>
		<script type="text/javascript">  
			
			jQuery(function($){
				$(\'.bar2\').mosaic({
					animation	:	\'slide\'
				});
		    });
		    
		</script>
';

$Lordly_Menu_Selected_Index = 3;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>

<div class="grid_24 alpha omega">

<table cellpadding="0" cellspacing="0" style="margin:0px;">
    <tr>
        <td colspan="2">
            <div class="mosaic-block bar2" style="width:474px; height:322px;">
                <a href="<?php ldy_page_link_by_slug('brand_chanel'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>CHANEL</h4>
                        <p>香奈儿</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/chanel.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:237px; height:322px;">
                <a href="<?php ldy_page_link_by_slug('brand_dior'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>DIOR</h4>
                        <p>迪奥</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/dior.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:237px; height:322px;">
                <a href="<?php ldy_page_link_by_slug('brand_gucci'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>GUCCI</h4>
                        <p>古驰</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/gucci.png"/></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_hugoboss'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>HUGO BOSS</h4>
                        <p>优客博士</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/hugo.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_ck'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>CALVIN KLEIN</h4>
                        <p>卡尔文.克莱恩</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/ck.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_lancome'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>LANCOME</h4>
                        <p>兰蔻</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/lancome.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_burberry'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>BURBERRY</h4>
                        <p>巴宝莉</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/burberry.png"/></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_bvlgari'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>BVLGARI</h4>
                        <p>宝格丽</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/bvlgari.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px;">
                <a href="<?php ldy_page_link_by_slug('brand_annasui'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>ANNA SUI</h4>
                        <p>安娜苏</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/annasui.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_versace'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>VERSACE</h4>
                        <p>范思哲</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/versace.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_davidoff'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>DAVI DOFF</h4>
                        <p>大卫杜夫</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/davidoff.png"/></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_dg'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>DOLCE&amp;GABBANA</h4>
                        <p>杜嘉班纳</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/dg.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_lanvin'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>LANVIN</h4>
                        <p>浪凡</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/lanvin.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_marcjacobs'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>MARC JACOBS</h4>
                        <p>马亚科布</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/marcjacobs.png"/></div>
            </div>
        </td>
        <td>
            <div class="mosaic-block bar2" style="width:236px; height:160px; margin:0px;">
                <a href="<?php ldy_page_link_by_slug('brand_guerlain'); ?>" target="_blank" class="mosaic-overlay">
                    <div class="mosaic_textbox">
                        <h4>GUERLAIN</h4>
                        <p>娇兰</p>
                    </div>
                </a>
                <div class="mosaic-backdrop"><img src="<?php echo LDY_ITR; ?>skin/image/brands/guerlain.png"/></div>
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