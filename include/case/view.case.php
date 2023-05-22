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
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <title>CASE</title>
</head>

<body>
    <div class="main" id="mainid">
        <div class="detaildiv" id="detaildiv">
            <div class="infodetail">
                <?php
                $link = new MySQLi('localhost', 'root', '', 'ciwprojectdb');
                $link->query("SET NAMES 'utf8'");
                // moteghayere type moshakhas mikonad agahii az kdoom table hast rent ya sell.moteghayere case shomare id agahii ra be ma midahad
                switch ($_GET['type']) {
                    case 'sell':
                        $result = $link->query("select * from sellcasetable where sellcase_id=" . $_GET['case'] . " ");
                        $row = $result->fetch_assoc();
                        echo '
                    <h3>نوع: ' . $row['sellcase_type'] . '</h3>
                    <h2>محدوده ' . $row['sellcase_area'] . '</h2>
                    <h3>متراژ: ' . $row['sellcase_meterage'] . 'متر</h3>
                    <h3>تعداد خواب: ' . $row['sellcase_roomnum'] . '</h3>
                    <h3>سال ساخت: ' . $row['sellcase_buildyear'] . '</h3>
                    <h3 class="tozihat">
                        توضیحات
                        <p>' . $row['sellcase_exp'] . '</p>
                    </h3>
                    <h2>
                        قیمت: ' . $row['sellcase_sellprice'] . ' تومان
                    </h2>
                    ';
                        $userrow = $link->query('select * from usertable where user_id=' . $row['sellcase_userid'] . '')->fetch_assoc();
                        if (isset($_SESSION['login'])) {
                            echo '<div class="requestbtn">' . $userrow['user_tel'] . ':شماره تماس
                            <br>' . $userrow['user_username'] . ':آگهی دهنده</div>';
                        } else {
                            echo '<div class="requestbtn">برای ارتباط با آگهی دهنده لازم است تا <a href="index.php?authstatus=signup">عضو</a> یا <a href="index.php?authstatus=login">وارد</a> شوید</div>';
                        }

                        break;
                    case 'rent':
                        $result = $link->query("select * from rentcasetable where rentcase_id=" . $_GET['case'] . "");
                        $row = $result->fetch_assoc();
                        echo '
                    <h3>نوع: ' . $row['rentcase_type'] . '</h3>
                    <h2>محدوده ' . $row['rentcase_area'] . '</h2>
                    <h3>متراژ: ' . $row['rentcase_meterage'] . 'متر</h3>
                    <h3>تعداد خواب: ' . $row['rentcase_roomnum'] . '</h3>
                    <h3>سال ساخت: ' . $row['rentcase_buildyear'] . '</h3>
                    <h3 class="tozihat">
                        توضیحات
                        <p>' . $row['rentcase_exp'] . '</p>
                    </h3>
                    <h2>
                        رهن: ' . $row['rentcase_rahnprice'] . ' تومان
                    </h2>
                    <h2>
                        اجاره: ' . $row['rentcase_rentprice'] . ' تومان
                    </h2>    
                    ';
                        $userrow = $link->query('select * from usertable where user_id=' . $row['rentcase_userid'] . '')->fetch_assoc();
                        if (isset($_SESSION['login'])) {
                            echo '<div class="requestbtn">' . $userrow['user_tel'] . ':شماره تماس
                        <br>' . $userrow['user_username'] . ':آگهی دهنده</div>';
                        } else {
                            echo '<div class="requestbtn">برای ارتباط با آگهی دهنده لازم است تا <a href="index.php?authstatus=signup">عضو</a> یا <a href="index.php?authstatus=login">وارد</a> شوید</div>';
                        }
                }
                ?>
            </div>
            <div class="picdetail">
                <div class="picdetailcgallery">
                    <img src="./template/images/one.jpg" alt="">
                </div>
                <div class="mapdetail" id="map"></div>
            </div>
        </div>
    </div>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <script src="./template/js/script.js">
    </script>
</body>

</html>