<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$cmd = "git pull -v $cd;";
$last_line = passthru ($cmd, $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval.
'<hr>Path: '.$cd.
'<hr>CMD: '.$cmd;
?>