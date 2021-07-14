 <?php
include 'DB_read.php';
$username = $password = " ";
$usernameErr = $passwordErr = " ";
$isValid = true;
$successfullMessage = $errorMessage = " ";

   if($_SERVER['REQUEST_METHOD'] === "POST"){
       $username = $_POST['username'];
       $password = $_POST['password'];
       
       if(empty($username)) {
           $usernameErr = "Username can not be empty";
           $isValid = false;
       }
       if(empty($password)) {
           $passwordErr = "password can not be empty";
           $isValid = false;
       }
       if($isValid){
           $res = login($username,$password){
          if($res){
              
          
               
               session_start();
               $_SESSION['username'] = $username;
               
               header("Location: welcome.php");
           }
           else{
               $errorMessage = "login failed";
           }
       }
   }
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page </title>
</head>
<body>
    <h1>login page</h1>
    
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <fieldset>
          <legend>Basic Information</legend>
          
          <label for="name">First NAME:</label>
       <input type="text" name="firstname" id="name">
       <span style="color: red"><?php echo $firstNameErr; ?></span>
       
       <br>
       <label for="lname">Last NAME:</label>
       <input type="text" name="lastname" id="lname">
       <span style="color: red"><?php echo $lastNameErr; ?></span>
       <br>
       
       <label for="gen">Gender:</label><br>
      <input type="radio" name="gen" id="gen" value="male">Male <br>
      <input type="radio" name="gen" id="gen" value="female">Female <br>
      <span style="color: red"><?php echo $GenderErr; ?></span>
      <label for="dob">DoB</label>
      <input type="date" name="DoB" id="dob">
      <span style="color: red"><?php echo $dobErr; ?></span>
      <br>
      <label for="religion">Religion</label>
      <select name="Religion" id="religion">
      <option value="ISLAM">ISLAM</option>
      <option value="Hindu">Hindu</option>
      </select>
      <span style="color: red"><?php echo $religionErr; ?></span>
      
          
      </fieldset>

<fieldset>
          <legend>Contact Information:</legend>
          <label for="p_add">Present Address :</label>
          <textarea name="p_add" id="p_add" cols="30" rows="4"></textarea>
          <span style="color: red"><?php echo $PAddErr; ?></span>
          <br>
          <label for="per_address">Permanent Address :</label>
          <textarea name="per_address" id="per_address" cols="30" rows="4"></textarea>
          <br>
          <span style="color: red"><?php echo $PerAddErr; ?></span>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email">
          <span style="color: red"><?php echo $emailErr; ?></span>
          <br>
          <label for="tel">Phone :</label>
          <input type="tel" name="tel" id="tel">
          <span style="color: red"><?php echo $phoneErr; ?></span>
          <br>
          <label for="url">Personal Website Link :</label>
          <input type="url" name="url" id="url">
          <span style="color: red"><?php echo $urlErr; ?></span>
          
      </fieldset>
<fieldset>
          <legend>Acount Information</legend>
          <lebel for="username">User Name:</lebel>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <span style="color:red"><?php echo $usernameErr;?></span>
            <br><br>
          <lebel for="password">Password:</lebel>
            <input type="password" name="password" id="password">
            <span style="color:red"><?php echo $passwordErr;?></span>
            <br><br>
      </fieldset>
      

<input type="submit" name="submit" value="Register">
</form>

    <br>
    <p style="color:green"><?php echo $successfullMessage; ?></p>
    <p style="color:red"><?php echo $errorMessage; ?></p>
    <br>
           <p>GO TO   <a href="registration.php">Registration</a></p> 
</body>
</html>