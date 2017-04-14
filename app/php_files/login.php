<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 31.03.17
 * Time: 11:19
 */

//error_reporting(E_ALL ^ E_NOTICE0);
$request = json_decode(file_get_contents('php://input'));
$username = $request->username;
$password = $request->password;

// tu warunki czy wprowadozne dane sa ok

require_once 'database/connect.php';

$link = mysqli_connect($db_serv,$db_user,$db_pass,$db_name);

if(mysqli_connect_errno()){
    echo 'Brak polaczenia z baza';
    exit();
}

$sql = sprintf("SELECT * FROM `users` WHERE login='%s' and password='%s' ",
        mysqli_real_escape_string($link,$username),
        mysqli_real_escape_string($link,$password));

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        echo 'Zalogowano';
    }
    else{
        echo 'Złe dane';
    }
}
else{
    echo 'Error: '.mysqli_error($link);
}

mysqli_free_result($result);
mysqli_close($link);




