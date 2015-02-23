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
    			'1' => array('name' => 'Math','link' => 'static/pdf/1roMatemáticas.pdf' ),
    			'2' => array('name' => 'Standars','link' => 'static/pdf/Standards1stgrade.pdf' ),
                '3' => array('name' => 'Technology','link' => 'static/pdf/Technology1stGrade.pdf' ),
    			)
    	),
    	'1' =>  array(
    		'title' => '2nd Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/2doEsp.pdf' ),
                '1' => array('name' => 'Math','link' => 'static/pdf/2doMatematicas.pdf' ),
                '2' => array('name' => 'Standars','link' => 'static/pdf/Standards2ndgrade.pdf' ),
                '3' => array('name' => 'Technology','link' => 'static/pdf/Technology2ndGrade.pdf' ),
    			)
    	),
    	'2' =>  array(
    		'title' => '3rd Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/3roEsp.pdf' ),
                '1' => array('name' => 'Math','link' => 'static/pdf/3roMatematicas.pdf' ),
                '2' => array('name' => 'Technology','link' => 'static/pdf/Technology3rdGrade.pdf' ),
    			)
    	),
    	'3' =>  array(
    		'title' => '4th Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/4toEsp.pdf' ),
                '1' => array('name' => 'Math','link' => 'static/pdf/4toMatematicas.pdf' ),
                '2' => array('name' => 'Standars','link' => 'static/pdf/Standards4thgrade.pdf' ),
                '3' => array('name' => 'Technology','link' => 'static/pdf/Technology4thGrade.pdf' ),
    			)
    	),
    	'4' =>  array(
    		'title' => '5th Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/5toEsp.pdf' ),
                '1' => array('name' => 'Math','link' => 'static/pdf/5toMatematicas.pdf' ),
                '2' => array('name' => 'Standars','link' => 'static/pdf/Standards5thgrade.pdf' ),
                '3' => array('name' => 'Technology','link' => 'static/pdf/Technology5thGrade.pdf' ),
    			)
    	),
    	'5' =>  array(
    		'title' => '6th Grade', 
    		'items' => array(
    			'0' => array('name' => 'Spanish','link' => 'static/pdf/6toEsp.pdf' ),
                '1' => array('name' => 'Math','link' => 'static/pdf/6toMatematicas.pdf' ),
                '2' => array('name' => 'Standars','link' => 'static/pdf/Standards6thgrade.pdf' ),
                '3' => array('name' => 'Technology','link' => 'static/pdf/Technology6thGrade.pdf' ),
    			)
    	)

    )
 );
echo $twig->render('primary-curriculum.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>