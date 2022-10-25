<?php
include("tejas_conn.php");
error_reporting(0);
?>
<html>
<head>
<title>Thank You For Registering</title>
<meta http-equiv="refresh" content="2; url =
    tejas.html" />
</head>
<body>
	<h2>Registered Successfully</h2>
</body>
</html>
<?php
$id=$_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$branch = $_GET['branch'];
$division = $_GET['division'];
$rollno = $_GET['rollno'];
$pid = $_GET['pid'];
$year = $_GET['year'];
$field = $_GET['field'];

$query="INSERT INTO tejas VALUES ('$id','$firstname','$lastname','$branch','$division','$rollno','$pid','$year','$field')";
$data=mysqli_query($conn,$query);
if($data)
{
//echo "Registered Successfully";
}
else
{
echo "Failed to Register";
}

?>