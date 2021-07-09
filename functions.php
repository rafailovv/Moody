<?php
require_once "config.php";

function get_product_by_id( $id ){
	global $db;

	$query = "SELECT * FROM `mooody`.`products` WHERE id=" . $id;
	$req = mysqli_query($db, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}