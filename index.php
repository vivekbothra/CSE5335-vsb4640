<?php


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "webdata";

// Create connection
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
// $sql = "DROP table apidata";
// $sql = "CREATE TABLE apidata (
// id INT(150) NOT NULL  PRIMARY KEY,
// userId INT(150) UNSIGNED, 
// title VARCHAR(1000) NOT NULL,
// body VARCHAR(1000)

// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table apidata created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

if($output == FALSE){
	echo "curl error" . curl_error($ch);

}
curl_close($ch);
$out=json_decode($output);
  // print_r($out);

foreach ($out as $key => $value) {
	# code...
	$array = json_decode(json_encode($value), true);
	 // print_r($array);
	$keys = array_map(null, array_keys($array));
	 print_r($keys);
	$newarray = array_map(null, $array);
	// print_r($newarray);

	  $sql = "INSERT INTO apidata(`".implode('`, `', $keys)."`) VALUES('".implode("', '", $newarray)."')";

	if (mysqli_query($conn, $sql)) {
   echo "inserted successfully";
} else {
   echo "Error inserting: " . mysqli_error($conn);
}

}



mysqli_close($conn);


?>
<body><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

	for (var i = 1; i <=100; i++) {

                 $.get( 
                  "getrecords.php",
                  { id: i },
                  function(data) {
                     $('#res3').append(data);
                  }
               );

             }
                
                });

  </script>

<div id="res3"></div>
</body>
 