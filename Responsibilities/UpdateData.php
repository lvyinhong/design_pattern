<?php

include_once('UniversalConnect.php');
class UpdateData
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        // 指定表和连接
        $this->tableMaster = 'helpdesk';
        $this->hookup = UniversalConnect::doConnect();
        // 从HTML表单
        $chain = $this->hookup->real_escape_string($_POST['chain']);
        $response = $this->hookup->real_escape_string($_POST['response']);

        // 创建SQL语句
        $sql = "UPDATE $this->tableMaster SET response = '$response' where chain = '$chain'";
        if ($this->hookup->query($sql)) {
            printf("Chain query %s <br> Response %s <br> has been change and set into %s", $chain, $response, $this->tableMaster);
        } else if (($result = $this->hookup->query($sql)) === false) {
            printf("Invalid query: %s <br> Whole query: %s <br>", $this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }
}

$worker = new UpdateData();