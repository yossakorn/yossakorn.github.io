<?php
include("config.php");
$sql = "SELECT * FROM vrctest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	echo '<tr><td>' . $row["id"]. '</td></tr>';
	}
}
$conn->close();
?>