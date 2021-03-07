<?php session_start();//starting seesion ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title></head>
<body>
<?php 
   //storing my variables gotten from the form using POST method
   if(isset($_POST['submit'])){     
        if(empty($_POST['name'])){echo "<p style='color: red;'>"."Please Enter Your  Fullname!!"."</p>";} else{$name = $_POST['name'];}
        if(empty($_POST['username'])){echo "<p style='color: red;'>"."Please Enter Your Username!!"."</p>";}else{$_SESSION['username']=$_POST['username'];}
        if(empty($_POST['password'])){echo  "<p style='color: red;'>"."Please Enter Your Password!!"."</p>";}else{$_SESSION['password'] = $_POST['password'];//Session Variable to store the user's password  
        }
    if(!empty($name && $_POST['username'] && $_POST['password'])){header('location: login_form.php');}
   }
    ?>
<h1>SideHustle Task2:Authentication System</h1>
<form method="POST" action="index.php">
 <input type="text" name="name" placeholder="Fullname"><br><br>
 <input type="text" name="username" placeholder="Username"><br><br>
 <input type="password" name="password" placeholder="password"><br><br>

 <input type="submit" name="submit" value="submit"><br>
 Already have account:
 <a href="login_form.php">Login</a>

</form>
</body>
</html>
