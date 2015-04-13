
<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Coordinators & Staff',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum animi obcaecati libero ex alias atque numquam quibusdam id facere molestiae suscipit, consectetur velit laborum officiis odit illo consequatur ullam minima.',
	'list' => array(
		'0' => array('name' => 'Viviana Martínez', 'position' => 'Reception and Admissions', 'email' => 'highschool@iasces.com'),
		'1' => array('name' => 'Francelia Vera', 'position' => 'Registrar', 'email' => 'franceliavera@iasces.comhighschool@iasces.com'),
		'2' => array('name' => 'Denise Rivero', 'position' => 'Administrative Assistant', 'email' => 'deniserivero@iasces.com'),
		'3' => array('name' => 'Mardelis Arevalo', 'position' => 'Cashier', 'email' => 'cashier@iasces.com'),
		'4' => array('name' => 'Raymundo Puc', 'position' => 'Accountant', 'email' => ''),
		'5' => array('name' => 'Flor Avila', 'position' => 'Business Administrator', 'email' => 'floravila@iasces.com'),
	)
);
echo $twig->render('middle-high-school-staff.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>