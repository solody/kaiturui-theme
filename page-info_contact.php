<?php
//了解凯途锐首页

$PAGE_TITLE = '联系凯途锐';

$PAGE_NAV = '&nbsp;&nbsp;联系凯途锐&nbsp;&nbsp;&gt;';
$PAGE_JS = '<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>';
$PAGE_CSS = '
<style>
.lanmu_info { float:left; width:280px; margin-right:38px;}
.lanmu_info_title {font-weight:bold; line-height:30px; border-bottom:3px dashed #DDD; padding-left:10px; }
.lanmu_info_content { padding:10px;}
</style>
';

$Lordly_Menu_Selected_Index = 6;
include(LDY_PTR.'includes/HTMLHeader.inc.php');
include(LDY_PTR.'includes/Header.inc.php');
?>



<div class="grid_24 alpha omega">

<div class="Lordly_info_mainbox">

<div style=" font-weight:bold; font-size:14px; line-height:30px;">公司地址：&nbsp;&nbsp;广东省&nbsp;&nbsp;广州市天河区&nbsp;&nbsp;桃源东路</div>


<div style="overflow:hidden; padding:20px 0px">

<div class="lanmu_info">
    <div class="lanmu_info_title">前台热线</div>
    <div class="lanmu_info_content">
    电　话：020-28095467<br>
    联系人：陈小姐
    </div>
</div>

<div class="lanmu_info">
    <div class="lanmu_info_title">招商热线</div>
    <div class="lanmu_info_content">
    电　话：020-28854578<br>
    联系人：林先生<br>
    邮　箱：39320253@qq.com<br>
    </div>
</div>

</div>


<div style=" font-weight:bold; font-size:14px; line-height:30px;">您可以通过下面的交互式地图找到公司的具体位置：</div>
<div style=" height:350px; border:3px dashed #CCC; padding:10px;"><div id="baidu_container" style=" height:350px;"></div></div>
<script type="text/javascript">
var map = new BMap.Map("baidu_container");          // 创建地图实例
var point = new BMap.Point(113.422229,23.116617);  // 创建点坐标
map.centerAndZoom(point, 14);                 // 初始化地图，设置中心点坐标和地图级别

map.addControl(new BMap.NavigationControl());  

var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
</script>
</div>

</div>

<?php
include(LDY_PTR.'includes/Footer.inc.php');
include(LDY_PTR.'includes/Nav.inc.php');
include(LDY_PTR.'includes/HTMLFooter.inc.php');
?>