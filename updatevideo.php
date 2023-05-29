<?php
  $id = $_GET['id'];
  include "assets/database/functions.php";
   
      $link = $_POST['link'];
      $paragraph = $_POST['paragraph'];
      $image = $_FILES['ImgFle']['name'];
      $oldImage = $_POST['oldImage'];
      //echo $image;
      if($link == ""){
          $errtitle = "الرجاء إدخال الرابط ";
      }else 
      if($paragraph == ""){
        $errparagraph = "الرجاء إدخال الفقرة ";
    }else{
          // add record to database
          if($image == ''){
              
                $sql = "update video set
                paragraph = '$paragraph', 
                link = '$link'               
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=video.php'>";
           }else{
               echo "Error";
           }
           
           }else{
             $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
           move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
           @unlink('assets/images/'.$oldImage);
           $sql = "update video set
           paragraph = '$paragraph', 
           link = '$link',   
                    image = '$newImage'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=video.php'>";
           }else{
               echo "Error";
           } 
           }
           
      }