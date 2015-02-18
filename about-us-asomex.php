<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-about-us.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'ASOMEX',
    'content' => '<p>The International American School of Cancún is a member of the Association of American Schools of Mexico

(ASOMEX). ASOMEX schools vary greatly in size, from 42 to over 3,000 students from Mexico, U.S., Canada and 

other countries. ASOMEX member schools are US accredited schools, committed to offering an American type 

educational program, while also meeting the requirements of the Secretariat of Education. The purpose of this 

organization is to share ideas, programs, and experiences of its member schools. Throughout the year students are 

offered opportunities to travel and participate in athletic tournaments, workshops, Model UN simulations, and arts 

and music festivals at other American schools in Mexico.</p>'
     );
echo $twig->render('about-us-asomex.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>