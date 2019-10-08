<?php
//Inside Exercise_1_Multiplication_Table.php


function echoTable()
{
  echo "<table>";
  for ($i = 0; $i < 101; $i++)
  {
    echo "<tr>";
    for($j = 0; $j < 101; $j++)
    {
      if($i == 0 && $j ==0)
      {
        echo "<td> </td>";
      }
      else if($i == 0)
      {
        echo "<th>".$j."</th>";
      }
      else if($j == 0)
      {
        echo "<th>".$i."</th>";
      }
      else
      {
        echo "<td>".$i*$j."</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
}

echoTable();

?>
