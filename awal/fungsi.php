<?php
// koneksi
$conn = mysqli_connect("localhost", "root", "", "phpku" );

function query ($query){
	global $conn;
	$res = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($res) ){
		$rows[] = $row;
	}
	return $rows;
		
}
?>