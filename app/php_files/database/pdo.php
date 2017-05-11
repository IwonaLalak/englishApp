<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 27.04.17
 * Time: 21:48
 */


require_once 'data.php';

try {
    $PDO = new PDO('mysql:host=' . $db_serv . '; dbname=' . $db_name . '; charset=' . $db_charset, $db_user, $db_pass);
    echo "nawiazano polaczneie";
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn = true;

} catch (PDOException $e) {
    echo "dupa" . $e->getMessage();
}

//$CONNECTION = new Connection($PDO);


// todo: to delete;