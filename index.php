<?php
session_start();
define('staticvar', '1');

require('./include/config/config.php');
require('./include/authentication/auth.php');

if (!auth::islogin()) {
    if (isset($_GET['authstatus'])) {
        auth::controller();
    } else {
        // in if baraye namayeshe case ha dar safheye anyindex ast
        if (isset($_GET['module']) && $_GET['module'] == 'caseclass') {
            require_once('./include/case/caseclass.php');
            $caseobj = new caseclass();
            $caseobj->controller();
        } else {
            require_once('./include/indexclass/anyindexclass.php');
            $anyindexobj = new anyindexclass();
            $anyindexobj->controller();
            template::showtemplate('anyindex');
        }
    }
}
if (auth::islogin()) {
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:index.php');
    }
    // router
    if (isset($_GET['module'])) {
        switch ($_GET['module']) {
            case 'addcase':
                require_once('./include/addcase/addcaseclass.php');
                $addcaseobj = new addcase();
                $addcaseobj->controller();
                break;
            case 'editprofile':
                require_once('./include/editprofile/editprofileclass.php');
                $editprofileobj = new editprofile();
                $editprofileobj->controller();
                break;
            case 'editcase':
                require_once('./include/editcase/editcaseclass.php');
                $editcaseobj = new editcase();
                $editcaseobj->controller();
                break;
            case 'caseclass':
                require_once('./include/case/caseclass.php');
                $caseobj = new caseclass();
                $caseobj->controller();
                break;
        }
    } else {
        // in controller case haye safheye userindex ra neshan midahad
        require_once('./include/indexclass/userindexclass.php');
        $userindexobj = new userindexclass();
        $userindexobj->controller();
        // baraye in az else estefade kardim ke vaghti too har case router yek ghaleb row baz kardim akhare kar dobare baz yek template neshoon dade nashe
        template::showtemplate('userindex');
    }
}
