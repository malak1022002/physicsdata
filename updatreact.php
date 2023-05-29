<?php
  $id = $_GET['id'];
  include "assets/database/functions.php";
   
      $react = $_POST['react'];
           $sql = "update reaction set
           react = '$react'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=react.php'>";
           }else{
               echo "Error";
           } 