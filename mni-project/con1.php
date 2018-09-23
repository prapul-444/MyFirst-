<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$name=$_POST['user1'];

$suname=$_POST['user2'];
$email=$_POST['email'];
$gen=$_POST['gender'];
$country=$_POST['country'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];



// Create connection
$conn = new mysqli($servername, $username,$password ,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
 $sql = "INSERT INTO regi (User,Suser,Pass,pass1,Gender,Email,Country)
VALUES ('$name','$suname','$pass','$pass1','$gen','$email','$country')";
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