<?php
    define("WWW_ROOT", '');

    function url_for($path){
        if($path[0] != "/"){
            $path = "/" . $path;
        }
        return WWW_ROOT . $path;
    }
?>