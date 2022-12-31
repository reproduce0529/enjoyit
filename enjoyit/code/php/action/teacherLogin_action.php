<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include '../inc/DBcnt.php';
    include '../inc/session.php';
    if($jb_login){
        echo "<script>
            alert('이미 로그인된 상태입니다.')
            location.href = '../page/teacher/main.php';
        </script>";
    }else{
        
        $id = $_POST['LoginId'];
        $pw =  hash("sha256", $_POST['LoginPw']);



        $sql = "SELECT COUNT(*), teacher_pw FROM teacher WHERE teacher_id = '".$id."'";
        $res = mysqli_query($conn, $sql);
        $r = mysqli_fetch_assoc($res);


        if($r['COUNT(*)'] != 0){
            if($r['teacher_pw'] == $pw){
                $_SESSION['username'] = $id;
                echo "<script>
                alert('로그인 성공');
                location.href = '../page/teacher/main.php';
                </script>";
                
            }else{
                echo "<script>
                alert('비밀번호가 틀렸습니다.');
                location.href = '../page/login.php';
            </script>";    
            }
        }else{
            echo "<script>
                alert('존재하지 않는 아이디입니다.');
                location.href = '../page/login.php';
            </script>";
        }

    }
     
    ?>
</body>
</html>