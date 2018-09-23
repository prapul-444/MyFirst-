<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

$suname=$_POST['user'];

$pass=$_POST['pass'];



// Create connection
$conn = new mysqli($servername, $username,$password ,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
 $sql = "select User from regi where User='$suname' and Pass='$pass'";
 $result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) >0) {
     ?>
<script type="text/javascript">
window.location = "book.html";
</script>   





    <?php

}
else{
	echo "invalid login";
}
 

$conn->close();
?>