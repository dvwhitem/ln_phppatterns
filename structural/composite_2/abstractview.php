<?php

abstract class AbstractView {
    
    public $fillings;
    
    public $values;
    
    abstract public function draw();
    
    protected function insert($filling_name)
    {
        if(isset($this -> fillings[$filling_name]))
        {
            $this -> fillings[$filling_name] -> draw();
        }
    }
    
    protected function write($values_name)
    {
        if(isset($this -> values[$values_name]))
        {
            echo $this -> values[$values_name];
        }
    }
}