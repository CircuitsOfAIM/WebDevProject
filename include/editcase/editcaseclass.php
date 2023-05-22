<?php
defined('staticvar') or die('ACCESS DENIED');
class editcase
{
    public function controller()
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'editcase':
                $this->showeditcase();
                $this->showtemplate();
                    break;
                case 'selldelete':
                $sql='delete from sellcasetable where sellcase_id=' . $_GET['case'] . '';
                $dbobj = new database();
                $ans = $dbobj->delete($sql);
                $this->showtemplate();
                break;
                case 'rentdelete':
                $sql='delete from rentcasetable where rentcase_id=' . $_GET['case'] . '';
                $dbobj = new database();
                $ans = $dbobj->delete($sql);
                $this->showtemplate();
                break;
            }
        }
    }
    // namayeshe agahi haye man
    public function showeditcase()
    {
        $dbobj=new database();
			$sellresult=$dbobj->select('select * from sellcasetable where sellcase_userid=' . $_SESSION['login'] . '');
			template::setdata('selleditcases',$sellresult);
			$rentresult=$dbobj->select('select * from rentcasetable where rentcase_userid=' . $_SESSION['login'] . '');
			template::setdata('renteditcases',$rentresult);

    }
    private function showtemplate()
    {
        require('./include/editcase/view.editcase.php');
    }
}
