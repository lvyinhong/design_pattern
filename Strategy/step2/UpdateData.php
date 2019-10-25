<?php


class UpdateData implements IStrategy
{
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        $this->dataPack = $dataPack;
        $changeField = $this->dataPack[0];
        $oldData = $this->dataPack[1];
        $newData = $this->dataPack[2];
        $this->sql = "UPDATE $this->tableMaster SET $changeField='$newData' WHERE $changeField='$oldData'";

        //MySQL 查询中的条件语句用于错误检查
        if ($result = $this->hookup->query($this->sql)) {
            echo "$changeField change from $oldData to $newData";
        } else {
            echo "Change failed: " . $this->hookup->error;
        }
    }
}