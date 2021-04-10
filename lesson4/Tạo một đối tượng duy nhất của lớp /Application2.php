<?php
class Application2 {
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application2();
            echo 'alo';
        }
        return self::$instance;
    }
}