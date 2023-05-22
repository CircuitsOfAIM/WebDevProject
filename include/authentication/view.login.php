<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/css/style.css">
    <link rel="stylesheet" href="./template/fontawesome-free-5.7.2-web/css/all.css">
    <title>LOG IN</title>
</head>

<body>

    <div class="main" id="mainid">
        <div class="detaildiv" id="detaildiv">
            <div class="infodetail authaboutus">
                <i class="fa fa-building authpagebuildinglogo"></i>
                <h1 class="authpagetextlogo">اسکای لاین</h1>
                <p>
                    اسکای لاین یک سامانه هوشمند در جهت سهولت در امور ملکی شما می باشد.شما با عضویت در این سامانه امکان
                    آگهی کردن املاک خود را خواهید داشت.بازدیدکنندگان سایت قابلیت مشاهده آگهی های شما را خواهند داشت و
                    برای ارتباط با شما کافی است تا با شماره تلفن های شما تماس حاصل کنند.
                    <br><br>جهت پشتیبانی از راه های زیر می توانید با ما در ارتباط باشید
                </p>
                <h2>
                    38455432-38454434
                </h2>
                <h2>
                    Imanesh.alireza@gmail.com
                </h2>
            </div>
            <div class="picdetail authformback">
                <div class="authformdiv">
                    <form action="" method="POST" name="loginform" id="loginformid">
                        <input type="text" name="username" placeholder="نام کاربری" value="" id="loginuserid">
                        <span id="loginusererrspan">
                            &nbsp;
                        </span>
                        <input type="password" name="password" placeholder="رمزعبور" value="" id="loginpassid">
                        <span id="loginpasserrspan">
                            &nbsp;<?php if (isset(template::$error['loginerr']))
                                        echo template::$error['loginerr'];  ?>
                        </span>
                        <input type="submit" name="loginsub" value="ورود" id="loginsubid" onclick="return validatelogin()">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="./template/js/script.js"></script>
</body>

</html>