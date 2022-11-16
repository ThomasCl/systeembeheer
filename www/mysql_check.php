<html>
<body>

<?php
//$servername = "localhost";
$servername = "193.191.177.222";
$username = "check";
$password = "rDEetGxq82DCE";
$dbname = "check";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_errno) {
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
}
//$sql = "select * from log order by id desc";
//ECHO $sql
//$query  = "SELECT text from log;";
//$result = pg_query($conn, $sql);
if($result = $conn -> query("select * from check.log")){
	echo $result -> num_rows;
	$result -> free_result();
}
//echo $sql
$conn -> close();
?>
</body>
</html>
