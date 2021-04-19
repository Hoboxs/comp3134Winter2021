<?php

$server = "138.197.151.74";
$username = "noah";
$pw = "password";
$db = "CyberLab";

$conn = new mysqli($server, $username, $pw, $db);
//$conn -> select_db($db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res= [];
if (isset($_GET['fname'])){
        $fname = $_GET['fname'];
        $query = "SELECT * FROM users WHERE firstname LIKE '$fname' AND active = 1;";;
        $res = $conn -> query($query);
        //var_dump( $res);
}

?>

<form method="get">
        <label>Enter First Name of User</label>
        <input type="text" id="fname" name="fname"/>
        <input type="submit">
</form>

<table>
        <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Active</th>
        </tr>
<?php
        foreach($res as $user){
                echo "<tr>";
                foreach ($user as $elem){
                        echo "<td>";
                        echo $elem;
                        echo "</td>";
                }
                echo "</tr>";
        }
?>
</table>
