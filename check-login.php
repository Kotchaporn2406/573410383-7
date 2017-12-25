<?php
    include 'connect_login.php';
   
    $username = $_POST["name"];
    $password = $_POST["pwd"];

    $checklogin = "SELECT COUNT(*) FROM user_login WHERE username='$username' AND pass='$password';";

    $query = mysqli_query($mysqli, $checklogin);

    while ($recond = mysqli_fetch_array($query)) {
      if ($recond["COUNT(*)"] == "1") {
        printf("success");
      }
      else {
        printf("fail");
      }
    }
?>
