<?php

include_once('IConnectInfo.php');

class UniversalConnect implements IConnectInfo
{
    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;

    private static $hookup;

    public static function doConnect()
    {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            //调试时删除下一行前面的斜线
            echo "Successful connection to MySQL: ";
        }elseif (mysqli_connect_error(self::$hookup)) {
            echo 'Here is why it failed: '. mysqli_connect_error();
        }
        return self::$hookup;
    }
}