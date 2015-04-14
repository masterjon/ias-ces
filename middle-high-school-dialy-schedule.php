<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'DAILY SCHEDULE',
    'time' => 'TIME',
    'activity' => 'ACTIVITY',
    'table' => array(
    	'0' => array('time' => '7: 10', 'activity' => 'Bell Rings'), 
    	'1' => array('time' => '7:13 - 7:21', 'activity' => 'Home Room'), 
    	'2' => array('time' => '7:21 - 8:06', 'activity' => 'First Period'), 
    	'3' => array('time' => '8:09 - 8:54', 'activity' => 'Second Period'), 
    	'4' => array('time' => '8:57 - 9:42', 'activity' => 'Third Period'), 
    	'6' => array('time' => '9:42 - 10:00', 'activity' => 'Recess'), 
    	'7' => array('time' => '10:03 - 10:48', 'activity' => 'Fourth Period'), 
    	'8' => array('time' => '10:51 - 11:36', 'activity' => 'Fifth Period'), 
    	'9' => array('time' => '11:36 - 12:07', 'activity' => 'Lunch'), 
    	'10' => array('time' => '12:10 - 12:55', 'activity' => 'Sixth Period'), 
    	'11' => array('time' => '12:58 - 1:43', 'activity' => 'Seventh Period'), 
    	'12' => array('time' => '1:46 - 2:31', 'activity' => 'Eighth Period'), 
    	'13' => array('time' => '3:00 - 4:30', 'activity' => 'Extra Curricular Activities'), 
    ),
);
echo $twig->render('middle-high-school-dialy-schedule.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>