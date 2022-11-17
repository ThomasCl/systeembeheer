<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "bot", "rDEetGxq82DCE", "check");
$query = $mysqli -> query("SELECT * FROM check.log order by id desc limit 1");
if (!$query) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
while ($row = mysqli_fetch_assoc($query)) {
    	echo $row['text'];
}
?>
