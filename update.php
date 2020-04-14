<?php 
ob_start();
//passthru("<i>command</i>");
passthru("git pull;git merge;"););
$var = ob_get_contents();
ob_end_clean(); //Use this instead of ob_flush()
?>