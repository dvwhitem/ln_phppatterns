<?php

    Class BloggsCommsManager extends CommsManager {
        
        public function getHeaderText()
        {
            return 'BloggsCal верхний колонтитул';
        }
        
        public function getApptEncoder()
        {
            return new BloggsApptEncoder();
        }
        
        public function getFooterText()
        {
            return 'BloggsCal нижний колонтитул';
        }
    }