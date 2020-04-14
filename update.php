<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$cmd = 'echo $USER;'."cd  $cd;git pull -v 2>&1;"
$last_line = shell_exec ($cmd);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . 
'<hr>Path: '.$cd.
'<hr>CMD: '.$cmd;
?>
<br> 
final test2