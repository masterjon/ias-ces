<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Cafeteria',
    'content' => '<p>IAS has a cafeteria in the middle and high school building which is run independently from the school. 

Middle and high school students have access to it on a regular basis. Primary and kindergarten students are 

required to bring their own lunch. However, the cafeteria does offer a “box lunch“ for them, which is brought 

right before lunch time. Parents must call ahead to order and pay directly at the cafeteria. </p>
<p>
Friday is the only day when the cafeteria sets up in the kindergarten and primary building. Students may 

bring money to purchase a snack or treat. 
</p>
<p>
Cafeteria Contact:

Areli González 

(998) 18.99.075</p>' 
);
echo $twig->render('students-life-coffe-shop.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>