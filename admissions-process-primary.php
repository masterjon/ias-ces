<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-admissions.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'KINDER/PRIMARY PROCESS',
    'read_evaluation' => 'Read the evaluation process',
    'more_info' => 'For more information contact the school:',
    'content' => ''
);
echo $twig->render('admissions-process-primary.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>