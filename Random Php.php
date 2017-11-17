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


/* ALTERNATE WAY USING EXTERNAL CREDENTIALS STORED OUTSIDE OF ROOT FOR SECURITY */

function connect(){
    $config = parse_ini_file('/home/sites/www.ikon-rotational.co.uk/db.ini');
    $con = mysqli_connect($config['host'],$config['username'],$config['password'],$config['username']);
    if(!$con){
        die("Failed to connect to Database");
    }
    return $con;
}


?>
