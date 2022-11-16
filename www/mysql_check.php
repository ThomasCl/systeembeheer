<html>
<body>

<?php

$query = sprintf("SELECT * FROM check.log order by id desc limit 1");
$result = mysql_query($query);

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

while ($row = mysql_fetch_assoc($result)) {
	echo $row['id'];
    	echo $row['date'];
    	echo $row['text'];
}
mysql_free_result($result);

?>
</body>
</html>
