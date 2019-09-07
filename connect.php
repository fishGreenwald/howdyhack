<?php
  $username = filter_input(INPUT_POST, 'uname');
  $password = filter_input(INPUT_POST, 'psw');
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "w.cow.103";
  $dbname = "RevsList";

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  if(mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());
  }else{
    $sql = "INSERT INTO account (username, password)"
    values ('$username', '$password')";
    if($conn->query($sql)){
      echo "New record is inserted successfully";
    }else{
      echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }

?>
