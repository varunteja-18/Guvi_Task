<?php
session_start();

  include("connection.php");
  include("functions.php");

 if($_SERVER['REQUEST_METHOD']=="POST")
 {

   //something was posted
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];
   $email = $_POST['email'];

   $result1 = mysqli_query($con, "SELECT * FROM login_signup_db WHERE user_name = '$user_name'");
   $numRows = mysqli_num_rows($result1);

    if ($numRows > 0) {
        #echo "Username already exists";
        echo "alert('Username already exists')";
    } else {
        // Username does not exist, you can proceed with the registration logic here
        if (!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
        {
          //save to database
          $user_id = random_num(20);

          $query = "insert into login_signup_db(user_id,user_name,email,password) values('$user_id','$user_name','$email','$password')";
          mysqli_query($con,$query);
          echo "Registered Successfully!!";
          header("Location: ../index.html");
          die;
        }
        else {
         echo "Please enter some valid information!";
        }
    }
 }
?>
