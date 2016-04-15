<?php
function createLinkToServer(){
  $servername = $_SERVER['SERVER_NAME'];
  $username = "root";
  $password = "root";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  echo "\n";
  var_dump($conn);

  // $query = "SELECT * FROM `table_name` WHERE `column_name` = ";
    // $query = "SELECT * FROM `wp_users` WHERE `user_email` =" . '$user_login';

  // Close the connection (OPTIONAL) as it will close at end of script
  $conn->close();

}
?>
