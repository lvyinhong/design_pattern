<?php


class DisplayAll implements IStrategy
{
    private $tableMaster;
    private $hookup;

    public function algorithm(Array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        // 创建插叙语句
        $sql = "SELECT * FROM $this->tableMaster";
        // MYSQL 命令中的条件语句
        if ($result = $this->hookup->query($sql)) {
            printf("Select returned %d row .</p>", $result->num_rows);
            echo "<link rel='stylesheet' href='css/survey.css'>";
            echo '<table>';
            while ($finfo = mysqli_fetch_field($result)) {
                echo "<th>&nbsp; {$finfo->name}</th>";
            }
            echo '</th>';
            while ($row = mysqli_fetch_row($result)) {
                echo '<tr>';
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo '</tr>';
            }
            echo '</table>';
            $result->close();

        }
        $this->hookup->close();
    }
}