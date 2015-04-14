<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-admissions.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'RE-ENROLLMENT',
    'application' => 'APPLICATION FORM',
    'content' => ''
    );
echo $twig->render('admissions-re-enrollement.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>