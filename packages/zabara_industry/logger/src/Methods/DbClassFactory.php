<?php
namespace ZabaraIndustry\Logger\Methods;

use ZabaraIndustry\Logger\Singleton;

class DbClassFactory extends Singleton implements MethodInterfaceFactory
{
    private \PDO $dbHandler;
    protected function __construct()
    {
        $db = new PDO(
            'mysql:host=a_level_mysql;port=3306;dbname=iq',
            'root',
            'myapp',
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ],
        );

    }
    public function writeLog($level, $message)
    {
//        $dbHandler
        print_r('done');
    }
}