<?php
    include "../conn.php";
    if($_REQUEST['ac']){
        $sql="SELECT * FROM tb_user WHERE username = '".$_REQUEST['username']."' AND password ='".$_REQUEST['password']."' ";
        $query = $conn->query($sql);
        $num = $query->num_rows;
        $result = $query->fetch_object();

        if($num>0){
            session_start();
            $_SESSION['name'] = $result->name; 
            $_SESSION["sess_id"] = session_id();
            echo "OK";
        }
    }
?>