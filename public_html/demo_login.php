<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 3/16/2019
 * Time: 11:15 PM
 */

$host = "localhost";
$user = "root";
$password ="";
$db = "demo";

//mysql_connect($host, $user, $password);
$conn = new mysqli($host, $user, $password, $db);

//$mysql_select_db($db);
if ($conn->connect_error) {
        die('Connection crashed. It is dead. Bye.)' . $conn->connect_error);
    } else {
        if(isset($_POST['Name'] ) ) {
            $uname = $_POST ['Name'];
            $password = $_POST ['password'];

            $sql = "SELECT * FROM loginform WHERE User='" . $uname . "' AND Pass='" . $password . "' limit 1   ";

            $result = mysqli_query($conn, $sql);
          //  if ($conn->query($sql) === TRUE) {
                if (mysqli_num_rows($result) == 1) {
                    echo "Good";
                    exit();
                } else {
                    echo "Bad.";
                    exit();
                }
            }
        //}
}
