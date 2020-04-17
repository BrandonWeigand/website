<?php

    if(!isset($_GET["key"])){exit(json_encode(array("error"=>"key unset")));}
    if($_GET["key"]!=md5("public key")){exit(json_encode(array("error"=>"key unknown")));}
    function run($cmd){
        $r = array();
        $proc = popen($cmd, 'r');
        while (!feof($proc)){
            array_push($r,"[".date("i:s")."] ".fread($proc, 4096));
        }
        return($r);
    }
    
    $DIR=__DIR__;
    $url=($_GET["url"])$_GET["url"]?:"https://github.com/BrandonWeigand/website.git";
    $branch = (isset($_GET["branch"]))?:"master";
    $cmd="cd {$DIR};";
    if(isset($_GET["git"])){
        switch($_GET["git"]){
            case"clone":{$cmd.="rm -r {$DIR}/*;git clone --single-branch --branch {$branch} $url {$DIR};";}break;
            case"pull":{$cmd.="git fetch --all;git reset --hard origin/{$branch};";}break;
            default{}break;
        }
    }

    $out = array(
        "user"=>posix_getpwuid(posix_geteuid())['name']),
        "dir"=>$DIR,
        "url"=>$url,
        "branch"=>$branch,
        "cmd"=>$cmd,
        "lines"=>run($cmd)
    );
    echo(json_encode($out);
?>