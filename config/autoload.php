<?php
    class Autoloader {
        static function register(){
            spl_autoload_register(array(__CLASS__, "autoload"));
        }
        static function autoload($class){

            $chain = str_replace("\\","/", $class);              
            $AbsPath = str_replace("\\","/",__DIR__.$chain.".php");         
            $APWConfigFolder = str_replace("config","",$AbsPath);

            if (file_exists($APWConfigFolder)) {
                include_once "$APWConfigFolder";
            } else {
                die("Utilisez le mot clef USE suivi de ".$class);
            }
        }
    }
    Autoloader::register();
?>