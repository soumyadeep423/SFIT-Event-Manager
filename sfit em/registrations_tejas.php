<?php
include("tejas_conn.php"); 
error_reporting(0);
?>

<html>
<head>
<title>Registrations</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table id="tejasreg">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Branch</th>
<th>Division</th>
<th>Roll No.</th>
<th>PID</th>
<th>Year</th>
<th>Field</th>
<?php
$conn = mysqli_connect("localhost", "root", "", "sfit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname, branch, division, rollno, pid, year, field FROM tejas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["id"]. "</td>
<td>" . $row["firstname"]. "</td>
<td>" . $row["lastname"] . "</td>
<td>" . $row["branch"]. "</td>
<td>" . $row["division"] . "</td>
<td>" . $row["rollno"] . "</td>
<td>" . $row["pid"] . "</td>
<td>" . $row["year"] . "</td>
<td>" . $row["field"] . "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<div>
<h3 align="right"><a href="edit_tejas.php">Edit</a></h3>
</div>
</body>
</html>