<?php
function OpenCon()
 {
 $dbhost = "mysql-24256-0.cloudclusters.net";
 $dbuser = "archie";
 $dbpass = "anonymousarch";
 $db = "register";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>