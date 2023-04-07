<?php

require "../conn.php";

$selectAllFile = "SELECT * FROM sell
 
UNION ALL
SELECT * FROM buy
 
ORDER BY date DESC;";
$results = mysqli_query($conn, $selectAllFile);

$data =$results->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
?>