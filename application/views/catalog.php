<?php

$data = array(
 array("1","Redmi Note 9"),
 array("2","Redmi Note 9 Pro"),
 array("3","Mi Note 10"),
 array("4","Mi Note 10 Pro"),
   );

echo "<table border='1'>";

echo "<tr>
     <td width = '20%'><b>No</b></td>
  <td><b>Nama Barang</b></td>
  </tr>";

for ($i =0; $i<= 3; $i++)
{
 echo "<tr>";
 
 for ($j =0; $j<= 1; $j++)
   {
  echo "<td>".$data[$i][$j]."</td>"; 
 }
 

 echo "</tr>";
}

echo "</table>";
?>