<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Health',
    'content' => '',
    'doctors' =>  array(
        '0' =>  array('name' =>  'Dr. Fabiola Velasco', 'img' => 'static/img/health/dr-fabiola-ias-ces.jpg','description'=>'The purpose of medical attention in school is to cover emergencies and illnesses that result during the day. In kinder and primary we will advise parents of the need for further attention as the doctor does not prescribe  nor administer medication. The doctor is not responsible for administering medication from home. For middle and high school where most common  ailments are colds headaches and stomach ache, the doctor has medicine 
available. If there is an accident the procedure follows the same as kinder and primary.' ), 
        '1' =>  array('name' =>  'Lorena Mostkoff', 'profession' => 'Psychologist','grade' => 'Kinder /  Primary','img' => 'static/img/health/psicologist-lorena-mostkoff-ces.jpg', 'description'=>'Psychologist for kindergarten and primary
The department of psychology is in charge of prevention and intervention techniques  in situations related to human behaviour. Progress is achieved through an interdisciplinary approach between teachers, coordinators, parents and external therapists.
We provide a variety of programs and prevention strategies such as:<br>
<br>
1.- Values program K - 6th<br>
2.- Educational orientation program (Kinder)<br>
3.- Positive discipline program<br>
4.- Red Ribbon Week <br>
<br>
 These programs are intended to offer guidance, information and to assist the child by developing conflict resolution skills which can be applied in everyday situations. 
The therapists observes, documents and informs how each child is developing social, academic and emotional skills throughout his academic development. Our department has a conflict resolution model that is applied at all levels starting preschool. This model provides guidelines for the students to look for solutions and empower them in daily situations. ' ),
        '2' =>  array('name' =>  'Gabriela Gálvez', 'profession' => 'Psychologist', 'grade' => 'Middle / High School','img' => 'static/img/health/psicologist-lorena-mostkoff-ias.jpg','description'=>'All activities from the department of psychology are directed toward one goal, which is to have students take advantage of all the tools the school provides while feeling motivated and content.
The department has several programs for academic, personal and career guidance.Within the Academic program there are lessons on thought processes, standardized testing analysis and studying techniques. For the personal guidance program, lessons on values, problem solving, managing emotions, addiction prevention, classes to prepare students for age related situations, and decision making, are seen. The career guidance program includes life planning and the application of vocational guidance diagnostic. The department of psychology also acts as a mediator in solving problems between parents, students and staff,    
                                                                   support in a crisis situation and counseling.'),
    )
);
echo $twig->render('students-life-health.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>