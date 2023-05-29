<?php include "assets/database/functions.php";
include('function.php');
$errName = $errquestion = "";
if(isset($_POST['btnAdd'])){

   $fname = $_POST['fname'];
   $question = $_POST['question'];
   $image = $_FILES['ImgFle']['name'];
     if($fname == ""){
          $errName = "أدخل اسمك";
      }
      if(empty($question)){
          $errquestion = "أدخل اسم السؤال ";
      }else{ 
           if($image == '')
           {
               $newImage = '';
           }else{
           $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
           move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
           }
           $sql = "insert into users_tbl (fname, question, image)
                    values('$fname', '$question', '$newImage')";
           $result = dbQuery($sql);
           if($result){
               echo  "<meta http-equiv='refresh' content='2;URL=index.php'>";
               echo "<div class='alert alert-success' role='alert'>
               تم الارسال بنجاح
             </div>";
           }else{
               echo "Error";
           }
      }
  }


?> 
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <title>درس خصوصي فيزياء</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-info px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-info px-3" href="">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a class="text-info pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0" dir="rtl">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-info"><span class="text-dark">أ.</span>إيهاب السيد</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link text-info active">الصفحة الرئيسية</a>
                        <a href="#gallery" class="nav-item nav-link">فيديوهات مسجلة</a>
                        <a href="#articles" class="nav-item nav-link">بنك الأسئلة</a>
                        <a href="#rrarticles" class="nav-item nav-link">التلخيصات</a>
                        <a href="#Features" class="nav-item nav-link">قدَم سؤال</a>
                        <a href="http://localhost/Creative%20Tim/examples/tables/applay.php" class="nav-item nav-link">حل الأسئلة</a>
                    </div>
                    <div class="d-flex">     
                          <a href="login_student.php"><button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                            تسجيل دخول الطالب
                           </button></a>
                           <a href="loginteacher.php"><button type="button" class="btn btn-outline-dark shadow-none">
                            تسجيل دخول المعلم
                           </button></a>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
 
    <div class="container-fluid p-0" dir="rtl">
        <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      slider();
      ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
    </div>

    <!-- Carousel End -->




    <!-- Destination Start -->
<div class="container-fluid py-5" id="gallery" dir="rtl">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3" >
                
                <h1>فيديوهات مسجلة</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php
                    video();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5" dir="rtl" id="articles">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                
                <h1>بنك الأسئلة</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php
                    bank();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


 <!-- Service Start -->
    <div class="container-fluid py-5" dir="rtl" id="rrarticles">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                
                <h1>التلخيصات</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php
                    summary();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
<!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 50px 0;" dir="rtl" id="Features">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        
                        <h1 class="text-white"><span class="text-info"></span>هل لديك سؤال</h1>
                    </div>
            
                    
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-info text-center p-4" id="reg">
                            <h1 class="text-white m-0">قدًم سؤال</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="fname" placeholder="أكتب اسمك" required="required" />
                                    <span class="text-danger"><?= $errName ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="question" placeholder="أكتب السؤال" required="required" />
                                    <span class="text-danger"><?= $errquestion ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control p-4" name="ImgFle" placeholder="ارفق صورة"  /> 
                                </div>
                                <div>
                                    <button class="btn btn-info btn-block py-3" type="submit" name="btnAdd">أرسل الطلب</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
    <div class="col-lg-6 text-center text-lg-right" >
        <div class="d-inline-flex align-items-center" >
           
            <a class="page-link" href="http://localhost/Creative%20Tim/examples/tables/applay.php" >
                <span aria-hidden="true"><p id="next" class="text-info">حل الأسئلة &raquo;</p></span>
                
              </a>
        </div>
    </div>
    
<!-- Destination Start -->
<div class="container-fluid py-5" id="#" dir="rtl">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3" >
            <h1>أكثر الطلاب تفاعلاً</h1>
        </div>
        <div class="row">
            
            <?php
                react();
                ?>
                      
        </div>
    </div>
</div>

<!-- Destination Start -->



    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;" dir="rtl">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-info"><span class="text-white">أ.</span>إيهاب السيد</h1>
                </a>
                <p>‏مدرس فيزياء‏ لدى ‏وزارة التربية والتعليم العالي - فلسطين‏

                </p>
                <h6 class="text-white text-uppercase mt-4 mb-3">تواصل معي</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-info btn-square mr-2" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-info btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-info btn-square mr-2" href="#"><i class="fab fa-youtube"></i></a>
                  
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.html" class="nav-item nav-link text-info active">الصفحة الرئيسية</a>&nbsp; |&nbsp;&nbsp;
                        <a href="#gallery" class="nav-item nav-link text-info">فيديوهات مسجلة</a>&nbsp; |&nbsp;&nbsp;
                        <a href="#articles" class="nav-item nav-link text-info">بنك الأسئلة</a>&nbsp; |&nbsp;&nbsp;
                        <a href="#rrarticles" class="nav-item nav-link text-info">التلخيصات</a>&nbsp; |&nbsp;&nbsp;
                        <a href="#Features" class="nav-item nav-link text-info">قدَم سؤال</a>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4">اتصل بنا</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>مكان الدرس</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">نسخة تجريبية</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white">المبرمجة ملك&nbsp;&nbsp;<a class="text-info" href="https://www.facebook.com/profile.php?id=100029578512995">للتواصل</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>