<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';

$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Technology',
    'content' => '
    <p>In Primary our objective is to integrate technology to enhance learning for 21st century skills preparation. 
    <br>
  This symbaloo display websites which students may use. Some of these websites are also available as an 
  app. 
  <br>
  Click on the image of the website you wish to visit. 
  </p>
  <h3>1st, 2nd and 3rd Grade</h3>
  <iframe frameborder="0" noresize="noresize" src="https://www.symbaloo.com/embed/ceswebmix?" name="_symFrame" width="1010px" height="600px"></iframe>
  <h3>4th, 5th and 6th Grade</h3>
   <iframe frameborder="0" noresize="noresize" src="https://www.symbaloo.com/embed/ces4to-5to-6to?" name="_symFrame" width="920px" height="600px"></iframe>',

);
echo $twig->render('primary-technology.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>