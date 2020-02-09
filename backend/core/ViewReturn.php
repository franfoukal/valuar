<?php

    class ViewReturn{
        private static $view;
        private static $var;

        public static function setView(string $view, array $var=null){
            self::$view = "././views/$view.php";
            self::$var = $var;
        }

        public static function getView(){
           return self::$view;
        }
        public static function getVars(){
            return self::$var;
        }


        
    }

?>