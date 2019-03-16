<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 1/25/2019
 * Time: 10:20 PM
 */
				$conn = mysqli_connect("localhost","root","","try_for_table");
				if($conn -> connect_error) {
                    die("Coonection fialed:".$conn->connect_error);
                }
				$sql = "SELECT name_usr, username_usr, e-mail, order_usr from inform";
				$result = $conn -> query($sql);

				if($result ->num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                        echo "<tr><td>".$row["name_usr"]."</td><td>" . $row["username_usr"]. "</td><td>".$row["e-mail"]. "</td><td>".$row["order_usr"]. "</td></tr>";
					}
				echo "</table>";
				}
				else{
				echo "no result";
				}
				$conn->close();
				?>