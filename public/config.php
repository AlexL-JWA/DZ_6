<?php
class Test extends PDO {
    public function query($statement, $mode = PDO::ATTR_DEFAULT_FETCH_MODE, $arg3 = null, array $ctorargs = []) {

    }
}
try {
    $db = new Test(
        'mysql:host=a_level_mysql;port=3306;dbname=iq',
        'root',
        'myapp',
        [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ],
    );
    $db->query('SELECT * FROM users');
//    foreach ($db->query('SHOW tables') as $item) {
//        dd($item);
//    }
} catch (PDOException $e) {
    df($e->getMessage());
    print_r('Error: ' . $e->getMessage() . '<br/>');
    die();
}

