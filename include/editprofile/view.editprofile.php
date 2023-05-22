<?php
defined('staticvar') or die('ACCESS DENIED');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/css/style.css">
    <link rel="stylesheet" href="./template/fontawesome-free-5.7.2-web/css/all.css">
    <title>EIDT PROFILE</title>
</head>

<body>
    <div class="main" id="mainid">
        <div class="navbar">
            <div class="iconlogo">
                <a href="index.php?module=addcase&action=addcase">
                    <i class="fa fa-plus" title="افزودن مورد"></i>
                </a>
            <a href="index.php?module=editcase&action=editcase"><i class="fa fa-edit" title="آگهی های من" id="navsearchicon"></i></a>
            </div>
            <div class="logoclass"><a href="index.php">اسکای لاین</a></div>
            <div class="menubutton profnavicons">
                <a href="index.php?logout" title="خروج"><i class="fa fa-sign-out-alt"></i></a>
                <a href="index.php?module=editprofile&action=editprofile" title="پروفایل"><i class="fa fa-user"></i></a>
            </div>
        </div>
        <div class="firstlayercontent">

            <div class="row">
                <div class="content">
                <div class="profsidebar">
                    <div class="col3-prof"><a href="index.php?module=editcase&action=editcase">آگهی های من</a></div>
                    <div class="col3-prof"><a href="index.php?module=addcase&action=addcase">افزودن آگهی</a></div>
                    <div class="col3-prof activecol3-prof"><a href="index.php?module=editprofile&action=editprofile">ویرایش پروفایل</a></div>
                    <div class="profcontent">

                        <div class="addcaseformdiv">
                            <form action="" method="POST" id="edirprofileform">
                                <div>
                                    <span>تغییر نام کاربری </span>
                                    <input type="text" name="username"
                                        value="<?php echo template::getdata('editrow')['user_username']?>"
                                        id="editprofileuserid">
                                </div>
                                <div id="editprofileusererrid" class="addcaseerrdiv">
                                    &nbsp;
                                </div>
                                <div>
                                    <span>تغییر رمزعبور </span>
                                    <input type="password" name="password"     value=""
                                    id="editprofilepassid">
                                </div>
                                <div id="editprofilepasserrid" class="addcaseerrdiv">
                                    &nbsp;
                                </div>
                                <div>
                                    <span>تغییر شماره تلفن</span>
                                    <input type="text" name="telnumber"
                                    value="<?php echo template::getdata('editrow')['user_tel']?>" id="editprofiletelid">
                                </div>
                                <div id="editprofiletelerrid" class="addcaseerrdiv">
                                    &nbsp;<?php
                                                if (isset(template::$error['editprofile'])) {
                                                    echo template::$error['editprofile'];
                                                }
                                                ?>
                                </div>
                                <div>
                                    <input type="submit" name="editprofsub" value="ثبت" onclick="return validateeditprofile()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./template/js/script.js"></script>
</body>

</html>