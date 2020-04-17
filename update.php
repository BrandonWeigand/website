<?php

    if(!isset($_GET["key"])){exit(json_encode(array("error"=>"key unset")));}
    if($_GET["key"]!="key"){exit(json_encode(array("error"=>"key unknown")));}
    function run($cmd){
        $r = preg_split('/\s+/', trim(shell_exec($cmd)));

        /*
        $proc = popen($cmd, 'r');
        while (!feof($proc)){
            array_push($r,"[".date("i:s")."] ".fread($proc, 4096));
        }
        */
        return($r);
    }

    $DIR=__DIR__;
    $url=(isset($_GET["url"]))?$_GET["url"]:"https://github.com/BrandonWeigand/website.git";
    $branch = (isset($_GET["branch"]))?$_GET["url"]:"master";
    $cmd="cd {$DIR};";
    if(isset($_GET["git"])){
        switch($_GET["git"]){
            case"clone":{$cmd.="rm -rv {$DIR};git clone --progress --verbose --single-branch --branch {$branch} $url {$DIR};";}break;
            case"pull":{$cmd.="git fetch --progress --verbose --all;git reset --progress --verbose --hard origin/{$branch};";}break;
            default:{}break;
        }
    }

    $out = array(
        "user"=>posix_getpwuid(posix_geteuid()),
        "dir"=>$DIR,
        "url"=>$url,
        "branch"=>$branch,
        "cmd"=>$cmd,
        "lines"=>run($cmd)
    );
    echo(json_encode($out));

?>
