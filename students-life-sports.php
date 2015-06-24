<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Sports',
    'content' => ''
);
echo $twig->render('students-life-sports.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));