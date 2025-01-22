<?php
require_once '../includes/db.php';

$table = "users";
$query = "SELECT * FROM $table"
$result = $connection->query($query);

if($connection->num_rows>0)
{
    echo "<table>";

    //fetch = prendi
    while($column = $result->fetch_field())
    {
        //var_dump($column);
        echo "<th>";
        echo $column->name;
        echo "<br>";
        echo "</th>";
    }
    //stampo contenuto della tabella
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>";

        foreach($row as $key=>$value)
        {
            echo "<td> $value  </td>";  
        }
        echo "</tr>";
    }
   echo "</table>";
}