<?php
	//koneksi db
	$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
	//ambil ke data table

	function query($query){
		global $conn;
		//lemari
		$result = mysqli_query($conn,$query);
		//wadah
		$rows = [];
		//item diambil
		while ($row = mysqli_fetch_assoc($result)) {
			$rows [] = $row;
		}
		return $rows;
	}
?>
