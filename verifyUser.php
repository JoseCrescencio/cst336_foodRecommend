<?php
session_start();

include 'connect.php';
$connect = getDBConnection("ProjectDB");

//Checking credentials in database
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";

$stmt = $connect -> prepare($sql);
$stmt->bindParam(":username",$_POST['username']);
$stmt->bindParam(":password", sha1($_POST['password']));
$stmt->execute();

$user = $stmt->fetch();


//redirecting user to quiz if credentials are valid
if(isset($user['username'])){
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');    
} else {
    echo "The values you entered were incorrect. <a href='login.php'>Retry</a>";
}
?>