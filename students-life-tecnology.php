<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Tecnology',
    'content' => '<p>In IAS we recognize that technology and internet are part of our everyday life, and so it is essential to teach

students how to use them correctly and responsibly. Our mission is based on a school wide commitment of 

continual growth and the wise application of technology as well as modeling responsible digital citizenship for 

our community.</p><p>Kindergarten focuses on learning and recognizing parts of a computer and their functions, as well as, the 

development of motor skills with the use of the mouse and the connection between the screen and mouse.</p><p>In Primary students will collaborate to integrate technology tools and skills to enhance learning for 21st 

century skills preparation. The school has a computer lab and ipads which are used in the classroom to aid 

in their learning experience.</p><p>Middle school centers around Microsoft office applications</p><p>In High school students develop design skills using Adobe tools and programming.</p>
<p>Both Middle and High school students have access to ipads in the classroom, a computer lab equipped with 

MAC desktops and a library with MAC desktops as well. Internet service is provided for students who bring 

their laptops or tablets.</p>' 
);

echo $twig->render('students-life-tecnology.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>