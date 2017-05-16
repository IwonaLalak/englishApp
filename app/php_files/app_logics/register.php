<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 12.05.17
 * Time: 10:36
 */

require_once "../services/userService.php";
require_once "../classes/User.php";

$request = json_decode(file_get_contents('php://input'));
$login = $request->username;
$password = $request->password;
$email = $request->email;

// if someone try to get here by typing url
if($request==null){
    header('Location: http://localhost/englishApp/app/#/');
    exit();
}

// check inserted data
if(is_null($login)||is_null($password)||is_null($email))
{
    echo json_encode(array(false,"Nie uzupełniono poprawnie danych"));
    exit();
}
if(
    strlen($login)<3||strlen($login)>20||
    strlen($password)<3||strlen($password)>20||
    strlen($email)<3||strlen($email)>20
){
    echo json_encode(array(false,"Każde pole może zawierać od 3 do 20 znaków"));
    exit();
}

$user = new User();
$user->setUsername($login);
$user->setPassword($password);
$user->setEmail($email);
$service = new userService();

// check if login exists
if($service->checkIfUserExist($user)){
    // exist
    echo json_encode(array(false,"Podany login jest już zajęty"));
    exit();
}
else{
    // login free
    $service->register($user);
    echo json_encode(array(true,"Zarejestrowano pomyślnie. Możesz się zalogować"));
}

