<?php

$conn = new mysqli("localhost","supriya","newpassword","student_data");

$name = $_POST['u_name'];
$idno = $_POST['idno'];
$location = $_POST['location'];

if($conn->connect_error)
{
    die("Connection Error:".connect_error);
}

$sql = "insert into student(name,id,city) values('$name','$idno','$location')";

if($conn->query($sql)== TRUE){ 
    echo "Entered Successfully!";
}
else{ 
    echo "Opps!! Erorr";
}

$conn->close();

?>
