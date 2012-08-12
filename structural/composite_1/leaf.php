<?php

class Leaf extends Component {
    
    public function add( Component $c )
    {
        echo '<pre>';
        print_r('Cannot add to a leaf');
        echo '</pre>';
    }
    
    public function remove( Component $c )
    {
        echo '<pre>';
        print_r('Cannont remove from a leaf');
        echo '</pre>';
    }
    
    public function display()
    {
        echo '<pre>';
        print_r($this -> name);
        echo '</pre>';
    }
}