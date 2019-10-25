<?php

include_once('IConnectionInfo.php');
class UniversalConnect implements IConnectionInfo
{
    private static $server = IConnectionInfo::HOST;
    private static $currentDB = IConnectionInfo::DBNAME;
    private static $user = IConnectionInfo::UNAME;
    private static $pass = IConnectionInfo::PW;
    private static $hookup;

    public static function doConnect()
    {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            // 注释，用于调试
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo 'Here is why it failed : ' . mysqli_connect_error();
        }
        return self::$hookup;
    }
}