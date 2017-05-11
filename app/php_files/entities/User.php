<?php

/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 27.04.17
 * Time: 21:51
 */

//require_once '../database/pdo.php';

class User
{
    public $userid=0;
    public $login='';
    public $password='';
    public $email='';
    public $avatar_url='';
    public $native_lang='';
    public $foreign_lang='';
    public $last_visit='';
    public $user_points=0;
    public $token='';

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * @param mixed $avatar_url
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->avatar_url = $avatar_url;
    }

    /**
     * @return mixed
     */
    public function getNativeLang()
    {
        return $this->native_lang;
    }

    /**
     * @param mixed $native_lang
     */
    public function setNativeLang($native_lang)
    {
        $this->native_lang = $native_lang;
    }

    /**
     * @return mixed
     */
    public function getForeignLang()
    {
        return $this->foreign_lang;
    }

    /**
     * @param mixed $foreign_lang
     */
    public function setForeignLang($foreign_lang)
    {
        $this->foreign_lang = $foreign_lang;
    }

    /**
     * @return mixed
     */
    public function getLastVisit()
    {
        return $this->last_visit;
    }

    /**
     * @param mixed $last_visit
     */
    public function setLastVisit($last_visit)
    {
        $this->last_visit = $last_visit;
    }

    /**
     * @return mixed
     */
    public function getUserPoints()
    {
        return $this->user_points;
    }

    /**
     * @param mixed $user_points
     */
    public function setUserPoints($user_points)
    {
        $this->user_points = $user_points;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}