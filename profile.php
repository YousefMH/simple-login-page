<?php session_start();
include 'User.php'; 
if(isset($_SESSION['ID'])){// Just redirecting if the user not having an email in the db.
  $one=1;
}else{
  header('Refresh: 0; URL=../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
     <!-- Main stylesheet -->
    <link rel="stylesheet" href="style_for_profile.css">
  </head>
<body>
  <h2>User Profile Card</h2>
  <div class="card">
    <img src="https://i.pinimg.com/736x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" style="height: 250px;">
    <h1><?php echo $_SESSION['Name'];?></h1>
    <p class="title"><?php echo $_SESSION['Email'];?></p>
    <p> ID: <?php echo $_SESSION['ID'];?></p>
    <div class="icons">
      <a href="#"><i class="fa fa-dribbble"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>
    <p><button>Contact</button></p>
  </div>
  <form method="GET">
    <button name="logout">Logout</button>
  </form>
</body>  
</html>
<?php 
    if(isset($_GET['logout'])){
            $user_logged_out = new User;
            $user_logged_out->logout();
}?>