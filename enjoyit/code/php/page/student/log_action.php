<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tiem = $_POST['imet'];
        $percent = $_POST['percent'];
        $path = $_POST['path'];

        $conn = mysqli_connect('localhost', 'root', '', 'log') or die('unable to connect');
        $sql = "INSERT INTO log VALUES (null,'".$path."','".$percent."','".$tiem."', current_timestamp())";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo "<script>
            alert('저장 성공')
            location.href= './tajaGamePlay.php'
            </script>";
        }else{
            echo "<script>
            alert('저장 실패')
            location.href= './tajaGamePlay.php'</script>";
        }
    ?> 
</body>
</html>