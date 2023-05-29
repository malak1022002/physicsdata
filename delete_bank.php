<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM bank WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
               echo  "<meta http-equiv='refresh' content='0;URL=bank.php'>";
           }else{
               echo "Error";
           }