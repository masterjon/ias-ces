<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array('' => '' );
echo $twig->render('kinder-about.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>