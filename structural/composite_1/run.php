<?php
  
  function __autoload($class)
  {
      $file = strtolower($class) .'.php';
      
      if(file_exists($file))
      {
          require $file;
      }
  }
  
  $root = new Composite('root');
  
  $root -> add(new Leaf('Leaf A'));
  $root -> add(new Leaf('Leaf B'));
  
  $comp = new Composite('Composite X');
  
  $comp -> add(new Leaf('XA'));
  $comp -> add(new Leaf('XB'));
  $root -> add($comp);
  $root -> add(new Leaf('Leaf C'));
  
  $leaf = new Leaf('Leaf D');
  $root -> add($leaf);
  $root -> remove($leaf);
  
  echo '<pre>';
  print_r($root -> display());
  echo '</pre>';
