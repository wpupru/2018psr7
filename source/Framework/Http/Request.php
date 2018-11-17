<?php
    
    namespace Framework\Http;
    
    class Request
    {
        public function getQueryGet(): array
        {
            return $_GET;
        }
    
        public function getQueryPost(): array
        {
            return $_POST;
        }
        
        public function getCookies(): array
        {
            return $_COOKIE;
        }
        
        public function getSession(): array
        {
            return $_SESSION;
        }
        
        public function getServer(): array
        {
            return $_SERVER;
        }
    
        public function getFiles(): array
        {
            return $_FILES;
        }
    }