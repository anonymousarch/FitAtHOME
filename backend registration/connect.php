<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Insert Page page</title> 
</head> 
  
<body> 
    <center> 
<?php
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$password = $_REQUEST['password'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
 $host = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "mvemjsun*123";
    $dbname = "register";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
     //$SELECT = "SELECT email From register Where email = ? Limit 1";
     //$INSERT= "INSERT INTO `register`(`name`, `username`, `email`, `phone`, `password`, `age`, `gender`) VALUES ('hello23','sds','an@','2435','dfs','12','f')";
     $INSERT = "INSERT INTO register (name, username, email, phone, password, gender, age) values('$name', '$username', '$email', '$number', '$password', '$gender', '$age')";

   
     if(mysqli_query($conn, $INSERT)){ 
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>";  
    } else{ 
        echo "ERROR: Hush! Sorry $INSERT. " 
            . mysqli_error($conn); 
    }
          
 
mysqli_close($conn); 
if(isset( $_SESSION['userid'] ))
{
    $message = 'Users is already logged in';
    header(location:connect.php);                   
    exit;
}
header('location:fittness-club-h.html');
die();
?>
</center> 

</body> 
  
</html>