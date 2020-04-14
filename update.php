<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$cmd = "cd  $cd;git pull -v 2>&1; echo ".'$USER;';
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