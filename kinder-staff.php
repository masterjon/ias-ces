<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Coordinators & Staff',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum animi obcaecati libero ex alias atque numquam quibusdam id facere molestiae suscipit, consectetur velit laborum officiis odit illo consequatur ullam minima.',
	'list' => array(
		'0' => array('name' => 'Arly Ramos', 'position' => 'Administrative Assistant', 'email' => 'primary@iasces.com'),
		'1' => array('name' => 'Manuel Hernández', 'position' => 'Registrar', 'email' => 'controlescolar@iasces.com'),
		'2' => array('name' => 'Mardelis Arevalo', 'position' => 'Cashier', 'email' => 'cashier@iasces.com'),
		'3' => array('name' => 'Angela Vasquez', 'position' => 'Human Resources and Scholarships', 'email' => ''),
		'4' => array('name' => 'Wilberth Ventura', 'position' => 'Accountant', 'email' => ''),
		'5' => array('name' => 'Andrea Rivero', 'position' => 'Business Administrator', 'email' => 'andreavrivero@iasces.com'),
	)
); 
echo $twig->render('kinder-staff.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>