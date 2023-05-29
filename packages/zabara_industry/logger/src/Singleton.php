<?php
namespace ZabaraIndustry\Logger;
class Singleton
{
    private static array $instance = [];
    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance()
    {
        $subClass = static::class;
        if (! isset(static::$instance[$subClass])) {
            static::$instance[$subClass] = new static();
        }
        return static::$instance[$subClass];
    }
}