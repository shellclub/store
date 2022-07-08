<?php
session_start();
for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
  $rows[] = array(
    $i,
    $_SESSION['repair_name'][$i],
    $_SESSION['repair_model'][$i],
    $_SESSION['repair_number'][$i],
    $_SESSION['repair_detail'][$i]
  );
}
$data['data'] = $rows;
echo json_encode($data);