<?php

    require_once('../DB_conn.php');
    $email = $_POST['user_id'];
    $passwd = $_POST['password'];
    $name = $_POST['stu_name'];
    $class = $_POST['class1']."-".$_POST['class2']."-".$_POST['class3'];
    $major = $_POST['major'];


    $sql = "select email from user_imf where email=:email";
    $DB_q = $pdo -> prepare($sql);
    $DB_q -> bindValue(":email",$email);
    $DB_q -> execute();
    $result = $DB_q->fetch();
    $check = $result ? true : false;
    if($check)
    {
         echo "<script> 
                alert('중복된 아이디가 존재합니다.'); 
                history.go(-1);
              </script>";
         $pdo = null;
         exit;
    }
    else
    {
        $sql = "insert into user_imf(email,passwd,name,class,major) values (:email,:passwd,:name,:class,:major)";

        $DB_q = $pdo -> prepare($sql);
        $DB_q -> bindValue(":email",$email);
        $DB_q -> bindValue(":passwd",$passwd);
        $DB_q -> bindValue(":name",$name);
        $DB_q -> bindValue(":class",$class);
        $DB_q -> bindValue(":major",$major);
        $DB_q -> execute();

         echo "<script> 
                alert('회원가입 성공.'); 
                location.href='../index.php';
              </script>";
         $pdo = null;
         exit;
          
    }
?>