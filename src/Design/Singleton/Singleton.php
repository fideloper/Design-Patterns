<?php namespace Design\Singleton;

class Singleton {

    private static $instance;

    protected $value;

    private function __construct() {}
    private function __clone() {}

    public static function instance()
    {
        if( static::$instance == null )
        {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

}