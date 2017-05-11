<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 27.04.17
 * Time: 21:01
 */
/*
require_once 'services/userService.php';
require_once 'entities/User.php';

$request = json_decode(file_get_contents('php://input'));
$login = $request->username;
$password = $request->password;
$email = $request->email;

$userService = new userService();
if(isset($login)){
    $newUser = new User();
    $newUser->setLogin($login);
    $newUser->setPassword($password);
    $newUser->setEmail($email);
    $result = $userService->register($newUser);
    echo $result;

}*/

/*

if(isset($conn)&&$conn==true) {
    $sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `email`, `avatar_url`, `native_lang`, `foreign_lang`, `last_visit`, `user_points`) 
            VALUES (NULL, :login, :password, :email, '/images/default_avatar.jpg', 'polish', 'english', CURRENT_TIMESTAMP, '0')";

    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);

    $execute = $stmt->execute();

    if ($execute > 0) {
        echo "dodano " . $execute;
    } else {
        echo "blad " . $stmt->errorInfo();
    }
}
else{
    echo "brak polacznenia z baza";
}

*/

