<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 16.05.17
 * Time: 10:40
 */



require_once "../services/userService.php";
require_once "../classes/User.php";

$request = json_decode(file_get_contents('php://input'));
$login = $request->username;
$password = $request->password;

// if someone try to get here by typing url
if($request==null){
    header('Location: http://localhost/englishApp/app/#/');
    exit();
}

// check inserted data
if(is_null($login)||is_null($password))
{
    echo json_encode(array(false,"Nie uzupełniono poprawnie danych"));
    exit();
}
if(
    strlen($login)<3||strlen($login)>20||
    strlen($password)<3||strlen($password)>20
){
    echo json_encode(array(false,"Każde pole może zawierać od 3 do 20 znaków"));
    exit();
}



$user = new User();
$user->setUsername($login);
$user->setPassword($password);

$service = new userService();

if($service->loginOnAccount($user)){
    echo json_encode(array(true,"Zalogowano pomyslnie.", $user->getToken()));
    exit();
    /*echo strlen($user->getToken())."                       ".$user->getToken()."                           ".base64_decode($user->getToken()).'                          ';
    $service->decodeToken($user->getToken());*/

}
else{
    echo json_encode(array(false,"Niepoprawne dane logowania"));
    exit();
}