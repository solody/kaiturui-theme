<?php
//HTML页尾
?>
<script type="text/javascript">
$(document).ready(function() {
  $('.Lordly_Header_Logo').bind("click",function (){ window.location.href="/" });
  if ($.browser.msie && (parseInt($.browser.version,10) < 8)){
     $('.Lordly_Header_Logo').append('<div style=" position:absolute; padding:5px; border:1px red solid; border-top:none; background-color:yellow; color:black; width:950px;">您正在使用 IE '+$.browser.version+' 浏览器版本过低，存在大量安全问题以及网页标准支持问题，这将使您的电脑会轻易被病毒入侵，并且致使您无法正常浏览部分网页，我们强烈建议您把浏览器升级到9.0或10.0版本。<a href="http://windows.microsoft.com/zh-CN/internet-explorer/downloads/ie-9/worldwide-languages">马上升级</a></div>');
  }
});
</script>
</body>
</html>