<?php

namespace ZabaraIndustry\Logger;

class Logger implements LoggerInterface
{

    public static function info($context)
    {
        self::method('File')->writeLog(__FUNCTION__, $context);
    }

    public static function error($context)
    {
        self::method('File')->writeLog(__FUNCTION__, $context);
    }

    public static function method($class)
    {
        $listenerClass = 'ZabaraIndustry\\Logger\\Methods\\' . $class . 'ClassFactory';
        if (class_exists($listenerClass)) {
            return $listenerClass::getInstance();
        } else {
            exit('Class not found' . $listenerClass);
        }
    }
}