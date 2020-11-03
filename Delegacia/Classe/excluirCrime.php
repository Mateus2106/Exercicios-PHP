<?php
	include "./Classe/crime.php";
	conexao::querry("DELETE FROM crime WHERE id=$_GET['id']");
	header("location: crime.php");

?>