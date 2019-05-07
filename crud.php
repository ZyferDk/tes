<?php

	$conn = mysqli_connect('localhost', 'root', 'a', 'buku');

	$query = "SELECT * FROM bedah";

	$result = mysqli_query($conn, $query);

	// $insert = "INSERT INTO bedah (judul, penulis, tebal, tahun)
	// 				VALUES ('cicak','cicak', 'cicak', '2018')";

	$delete = "DELETE FROM bedah WHERE id IN (2,3,4,5,6,7)";

	mysqli_query($conn, $delete);

	// if (mysqli_num_rows($result) > 0 )
	// 	{
	// 		while ($data = mysqli_fetch_array($result))
	// 			{
	// 				print_r($data);
	// 			}
	// 	}
?>