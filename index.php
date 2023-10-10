<?php
$server='localhost';
$username="root";
$pwd="";
$db="ecom1";
$conn= mysqli_connect($server,$username,$pwd,$db);
if($conn){
    echo "Connected to the database successfully";
}else{
    echo "Error : Not connected to the database";
}
$results=mysqli_query($conn,"SELECT * FROM user");
$Data1=mysqli_fetch_row($results);
$results2=mysqli_query($conn,"SELECT * FROM user");
$Data2=mysqli_fetch_assoc($results2);
$results3=mysqli_query($conn,"SELECT user FROM user");
$Data3=mysqli_fetch_all($results3);

echo "</br>";
echo "premier fetch";
echo "</br>";
var_dump($results1);
echo "</br>";
echo "</br>";

var_dump($Data1);
echo "</br>";
echo "</br>";


?>