<?php
//公司网站首页

$PAGE_SEO = '<meta name="keywords" content="深圳凯途锐,宝洁香水,进口香水,香水批发,香水代理,化妆品">
<meta name="description" content="深圳市凯途锐贸易有限公司于2002年4月29号正式成立。在过去10年中，深圳凯途锐不断发展壮大，先后与中国宝洁及众多世界著名香水品牌建立合作关系，拥有稳定庞大的终端营销网络，现已成为高端品牌化妆品在中国内地首要的传播者之一。">
';

$PAGE_CSS = '<!--link rel="stylesheet" type="text/css" href="'.LDY_ITR.'skin/slider/engine1/style.css"-->
<style type="text/css">a#vlb{display:none}</style>
<style type="text/css">

</style>
';

$PAGE_JS  = '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="'.LDY_ITR.'skin/BrandFlow/BrandFlow.js"></script><script type="text/javascript" src="'.LDY_ITR.'skin/slider/engine1/wowslider.js"></script>
';

$Lordly_Menu_Selected_Index = 1;

include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>


        <!--div class="grid_24 alpha omega Lordly_Body_Title">品牌分享</div-->
        <div class="grid_24 alpha omega Lordly_Body_Ad">
            <!--div id="wowslider-container1">
                <div class="ws_images">
                    <a href="http://www.gzlordly.com" target="_self"><img src="<?php echo LDY_ITR; ?>skin/slider/data1/images/a.jpg" alt="古池花之舞" title="古池花之舞" id="wows0"/>古池花之舞淡香水</a>
                    <a href="http://www.gzlordly.com"><img src="<?php echo LDY_ITR; ?>skin/slider/data1/images/b.jpg" alt="安娜苏摇滚甜心" title="安娜苏摇滚甜心" id="wows1"/>安娜苏摇滚甜心淡香水</a>
                </div>
                <div class="ws_bullets"><div>
                    <a href="#wows0" title="古池花之舞"><img src="<?php echo LDY_ITR; ?>skin/slider/data1/tooltips/a.jpg" alt="古池花之舞"/>1</a>
                    <a href="#wows1" title="安娜苏摇滚甜心"><img src="<?php echo LDY_ITR; ?>skin/slider/data1/tooltips/b.jpg" alt="安娜苏摇滚甜心"/>2</a>
                </div></div>
            </div>
            <script type="text/javascript" src="<?php echo LDY_ITR; ?>skin/slider/engine1/script.js"></script-->
            <div style=" width:948px; height:418px; background:#000; border:1px solid #272727; opacity:0.4;filter: progid:DXImageTransform.Microsoft.Alpha(opacity=40); position:absolute; z-index:-99;"></div>
            <div id="bf" style=" margin:10px auto auto 10px;"></div>
            <div class="ServiceInfo">
                <div class="ServiceInfo_title">凯途锐公司的专业团队为您提供优质服务</div>
                <div class="ServiceInfo_items">
                    <div class="ServiceInfo_item">
                        <div class="ServiceInfo_item_name">国际品牌化妆品供货服务</div>
                        <div class="ServiceInfo_item_image"><img src="<?php echo LDY_ITR.'skin/image/index/' ?>service_item_1.jpg" /></div>
                        <div class="ServiceInfo_item_text">凯途锐公司的专业团队引进了众多国际知名品牌的化妆品，如GUCCI、HUGO BOSS、LACOSTE等品牌的香水及彩妆产品，我们长期提供百分百的正品行货，如果您打算经营香水、彩妆及护肤品等类目的产品，那么毫无疑问凯途锐是您最直得信任的合作伙伴。</div>
                    </div>
                    <div class="ServiceInfo_item">
                        <div class="ServiceInfo_item_name">国际品牌化妆品代理服务</div>
                        <div class="ServiceInfo_item_image"><img src="<?php echo LDY_ITR.'skin/image/index/' ?>service_item_2.jpg" /></div>
                        <div class="ServiceInfo_item_text">凯途锐公司拥有最专业的海外品牌化妆品引进团队，凭借着凯途锐公司十多年来的行业经验，以及强大的国内销售渠道资源和产品营销团队，有足够的实力使您把您的品牌及产品交由凯途锐公司为您全面打开其在中国的庞大市场。</div>
                    </div>
                    <div class="ServiceInfo_item">
                        <div class="ServiceInfo_item_name">化妆品营销方案策划服务</div>
                        <div class="ServiceInfo_item_image"><img src="<?php echo LDY_ITR.'skin/image/index/' ?>service_item_3.jpg" /></div>
                        <div class="ServiceInfo_item_text">凯途锐公司以其专业的服务水准，十余年来积累了全各地数千家的销售端客户，它们之中包含了各种类型的销售终端，凯途锐公司的针对它们各自的特性，为它们策划过各种各样的营销方案，成功地完成了无数个销售计划。</div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$('#bf').BrandFlow([
					{
					 "brand":{ "name":"CHANEL 香奈儿", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/chanel.png","link":"#" },
					 "products":[
					             { "name":"CHANEL NO.5", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/chanel/1.png","link":"http://www.chanel.com/en_US/fragrance-beauty/N%C2%B05-136328" },
								 { "name":"CHANEL COCO MADEMOISELLE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/chanel/2.png","link":"http://www.chanel.com/en_US/fragrance-beauty/COCO-MADEMOISELLE-136299" },
								 { "name":"CHANEL CHANCE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/chanel/3.png","link":"http://www.chanel.com/en_US/fragrance-beauty/CHANCE-136332" }
								 ]
					},
					{
					 "brand":{ "name":"DIOR 迪奥", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior.png","link":"#" },
					 "products":[
								 { "name":"DIOR miss dior", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/1.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/miss-dior/fr-missdiorfpl-miss-dior.html" },
								 { "name":"DIOR Poison", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/2.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/poison/fr-poisonfpl-poison.html" },
								 { "name":"DIOR jadore", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/3.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/jadore/fr-jadorefpl-jadore.html" },
								 { "name":"DIOR addict", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/4.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/dior-addict/fr-dioraddictfpl-dior-addict.html" },
								 { "name":"DIOR homme", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/5.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/mens-fragrance/dior-homme/fr-diorhommefpl-dior-homme.html" },
								 { "name":"DIOR Eau Sauvage", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/6.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/mens-fragrance/eau-sauvage/fr-eausauvagefpl-eau-sauvage.html" },
								 { "name":"DIOR Les Créations de Monsieur Dior", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/7.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/les-creations-de-monsieur-dior/fr-creationsdemonsieurdiorfpl-les-creations-de-monsieur-dior.html" },
								 { "name":"DIOR dolce vita", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/8.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/dolce-vita/fr-dolcevitafpl-dolce-vita.html" },
								 { "name":"DIOR Fahrenheit", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/9.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/mens-fragrance/fahrenheit/fr-fahrenheitfpl-fahrenheit.html" },
								 { "name":"DIOR dune", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dior/10.png","link":"http://www.dior.com/beauty/en_us/fragrance-and-beauty/fragrance/womens-fragrance/dune/fr-dunefpl-dune.html" }
								 ]
					},
					{
					 "brand":{ "name":"GUCCI 古池", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci.png","link":"#" },
					 "products":[
					             { "name":"Gucci The Flora Garden gracious tuberose 古驰花之舞雅致晚香玉", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/6.png","link":"http://www.gucci.com/us/styles/297706999990099" },
								 { "name":"Gucci The Flora Garden Glamorous Magnolia 古驰花之舞花园魅惑木兰", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/7.png","link":"http://www.gucci.com/us/styles/297702999990099" },
								 { "name":"Gucci The Flora Garden Gorgeous Gardenia 古驰花之舞花园绚丽栀子", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/8.png","link":"http://www.gucci.com/us/styles/297696999990099" },
								 { "name":"FLORA BY GUCCI EDT VAPO 古驰花之舞淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/1.png","link":"http://www.gucci.com/us/styles/224490999990099" },
								 { "name":"GUCCI GUILTY 古驰罪爱女士香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/2.png","link":"http://www.gucci.com/us/styles/291014999990099" },
								 { "name":"GUCCI BY GUCCI EDP VAPO 古驰经典女士香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/3.png","link":"http://www.gucci.com/us/styles/202847999990099" },
								 { "name":"GUCCI GUILTY FOR MEN 古驰罪爱男香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/4.png","link":"http://www.gucci.com/us/styles/262567999990099" },
								 { "name":"Flora Fraiche 古驰花之舞清新淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/gucci/5.png","link":"http://www.gucci.com/us/styles/277706999990099" }
								 ]
					},
					{
					 "brand":{ "name":"BOSS 博士", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss.png","link":"#" },
					 "products":[
								 { "name":"BOSS ORANGE WOMAN EDT 博士橙色女用淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/1.png","link":"http://www.fragrances.hugoboss.com/cn/boss_orange_woman.php" },
								 { "name":"BOSSBottled Night 博士午夜绅士男士淡", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/2.png","link":"http://www.fragrances.hugoboss.com/cn/boss_bottled_night.php" },
								 { "name":"FEMME BY BOSS EDT 博士风尚女用香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/3.png","link":"http://www.fragrances.hugoboss.com/cn/boss_femme.php" },
								 { "name":"Celebration of Happiness 博士欢乐淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/4.png","link":"http://www.fragrances.hugoboss.com/cn/boss_orange_woman.php" },
								 { "name":"BOSS Sunset 博士橙色落日淡香水（橙暮）", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/5.png","link":"http://store-uk.hugoboss.com/BOSS-Orange-Sunset-Eau-de-Toilette-50-ml/hbeu58013651,en_GB,pd.html?wt_mc=uk.hbcom.suche.link.x.58013651" },
								 { "name":"BOSS ORANGE FOR MAN 博士橙色男用淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/boss/6.png","link":"http://www.fragrances.hugoboss.com/uk/boss_orange_man.php" },
								 { "name":"HUGO EDT 优客男仕喷雾香氛", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/hugo/1.png","link":"http://www.fragrances.hugoboss.com/uk/hugo_man.php" },
								 { "name":"Hugo XX EDT 优客爱火女用香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/hugo/2.png","link":"http://www.fragrances.hugoboss.com/uk/hugo_xx.php" },
								 { "name":"Hugo XY EDT 优客爱火男用香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/hugo/3.png","link":"http://www.fragrances.hugoboss.com/uk/hugo_xy.php" }
								 ]
					},
					{
					 "brand":{ "name":"Calvin Klein 卡尔文克莱恩", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck.png","link":"#" },
					 "products":[
								 { "name":"Calvin Klein ETERNITY AQUA", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/1.png","link":"http://explore.calvinklein.com/zh_CN/explore/ckfragrances/home/products/eternity-aqua-T172-TLNK172/" },
								 { "name":"Calvin Klein FORBIDDEN EUPHORIA", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/2.png","link":"http://explore.calvinklein.com/zh_CN/explore/ckfragrances/home/products/forbidden-euphoria-T204-TLNK204/" },
								 { "name":"Calvin Klein CK ONE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/3.png","link":"http://explore.calvinklein.com/zh_CN/explore/ckfragrances/home/products/ck-one--T175-TLNK175/" },
								 { "name":"Calvin Klein CK BE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/4.png","link":"http://explore.calvinklein.com/en_ROW/timeline/1997/9/113-ck-be-calvin-klein" },
								 { "name":"Calvin Klein CK IN2U", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/5.png","link":"http://www.fragrantica.com/perfume/Calvin-Klein/CK-IN2U-for-Her-934.html" },
								 { "name":"Calvin Klein CK FREE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/ck/6.png","link":"http://explore.calvinklein.com/zh_CN/explore/ckfragrances/home/products/ck-free-T174-TLNK174/" }
								 ]
					},
					{
					 "brand":{ "name":"LANCOME 兰蔻", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome.png","link":"#" },
					 "products":[
								 { "name":"La vie est belle - Eau de Parfum", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/1.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/la-vie-est-belle/la-vie-est-belle-eau-de-parfum-313013.aspx" },
								 { "name":"La vie est belle - Eau de Parfum", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/2.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/la-vie-est-belle/la-vie-est-belle-eau-de-parfum-313013.aspx" },
								 { "name":"Trésor L'Eau de Parfum", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/3.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/tresor/tresor-leau-de-parfum-lumineuse-07202q.aspx" },
								 { "name":"Trésor L'Eau de Parfum", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/4.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/tresor/tresor-leau-de-parfum-lumineuse-07202q.aspx" },
								 { "name":"Trésor In Love", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/5.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/tresor-in-love/tresor-in-love-072135.aspx" },
								 { "name":"Ô d'Azur", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lancome/6.png","link":"http://www2.lancome.com/_en/_ww/fragrance/women/o-dazur/o-dazur-077065.aspx" }
								 ]
					},
					{
					 "brand":{ "name":"BURBERRY 巴宝莉", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/burberry.png","link":"#" },
					 "products":[
								 { "name":"BURBERRY 巴宝莉 brit rhythm", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/burberry/1.png","link":"http://hk.burberry.com/brit-rhythm/" },
								 { "name":"BURBERRY 巴宝莉 BURBERRY BODY", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/burberry/2.png","link":"http://hk.burberry.com/burberry-body/" },
								 { "name":"BURBERRY 巴宝莉 THE BEAT", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/burberry/3.png","link":"http://hk.burberry.com/mens-brit-fragrances/" }
								 ]
					},
					{
					 "brand":{ "name":"BVLGARI 宝格丽", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/bvlgari.png","link":"#" },
					 "products":[
								 { "name":"BVLGARI AQVA POUR HOMME", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/bvlgari/1.png","link":"http://zh-cn.bulgari.com/productDetail.jsp?prod=91102" },
								 { "name":"宝格丽紫晶纯香香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/bvlgari/2.png","link":"http://zh-cn.bulgari.com/productDetail.jsp?prod=95251" },
								 { "name":"ROSE ESSENTIELLE - 宝格丽玫香女士喷雾式香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/bvlgari/3.png","link":"http://zh-cn.bulgari.com/productDetail.jsp?prod=82241" }
								 ]
					},
					{
					 "brand":{ "name":"ANNA SUI 安娜苏", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/annasui.png","link":"#" },
					 "products":[
								 { "name":"ANNA SUI ROCK ME SUMMER OF LOVE EDT 安娜苏摇滚甜心淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/annasui/1.png","link":"http://www.annasui.com/sc/#/rockmesol" },
								 { "name":"ANNA SUI SECRET WISH EDT 安娜苏许愿精灵香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/annasui/2.png","link":"http://www.annasui.com/sc/#/secretwish" },
								 { "name":"ANNA SUI LIVE YOUR DREAM EDT 安娜苏梦境成真香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/annasui/3.png","link":"http://www.annasui.com/sc/#/liveyourdream" }
								 ]
					},
					{
					 "brand":{ "name":"VERSACE 范思哲", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/versace.png","link":"#" },
					 "products":[
								 { "name":"VERSACE 范思哲 Bright Crystal Absolu", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/versace/1.png","link":"http://www.versace.com/en/fragrances/women/bright-crystal-absolu" },
								 { "name":"VERSACE 范思哲", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/versace/2.png","link":"http://www.versace.com/en/fragrances/men/versace-pour-homme" }
								 ]
					},
					{
					 "brand":{ "name":"DAVIDOFF 大卫杜夫", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/davidoff.png","link":"#" },
					 "products":[
								 { "name":"DAVIDOFF 大卫杜夫 cool-water-night-dive", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/davidoff/1.png","link":"http://www.zinodavidoff.com/fragrances/for-him/cool-water-night-dive/" },
								 { "name":"DAVIDOFF 大卫杜夫 cool-water-woman", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/davidoff/2.png","link":"http://www.zinodavidoff.com/fragrances/for-her/cool-water-woman/" },
								 { "name":"DAVIDOFF 大卫杜夫 adventure", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/davidoff/3.png","link":"http://www.zinodavidoff.com/fragrances/for-him/adventure/" }
								 ]
					},
					{
					 "brand":{ "name":"D&amp;G", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dg.png","link":"#" },
					 "products":[
								 { "name":"D&amp;G ROSE THE ONE EDP 杜嘉班纳唯我玫瑰香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dg/1.png","link":"http://www.dolcegabbana.com/beauty/perfumes/women/the-one-rose/" },
								 { "name":"D&amp;G THE ONE EDT 杜嘉班纳唯我淡香水", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/dg/2.png","link":"http://www.dolcegabbana.com/beauty/perfumes/the-one/" }
								 ]
					},
					{
					 "brand":{ "name":"LANVIN 浪凡", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lanvin.png","link":"#" },
					 "products":[
								 { "name":"LANVIN 浪凡 Marry me ! ", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lanvin/1.png","link":"http://www.lanvinparfums.com/en/parfums-feminins/marry-me.php" },
								 { "name":"LANVIN 浪凡 jeanne", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lanvin/2.png","link":"http://www.lanvinparfums.com/en/parfums-feminins/jeanne-lanvin.php" },
								 { "name":"LANVIN 浪凡 eclat-d-arpege", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/lanvin/3.png","link":"http://www.lanvinparfums.com/en/parfums-feminins/eclat-d-arpege.php" }
								 ]
					},
					{
					 "brand":{ "name":"MARC JACOBS 马亚科布", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/marcjacobs.png","link":"#" },
					 "products":[
								 { "name":"Daisy Eau So Fresh", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/marcjacobs/1.png","link":"http://www.marcjacobs.com/marc-jacobs/fragrance/womens/daisyeau4.2/daisy-eau-so-fresh-4-2-oz" },
								 { "name":"Lola Eau de Parfum Spray ", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/marcjacobs/2.png","link":"http://www.marcjacobs.com/marc-jacobs/fragrance/womens/lola3.4oz/lola-eau-de-parfum-spray-3-4-oz" },
								 { "name":"Dot Eau de Toilette", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/marcjacobs/3.png","link":"http://www.marcjacobs.com/marc-jacobs/fragrance/womens/dot3.4oz/dot-eau-de-toilette-3-4-oz" }
								 ]
					},
					{
					 "brand":{ "name":"GUERLAIN 娇兰", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/guerlain.png","link":"#" },
					 "products":[
								 { "name":"LA PETITE ROBE NOIRE EAU DE PARFUM COUTURE", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/guerlain/1.png","link":"http://www.guerlain.com/hk/en-hk/fragrance/womens-fragrances/la-petite-robe-noire/la-petite-robe-noire-eau-de-parfum-couture" },
								 { "name":"SHALIMAR EXTRACT", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/guerlain/2.png","link":"http://www.guerlain.com/hk/en-hk/fragrance/womens-fragrances/shalimar/shalimar-extract-bottle" },
								 { "name":"I dylle", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/guerlain/3.png","link":"http://www.guerlain.com/hk/en-hk/fragrance/womens-fragrances/idylle" },
								 { "name":"Aqua Allegoria", "image":"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/guerlain/4.png","link":"http://www.guerlain.com/hk/en-hk/fragrance/womens-fragrances/aqua-allegoria" }
								 ]
					},
					],"<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/arrow_up.png","<?php echo LDY_ITR.'skin/BrandFlow/' ?>image/arrow_dn.png");
</script>

<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>