<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link href="../../css/login.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="favicon" href="../../../source/src_img/favicon.ico">
</head>

<body>

    <div class="header">

    </div>


    <div class="section mb-4 secBox">
        <img src="../../../source/src_img/logo.png" class="login_img">
    </div>


    <div class="section mb-4 secBox as">
        <div class="formbox">

        <h4 class="loginHead">교사 로그인</h4>
            <form action="../action/teacherLogin_action.php" method="POST">

                <div class="col-auto mb-4">
                    <label for="inputPassword1" class="visually-hidden">ID</label>
                    <input type="text" class="form-control" id="inputPassword1" name="LoginId" placeholder="ID">
                </div>

                <div class="col-auto mb-4">
                    <label for="inputPassword2" class="visually-hidden">PW</label>
                    <input type="password" class="form-control" id="inputPassword2" name="LoginPw" placeholder="PW">
                </div>

                <button type="submit" class="btn btn-primary">로그인</button>


            </form>
        </div>
    </div>
</body>

</html>