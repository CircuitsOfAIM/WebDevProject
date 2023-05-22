<?php
defined('staticvar') or die('ACCESS DENIED');

class editprofile
{
    public function controller()
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'editprofile':
                $this->showformvalues();
                if(isset($_POST['editprofsub'])){
                    $this->updatedata();
                }
                    $this->showtemplate();
                    break;
            }
        }
    }
    private function showformvalues(){
        $dbobj=new database();
        $result=$dbobj->select("select * from usertable where user_id=".$_SESSION['login']);
        $row=$dbobj->fetcharray($result);
        template::setdata("editrow",$row);

    }
    private function updatedata(){
        $dbobj=new database();
        // virayesh har field ra joda joda mifrestad baraye inke betavim validation anjam dahim
        $sqlforusername="update usertable set user_username='".$_POST['username']."' where user_id=".$_SESSION['login'];
        $sqlforpass="update usertable set user_password='".md5($_POST['password'])."' where user_id=".$_SESSION['login'];
        $sqlfortel="update usertable set user_tel='".$_POST['telnumber']."'where user_id=".$_SESSION['login'];
        // validation
        $checkusername=$dbobj->select("select * from usertable where user_username='".$_POST['username']."'");
        $checktel=$dbobj->select("select * from usertable where user_tel='".$_POST['telnumber']."'");

        if($checkusername->num_rows==0)
        $ansforusername=$dbobj->insert($sqlforusername);
        if($_POST['password']!=''){
            $ansforpass=$dbobj->insert($sqlforpass);
        }
        if($checktel->num_rows==0)
        $ansfortel=$dbobj->insert($sqlfortel);
        if(isset($ansforusername)|| isset($ansforpass)|| isset($ansfortel))
            template::seterror('editprofile','ویرایش با موفقیت انجام شد');
    }
    private function showtemplate()
    {
        require('./include/editprofile/view.editprofile.php');
    }
}
