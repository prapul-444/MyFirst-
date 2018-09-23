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
 $sql = "select * from regi where User='$uname' and Pass='$pass'";
if ($conn->query($sql) === TRUE) {
     ?>
<script type="text/javascript">
window.location = "book.html";
</script>   





    <?php

} 
else{
	
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>