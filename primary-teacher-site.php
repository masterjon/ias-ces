<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'TEACHERS WEBSITES',
    'content' => '',
    'teachers' => array(
    '0' => array('name' => 'Stephanie Sharp','position' => 'First Grade English','image' => 'static/img/primary-teachers/stephanie-sharp-tacher-ces.jpg', 'link' => 'http://cesfirstmsstephanie.weebly.com/' ),
    '1' => array('name' => 'Lucero Diaz Fonseca','position' => 'Assistant','image' => 'static/img/primary-teachers/lucero-diaz-assistant.jpg', 'link' => '' ),
    '2' => array('name' => 'Maria Jesus Muñoz','position' => 'First Grade Spanish','image' => 'static/img/primary-teachers/maria-jesus-teacher-ces.jpg', 'link' => 'http://cesprimergradoesp.weebly.com/'  ),
    '3' => array('name' => 'Gabriela Mazariegos Arquieta','position' => 'Assistant','image' => 'static/img/primary-teachers/gabriela-mazariegos-assistant.jpg', 'link' => ''  ),
    '4' => array('name' => 'Ashley Morris','position' => 'Second Grade English','image' => 'static/img/primary-teachers/ashley-morris-teacher-ces.jpg', 'link' => 'http://cessecondashley.weebly.com/'  ),
    '5' => array('name' => 'Ana Luisa López Leyva','position' => 'Second Grade Spanish','image' => 'static/img/primary-teachers/analuisa-leyva-teacher-ces.jpg', 'link' => 'http://cessegundogradoesp.weebly.com/' ),
    '6' => array('name' => 'Ericka Van Iperen','position' => 'Third Grade English','image' => 'static/img/primary-teachers/ericka-van-teacher-ces.jpg', 'link' => 'http://cesthirdericka.weebly.com/' ),
    '7' => array('name' => 'María Concepción García','position' => 'Third Grade Spanish','image' => 'static/img/primary-teachers/maria-concepcion-teacher-ces.jpg', 'link' => 'http://blogdeconnieces.blogspot.mx/' ),
    '8' => array('name' => 'Laura Sebastian','position' => 'Fourth Grade English','image' => 'static/img/primary-teachers/laura-sebastian-teacher-ces.jpg', 'link' => 'http://cesfourthgrade.weebly.com/' ),
    '9' => array('name' => 'Juan Cetina Sánchez','position' => 'Fourth Grade Spanish','image' => 'static/img/primary-teachers/juan-cetina-teacher-ces.jpg', 'link' => 'http://cescuartogradoesp.weebly.com/' ),
    '10' => array('name' => 'Valentyna Guzychenko','position' => 'Fifth Grade English','image' => 'static/img/primary-teachers/valentyna-guzychenko-teacher-ces.jpg', 'link' => 'http://cesfifthgrade.weebly.com/' ),
    '11' => array('name' => 'Ana Luz López Leyva','position' => 'Fifth Grade Spanish','image' => 'static/img/primary-teachers/ana-luz-lopez-teacher-ces.jpg', 'link' => 'http://cesquintoluzgradoesp.weebly.com/' ),
    '12' => array('name' => 'Malena Cocom','position' => 'Sixth Grade English','image' => 'static/img/primary-teachers/malena-cocom-teacher-ces.jpg', 'link' => 'http://cessixthgrade.weebly.com/' ),
    '13' => array('name' => 'Manuel Pérez Tamayo','position' => 'Sixth Grade Spanish','image' => 'static/img/primary-teachers/manuel-perez-tacher-ces.jpg' , 'link' => 'http://cessextogradoesp.weebly.com/'),
    '14' => array('name' => 'Lorena Mostkoff','position' => 'Psychologist','image' => 'static/img/primary-teachers/lorena-kostkoff-psychologist-ces.jpg', 'link' => 'http://psychologyces.weebly.com/' ),
    '15' => array('name' => 'Juan Pedro Zambonini','position' => 'Music','image' => 'static/img/primary-teachers/juan-pedro-teacher.jpg', 'link' => '' ),
    '16' => array('name' => 'Nicté Há Montes de Oca','position' => 'Computer','image' => 'static/img/primary-teachers/nicte-montes-teacher-ces.jpg', 'link' => 'http://missnicte.weebly.com/' ),
    '17' => array('name' => 'Anna Christina Sierra','position' => 'Tech Integration Specialist','image' => 'static/img/primary-teachers/annia-mattos-tech-integration-ces.jpg', 'link' => '' ),
    '18' => array('name' => 'Alfredo Guemez Castillo','position' => 'PE','image' => 'static/img/primary-teachers/alfredo-guemez-teacher-ces.jpg', 'link' => '' ),
    


   )
);
echo $twig->render('primary-teacher-site.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>