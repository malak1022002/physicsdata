<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM summary WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
               echo  "<meta http-equiv='refresh' content='0;URL=summary.php'>";
           }else{
               echo "Error";
           }