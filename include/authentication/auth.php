<?php
class auth
{
    public static function islogin()
    {
        if (isset($_SESSION['login'])) {
            return true;
        } else
            return false;
    }
    public static function controller()
    {
        if (isset($_GET['authstatus'])) {
            switch ($_GET['authstatus']) {
                case 'login':
                    if (isset($_POST['loginsub'])) {
                        $d = new database();
                        $result = $d->select("select * from usertable where user_username='" . $_POST['username'] . "' and user_password='" . md5($_POST['password']) . "'");
                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            $_SESSION['login'] = $row['user_id'];
                            // baraye inke bad az zadeshodane dokme submit karbar be safheye index beravad
                            header('location:index.php');
                        } else {
                            template::seterror('loginerr', 'نام کاربری یا رمز عبور اشتباه است');
                        }
                        // yek khatae nam ya password eshtebah ast
                    }
                    self::showform('login');
                    break;
                case 'signup':
                    if (isset($_POST['signupsub'])) {
                        $d = new database();
                        // validation form sign up
                        $checkusername = $d->select("select * from usertable where user_username='" . $_POST['username'] . "'");
                        $checktel = $d->select("select * from usertable where user_tel='" . $_POST['telnumber'] . "'");
                        if ($checkusername->num_rows != 0) {
                            template::seterror('signupusername', 'این نام کاربری وجود دارد');
                        } else if ($checktel->num_rows != 0) {
                            template::seterror('signuptel', 'این شماره تلفن وجود دارد');
                        } else {
                            $sql = "insert into usertable(user_username,user_password,user_tel)values('" . $_POST['username'] . "','" . md5($_POST['password']) . "','" . $_POST['telnumber'] . "')";
                            $ans = $d->insert($sql);
                            if (!$ans)
                                template::seterror('signupinsert', 'خطا در ثبت');
                            $sqlselect = "select * from usertable where user_tel='" . $_POST['telnumber'] . "'";
                            $anss = $d->select($sqlselect);
                            if ($anss->num_rows == 1) {
                                $row = $d->fetcharray($anss);
                                $_SESSION['login'] = $row['user_id'];
                                header('location:index.php');
                            }
                        }
                    }
                    self::showform('signup');
                    break;
            }
        }
    }
    public static function showform($status)
    {
        switch ($status) {
            case 'login':
                include('./include/authentication/view.login.php');
                break;
            case 'signup':
                include('./include/authentication/view.signup.php');
                break;
        }
    }
}
