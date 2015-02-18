<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page=array('' => '' );
echo $twig->render('primary-events.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>