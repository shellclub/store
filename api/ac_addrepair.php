<?php

session_start();
if (!isset($_SESSION['intLine'])) {
	//echo "ยังไม่มีนะครับ=" . $_REQUEST['repair_name'];
	$_SESSION['intLine'] = 0;
	$_SESSION['repair_name'][0] = $_REQUEST['repair_name'];
	$_SESSION['repair_model'][0] = $_REQUEST['repair_model'];
	$_SESSION['repair_number'][0] = $_REQUEST['repair_number'];
	$_SESSION['repair_detail'][0] = $_REQUEST['repair_detail'];
} else {
	//	echo "มีแล้วเยอะเลย";
	$key = array_search($_REQUEST['repair_name'], $_SESSION['repair_name']);
	if ((string)$key != "") {
		$_SESSION["repair_number"][$key] = $_SESSION["repair_number"][$key] + $_REQUEST['repair_number'];
	} else {
		$_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		$intNewLine = $_SESSION["intLine"];
		$_SESSION["repair_name"][$intNewLine] = $_REQUEST["repair_name"];
		$_SESSION["repair_number"][$intNewLine] = 1;
	}
}
unset($_SESSION["intLine"]);