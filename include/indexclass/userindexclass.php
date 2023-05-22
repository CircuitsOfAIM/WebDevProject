<?php
defined('staticvar') or die('ACCESS DENIED');
// vazife in class namyeseh case ha dar safheye userindex ast
class userindexclass{
    public function controller(){
        
        $this->showcase();
    }
    public function showcase(){
        $dbobj=new database();
        $sellresult=$dbobj->select('select * from sellcasetable');
        template::setdata('sellindexcases',$sellresult);
        $rentresult=$dbobj->select('select * from rentcasetable');
        template::setdata('rentindexcases',$rentresult);
        template::setview('userindexview','./include/indexclass/view.userindex.php');
    }
}