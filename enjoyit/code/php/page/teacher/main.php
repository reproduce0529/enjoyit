<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <link href="../../../css/main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="favicon" href="../../../source/src_img/favicon.ico">
</head>
<?php
    include '../../inc/session.php';
    include '../../inc/DBcnt.php';

    if(!$jb_login){
        echo "<script>
            alert('교사 로그인이 필요한 기능입니다.');
            location.href = './login.php';
        </script>";
    }else{



    $id = $_SESSION['username'];
    
    $sql = "SELECT * FROM teacher WHERE teacher_id = '".$id."'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);


    

?>

<body>
    <div class="header">

       <div class="ChooseBox">
       <label class="header_label">학교</label>
        <label class="header_label"></label>
        <label class="header_label">반</label>
        <label class="header_label"></label>
        <label class="header_label"></label>
       </div>


        <button class="btn btn-primary header_button">학교/학원/학생 등록 관리 버튼</button>
    </div>

    <div class="Section">
        <div class="Sidemenu">
            <a href="#" class="menu_a">현황 조회</a>
            <a href="#" class="menu_a">과제 관리</a>
            <a href="#" class="menu_a">메뉴 조정</a>
            <a href="#" class="menu_a">다운로드 관리</a>
        </div>
        <div class="Content">

            <div class="sectionBox">

            </div>

            <div class="sectionBox">
                
                </div>

        </div>
    </div>


</body>
</html>
<?php
}

?>