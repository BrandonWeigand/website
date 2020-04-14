<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$cmd = "cd  $cd;git pull -v 2>&1;";
$last_line = passthru ($cmd, $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval.
'<hr>Path: '.$cd.
'<hr>CMD: '.$cmd;
?>
<br> 
final test2