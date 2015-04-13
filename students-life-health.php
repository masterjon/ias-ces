<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Health',
    'content' => '',
    'doctors' =>  array(
        '0' =>  array('name' =>  'Dr. Fabiola Velasco', 'img' => 'static/img/health/dr-fabiola-ias-ces.jpg','description'=>'The purpose of medical attention in school is to cover emergencies and illnesses that result during the day. In kinder and primary we will advise parents of the need for further attention as the doctor does not prescribe  nor administer medication. The doctor is not responsible for administering medication from home.' ), 
        '1' =>  array('name' =>  'Lorena Mostkoff', 'profession' => 'Psychologist','grade' => 'Kinder /  Primary','img' => 'static/img/health/psicologist-lorena-mostkoff-ces.jpg', 'description'=>'Psychologist for kindergarten and primary
The department of psychology is in charge of prevention and intervention techniques  in situations related to human behaviour. Progress is achieved through an interdisciplinary approach between teachers, coordinators, parents and external therapists.' ),
        '2' =>  array('name' =>  'Gabriela Gálvez', 'profession' => 'Psychologist', 'grade' => 'Middle / High School','img' => 'static/img/health/psicologist-lorena-mostkoff-ias.jpg','description'=>'All activities from the department of psychology are directed toward one goal, which is to have students take advantage of all the tools the school provides while feeling motivated and content.
The department has several programs for academic, personal and career guidance.'),
    )
);
echo $twig->render('students-life-health.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>