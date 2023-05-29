<?php
  $id = $_GET['id'];
  include "assets/database/functions.php";


   
      
      $image = $_FILES['ImgFle']['name'];
      $oldImage = $_POST['oldImage'];
      $title = $_POST['title'];
      $paragraph = $_POST['paragraph'];
      //echo $image;
      if($title == ""){
          $errtitle = "الرجاء إدخال إجابة السؤال";
      }else{
          // add record to database
          if($image == ''){
              
                $sql = "update slider set
                title = '$title',
                paragraph = '$paragraph'                
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=slider.php'>";
           }else{
               echo "Error";
           }
           
           }else{
             $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
           move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
           @unlink('assets/images/'.$oldImage);
           $sql = "update slider set
             
                    image = '$newImage',
                    title = '$title',
                    paragraph = '$paragraph'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=slider.php'>";
           }else{
               echo "Error";
           } 
           }
           
      }