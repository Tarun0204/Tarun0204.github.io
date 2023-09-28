<?php
session_start();
require("../includes/database_connect.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','pg life');
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}
$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => true, "message" => "Login Success!");
    echo json_encode($response);
    return;
}
if($result){
    if($result && mysqli_num_rows($result)>0){
        $user_data=mysqli_fetch_assoc($result);

        if($user_data['password']==$password) {
            header('location: dashboard.php');
            die;
        }
    }
}
}
?>