<?php

class Composite extends Component
{
    private $children = array();
    
    public function add( Component $c )
    {
        $this -> children[$c -> name] = $c;
    }
    
    public function remove( Component $c )
    {
        unset( $this -> children[$c -> name] );
    }
    
    public function display()
    {
        echo '<pre>';
        print_r($this -> children);
        echo '</pre>';
    }
}
