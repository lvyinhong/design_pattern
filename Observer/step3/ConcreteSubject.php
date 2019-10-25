<?php


class ConcreteSubject extends Subject
{
    private $hookup;
    private $tableMaster;
    private $designPattern;
    private $stateSet = array();

    public function setState($dpNow)
    {
        $this->designPattern = strtolower($dpNow);
        $this->tableMaster = 'cms';
        $this->hookup = UniversalConnect::doConnect();

        // 创建查询语句
        $sql = "SELECT * FROM $this->tableMaster WHERE dpheader = '$this->tableMaster' WHERE dpheader = '$this->designPattern'";

        // 从MySQL 表将适当的数据增加到 $stateSet 数组
        if ($result = $this->hookup->query($sql)) {
            while ($row = $this->hookup->query($sql)) {
                $this->stateSet[0] = $row['dpHeader'];
                $this->stateSet[1] = $row['textBlock'];
                $this->stateSet[2] = $row['imageURL'];
            }
            $result->close();
        }

        $this->hookup->close();
        // update() 方法是notify() 的一部分
        // 这个方法在Subject 中实现为具体的方法
        $this->notify();
    }

    public function getState()
    {
        return $this->stateSet;
    }
}