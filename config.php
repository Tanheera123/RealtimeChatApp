<?php
  $hostname = "localhost";
  $username = "id20536834_cnweb";
  $password = "6VCXw%%E#+H(H1^*";
  $dbname = "id20536834_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
