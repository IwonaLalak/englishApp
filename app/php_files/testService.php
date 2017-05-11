<?php

/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 29.04.17
 * Time: 22:11
 */


require_once 'database/Connection.php';
require_once 'testClass.php';

$usr = new testClass();

class testService
{
    //    public static $aaa = "aabababa";

    public function saySomething()
    {
        return "trololo";
    }

    public function getUsers()
    {
        $sql = "select * from users";
        $con = Connection::getInstance();
        $stmt = $con->handle->query($sql);
        return $stmt;
    }

    public function getUsersEmails()
    {
        $sql = "select email from users";
        $con = Connection::getInstance();
        $stmt = $con->handle->query($sql);
        return $stmt;
    }

    public function getById($id)
    {
        $sql = "select * from users where user_id=:id";
        $con = Connection::getInstance();
        $stmt = $con->handle->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        if (!empty($stmt))
            return $stmt;
        else
            return false;

    }

    public function setCurrent($obj, $login)
    {
        $obj->setLogin($login);
    }

    public function getCurrentLogin($obj)
    {
        return $obj->getLogin();
    }

    public function getCurrentPass($obj)
    {
        return $obj->getPassword();
    }

    public function addNewUser($obj)
    {
        $sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `email`, `avatar_url`, `native_lang`, `foreign_lang`, `last_visit`, `user_points`) 
            VALUES (NULL, :login, :password, 'adres@email.com', '/images/default_avatar.jpg', 'polish', 'english', CURRENT_TIMESTAMP, '0')";
        $con = Connection::getInstance();
        $stmt = $con->handle->prepare($sql);
        $stmt->bindParam(':login', $obj->getLogin(), PDO::PARAM_STR);
        $stmt->bindParam(':password', $obj->getPassword(), PDO::PARAM_STR);
        $stmt->execute();
        return($stmt->execute());

    }

}