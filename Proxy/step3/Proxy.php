<?php

include_once('ISubject.php');
include_once('RealSubject.php');
include_once('UniversalConnect.php');

class Proxy implements ISubject
{
    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow, $pNow)
    {
        //由客户端过滤，对口令掩码
        $uname = $uNow;
        $pNow = md5($pNow);
        $this->logGood = false;
        // 选择表和连接
        $this->tableMaster = 'proxyLog';
        $this->hookup = UniversalConnect::doConnect();

        //创建SQL语句
        $sql = "SELECT * FROM $this->tableMaster WHERE uname= '$uname'";

        if ($result = $this->hookup->query($sql)) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if ($row['pw'] == $pNow) {
                $this->logGood = true;
            }
            $result->close();
        } elseif (($result = $this->hookup->query($sql)) === false) {
            printf('Failed %s <br/>', $this->hookup->error);
            exit();
        }
        $this->hookup->close();

        if ($this->logGood) {
            $this->request();
        }else {
            echo 'Username and/or Password not record .<br>';
        }
    }

    public function request()
    {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
}