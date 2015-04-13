<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-about-us.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Mission Statement',
    'content' => ''
);
echo $twig->render('about-us-mission-statement.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>