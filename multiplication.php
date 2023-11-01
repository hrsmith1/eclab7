<html>
<style>
  table, th, td {
    border: 1px solid black;
  }
</style>
<body>
<h1>Here is your multiplication table</h1>
<table>
<?php 
$num = $_GET["n"]; 
echo "<tr>";
echo "<th></th>";
for ($x = 1; $x <= $num; $x++){
  echo "<th>$x</th>";
}
echo "</tr>";
for ($j=1; $j<=$num; $j++){
    echo "<tr>";
    echo "<td>$j</td>";
    for ($i = 1; $i<= $num; $i++){
        $result = $i * $j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>