<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'TEACHERS WEBSITES',
    'content' => '',
    'teachers' => array(
    	'0' => array('name' => 'Daniela Valdés','position' => 'KI and KII English','image' => 'static/img/kinder-teachers/daniela-valdes-teacher-ces.jpg', 'url'=>'' ),
    	'1' => array('name' => 'Montserrat Tabales','position' => 'Assistant','image' => 'static/img/kinder-teachers/montserrat-tabales-assistant-ces.jpg', 'url'=>'' ),
    	'2' => array('name' => 'Patricia Jiménez','position' => 'KI and KII Spanish','image' => 'static/img/kinder-teachers/patricia-jimenez-teacher-ces.jpg','url'=>'http://ceskinder1y2esp.weebly.com/' ),
    	'3' => array('name' => 'Lorena Parra','position' => 'Assistant','image' => 'static/img/kinder-teachers/lorena-parra-assistant-ces.jpg', 'url'=>'' ),
    	'4' => array('name' => 'Amy Hogg','position' => 'KIII English','image' => 'static/img/kinder-teachers/amy-hogg-teacher-ces.jpg', 'url'=>'http://ceskinder3english.weebly.com/' ),
    	'5' => array('name' => 'Jimena Ascencio','position' => 'Assistant','image' => 'static/img/kinder-teachers/jimena-ascencio-assistant-ces.jpg','url'=>'' ),
    	'6' => array('name' => 'Adriana Juárez','position' => 'KIII Spanish','image' => 'static/img/kinder-teachers/adriana-juarez-teacher-ces.jpg','url'=>'http://ceskinder3esp.weebly.com/' ),
    	'7' => array('name' => 'Lili Sosa','position' => 'Assistant','image' => 'static/img/kinder-teachers/lili-sosa-assistant-ces.jpg','url'=>'' ),
    	'8' => array('name' => 'Estefanía Aranda','position' => 'PE / Music and Movement','image' => 'static/img/kinder-teachers/estefania-aranda-teacher-ces.jpg','url'=>'' ),
    	'9' => array('name' => 'Juan Pedro Zambonini','position' => 'Music','image' => 'static/img/kinder-teachers/juan-zambonini-teacher-ces.jpg','url'=>'' ),
    	'10' => array('name' => 'Nicté Há Montes de Oca' ,'position' => 'Computer','image' => 'static/img/kinder-teachers/nicte-ha-montes-teacher-ces.jpg','url'=>'http://missnicte.weebly.com/' ),

    	)
    );
echo $twig->render('kinder-teachers-websites.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>