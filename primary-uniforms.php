<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';

$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Uniforms',
    'content' => '',

);
echo $twig->render('primary-uniforms.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>