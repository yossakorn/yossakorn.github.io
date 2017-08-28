
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<?php
// $servername = "localhost";
// $username = "admin";
// $password = "p@ssword";
// $dbname = "Test";
// //$port = "3306";
// $con = new mysqli($servername, $username, $password, $dbname);
include("config.php"); 
$sql = "SELECT * FROM vrctest";
//mysqli_query($con, "INSERT INTO vrctest (id, no) VALUES ('444', '111111')");
//echo $sql;
$result = mysqli_query($con,$sql);
// print_r($result);
while ( $row= mysqli_fetch_array ( $result ) )
{
   $id=$row["id"]; 
 echo $id; 
}

$con->close();
?>
</body>
</html>
