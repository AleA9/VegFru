<?php>
$servername = "localhost:3306";
$username = "root";
$password = "password2";
$database_name = "veggie";
	  $conn= new mysqli($servername, $username, $password, $database_name);
	  //2.Verificarea conexiunii
	  if(!$conn)
	  {
		  die("Connection failed: ".mysqli_connect_error());
	  }
	  echo "Connected successfully";

?>