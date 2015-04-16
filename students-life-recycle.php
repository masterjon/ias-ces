<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Recycle',
    'content' => ' <p>IAS had made a commitment to participate in recycling by separating trash, collecting cardboard and PET as

well as, reusing newspapers and magazines for arts and crafts. We ask families to save their PET throughout

the week and bring it in every Friday morning.

In elementary, there is a committee of students who supervises the amount of paper thrown away. Each

classroom has been given a box for paper so it can be reused and students gain the habit of using recycled

paper.</p>' 
);
echo $twig->render('students-life-recycle.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>