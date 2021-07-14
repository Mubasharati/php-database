<?php
function connect(){
$conn = new mysqli("localhost","protiti","p2000","tm");
if($conn->connect_errno){
    die("Connection failed due to" . $conn->connect_error);
}
return $conn;
}
?>