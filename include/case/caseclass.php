<?php
defined('staticvar') or die('ACCESS DENIED');

class caseclass
{
    public function controller()
    {
        $this->showtemplate();
    }
    private function showtemplate()
    {
        require('./include/case/view.case.php');
    }
}
