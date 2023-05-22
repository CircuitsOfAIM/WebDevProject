<?php
defined('staticvar') or die('ACCESS DENIED');

class addcase
{
    public function controller()
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'addcase':
                    if (isset($_POST['sellsub'])) {
                        $this->savedata('sellsub');
                    } else if (isset($_POST['rentsub'])) {
                        $this->savedata('rentsub');
                    }
                    $this->showtemplate();
                    break;
            }
        }
    }
    private function savedata($sub)
    {
        switch ($sub) {
            case 'sellsub':
                $sql = "insert into sellcasetable(sellcase_type,sellcase_area,sellcase_sellprice,sellcase_meterage,sellcase_roomnum,sellcase_buildyear,sellcase_exp,sellcase_userid)values('" . $_POST['casetype'] . "','" . $_POST['casearea'] . "','" . $_POST['sellprice'] . "','" . $_POST['meterage'] . "','" . $_POST['roomnum'] . "','" . $_POST['buildyear'] . "','" . $_POST['caseexp'] . "','" . $_SESSION['login'] . "')";
                $dbobj = new database();
                $ans = $dbobj->insert($sql);
                if ($ans)
                    template::seterror('sellinsert', 'ثبت با موفقیت انجام شد');
                else
                    template::seterror('sellinsert', 'خطا در ثبت');
                break;
            case 'rentsub':
                $sql = "insert into rentcasetable(rentcase_type,rentcase_area,rentcase_rahnprice,rentcase_rentprice,rentcase_meterage,rentcase_roomnum,rentcase_buildyear,rentcase_exp,rentcase_userid)values('" . $_POST['casetype'] . "','" . $_POST['casearea'] . "','" . $_POST['rahnprice'] . "','" . $_POST['rentprice'] . "','" . $_POST['meterage'] . "','" . $_POST['roomnum'] . "','" . $_POST['buildyear'] . "','" . $_POST['caseexp'] . "','" . $_SESSION['login'] . "')";
                $dbobj = new database();
                $ans = $dbobj->insert($sql);
                if ($ans)
                    template::seterror('rentinsert', 'ثبت با موفقیت انجام شد');
                else
                    template::seterror('rentinsert', 'خطا در ثبت');
                break;
        }
    }
    private function showtemplate()
    {
        require('./include/addcase/view.addcase.php');
    }
}
