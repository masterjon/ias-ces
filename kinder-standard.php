<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Standard',
    'sub_title' => 'Standards 2014-2016',
    'download' => 'Download',
    'content' => '',
    'k1' => 'static/pdf/standards_k1.pdf',
    'k2' => 'static/pdf/standards_k2.pdf',
    'k3' =>'static/pdf/standards_k3.pdf'
); 
echo $twig->render('kinder-standard.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>