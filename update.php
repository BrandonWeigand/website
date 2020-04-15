<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$url = "https://github.com/BrandonWeigand/website.git";
$branch = "master";
$ownme='sudo chown -R $USER: ./;sudo chmod -R 777 ./';
$cmd = "cd $cd;$ownme; sudo git pull -v $url $branch;";
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
execPrint($cmd);
?>