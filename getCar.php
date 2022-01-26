<?php
//$q = ($_GET['q']);
$brand = ($_POST['brandSearch']);
$model = ($_POST['modelSearch']);
$sign = "%";

$servername = "localhost:5111";
$username = "root";
$password = "";
$dbname = "vehichles";

$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($con,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT * FROM cars WHERE Brand LIKE '".$brand.$sign."'" . "AND Model LIKE '".$model.$sign."'";
$sql = "SELECT * FROM cars WHERE Brand LIKE '".$brand.$sign."'" . "AND Model LIKE '".$model.$sign."'";

$result = mysqli_query($con, $sql);

echo "<table>
<tr>
<th><strong>Brand</strong></th>
<th><strong>Model</strong></th>
<th><strong>Year</strong></th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" . $row['Model'] . "</td>";
  echo "<td>" . $row['Year'] . "</td>";
  echo "</tr>";
}

echo "</table>";
echo "<br> Fetched data successfully!";

mysqli_close($con);
?>