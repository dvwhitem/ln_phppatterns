<?php

    class BMWFactory implements IFactory 
    {
        public function auto()
        {
            return new BMW();
        }
    }
