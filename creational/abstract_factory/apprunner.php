<?php
  class AppRunner {   
      const BMW = 1;
      const Mercedes = 2;  
      
      public static function execute($type)
      {
          switch($type)
          {
              case 1 :
                return new BMWFactory();
              break;
              case 2 :
                return new MercedesFactory();
          }
      }
  }
?>
