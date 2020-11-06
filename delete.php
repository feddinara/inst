<?php
	$con = mysqli_connect('127.0.0.1', 'root','','25urok');
	$text_zaprosa = "DELETE FROM inst WHERE id = '{$_GET['idid']}'"; 
	mysqli_query($con, $text_zaprosa);
	header('Location: index.php');
 ?>