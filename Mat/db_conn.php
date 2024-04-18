<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "Mat";


$conn = new mysqli($severname, $username, $password,$dbname);    


if ($conn->connect_error){
  
  echo $conn->connect_error;
}

$sql = "SELECT * FROM oppo";
$oppo = $conn->query($sql) or die ($conn->error);
$row = $oppo->fetch_assoc();

//   do{

//      echo $row['first_name']." " .$row['Last_name'] . "</br>";

//    }while($row = $bsis->fetch_assoc());
?>