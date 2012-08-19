<?php

  function __autoload($class)
  {
      $file = strtolower($class) .'.php';
      
      if(file_exists($file))
      {
          require $file;
      }
  }
  
  $page = new LayoutView();
  
  $page -> values['title'] = 'greeting';
  $page -> fillings['content'] = new IndexView();
  $page -> draw(); 
