<?php

define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","study_up");
define("DB_HOST","localhost");


class DB
{
    protected $db_host;
    protected $db_user;
    protected $db_password;
    protected $db_name;
    public static function getMysqlConnexionWithPDO()
    {
        $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME."",DB_USER,DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

}

?>
