<?php
namespace ZabaraIndustry\Logger\Methods;
use ZabaraIndustry\Logger\Singleton;

class FileClassFactory extends Singleton implements MethodInterfaceFactory
{
    private $fileHandler;
    protected function __construct()
    {
        $this->fileHandler = fopen($_SERVER['DOCUMENT_ROOT'] . '/' . 'MyLog.txt', 'a+');
    }
    public function writeLog($level, $message)
    {
        $date = date('Y-m-d G:i:s');
        $stringLog = $date . ' | ' . $level . ' | ' . print_r($message, true) . "\n";
        fwrite($this->fileHandler, $stringLog);
    }
}