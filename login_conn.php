<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sfit";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if($conn){
//echo "Connection OK";
}
else{
echo "Connection Failed".mysqli_connect_error;
}

?>
