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
if(isset($_GET["git"])){echo(exec($cmd));}
echo("<br>".posix_getpwuid(posix_geteuid())['name']);
?>