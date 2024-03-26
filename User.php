<?php
include 'db_connection.php';

class User
{
  public function create($new_name, $new_email, $new_password)
  { // User Creation Method
    global $conn;                                     // Defines the conn variable and gets it's value from the {db_connection} file.
    $name     = $new_name;
    $email    = $new_email;
    $password = $new_password;
    $query = "SELECT * FROM users WHERE mail = '$email'";
    $result = $conn->query($query);
    if ($result) {                                    // We check if there is a user with the same email.
      if (mysqli_num_rows($result) > 0) {             // If yes we redirect the user to the login page because he is already have an account.
        echo "User already exists";
      } else {                                        // If no we store his value in a new row at the database
        // Puts the new data into the database
        $sql = "INSERT INTO users(mail,name,password) VALUES('$email','$name','$password')";
        if ($conn->query($sql) === TRUE) {            // We make sure that the data stored into the data base successfully.
          echo "New User Created Successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
  }
  public function login($email, $password)
  {
    global $conn;                                       // Defines the conn variable and gets it's value from the {db_connection} file.      
    $query = "SELECT * FROM users WHERE mail = '$email'";
    $result = $conn->query($query);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);             // Fetch the first row
        $stored_password  = $row['password'];
        $_SESSION['Email']= $row['mail'];
        $_SESSION['Name'] = $row['name'];
        $_SESSION['ID']   = $row['id'];
        if ($password == $stored_password) {
          echo "Login Successfull";
          header('Refresh: 2; URL=profile.php');
        } else {
          echo "Wrong Data, Try Again";
        }
      } else {
        echo "This User Doesn't Exit Create a New Account";
      }
    } else {
      echo "Something Went Wrong";
    }
  }
  public function logout(){
      session_destroy();
      header('Refresh: 0; URL=index.php');
    }
  }
