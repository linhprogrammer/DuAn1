<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=duan1;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
 // echo "Connection failed: " . $e->getMessage();
 if ($e->getCode()==1062) {
    $txt_duplicate_erro="tài khoản hoặc email đã tồn tại";
 }else {
    throw $e;
    
 }
}
?>