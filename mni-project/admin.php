<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$name=$_POST['user'];


$pass=$_POST['pass'];




// Create connection
$conn = new mysqli($servername, $username,$password ,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1="select * from regi";
// Create database
 $sql = "select * from  admin where admin='$name'
and pass='$pass'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
	if($result1=mysqli_query($con,$sql1)>0){
		while($row=mysqli_fetch_row($result1)){
			printf("%s(%s)\n",$row[0],$row[1]);
		}
		
	}
}
$conn->close();
?>