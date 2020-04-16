<?php 
$cd = __DIR__;
$url = "https://github.com/BrandonWeigand/website.git";
$branch = "master";
$ownme="cd $cd".'sudo chown -R $USER: ./;sudo chmod -R 777 ./;';
$gitcmd=array(
    "pull"=>"sudo git pull -v $url $branch 2>&1;",
    "clone"=>"rm -rfv $cd;sudo git clone $url $cd 2>&1;"
);
$cmd = "{$ownme}{$gitcmd[$_GET["git"]]}";

function run($cmd){
    $r = array();
    $proc = popen($cmd, 'r');
    while (!feof($proc)){
        array_push($r,"[".date("i:s")."] ".fread($proc, 4096));
    }
    return($r);
}

if(isset($_GET["git"])){
    $lines=array(posix_getpwuid(posix_geteuid())['name']));
    array_merge($lines,run($cmd));
    }
    //echo("<code>".json_encode($lines)."</code>");
?>
hello world