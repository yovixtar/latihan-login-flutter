<?php
header("Access-Control_Allow_Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-type:application/json;charset=utf-8"); 
header("Access-Control-Allow-Methods: GET");
//header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
header('access-control-allow-origin: *');
header('Access-Control-Allow-Headers: *');
include "dbsql.php";

$sql = "SELECT * FROM users";
$stmt = $db->query($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);