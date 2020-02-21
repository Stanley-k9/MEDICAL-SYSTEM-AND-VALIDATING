<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from doctors where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>



<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet" type="text/css" href="color.css">
<header>
<div class="welcome"> 
    <center><h3>Welcome DR: <?php echo $row['username']; ?> </h3></center>
   
</div>

<div class="reminder">
    <p><a href="logout.php">Log out </a></p>
  </div>
 
<style>
    
    header{
    background-image: url(http://thememarch.com/demo/html/medical/trustlife/assets/img/appointment-bg.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}

table {
border-collapse: collapse;
width: 60%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
position : absolute;
left : 25%;
top: 25%;

}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #c5ecfd}
</style>
</header>
</head>
<body>
<table>

<tr>
<td colspan ="5"><h1>  APPOINTMENTS</h1></td>
</tr>

<tr>
<th>id</th>
<th>Name</th>
<th>phone</th>
<th>Email</th>
<th>ID_number</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "med");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, Name, Email, phone,ID_number FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Name"] . "</td><td>". $row["phone"]. "</td><td>". $row["Email"]. "</td><td>". $row["ID_number"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>