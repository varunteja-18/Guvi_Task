<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data=check_login($con);
  #return $user_id;
  #header("location:../profile.html");
  #die;
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a href="../index.html">logout</a>
  <h1>This is Profile page</h1>
  <br />
   Hello <?php echo $user_data["user_name"];?>
</body>
</html>
