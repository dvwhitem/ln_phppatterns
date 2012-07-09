<?php
 /**
 * Class Singleton 
 */
 class Singleton {
     
     private $data = array();
     private static $instance;
     
     private function __construct() {}
     private function __clone() {}
     private function __wakeup() {}
     
     public static function getInstance()
     {
         if( empty( self::$instance ) )
         {
             self::$instance = new Singleton();
         }
         return self::$instance;
     }
     
     public function setData( $key, $val )
     {
         $this -> data[$key] = $val;
     }
     
     public function getData( $key )
     {
         return $this -> data[$key];
     }
 }
?>
