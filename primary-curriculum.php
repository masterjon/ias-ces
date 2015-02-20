<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'CURRICULUM',
    'curriculums' => array(
    	'0' =>  array(
    		'title' => '1st Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/1esp.pdf' ),
    			'1' => array('name' => 'Spanish','link' => 'static/pdf/1esp.pdf' ),
    			'2' => array('name' => 'Spanish','link' => 'static/pdf/1esp.pdf' ),
    			'3' => array('name' => 'Spanish','link' => 'static/pdf/1esp.pdf' ),
    			)
    	),
    	'1' =>  array(
    		'title' => '2nd Grade', 
    		'items' => array(
    			'0' => '',
    			'1' => '',
    			'2' => '',
    			'3' => '',
    			)
    	),
    	'2' =>  array(
    		'title' => '3rd Grade', 
    		'items' => array(
    			'0' => '',
    			'1' => '',
    			'2' => '',
    			'3' => '',
    			)
    	),
    	'3' =>  array(
    		'title' => '4th Grade', 
    		'items' => array(
    			'0' => '',
    			'1' => '',
    			'2' => '',
    			'3' => '',
    			)
    	),
    	'4' =>  array(
    		'title' => '5th Grade', 
    		'items' => array(
    			'0' => '',
    			'1' => '',
    			'2' => '',
    			'3' => '',
    			)
    	),
    	'5' =>  array(
    		'title' => '6th Grade', 
    		'items' => array(
    			'0' => '',
    			'1' => '',
    			'2' => '',
    			'3' => '',
    			)
    	)

    )
 );
echo $twig->render('primary-curriculum.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>