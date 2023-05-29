<?php
include_once 'fn.php';
include_once 'config.php';

//$email = htmlspecialchars($_POST['email']);
//$feedback = htmlspecialchars($_POST['feedback']);
//
//try {
//    $sql = "
//    INSERT INTO `iq`.`feedbacks` (`email`, `text`)
//    VALUES ('" . $email . "', '". $feedback ."')
//    ";
//    $db->query($sql)->fetchAll();
//} catch (Exception $e) {
//    df($e->getMessage());
//}

df($_REQUEST);
