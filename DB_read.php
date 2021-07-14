<?php
include 'DB_connect.php';
function login($username, $password){
$conn = connect();
    $stmt = $conn->prepare("SELECT * FROM USERS WHERE username = ?and password = ?"); 
$stmt->bind_param("ss",$username, $password);
$stmt->execute();
    $records = $stmt->get_result();
    return $records->num_rows === 1;
}
?> 