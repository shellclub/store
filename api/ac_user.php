<?php
include "../conn.php";
if(isset($_REQUEST['ac'])){
    switch ($_REQUEST['ac']) {
      case 'addnew':        
        if($_REQUEST['user_id']){
        $sql="UPDATE tb_user SET username='".$_REQUEST['username']."',password='".$_REQUEST['password']."',name='".$_REQUEST['name']."',tel='".$_REQUEST['tel']."',email='".$_REQUEST['email']."',linetoken='".$_REQUEST['linetoken']."' WHERE user_id='".$_REQUEST['user_id']."' ";
        $query = $conn->query($sql);
        if($query){
            echo "OK";
        }
        }else{
        $sql = "INSERT INTO tb_user(username,password,name,tel,email,linetoken,publice) VALUES('".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['name']."','".$_REQUEST['tel']."','".$_REQUEST['email']."','".$_REQUEST['linetoken']."','1') ";
        $query=$conn->query($sql);
        if($query){
            echo "OK";
        }else{
          echo "NO";
        }
      }
        break; 
        case 'delete':
          $sql = "DELETE FROM tb_user WHERE user_id ='".$_REQUEST['user_id']."' ";
          $query=$conn->query($sql);
          if($query){
            echo "OK";
          }
          break;     
    }
}
?>