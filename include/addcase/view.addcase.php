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
    <title>ADD CASE</title>
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
                        <div class="col3-prof activecol3-prof"><a href="index.php?module=addcase&action=addcase">افزودن آگهی</a></div>
                        <div class="col3-prof"><a href="index.php?module=editprofile&action=editprofile">ویرایش پروفایل</a></div>
                        <div class="profcontent">
                            <div class="col2-prof casesellbtn" onclick="showform(1)" id="casesellbtnid">فروش</div>
                            <div class="col2-prof" onclick="showform(2)" id="caserentbtnid">رهن و اجاره</div>
                            <div class="addcaseformdiv">
                                <form action="" method="POST" id="sellform">
                                    <div class="addcaseerrdiv">
                                        &nbsp;<?php
                                                if (isset(template::$error['sellinsert'])) {
                                                    echo template::$error['sellinsert'];
                                                }
                                                ?>
                                    </div>
                                    <span>نوع</span>
                                    <select name="casetype" id="casetypeid">
                                        <option value=""></option>
                                        <option value="آپارتمانی">آپارتمانی</option>
                                        <option value="ویلایی">ویلایی</option>
                                        <option value="زمین">زمین</option>
                                        <option value="تجاری">تجاری</option>
                                    </select>
                                    <div class="addcaseerrdiv" id="casetypeerrid">
                                        &nbsp;
                                    </div>
                                    <span>محدوده</span>
                                    <select name="casearea" id="caseareaid">
                                        <option value=""></option>
                                        <option value="احمدآباد">احمدآباد</option>
                                        <option value="راهنمایی">راهنمایی</option>
                                        <option value="فرهاد">فرهاد</option>
                                        <option value="قدس">قدس</option>
                                    </select>
                                    <div class="addcaseerrdiv" id="caseareaerrid">
                                        &nbsp;
                                    </div>
                                    <span>قیمت کل</span>
                                    <input type="text" name="sellprice" id="sellpriceid">
                                    <div class="addcaseerrdiv" id="sellpriceerrid">
                                        &nbsp;
                                    </div>
                                    <span>متراژ</span>
                                    <input type="text" name="meterage" id="meterageid">
                                    <div class="addcaseerrdiv" id="meterageerrid">
                                        &nbsp;
                                    </div>
                                    <span>تعداد خواب</span>
                                    <input type="number" name="roomnum" id="roomnumid">
                                    <div class="addcaseerrdiv" id="roomnumerrid">
                                        &nbsp;
                                    </div>
                                    <span>سال ساخت</span>
                                    <input type="number" name="buildyear" id="buildyearid">
                                    <div class="addcaseerrdiv" id="buildyearerrid">
                                        &nbsp;
                                    </div>
                                    <span>توضیحات</span>
                                    <textarea name="caseexp" cols="30" rows="10" id="caseexpid"></textarea>
                                    <div class="addcaseerrdiv" id="caseexperrid">
                                        &nbsp;
                                    </div>
                                    <input type="submit" name="sellsub" value="ثبت" onclick="return validateselladdcase()">

                                </form>

                                <form action="" id="rentform" style="display:none;" method="POST">
                                    <div class="addcaseerrdiv">
                                        &nbsp;<?php
                                                if (isset(template::$error['rentinsert'])) {
                                                    echo template::$error['rentinsert'];
                                                }
                                                ?>
                                    </div>
                                    <span>نوع</span>
                                    <select name="casetype" id="rentcasetypeid">
                                        <option value=""></option>
                                        <option value="آپارتمانی">آپارتمانی</option>
                                        <option value="ویلایی">ویلایی</option>
                                        <option value="زمین">زمین</option>
                                        <option value="تجاری">تجاری</option>
                                    </select>
                                    <div class="addcaseerrdiv" id="rentcasetypeerrid">
                                        &nbsp;
                                    </div>
                                    <span>محدوده</span>
                                    <select name="casearea" id="rentcaseareaid">
                                        <option value=""></option>
                                        <option value="احمدآباد">احمدآباد</option>
                                        <option value="راهنمایی">راهنمایی</option>
                                        <option value="فرهاد">فرهاد</option>
                                        <option value="قدس">قدس</option>
                                    </select>
                                    <div class="addcaseerrdiv" id="rentcaseareaerrid">
                                        &nbsp;
                                    </div>
                                    <span>رهن</span>
                                    <input type="text" name="rahnprice" id="rentrahnpriceid">
                                    <div class="addcaseerrdiv" id="rentrahnpriceerrid">
                                        &nbsp;
                                    </div>
                                    <span>اجاره</span>
                                    <input type="text" name="rentprice" id="rentpriceid">
                                    <div class="addcaseerrdiv" id="rentpriceerrid">
                                        &nbsp;
                                    </div>
                                    <span>متراژ</span>
                                    <input type="text" name="meterage" id="rentmeterageid">
                                    <div class="addcaseerrdiv" id="rentmeterageerrid">
                                        &nbsp;
                                    </div>
                                    <span>تعداد خواب</span>
                                    <input type="number" name="roomnum" id="rentroomnumid">
                                    <div class="addcaseerrdiv" id="rentroomnumerrid">
                                        &nbsp;
                                    </div>
                                    <span>سال ساخت</span>
                                    <input type="number" name="buildyear" id="rentbuildyearid">
                                    <div class="addcaseerrdiv" id="rentbuildyearerrid">
                                        &nbsp;
                                    </div>
                                    <span>توضیحات</span>
                                    <textarea name="caseexp" cols="30" rows="10" id="rentcaseexpid"></textarea>
                                    <div class="addcaseerrdiv" id="rentcaseexperrid">
                                        &nbsp;
                                    </div>
                                    <input type="submit" name="rentsub" value="ثبت" onclick="return validaterentaddcase()">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./template/js/script.js" type='text/javascript'>
    </script>
</body>

</html>