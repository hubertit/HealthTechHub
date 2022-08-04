<?php

// CHECK USER Status
require("configs/connection.php");
$user_id 	= $_COOKIE["HTH_USER_ID"];

if (!isset($_COOKIE["HTH_USER_ID"])) {
	header("location:./");
}

if (isset($_GET["sign"])) {
	$sign = $_GET["sign"];

	if ($sign == "out") {
		setcookie("HTH_USER_ID", 0, time() + (86400 * 0), "/");
		setcookie("HTH_USER_ROLE", 0, time() + (86400 * 0), "/");
		setcookie("HTH_USER_USERNAME", 0, time() + (86400 * 0), "/");
		header("location:./");
	}
}
