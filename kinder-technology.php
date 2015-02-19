<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
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
	<iframe frameborder="0" noresize="noresize" src="https://www.symbaloo.com/embed/primary16?bgcolor=ffffff" name="_symFrame" width="740px" height="690px"></iframe>',

); 
echo $twig->render('kinder-technology.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>