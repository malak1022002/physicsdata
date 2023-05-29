<?php session_start();

  if(isset($_SESSION['id'])){
      $_SESSION = array();
      //تدمير الجلسة عن طريق تخزين محتويات الجلسة في مصفوفة
      session_destroy();
      header('location:index.php');
      exit();
  }
