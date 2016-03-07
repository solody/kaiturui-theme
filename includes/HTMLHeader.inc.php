<?php
/* 此处的代码是为了新旧版共存而作的处理，现在把新版设置为默认，故不再需要
if (empty($_COOKIE['new'])){ 
ob_clean();
header('location: http://www.gzlordly.com:8080');
exit();
}
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php

if ( !empty($PAGE_TITLE) ) echo $PAGE_TITLE.' - ';

?>深圳凯途锐贸易有限公司</title>
<?php
if ( !empty($PAGE_SEO) ) echo $PAGE_SEO;
?>
<link href="<?php echo LDY_ITR; ?>skin/960gs/reset.css" type="text/css" rel="stylesheet">
<link href="<?php echo LDY_ITR; ?>skin/960gs/text.css" type="text/css" rel="stylesheet">
<link href="<?php echo LDY_ITR; ?>skin/960gs/960_24_col.css" type="text/css" rel="stylesheet">
<?php
if ( !empty($PAGE_CSS) ) echo $PAGE_CSS;
?>
<link href="<?php echo LDY_ITR; ?>skin/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo LDY_ITR; ?>js/jquery-1.11.2.min.js"></script>
<?php
if ( !empty($PAGE_JS) ) echo $PAGE_JS;
?>


</head>

<body>