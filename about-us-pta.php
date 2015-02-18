<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-about-us.php';
$page=array(
    'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Parent Association',
  'content' => '<p>The school recognizes the important role that parents play in education and seeks to form a partnership between 
home and school. Parents are invited and encouraged to participate in a variety of ways. One way for parents to get 
involved is through the Parent Association. </p><p>
The role of the Parent Association is to support the school through the organization of events and activities at 
different times of the year. There are two sections of the PA, primary/kinder and middle/high school. Representatives 
for each class and officers are elected at the Parent / Teacher Meetings held in September. Some important events 
organized by the Parents Association are the Halloween Party in October and the Posada in December.</p>',
    'pta_highschool' => array(
        '0' =>   array('name' => 'Roberta Wohler','title' => 'President' , 'mail' => 'robertawohler@gmail.com', 'grade' => 'Middle/High School','color' => 'red'), 
        '1' =>   array('name' => 'Brenda Sametz','title' => 'Vice-President' , 'mail' => 'bbsametz@yahoo.com', 'grade' => 'Middle/High School','color' => 'blue'), 
        '2' =>   array('name' => 'Tania Fernandez','title' => 'Secretary' , 'mail' => 'taniav_fernandez@yahoo.com', 'grade' => 'Middle/High School','color' => 'red'), 
        '3' =>   array('name' => 'Veronica Torres','title' => 'Treasurer' , 'mail' => 'verotorres70@hotmail.com', 'grade' => 'Middle/High School','color' => 'blue'), 
        )
  );

echo $twig->render('about-us-pta.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>