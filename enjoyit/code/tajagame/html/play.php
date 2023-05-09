<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="../js/pageMake/Game.js"></script>


    <?php
    $lang = $_GET['lang'];
    $path = $_GET['path'];
    $src = substr($path, 5, -3);
    ?>

    <script>
        let Array = [];

        $.getScript("<?php echo "../../../typing_src/".$lang."/".$path ?>", function () {
            Array =  <?php echo $src ?>;

        });

        $.getScript("../js/pageMake/Game.js", function () {
            MoveFile(Array)
            document.getElementById("SecText").focus();
        });


    </script>


</head>

<script>


</script>

<body>
    <div class="GameBox">

        <div class="headerMenu">
            <h2>타자연습 시작</h2>
        </div>
        
        <form action="./log_action.php" class="hidden formBox" id="logform" method="post">
            <input type="text" name="path" value="<?php echo $lang."/".$path ?>">
            <input type="text" name="percent" id="percent" value="">
            <input type="text" name="imet" id="imet" value="">
        </form>


        <p class="goBack" onclick="history.back()">뒤로가기</p>

        <div class="testShowBox">
            <p id="beforeSen"></p>
            <p id="nowSen"></p>
            <p id="afterSen"></p>
        </div>

        <div class="inputBox">
            <input type="text" id="SecText"  class="GameInput" onkeyup="enterkey(this)">
        </div>


        <div class="Dashboard">
            <p class="countP"></p>
            <p class="RightCnt">ANSWER : 0</p>
            <p class="timecnt">0</p>
        </div>


        

        



    </div>
</body>

</html>