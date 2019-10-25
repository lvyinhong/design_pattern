<?php

require_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = 'cms';
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            print_r("Old table %d has been dropped. <br>", $this->tableMaster);
        }

        $sql = "CREATE TABLE $this->tableMaster (
                id SERIAL,
                dpHeader NVARCHAR(50),
                textBlock TEXT,
                imageUrl NVARCHAR(100),
                PRIMARY KEY(id)
            )";
        if ($this->hookup->query($sql) === true) {
            printf("Table $this->tableMaster has been created successfully. <br>");
        }

        $this->hookup->close();
    }
}
$worker = new CreateTable();