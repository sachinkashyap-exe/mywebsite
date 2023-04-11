<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'skfoundation');
 if($conn->connect_error) {
    die('Connection Failed: '.$conn->connect_error);
 }else{
    $stmt = $conn->prepare("insert into contact(name, phone, email, text)
     values(?, ?, ?, ?)");
     $stmt->bind_param("siss",$name, $phone, $email, $text);
      $stmt->execute(); 
      echo "registration Successfully...";
       $stmt->close();
        $conn->close();
 }
?>