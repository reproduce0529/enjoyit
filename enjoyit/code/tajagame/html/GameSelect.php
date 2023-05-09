<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="GameBox">
        
        <div class="headerMenu">
            <div class="Menu active" onclick="ShowSubMenu(0)">
                <img src="../../../../source/src_img/Icons8-Ios7-Computer-Hardware-Keyboard.ico">
                <p class="headMenuP">손가락연습</p>
            </div>
            <div class="Menu" onclick="ShowSubMenu(1)">
                
                <img src="../../../../source/src_img/Icons8-Ios7-Computer-Hardware-Keyboard.ico">
                <p class="headMenuP">단어 / 문장 연습</p>
            </div>
            <div class="Menu" onclick="ShowSubMenu(2)">
                
                <img src="../../../../source/src_img/Icons8-Ios7-Computer-Hardware-Keyboard.ico">
                <p class="headMenuP">긴글(시험)</p>
            </div>
            <div class="Menu" onclick="ShowSubMenu(3)">
                
                <img src="../../../../source/src_img/Icons8-Ios7-Computer-Hardware-Keyboard.ico">
                <p class="headMenuP">타자놀이</p>
            </div>
        </div>


        <div class="SelectLang">
            <div class="SelectLangMenu">
                <div class="LangMenu active" onclick="ShowLangMenu(0)">
                   <p class="LangMenuP">한글</p>
                </div>
                <div class="LangMenu" onclick="ShowLangMenu(1)">
                    <p class="LangMenuP">영어</p>
                </div>
            </div>
        </div>

        <div class="ListBox">
            
        </div>

        <div class="logBox">
            <div class="logbox_title">로그</div>
            <div class="logBox_head">
                <p>구분</p>
                <p>정확도</p>
                <p>시간</p>
                <p>날짜</p>
            </div>

            <div class="log_content">
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'log') or die('unable to connect');
                    $sql = "SELECT * FROM log ORDER BY log_idx DESC";
                    $res = mysqli_query($conn, $sql);
                    while($row=  mysqli_fetch_array($res)){
    ?>

                <div class="logBox_line">
                    <p><?php echo $row['log_path'] ?></p>
                    <p><?php echo $row['log_percent'] ?></p>
                    <p><?php echo $row['log_time']."s" ?></p>
                    <p><?php echo $row['log_createdDate'] ?></p>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>