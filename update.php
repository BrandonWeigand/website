<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;

$last_line = passthru ("git pull -v $cd;", $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval.
'<hr>Path: '.$cd;
?>