<?php
    require_once('../DB_conn.php');
    session_start();
    $email = $_POST['user_id'];
    $passwd = $_POST['password'];

    $sql = "select email,name from user_imf where email=:email and passwd=:passwd";
    $DB_q = $pdo -> prepare($sql);
    
    $DB_q -> bindValue(":email",$email);
    $DB_q -> bindValue(":passwd",$passwd);
    $DB_q -> execute();

    $result = $DB_q -> fetch();

    $check = $result ? true : false;
    
    if($check)
    {
        $_SESSION['email'] = $result['email'];
        $_SESSION['name'] = $result['name'];
        
        echo "<script> 
                location.href='../index.php';
              </script>";
         $pdo = null;
         exit;
    }
    else
    {
        echo "<script> 
                alert('로그인 실패');
                location.href='../index.php';
              </script>";
         $pdo = null;
         exit;
    }
    
    
?>