<?php
defined('staticvar') or die('ACCESS DENIED');

class database
{
    private static $link = false;
    public function connect()
    {
        if (!self::$link) {
            self::$link = new MySQLi('localhost', 'root', '', 'ciwprojectdb');
            self::$link->query("SET NAMES 'utf8'");
        }
    }
    public function fetcharray($result)
    {
        return $result->fetch_assoc();
    }
    public function delete($sql)
    {
        $this->connect();
        self::$link->query($sql);
        if (self::$link->errno === 0)
            return true;
        else
            return false;
    }
    public function insert($sql)
    {
        $this->connect();
        self::$link->query($sql);
        if (self::$link->errno === 0)
            return true;
        else
            return false;
    }
    public function select($sql)
    {
        $this->connect();
        $result = self::$link->query($sql);
        if (self::$link->errno === 0)
            return $result;
        else
            return false;
    }
}
class template
{
    public static $error = array();
    private static $data = array();
    private static $view = array();
    public static function seterror($key, $value)
    {
        self::$error[$key] = $value;
    }
    public static function setdata($key,$value){
        self::$data[$key]=$value;
    }
    // chon araye data private ast va nemitavan mostaghim be an dastarsii dasht,ba tabe getdata data lazeme ra az an migirim
    public static function getdata($key){
        return self::$data[$key];
    }

    public static function setview($key,$value){
        self::$view[$key]=$value;
    }
    public static function getview($key){
        return self::$view[$key];
    }

    public static function showtemplate($page)
    {
        switch($page){
            case'userindex':
            require('./template/userindex.php');
            break;
            case'anyindex':
            require('./template/anyindex.php');
            break;
        }
    }
}
