<?php session_start();
// اتصال مع السيرفر
function Connect(){
    $conn = mysqli_connect("localhost","root","","internet_prog_db");
    return $conn;
}
//تنفيذ الاستعلام
function dbQuery($sql){
    $result = mysqli_query(Connect(), $sql);
    return $result;
}
// تخزين البيانات الناتجة عن الاستعلام في مصفوفة
function dbFetchArray($result, $resultType=MYSQLI_NUM){
    return mysqli_fetch_array($result, $resultType);
}
function dbFetchAssoc($result){
    return mysqli_fetch_assoc($result);
}
// استرجاع عدد الصفوف الناتجة عن الاستعلام
function dbNumRows($result){
    return mysqli_num_rows($result);
}
function doLogin(){
    $errorMessage = "";
    $name = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    if($name == "" || $password ==""){
        $errorMessage = "الرجاء ادخال اسم المستخدم وكلمة المرور";
    }else{
        $sql = "SELECT id FROM `login` 
                where username='$name' and password='$password'";
        $rs = dbQuery($sql);
        if(dbNumRows($rs) > 0)
        {
            $row = dbFetchAssoc($rs);
            $_SESSION['id']  = $row['id'];
            $_SESSION['username'] = $name;
            header('location:dashboard.php');
        }else{
         $errorMessage = "الرجاء التأكد من اسم المستخدم أو كلمة المرور";   
        }
    }
    return $errorMessage;
}
function CheckUser(){
    if(!isset($_SESSION['id'])){
        header('location:login.php');
        exit();
    }
}





