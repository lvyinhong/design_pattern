<?php


interface IConnectInfo
{
    const HOST = 'localhost';
    const UNAME = 'homestead';
    const PW = 'secret';
    const DBNAME = 'homestead';

    public static function doConnect();
}