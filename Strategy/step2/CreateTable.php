<?php

include_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = 'survey';
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf('Old table %s has been dropped . <br/>', $this->tableMaster);
        }
        $sql = "CREATE TABLE $this->tableMaster (
                    id SERIAL,
                    company NVARCHAR(40),
                    devdes NVARCHAR(10),
                    lang NVARCHAR(15),
                    plat NVARCHAR(20),
                    style NVARCHAR(20),
                    device NVARCHAR(20),
                    primary key(`id`)
                )";
        if ($this->hookup->query($sql) === true) {
            printf("Table $this->tableMaster has been created successfully . <br>");
        }elseif($error = $this->hookup->error) {
            printf("Table $this->tableMaster has error, Here is why it failed: %s. <br> Whole SQL: %s.", $error, $sql);
        }
        $this->hookup->close();
    }
}

$worker = new CreateTable();