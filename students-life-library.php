<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-students-life.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Library',
    'content' => '<p>Since its inception IAS has shown interest in promoting academic values among its students by 

providing a space that invites students to investigate, study, work and recreate in the world of 

books; because of this interest, our school has the “largest school library in Cancun” with fully 

automated and structured services like, books loans, databases, brochures, magazines, maps, 

etc. to support study plans and programs.</p>
<p>On the school grounds there are two libraries, one for kindergarten and primary and the other

for middle and high school. Both offer the service of checking books out from the library 

in order to encourage students of all ages to read at home and in school. Both libraries have 

books in English and Spanish.</p>
<p>The kindergarten and primary library follow the National Reading Program established by 

the SEP. This is done by having a library on school grounds, having a classroom library with 

books designated for each grade level, having books which complement the curriculum and 

strengthening daily reading habits.</p>
<p>The middle and high school library, one of the most visited places in the community, annually

provides over 8,500 loans and has over 12,200 visits to it’s catalog and online databases, and is 

a symbol of the school’s reading community.</p><br>
<h3>Rules</h3>
<p>Students have a limit on how many books they may check out from the library. They will not be 

allowed to get any new books, unless all books are returned. If a book is a lost, students must 

pay the book or replace it. 

Teachers and parents are welcome to check out books as well.</p><br>
<h3>DONATIONS</h3>
<p>In order to keep adding titles to our collection, donations are accepted.</p>',
'teachers' => array(
	    '0' => array('name' => 'Gisela Rangel','position' => 'Kinder/Primary Librarian','image' => 'static/img/primary-teachers/gisela-rangel-librarian-ces.jpg', 'link' => 'http://giselarangel.jimdo.com/' ),
	    '1' => array('name' => 'Laura Martinez','position' => 'Middel/Hihg School Librarian','image' => 'static/img/middle-high-teachers/MARTINEZ_CAPISTRAN.jpg', 'link' => 'http://iascancunlibrary.weebly.com/index.html' )
    )
);


echo $twig->render('students-life-library.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>