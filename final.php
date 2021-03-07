<?php session_start(); ?>
<!DOCTYPE html>
<html>
      <?php  
      $_SESSION['success']="Successfull";
      if(isset($_POST['logout'])){
            unset($_SESSION);
            session_destroy();
            header('location: index.php');
        } ?>
    <head>
        <title>Home: <?php echo $_SESSION['fullname'] ?></title>
    </head>
    <body>
        <div>
        <h1> Welcome <?php echo $_SESSION['username']; ?>  </h1>
        <p> To this Simple Authentication System</p>
        <p> Your password is <?php echo $_SESSION['password']; ?></P><br>
        
        <form action="final.php" method="POST">
        <input  type="submit" name="logout" value="LogOut" >
        </form>
        </div>
    </body>
</html>