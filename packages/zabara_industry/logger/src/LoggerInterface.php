<?php

namespace ZabaraIndustry\Logger;

interface LoggerInterface
{
    public static function info($context);
    public static function error($context);
    public static function method($class);
}