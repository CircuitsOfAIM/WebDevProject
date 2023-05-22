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
    <title>EDIT CASE</title>
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
                        <div class="col3-prof activecol3-prof"><a href="index.php?module=editcase&action=editcase">آگهی های من</a></div>
                        <div class="col3-prof"><a href="index.php?module=addcase&action=addcase">افزودن آگهی</a></div>
                        <div class="col3-prof "><a href="index.php?module=editprofile&action=editprofile">ویرایش پروفایل</a></div>
                    </div>
                    <div class="profcontent">
                        <?php
                        $dbobj = new database();
                        while ($sellrowedit = $dbobj->fetcharray(template::getdata("selleditcases"))) {
                            echo '
                            <div class="gallerypic eidtcasegallerypic" onclick="opendetails()">
                            <div class="editcasehoverdiv">
                                <div>
                                    <a href="index.php?module=editcase&action=selldelete&case=' . $sellrowedit['sellcase_id'] . '"><i class="fa fa-trash" title="حذف آگهی"></i></a>
                                    <a href="index.php?module=caseclass&type=sell&case=' . $sellrowedit['sellcase_id'] . '"><i class="fa fa-search" title="مشاهده"></i></a>
                                </div>
                            </div>
                            <img src="./template/images/one.jpg" alt="">
                            <div class="gallerypicinfo">
                                <span class="caseinfospan">
                                    <span class="mahdoode">
                                        محدوده ' . $sellrowedit['sellcase_area'] . '
                                    </span>
                                </span>
                            </div>
                        </div>
                            ';
                        }
                        while ($rentrowedit = $dbobj->fetcharray(template::getdata('renteditcases'))) {
                            echo '
                            <div class="gallerypic eidtcasegallerypic" onclick="opendetails()">
                            <div class="editcasehoverdiv">
                                <div>
                                    <a href="index.php?module=editcase&action=rentdelete&case=' . $rentrowedit['rentcase_id'] . '"><i class="fa fa-trash" title="حذف آگهی"></i></a>
                                    <a href="index.php?module=caseclass&type=rent&case=' . $rentrowedit['rentcase_id'] . '"><i class="fa fa-search" title="مشاهده"></i></a>
                                </div>
                            </div>
                            <img src="./template/images/one.jpg" alt="">
                            <div class="gallerypicinfo">
                                <span class="caseinfospan">
                                    <span class="mahdoode">
                                        محدوده ' . $rentrowedit['rentcase_area'] . '
                                    </span>
                                </span>
                            </div>
                        </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./template/js/script.js"></script>
</body>

</html>