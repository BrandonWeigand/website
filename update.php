<?php 
//passthru("git pull;git merge;"););
echo '<pre>';

$last_line = system('git pull -verbose;', $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>
<br>
auto test