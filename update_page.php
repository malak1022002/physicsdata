<?php
  $id = $_GET['id'];
  include "assets/database/functions.php";


   
      $answer = $_POST['answer'];
      $image = $_FILES['ImgFle']['name'];
      $oldImage = $_POST['oldImage'];
      //echo $image;
      if($answer == ""){
          $erranswer = "الرجاء إدخال إجابة السؤال";
      }else{
          // add record to database
          if($image == ''){
              
                $sql = "update users_tbl set
                answer = '$answer'                
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=homepage.php'>";
           }else{
               echo "Error";
           }
           
           }else{
             $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
           move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
           @unlink('assets/images/'.$oldImage);
           $sql = "update users_tbl set
           answer = '$answer',  
                    image = '$newImage'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=homepage.php'>";
           }else{
               echo "Error";
           } 
           }
           
      }