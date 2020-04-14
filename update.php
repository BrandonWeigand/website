<?php 
//passthru("git pull;git merge;"););
echo '<pre>';

$last_line = system('git pull -v;top;', $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>