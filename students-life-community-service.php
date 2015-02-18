<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Community Service',
    'content' => "<p>The school's community service program encourages all IAS students to connect with their

community, giving them the opportunity to learn how to be socially responsible citizens. Every 

student who attends the school is required to complete a minimum of 20 hours of community 

service per year, starting in 7th

year is recognized with a community service eagle award.

 grade. The student with the highest amount of hours in each school</p>
 <p>Students can complete their community service hours by working in a variety of places and 

activities. Some of the activities organized by the school include the following:</p>
<ul>
    <li>Turtle and Blue Crab Rescues</li>
    <li>World Food Day (Food Drive)</li>
    <li>Cleaning Beaches</li>
    <li>Dia del Niño (Toy Drive)</li>
    <li>English classes for orphans (Orphanage in Bonfil)</li>
    <li>Tutoring</li>
</ul>
<ul>
    <li><p>Organizations we help during the school year:</p> </li>
    <li>Huellas de pan</li>
    <li>La Casa de Don Manolo</li>
    <li>Fundación Aitana</li>
    <li>Flora, Fauna y Cultura de México</li>
    <li>Tierra de Animales</li>
    <li>ADPA- Refugio de animales</li>
    <li>Ciudad de la Alegría</li>
    <li>CRIT Teleton</li>
</ul>
" 
);
echo $twig->render('students-life-community-service.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>