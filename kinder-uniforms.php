<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Uniforms',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum animi obcaecati libero ex alias atque numquam quibusdam id facere molestiae suscipit, consectetur velit laborum officiis odit illo consequatur ullam minima.',
    
); 
echo $twig->render('kinder-uniforms.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>