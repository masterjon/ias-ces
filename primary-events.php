<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-primary.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Schools',
  'subtitle' => 'Upcomming Events',
  'events'=>array(
  		'Camp' =>array('titulo'=>'Camp','des'=>'<p>Camping is very important to the primary program. Groups
										have a 24 hour camping outing. It is an unforgettable
										experience.</p>', 'image'=>'http://placehold.it/770x300&text=Campamento', 'thumbnail'=>'http://placehold.it/252x160&text=Campamente', 'thumbnailh'=>'static/img/events-primary/mexican-independence-ces-hover.jpg' ),
  		'Independence' =>array('titulo'=>'Mexican Independence Day','des'=>'<p>This celebration is held during the school day over a long lunch hour.  Honor society students organize different activities for all students, and teachers are encouraged to participate as well. Some of the activities that have been held in the past:</p> <ul class="margin-15"><li type=square>Chile eating contest</li><li type=square>Donut eating contest</li><li type=square>Musical chairs</li><li type=square>Relay races with typical Mexican clothing</li></ul><p>Mexican food, such as tacos, tortas, esquites, is sold during the event.</p>', 'image'=>'static/img/events-primary/mexican-independence-gallery.jpg', 'thumbnail'=>'static/img/events-primary/mexican-independence-ces.jpg', 'thumbnailh'=>'static/img/events-primary/mexican-independence-ces-hover.jpg'),
  		'Book' =>array('titulo'=>'Book Week','des'=>'<p>Through a series of fun activities, this week celebrates our joy of
												reading. We also recognize the importance of giving credit to other
												people&#39;s creative</p>', 'image'=>'static/img/events-primary/book-week-gallery.jpg', 'thumbnail'=>'static/img/events-primary/book-week-ces.jpg', 'thumbnailh'=>'static/img/events-primary/book-week-ces-hover.jpg'),
  		'Mother' =>array('titulo'=>'Mother&#39;s Day','des'=>'<p>Day Mother ́s are celebrated in an innovative way. Every
															  different.</p>', 'image'=>'static/img/events-primary/mothers-day-gallery.jpg', 'thumbnail'=>'static/img/events-primary/mothers-day-ces.jpg', 'thumbnailh'=>'static/img/events-primary/mothers-day-ces-hover.jpg'),
  		'Dead' =>array('titulo'=>'Day of the Dead','des'=>'<p>It is very important to keep our traditions. The Day of the
															Dead is a Mexican festival and we celebrate it with tombs,
															rhymes, typical bread, altars, etc.</p>', 'image'=>'static/img/events-primary/day-dead-gallery.jpg', 'thumbnail'=>'static/img/events-primary/day-dead-ces.jpg', 'thumbnailh'=>'static/img/events-primary/day-dead-ces-hover.jpg'),
  		'Children' =>array('titulo'=>'Children&#39;s','des'=>'<p>Day In past years we have celebrated this day by having a water day,
															  trip to the cinema, the zoo and water park to name just a few.</p>', 'image'=>'static/img/events-primary/childres-day-gallery.jpg', 'thumbnail'=>'static/img/events-primary/childrens-day-ces.jpg', 'thumbnailh'=>'static/img/events-primary/childrens-day-ces-hover.jpg'),
  		'Father' =>array('titulo'=>'Father&#39;s','des'=>'<p>Day This culminates through a soccer tournament and a marathon
														  school for fathers only.</p>', 'image'=>'static/img/events-primary/fathers-day-gallery.jpg', 'thumbnail'=>'static/img/events-primary/fathers-day-ces.jpg', 'thumbnailh'=>'static/img/events-primary/fathers-day-ces-hover.jpg'),
  		'Graduation' =>array('titulo'=>'Graduation Ceremony and Trip','des'=>'<p>Each beginning has an end, it is very important to appreciate the success that our students have and the
																			  graduation is the culmination of their primary. This is a formal ceremony where we record their memories of their
																			  time in school. It is important that parents participate
																			  making this ceremony a special one.</p>
																			  <p>Different locations have been chosen to bring to an end the
																			  elementary stage.</p>', 'image'=>'http://placehold.it/770x300&text=Graduation', 'thumbnail'=>'http://placehold.it/252x160&text=Graduation', 'thumbnailh'=>'static/img/events-primary/book-week-ces-hover.jpg'),
  		'Halloween' =>array('titulo'=>'Halloween','des'=>'<p>Our school is bilingual and unites both American and
															Mexican traditions. The PTA organizes a themed event
															which includes kindergarten through 12th grade. It is a
															family event and everyone is invited.</p>', 'image'=>'static/img/events-primary/halloween-gallery.jpg', 'thumbnail'=>'static/img/events-primary/halloween-ces.jpg', 'thumbnailh'=>'static/img/events-primary/halloween-ces-hover.jpg'),
  		'Olympics' =>array('titulo'=>'Mini Olympics','des'=>'<p>It is our priority to stimulate our students in an active
															environment. Every year we celebrate a different country
															or sporting event. During several weeks the children work
															towards this event that entails many activities: wheel race,
															relay, obstacle course, penalty kick etc. Parents enjoy
															participating as well.</p>', 'image'=>'static/img/events-primary/mini-olympics-gallery.jpg', 'thumbnail'=>'static/img/events-primary/mini-olympics-ces.jpg', 'thumbnailh'=>'static/img/events-primary/mini-olympics-ces-hover.jpg'),
  		'Christmas' =>array('titulo'=>'Christmas Pageant','des'=>'<p>No esta en primaria</p>', 'image'=>'http://placehold.it/770x300&text=Christmas', 'thumbnail'=>'http://placehold.it/252x160&text=Christmas', 'thumbnailh'=>'static/img/events-primary/mini-olympics-ces-hover.jpg'     ),
  		'Recital' =>array('titulo'=>'Poetry Recital','des'=>'<p>Using the ability of memory, students present literature written by
															 Hispanic poets.</p>', 'image'=>'static/img/events-primary/poetry-recytal-gallery.jpg', 'thumbnail'=>'static/img/events-primary/poetry-recytal-ces.jpg', 'thumbnailh'=>'static/img/events-primary/poetry-recytal-ces-hover.jpg'),
  		'Show' =>array('titulo'=>'Talent Show Missing','des'=>'<p>Our children show their best aptitudes and talents to the
																whole school in dance, song, gymnastics, magic, etc. This
																is not a competition.</p>', 'image'=>'static/img/events-primary/talent-show-gallery.jpg', 'thumbnail'=>'static/img/events-primary/talent-show-ces.jpg', 'thumbnailh'=>'static/img/events-primary/talent-show-ces-hover.jpg'),
  		'Thanks' =>array('titulo'=>'Thanksgiving','des'=>'<p>Nop hay descripcion</p>', 'image'=>'http://placehold.it/770x300&text=Thanksgiving', 'thumbnail'=>'http://placehold.it/252x160&text=Thanksgiving', 'thumbnailh'=>'static/img/events-primary/book-week-ces-hover.jpg'),
  		'Trip' =>array('titulo'=>'Field Trips', 'des'=>'<p>To complement the curriculum, trips are organized during the year
													to archaeological sites, museums, municipal services e.g. fire
													station, zoos and restaurants.</p>', 'image'=>'static/img/events-primary/field-trip-gallery.jpg', 'thumbnail'=>'static/img/events-primary/field-trips-ces.jpg', 'thumbnailh'=>'static/img/events-primary/field-trips-ces-hover.jpg'),
  		//'Pagenat' =>array('titulo'=>'Holiday Pageant','des'=>'<p>This is when we recognize and celebrate the different holiday
																//traditions around the world through song and dance.</p>', 'image'=>'http://placehold.it/770x300&text=Pageant', 'thumbnail'=>'http://placehold.it/252x160&text=Pagenat', 'thumbnailh'=>'static/img/events-primary/book-week-ces-hover.jpg'),
  		'Ribbon' =>array('titulo'=>'Red Ribbon Week add video','des'=>'<p>Established originally in the USA, this movement emphasizes good
																decision making and respect. Every day throughout the week
																children participate in thought provoking activities.</p>', 'image'=>'static/img/events-primary/red-ribbon-week-gallery.jpg', 'thumbnail'=>'static/img/events-primary/red-ribbon-week-ces.jpg', 'thumbnailh'=>'static/img/events-primary/red-ribbon-week-ces-hover.jpg'),
  		'Food' =>array('titulo'=>'World Food Day','des'=>'<p>It is important for students to value their nutrition and how others
													may not have the same advantages. Students analyze their eating
													habits and for one day, put themselves in the shoes of those less
													fortunate eating rice and beans.</p>', 'image'=>'static/img/events-primary/world-food-day-gallery.jpg', 'thumbnail'=>'static/img/events-primary/world-food-day-ces.jpg', 'thumbnailh'=>'static/img/events-primary/world-food-day-ces-hover.jpg'),
  		'Easter' =>array('titulo'=>'Easter','des'=>'<p>A spring festival including egg hunt, face painting, bingo, hat
															contest and students are allowed to bring their bicycles.</p>', 'image'=>'static/img/events-primary/easter-gallery.jpg', 'thumbnail'=>'static/img/events-primary/easter-ces.jpg', 'thumbnailh'=>'static/img/events-primary/easter-ces-hover.jpg'),
  		'Fair' =>array('titulo'=>'Science Fair','des'=>'<p>Event which seeks to stimulate participation
														through the vehicle of scientific investigation.</p>', 'image'=>'static/img/events-primary/science-fair-gallery.jpg', 'thumbnail'=>'static/img/events-primary/science-fair-ces.jpg', 'thumbnailh'=>'static/img/events-primary/science-fair-ces-hover.jpg'),
  		'Flag' =>array('titulo'=>'Flag Ceremonies','des'=>'<p>Every Monday students learn the state and
													national anthems as part of their civic education.</p>', 'image'=>'static/img/events-primary/flag-ceremony-gallery.jpg', 'thumbnail'=>'static/img/events-primary/flag-ceremony-ces.jpg', 'thumbnailh'=>'static/img/events-primary/flag-ceremony-ces-hover.jpg'),
  		'Speling' =>array('titulo'=>'Flag Ceremonies','des'=>'<p>A school­wide competition where students measure their abilities.</p>',  'image'=>'static/img/events-primary/spelling-bee-gallery.jpg', 'thumbnail'=>'static/img/events-primary/spelling-bee-ces.jpg', 'thumbnailh'=>'static/img/events-primary/spelling-bee-ces-hover.jpg'),
  		'Mathletics' =>array('titulo'=>'Mathletics Week','des'=>'<p>A math competition where students compete against children from other parts of the world.</p>',  'image'=>'http://placehold.it/770x300&text=Mathletics', 'thumbnail'=>'http://placehold.it/252x160&text=Mathletics Week', 'thumbnailh'=>'static/img/events-primary/spelling-bee-ces-hover.jpg'),
  		'Code' =>array('titulo'=>'Hour of Code','des'=>'<p>A week where students are introduced to computer programming through a series of online games.</p>',  'image'=>'http://placehold.it/770x300&text=Hour of Code', 'thumbnail'=>'http://placehold.it/252x160&text=Hour of Code', 'thumbnailh'=>'static/img/events-primary/spelling-bee-ces-hover.jpg'),
      'Values' =>array('titulo'=>'Values Program','des'=>'<p>Annual program based on the basic human values and how we may use them in our community.</p>',  'image'=>'http://placehold.it/770x300&text=Values Program', 'thumbnail'=>'http://placehold.it/252x160&text=Values Program', 'thumbnailh'=>'static/img/events-primary/spelling-bee-ces-hover.jpg'),
  		'hats' =>array('titulo'=>'Easter Hats Content','des'=>'<p></p>',  'image'=>'static/img/events-primary/primary-events-gallery-hats.jpg', 'thumbnail'=>'static/img/events-primary/primary-events-hats.jpg', 'thumbnailh'=>'static/img/events-primary/primary-events-hats-hover.jpg'),

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
echo $twig->render('primary-events.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>