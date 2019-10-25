<?php


class DeleteRecord implements IStrategy
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
        $destroy = $this->dataPack[0];
        $destroy = intval($destroy);

        $this->sql = "DELETE FROM $this->tableMaster WHERE id = '$destroy'";
        if ($result = $this->hookup->query($this->sql)) {
            echo "Record #$destroy removed from table: $this->tableMaster";
        } else {
            echo "Removal failed " . $this->hookup->error;
        }
    }

}