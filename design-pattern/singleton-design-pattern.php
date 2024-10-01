<?php 
//private static varibles
//private construct
//public static method return class single instance

class singleton{
    private static $instance=null;
    private function __construct(){
        echo 'Db Connect Successfully.';
    }
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new singleton();
        }else{
            echo 'Already Connected Successfully.';
        }
    }
}

singleton::getInstance();

//if we call object multiple time its return already connected 
//singleton::getInstance();

//singleton::getInstance();
?>