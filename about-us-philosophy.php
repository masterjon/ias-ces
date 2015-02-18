<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-about-us.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'PHILOSOPHY',
    'content' => ''
);
echo $twig->render('about-us-philosophy.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>