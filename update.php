<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$cmd = "cd  $cd/.git/;".'chown -R $USER: ./; chmod -R 777 ./;'."cd  $cd;git pull -v 2>&1;";
$last_line = exec ($cmd,$rtn,$tmp);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . 
'<hr>Path: '.$cd.
'<hr>CMD: '.$cmd;
var_dump(json_encode(array(
    "tmp"=>$tmp,
    "return"=>$rtn
)));
?>