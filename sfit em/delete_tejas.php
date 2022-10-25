<?php
if(isset($_GET["id"])){
	$id=$_GET["id"];

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
$sql = "DELETE FROM tejas WHERE id=$id";
$conn->query($sql);
}

header('location:edit_tejas.php');
?>