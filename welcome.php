<?php
   session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
</head>
<body>
   <?php echo $_SESSION['username']; ?>
    <h1>welcome,<?php if(isset($_SESSION['username']) ){
    echo $_SESSION['username'];
    
}
        else{
            header("Location: logout.php");
        } ?></h1>
    
    <a href="logout.php">Logout</a>
</body>
</html>