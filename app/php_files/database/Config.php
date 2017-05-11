<?php

/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 29.04.17
 * Time: 15:05
 */
class Config
{
    static $data;

    public static function read($name)
    {
        return self::$data[$name];
    }

    public static function write($name, $value)
    {
        self::$data[$name] = $value;
    }

}

Config::write("db_serv", "localhost");
Config::write("db_user", "root");
Config::write("db_pass", "FE;lDpd#/5-t");
Config::write("db_name", "englishApp");
Config::write("db_charset", "utf8");
