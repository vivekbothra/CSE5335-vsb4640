<?php
// This file makes a connection with mysql database. 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "webdata";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = new mysqli($server, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];
$sql = "SELECT * FROM apidata  WHERE id=$id";
$rs = mysqli_query($conn,$sql);
$str = '';

$str .= '<ul>';
while ($res = mysqli_fetch_array($rs)) {
  $str .= '<li>'.$res["userId"].' - '. $res["id"].' - '.$res["title"].' - '.$res["body"].'';
}
$str .= '</ul>';
echo $str;
?>