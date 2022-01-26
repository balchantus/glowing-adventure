<?php

$servername = "localhost:5111";
$username = "root";
$password = "";
$dbname = "vehichles";

$db = mysqli_connect($servername,$username,$password,$dbname);

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$check="SELECT * FROM `cars` WHERE Brand = '$_POST[brandname]' AND Model = '$_POST[modelname]'";
$rs = mysqli_query($db,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {
    echo "Car Already Exists<br/>";
}

else {
    
    if(isset($_POST['submit']))
    {		
        $brandname = $_POST['brandname'];
        $modelname = $_POST['modelname'];
        $releaseyear = $_POST['releaseyear'];

        $insert = mysqli_query($db,"INSERT INTO `cars`(`Brand`, `Model`, `Year`) VALUES ('$brandname','$modelname', '$releaseyear')");

        if(!$insert)
        {
            echo mysqli_error();
        }
        else
        {
            echo "Car added successfully.";
        }
    }
}

mysqli_close($db);

?>