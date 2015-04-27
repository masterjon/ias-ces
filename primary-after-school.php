<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'AFTER SCHOOL',
    'content' => 'Students may enroll in extra curricular activities 2:00 pm to 3:00 pm. The options are:',
    'col1' => 'Monday and Wednesday',
    'col2' => 'Tuesday and Thursday',
    'table' => array(
    	'0' => array('col1' => 'Chess', 'col2' => 'Robotics'), 
    	'1' => array('col1' => 'Soccer', 'col2' => 'Yoga'), 
    	'2' => array('col1' => 'Basketball', 'col2' => 'Tenis'), 
    	'3' => array('col1' => 'Band practice', 'col2' => 'Library (students may work on their hw)'), 
    	'4' => array('col1' => 'Tenis', 'col2' => ''), 
    	'5' => array('col1' => 'Modern dance', 'col2' => ''), 
    	'6' => array('col1' => 'Library (students may work on their hw)', 'col2' => ''), 
    ),
);
echo $twig->render('primary-after-school.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>