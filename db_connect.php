<?php


$host=	"remotemysql.com";
$user=	"6wKVSHQCPb";
$pass=	"zhKhVVdK8c";
$db=	"6wKVSHQCPb";

//$db="test"

// Create connection

$mysqli = new mysqli($host, $user, $pass, $db);

echo $mysqli->host_info . "\n";
// Check connection
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>