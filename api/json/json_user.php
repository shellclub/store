<?php
    include("../../conn.php");   //jijiijpijpijipjip
    $sql = "SELECT * FROM tb_user";
    $query = $conn->query($sql);
    $num = $query->num_rows;

    if($num > 0){
        while($result = $query->fetch_object()){        
            $row[] = array(
            "name" => $result->name,
            "email" => $result->email,
            "linetoken" => $result->linetoken,
            "lastlogin" => $result->lastlogin,
            "action" => ""
            );
        }
    }else{
        $row[] = array(
            "name" => "",
            "email" => "",
            "linetoken" => "",
            "lastlogin" => "",
            "action" => ""
        );
    }
    $data['data'] = $row;
    echo json_encode($data);
?>