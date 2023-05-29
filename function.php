<?php
function slider(){
    global $con;
    $sql = "SELECT * FROM `slider`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $image = $row['image'];
                      $title = $row['title'];
                      $paragraph = $row['paragraph'];
                      echo "<div class='swiper-slide'>
                      <img src='assets/images/$image' class='w-100 d-block'/>
                    </div>";
}
}
function video(){
    global $con;
    $sql = "SELECT * FROM `video`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $image = $row['image'];
                      $link = $row['link'];
                      $paragraph = $row['paragraph'];
                      echo "<div class='destination-item position-relative overflow-hidden mb-2'>   
                      <img class='img-fluid' src='assets/images/$image'>
                      <a class='destination-overlay text-white text-decoration-none' href='$link'>
                          <h5 class='text-white'>الوحدة الثالثة</h5>
                          <span>$paragraph</span>
                      </a>
                  </div>";
}
}
function bank(){
    global $con;
    $sql = "SELECT * FROM `bank`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $image = $row['image'];
                      $link = $row['link'];
                      $title = $row['title'];
                      $paragraph = $row['paragraph'];
                      echo "<div class='service-item bg-white text-center mb-2 py-5 px-4'>
                      <a href='$link' class='btn btn-outline-light' aria-current='page'> 
                      <img class='img-fluid' src='assets/images/$image'>
                      </a>
                      <h4 class='mb-2'>$title</h4>
                      <p class='m-0'>$paragraph</p>           
                  </div>";
}
}
function summary(){
    global $con;
    $sql = "SELECT * FROM `summary`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $image = $row['image'];
                      $link = $row['link'];
                      $title = $row['title'];
                      $paragraph = $row['paragraph'];
                      echo "<div class='service-item bg-white text-center mb-2 py-5 px-4'>
                      <a href='$link' class='btn btn-outline-light' aria-current='page'>
                      <img class='img-fluid' src='assets/images/$image'>
                      </a>
                      <h4 class='mb-2'>$title</h4>
                      <p class='m-0'>$paragraph</p>
                  </div>";
}
}
function react(){
    global $con;
    $sql = "SELECT * FROM `reaction`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $react = $row['react'];
                      echo "<div class='col-lg-4 col-md-6 mb-4'>
                      <div class='destination-item position-relative overflow-hidden mb-2'>
                      <img class='img-fluid' src='assets/images/wwmm.jpg'>
                      <a class='destination-overlay text-white text-decoration-none'>
                          <h3 class='text-white'>$react</h3>
                      </a>
                  </div>
                  </div> ";
}
}
?>