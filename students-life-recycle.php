<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Recycle',
    'content' => '' 
);
echo $twig->render('students-life-recycle.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>