<?php

/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 29.04.17
 * Time: 15:34
 */
//require_once "serviceInterface.php";
/*require_once "../database/Connection.php";
require_once "../entities/User.php";*/
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/php_files/entities/User.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/php_files/database/Connection.php";

class userService
{

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $con = Connection::getInstance();
        $stmt = $con->handle->query($sql);
        if (!(empty($stmt)))
            return $stmt->fetchAll();
        else return false;
    }

    public function getById($id)
    {
        /*$sql = "SELECT * FROM users WHERE users.id=:id";
        $con = Connection::getInstance();
        $stmt = $con->handle->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        if (!empty($stmt)) {
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        } else return false;*/
    }

    public function insert($obj)
    {
        // TODO: Implement insert() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function remove($obj)
    {
        // TODO: Implement remove() method.
    }

    public function __construct()
    {
    }
/*
    public function register($obj)
    {
        $sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `email`, `avatar_url`, `native_lang`, `foreign_lang`, `last_visit`, `user_points`) 
            VALUES (NULL, :login, :password, :email, '/images/default_avatar.jpg', 'polish', 'english', CURRENT_TIMESTAMP, '0')";
        $con = Connection::getInstance();
        $stmt = $con->handle->prepare($sql);
        $stmt->bindParam(':login', $obj->User->getLogin(), PDO::PARAM_STR);
        $stmt->bindParam(':password', $obj->User->getPassword(), PDO::PARAM_STR);
        $stmt->bindParam(':email', $obj->User->getEmail(), PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result == TRUE) {
            echo "ok";
            echo $stmt->execute();
            return true;
        } else {
            echo "nope";
            echo $stmt->errorInfo();
            return false;
        }

    }*/

}