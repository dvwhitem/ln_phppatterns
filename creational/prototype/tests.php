<?php
  function __autoload($class)
  {
      $file = strtolower($class) .'.php';
      
      if(file_exists($file))
      {
          require $file;
      }
  }
  
$factory = new TerrainFactory( new EarchSea( -1 ), new EarchPlains(), new MarsForest() );

echo '<pre>';
print_r($factory -> get_sea());
echo '</pre>';
echo '<pre>';
print_r($factory -> get_plains());
echo '</pre>';
echo '<pre>';
print_r($factory -> get_forest());
echo '</pre>';
