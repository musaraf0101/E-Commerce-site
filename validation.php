<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$password = $_POST['password'];
$Confirmpassword = $_POST['Confirmpassword'];
$phonenumber = $_POST['phonenumber'];

//database connection

$conn = new mysqli('localhost','root','','formvalidation01');
if ($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert in to registor01(Firstname,Lastname,password,Confirmpassword,phonennumber)"
    values(?,?,?,?,?));
    $stmt->bind_param("ssssi,$Firstname,$Lastname,$password,$Confirmpassword,$phonennumber");
    $stmt->execute();
    echo"Registraion Successfully...." 
    $stmt->close();
    $conn->close();
}
?>
