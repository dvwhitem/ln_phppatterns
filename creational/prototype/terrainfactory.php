<?php

class TerrainFactory {
    private $sea;
    private $forest;
    private $plains;
    
    function __construct( Sea $sea, Plains $plains, Forest $forest )
    {
        $this -> sea    = $sea;
        $this -> plains = $plains;
        $this -> forest = $forest;
    }
    
    function get_sea() 
    {
        return clone $this -> sea;
    }
    
    function get_plains()
    {
        return clone $this -> plains;
    }
    
    function get_forest()
    {
        return clone $this -> forest;
    }
}