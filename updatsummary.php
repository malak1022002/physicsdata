<?php
  $id = $_GET['id'];
  include "assets/database/functions.php";
   
      $link = $_POST['link'];
      $paragraph = $_POST['paragraph'];
      $title = $_POST['title'];
      $image = $_FILES['ImgFle']['name'];
      $oldImage = $_POST['oldImage'];
          if($image == ''){
              
                $sql = "update summary set
                paragraph = '$paragraph', 
                link = '$link',
                title = '$title'           
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=summary.php'>";
           }else{
               echo "Error";
           }
           
           }else{
             $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
           move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
           @unlink('assets/images/'.$oldImage);
           $sql = "update summary set
           paragraph = '$paragraph', 
           link = '$link',
           title = '$title',   
                    image = '$newImage'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=summary.php'>";
           }else{
               echo "Error";
           } 
           }