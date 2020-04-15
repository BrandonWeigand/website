<?php 
//passthru("git pull;git merge;"););
echo '<pre>';
$cd = __DIR__;
$url = "https://github.com/BrandonWeigand/website.git";
$branch = "master";
$ownme="cd $cd".'sudo chown -R $USER: ./;sudo chmod -R 777 ./;';
$gitcmd=array(
    "pull"=>"sudo git pull -v $url $branch;",
    "clone"=>"rm -rfv $cd;sudo git clone $url $cd;"
);
$cmd = "{$ownme}{$gitcmd[$_GET["git"]]}";
$do = isset($_GET["git"]);
function execPrint($command) {
    $lines = array();
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        array_push($lines,$line);
    }
    return($lines);
}
if($do==true){
    var_dump(execPrint($cmd));
}
?>