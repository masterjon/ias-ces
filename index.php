<?php require_once "twig_instance.php";
require 'layout.php';


$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Schools',
  'subtitle' => 'Upcomming Events',
  );

$page_es=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Escuelas',
  'subtitle' => 'Eventos',
  );

if (LANG=='ES'){
    $page=$page_es; 
}
else{
    $page=$page_en;
}
echo $twig->render('home.html',array('main_menu'=>$main_menu,'footer'=>$footer,'page'=>$page));
?>