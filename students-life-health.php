<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Health',
    'content' => '',
    'doctors' =>  array(
        '0' =>  array('name' =>  'Dr. Fabiola Velasco', 'img' => 'static/img/health/dr-fabiola-ias-ces.jpg' ), 
        '1' =>  array('name' =>  'Lorena Mostkoff', 'profession' => 'Psychologist','grade' => 'Kinder /  Primary','img' => 'static/img/health/psicologist-lorena-mostkoff-ces.jpg' ),
        '2' =>  array('name' =>  'Gabriela', 'profession' => 'Psychologist', 'grade' => 'Middle / High School','img' => 'static/img/health/psicologist-lorena-mostkoff-ias.jpg'),
    )
);
echo $twig->render('students-life-health.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>