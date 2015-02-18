<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';


$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Schools',
  'subtitle' => 'Upcomming Events',
  'event'=>array(
  		'Camp' =>array('titulo'=>'Camp','des'=>'<p>An afternoon activity introducing students to tents and outdoor fun.</p>'),
  		'Independence' =>array('titulo'=>'Mexican Independence Day','des'=>'<p></p>'),
  		'Book' =>array('titulo'=>'Book','des'=>'<p>Through a series of fun activities, this week celebrates our joy of
												reading. We also recognize the importance of giving credit to other
												people&#39;s creative</p>'),
  		'Mother' =>array('titulo'=>'Mother&#39;s Day','des'=>'<p>Day Mother ́s are celebrated in an innovative way. Every
															  different.</p>'),
  		'Dead' =>array('titulo'=>'Day of the Dead','des'=>'<p>It is very important to keep our traditions. The Day of the
															Dead is a Mexican festival and we celebrate it with tombs,
															rhymes, typical bread, altars, etc.</p>'),
  		'Children' =>array('titulo'=>'Children&#39;s','des'=>'<p>Day In past years we have celebrated this day by having a water day,
															  trip to the cinema, the zoo and water park to name just a few.</p>'),
  		'Father' =>array('titulo'=>'Father&#39;s','des'=>'<p>Day This culminates through a soccer tournament and a marathon
														  school for fathers only.</p>'),
  		'Graduation' =>array('titulo'=>'Graduation Ceremony and Trip','des'=>'<p>Each beginning has an end, it is very important to appreciate the success that our students have and the
																			  graduation is the culmination of their primary. This is a formal ceremony where we record their memories of their
																			  time in school. It is important that parents participate
																			  making this ceremony a special one.</p>
																			  <p>Different locations have been chosen to bring to an end the
																			  elementary stage.</p>'),
  		'Halloween' =>array('titulo'=>'Halloween','des'=>'<p>Our school is bilingual and unites both American and
															Mexican traditions. The PTA organizes a themed event
															which includes kindergarten through 12th grade. It is a
															family event and everyone is invited.</p>'),
  		'Olympics' =>array('titulo'=>'Mini Olympics','des'=>'<p>It is our priority to stimulate our students in an active
															environment. Every year we celebrate a different country
															or sporting event. During several weeks the children work
															towards this event that entails many activities: wheel race,
															relay, obstacle course, penalty kick etc. Parents enjoy
															participating as well.</p>'),
  		'Christmas' =>array('titulo'=>'Christmas Pageant','des'=>'<p>No esta en primaria</p>'),
  		'OpenHouse' =>array('titulo'=>'OpenHouse','des'=>'<p>no hay descripcion</p>'),
  		'Pascua' =>array('titulo'=>'OpenHouse','des'=>'<p>no hay descripcion</p>'),
  		'Recital' =>array('titulo'=>'Poetry Recital','des'=>'<p>Using the ability of memory, students present literature written by
															 Hispanic poets.</p>'),
  		'Show' =>array('titulo'=>'Talent Show Missing','des'=>'<p>Our children show their best aptitudes and talents to the
																whole school in dance, song, gymnastics, magic, etc. This
																is not a competition.</p>'),
  		'Thanks' =>array('titulo'=>'Thanksgiving','des'=>'<p>Nop hay descripcion</p>')
  		),

  );

$page_es=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Escuelas',
  'subtitle' => 'Eventos',
  );

if (LANG=='ES'){
    $page=$page_es; 
}
else{
    $page=$page_en;
}

echo $twig->render('kinder-events.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>