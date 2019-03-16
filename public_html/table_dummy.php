<?php

//make conn
mysql_connect('localhost', 'root', '');
//select db
mysql_select_db('try');

$sql = "SELECT * FROM employees";

$records = mysql_query($sql);


?>


<html>

<head>
    <title> Employee DAta </title>
</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing ="1">
    <tr>

        <th> Name </th>
        <th> Age</th>
        <th> Positibon </th>
        <th> Salary </th>
    <tr>

        <?php

        while ($employee = mysql_fetch_assoc($records))  {

            echo "<tr>";

            echo "<td>".$employee['name']."</td>";

            echo "<td>".$employee['age']."</td>";

            echo "<td>".$employee['position']."</td>";

            echo "<td>".$employee['salary']."</td>";

            echo "</tr>";
        } //end while


        ?>

</table>
</body>
</html>