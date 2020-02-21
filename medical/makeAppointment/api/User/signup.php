<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values

$user->Name = $_POST['Name'];
$user->Email = $_POST['Email'];
$user->phone = $_POST['phone'];
$user->ID_number = $_POST['ID_number'];
$user->dates = $_POST['dates'];
$user->times = $_POST['times'];
$user->speciality = $_POST['speciality'];



if($user->signup()){
    $user_arr=array(
       
        "status" => TRUE,
        header('location:madeappointment.html')
    );
}
else{
    $user_arr=array(
        "status" => false,
        header('location:madeappointment1.html')
    );
}
print_r(json_encode($user_arr));
?>