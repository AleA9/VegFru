<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 3/16/2019
 * Time: 11:15 PM
 */
//session_start();
$host = "localhost";
$user = "root";
$password ="";
$db = "veg_tr";

$url=$_SERVER['HTTP_REFERER'];  //doesn't really help

$conn = new mysqli($host, $user, $password, $db);


if ($conn->connect_error) {
        die('Connection crashed. It is dead. Bye.)' . $conn->connect_error);
    } else {
    if (isset($_POST['Name'])) {
        $uname = $_POST ['Name'];
        $password = $_POST ['password'];

        $sql = "SELECT * FROM mylogin WHERE username_mylogin='" . $uname . "' AND pass_mylogin='" . $password . "' limit 1   ";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            echo "Good";
            exit();
        } else {
            echo "Bad.";
            exit();
        }

        header("Location: http://localhost:63343/VegFru/VegFru/public_html/index.html?_ijt=1rjlomr8619pi8garu20ucma3t");
        echo "Connected";
    }
    header("Location: terms.html");
}
header("location:$url");
/*
 * $host = "localhost";
$user = "root";
$password ="";
$db = "demo";


$conn = new mysqli($host, $user, $password, $db);


if ($conn->connect_error) {
        die('Connection crashed. It is dead. Bye.)' . $conn->connect_error);
    } else {
        if(isset($_POST['Name'] ) ) {
            $uname = $_POST ['Name'];
            $password = $_POST ['password'];

            $sql = "SELECT * FROM loginform WHERE User='" . $uname . "' AND Pass='" . $password . "' limit 1   ";

            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1) {
                    echo "Good";
                    exit();
                } else {
                    echo "Bad.";
                    exit();
                }
            }
}
 */