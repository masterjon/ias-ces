<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'DIALY SCHEDULE',
    'first_to_third' => "1st through 3rd Grade's Schedule",
    'fourth_to_sixth' => "4th through 6th Grade's Schedule",
    'time' => 'TIME',
    'activity' => 'ACTIVITY',
    'table1to3' => array(
    	'0' => array('time' => '7:00 to 7:50', 'activity' => 'Workshop'), 
    	'1' => array('time' => '7:50 to 9:45', 'activity' => 'Class with English or Spanish Teacher'), 
    	'2' => array('time' => '9:45 to 10:00', 'activity' => 'Lunch'), 
    	'3' => array('time' => '10:00 to 10:30', 'activity' => 'Recess'), 
    	'4' => array('time' => '10:30 to 11:15', 'activity' => 'Continue with morning teacher'), 
    	'6' => array('time' => '11:15', 'activity' => 'Switch classrooms to either English or Spanish Teacher'), 
    	'7' => array('time' => '11:15 to 2:00', 'activity' => 'Class'), 
    	'8' => array('time' => '2:00 to 3:00', 'activity' => 'Extra Curricular Activities '), 
    ),
    'table4to6' => array(
    	'0' => array('time' => '7:00 to 9:45', 'activity' => 'Class with English or Spanish Teacher'), 
    	'1' => array('time' => '9:45 to 10:00', 'activity' => 'Lunch'), 
    	'2' => array('time' => '10:00 to 10:30', 'activity' => 'Recess'), 
    	'3' => array('time' => '10:30', 'activity' => 'Switch classrooms to either English or Spanish Teacher'), 
    	'4' => array('time' => '10:30 to 1:15', 'activity' => 'Class'), 
    	'5' => array('time' => '1:15 to 2:00', 'activity' => 'Workshop'), 
    	'5' => array('time' => '2:00 to 3:00', 'activity' => 'Extra Curricular Activities'), 
    )
);
echo $twig->render('primary-dialy-schedule.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>