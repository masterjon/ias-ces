<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'TEACHERS WEBSITES',
    'content' => '',
    'teachers' => array(
    	'0' => array('name' => 'Daniela Valdés','position' => 'KI and KII English','image' => 'static/img/kinder-teachers/daniela-valdes-teacher-ces.jpg' ),
    	'1' => array('name' => 'Montserrat Tabales','position' => 'Assistant','image' => 'static/img/kinder-teachers/montserrat-tabales-assistant-ces.jpg' ),
    	'2' => array('name' => 'Patricia Jiménez','position' => 'KI and KII Spanish','image' => 'static/img/kinder-teachers/patricia-jimenez-teacher-ces.jpg' ),
    	'3' => array('name' => 'Lorena Parra','position' => 'Assistant','image' => 'static/img/kinder-teachers/lorena-parra-assistant-ces.jpg' ),
    	'4' => array('name' => 'Amy Hogg','position' => 'KIII English','image' => 'static/img/kinder-teachers/amy-hogg-teacher-ces.jpg' ),
    	'5' => array('name' => 'Jimena Ascencio','position' => 'Assistant','image' => 'static/img/kinder-teachers/jimena-ascencio-assistant-ces.jpg' ),
    	'6' => array('name' => 'Adriana Juárez','position' => 'KIII Spanish','image' => 'static/img/kinder-teachers/adriana-juarez-teacher-ces.jpg' ),
    	'7' => array('name' => 'Lili Sosa','position' => 'Assistant','image' => 'static/img/kinder-teachers/lili-sosa-assistant-ces.jpg' ),
    	'8' => array('name' => 'Estefanía Aranda','position' => 'PE / Music and Movement','image' => 'static/img/kinder-teachers/estefania-aranda-teacher-ces.jpg' ),
    	'9' => array('name' => 'Juan Pedro Zambonini','position' => 'Music','image' => 'static/img/kinder-teachers/juan-zambonini-teacher-ces.jpg' ),
    	'10' => array('name' => 'Nicté Há Montes de Oca' ,'position' => 'Computer','image' => 'static/img/kinder-teachers/nicte-ha-montes-teacher-ces.jpg' ),

    	)
    );
echo $twig->render('kinder-teachers-websites.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>