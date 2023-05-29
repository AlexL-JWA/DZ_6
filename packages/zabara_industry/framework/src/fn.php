<?php
function df ($string, $file = 'MyLog.txt') {
    $date = date('Y-m-d G:i:s');
    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/' . $file, 'a+');
    $res = $date . ' ' . print_r($string, true) . "\n";
    fwrite($fp, $res);
    fclose($fp);
}
function dd($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}