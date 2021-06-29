<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $email = $_POST['email']; 
    $mobile = $_POST['mobile']; 
    $description = $_POST['desc']; 

$server = "localhost";
$username ="root";
$password ="";
$database = "fsdb";

$conn =mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("sorry failed to connect :".mysqli_connect_error());
}
else {
    $sql = "INSERT INTO `identity` ( `fname`, `lname`, `email`, `mobileno`, `contactme`, `dt`) VALUES ('$fname', '$lname', '$email', '$mobile', '$description', current_timestamp());";
    $result = mysqli_query($conn, $sql);
 
    if($result){
        echo "<div>
        <h1 style='text-align:center;
        margin-top:300px;

        ' >Thank for response</h1>
         </div>";
    }
}




}

?>