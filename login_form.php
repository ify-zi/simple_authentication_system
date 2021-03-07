<?php session_start(); ?>
<!DOCTYPE html>
<?php
if(isset($_POST['login'])){
  if(empty($_POST['username'] && $_POST['password'])){echo "<p style='color: red;'>"."Please Check Your Inputs!!"."</p>";}

  
   elseif($_SESSION['username'] == $_POST['username'] && $_SESSION['password'] == $_POST['password']){ //check if the user's username and password is same with input stored in the session variable 
   header('location: final.php');//redirecting the user to the final page logged in page
   exit();
  
   }
  }
  // header('location: login_form.php');//clears the inputs if they are wrong
     //  exit();
       
   
   

?>
<html>
<head>
<title>Login page</title>

</head>
<body>
<form  action="login_form.php" method="POST">
<h2> Login </h2>
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="submit" name="login" value="Login"><br><br>
<a href="index.php">Create account</a>
</form>
</body>
</html>