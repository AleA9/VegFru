<?php

    $password = "";
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    if ( isset ($_POST['password'] ) ) {
        $password = $_POST['password'];
        echo $password;
    }

    $username ="";
    if ( isset ($_POST['username'] ) ) {
        $username = $_POST['username'];
    }

    if ($username != "" && $password != "") {
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "veg_tr";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die('Connection crashed. It is dead. Bye.)' . $conn->connect_error);
        } else {

            $sql = "INSERT INTO mylogin (name_mylogin, username_mylogin, email_mylogin, pass_mylogin) VALUE ('{$name}', '{$username}', '{$email}', '{$password}')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            header("Location: http://localhost:63343/VegFru/VegFru/public_html/index.html?_ijt=1rjlomr8619pi8garu20ucma3t");
            echo "Connected";
        }
    }
?>

