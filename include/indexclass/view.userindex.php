<?php
defined('staticvar') or die('ACCESS DENIED');
$dbobj=new database();
while ($row = $dbobj->fetcharray(template::getdata('sellindexcases'))) {
    echo '
    <div class="gallerypic" onclick="opendetails()">
    <img src="./template/images/one.jpg" alt="">
      <div class="gallerypicinfo">
        <span class="caseinfospan">
            <span class="mahdoode">محدوده ' . $row['sellcase_area'] . '</span>
        </span>
        <a href="index.php?module=caseclass&type=sell&case='.$row['sellcase_id'].'">جزییات </a>
      </div>
    </div>
    ';
}
while ($row = $dbobj->fetcharray(template::getdata('rentindexcases'))) {
    echo '
    <div class="gallerypic" onclick="opendetails()">
    <img src="./template/images/one.jpg" alt="">
      <div class="gallerypicinfo">
        <span class="caseinfospan">
            <span class="mahdoode">محدوده ' . $row['rentcase_area'] . '</span>
        </span>
        <a href="index.php?module=caseclass&type=rent&case='.$row['rentcase_id'].'">جزییات </a>
      </div>
    </div>
    ';
}
?>