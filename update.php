<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$url = "https://github.com/BrandonWeigand/website.git";
$branch = "master";
$ownme='sudo chown -R $USER: ./;sudo chmod -R 777 ./';
$cmd = "cd $cd;$owmme;git pull -v $url $branch;";
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