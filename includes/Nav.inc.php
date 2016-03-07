<?php
//网站导航条
?>
<div class="Lordly_Nav"><div><a href="<?php echo home_url(); ?>">HOME</a>&nbsp;&nbsp;&nbsp;&gt;<?php

if ( !empty($PAGE_NAV) ) echo $PAGE_NAV; 

?></div></div>