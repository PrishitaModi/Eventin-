<?php 
      session_start();
      $username = "";
      $email = "";
      $errors = array();
      
      $db = mysqli_connect('localhost', 'root', '', 'todo');

      //if register button clicked
      if(isset($_POST['register'])){
            $username = @($_POST['username']);
            $email = @($_POST['email']);
            $password_1 = @($_POST['password_1']);
            $password_2 = @($_POST['password_2']);

            //ensure all fields are filled
            if(empty($username)){
                  array_push($errors, "Username is required"); // add to error array
            }
            if(empty($email)){
                  array_push($errors, "Email is required"); // add to error array
            }
            if(empty($password_1)){
                  array_push($errors, "Password is required"); // add to error array
            }
            if($password_1 != $password_2){
                  array_push($errors, "Passwords don't match"); // add to error array
            }

            //if there are no errors, save to db
            if (count($errors) == 0){
                  $password = md5($password_1); //encryption of password before storing
                  $sql = "INSERT INTO users (username, email, password)
                              VALUES ('$username', '$email', '$password')";
                  mysqli_query($db, $sql);
                  $_SESSION['username'] = $username;
                  $_SESSION['success'] = "You are now logged in";
                  header('location:afterlogin.php'); //redirect to home page
            }

      }
      
      // log user from login page
      if (isset($_POST['login'])){
            $username = ($_POST['username']);
            $password = ($_POST['password']);


            if(empty($username)){
                  array_push($errors, "Username is required"); // add to error array
            }
            if(empty($password)){
                  array_push($errors, "Password is required"); // add to error array
            }

            if (count($errors) == 0) {
                  $password = md5($password); 
                  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                  $result = mysqli_query($db, $query);
                  if (mysqli_num_rows($result) == 1) {
                        // log the user in
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in";
                        header('location:afterlogin.php'); //redirect to home page
                  } else {
                        array_push($errors, "The username or password is incorrect.");
                  }
            }
      }

      // logout
      if (isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location:index.php');
      }

?>