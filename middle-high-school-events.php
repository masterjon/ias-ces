
<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Schools',
  'subtitle' => 'Upcomming Events',
  'events'=>array(
  		'Grade' =>array('titulo'=>'7th Grade Lock­in','des'=>'<p>The goal of this sleepover is to welcome and bring together new­coming 7th graders by easing their transition into middle school.</p>', 'image'=>'http://placehold.it/770x300&text=Grade', 'thumbnail'=>'http://placehold.it/252x160&text=Grade', 'thumbnailh'=>'http://placehold.it/252x160&text=Gradehover' ),
  		'Independence' =>array('titulo'=>'Independence Day','des'=>'<p>Throughout the evening, students and faculty celebrate Mexican Independence Day with a historical timeline put together by students and faculty./p>', 'image'=>'static/img/high-middle-events/independence-day-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/independence-day-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/independence-day-ias-hover.jpg' ),
  		'Trip' =>array('titulo'=>'Field Trips','des'=>'<p>Our school field trips focus on Mexican culture by immersing students in fun activities and outings.</p>', 'image'=>'static/img/high-middle-events/field-trips-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/field-trips-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/field-trips-ias-hover.jpg' ),
  		'Renaissance' =>array('titulo'=>'Renaissance Fair','des'=>'<p>This evening is filled with lively performances and stands that bring the Renaissance period to life. Family is welcome and encouraged to attend!.</p>', 'image'=>'http://placehold.it/770x300&text=Renaissance', 'thumbnail'=>'http://placehold.it/252x160&text=Renaissance', 'thumbnailh'=>'http://placehold.it/252x160&text=Renaissancehover' ),
  		'Halloween' =>array('titulo'=>'Halloween','des'=>'<p>IAS is a high school that unites both American and Mexican traditions. The PTA organizes a themed event which includes kindergarten through 12th grade. Family is welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/halloween-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/halloween-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/halloween-ias-hover.jpg' ),
  		'OND' =>array('titulo'=>'United Nations Day','des'=>'<p>IAS focuses on the important sociopolitical issues that happen around the world. Each year, we dedicate this day to one we have supported, the Red Hand Campaign, to end the use of child soldier.</p>', 'image'=>'http://placehold.it/770x300&text=UND', 'thumbnail'=>'http://placehold.it/252x160&text=UND', 'thumbnailh'=>'http://placehold.it/252x160&text=UNDhover' ),
  		'Red' =>array('titulo'=>'Red Ribbon Week','des'=>'<p>This transnational movement emphasizes on good decision making and saying no to drugs. Students participate in thought provoking activities throughout the week.</p>', 'image'=>'http://placehold.it/770x300&text=Red', 'thumbnail'=>'http://placehold.it/252x160&text=Red', 'thumbnailh'=>'http://placehold.it/252x160&text=Redhover' ),
  		'Cancun' =>array('titulo'=>'Cancun MUN','des'=>'<p>A worldwide simulation, Cancun MUN is a 3­4 day model of the United Nations and the current issues it faces with. Students immerse themselves in discussion, debate, and dialogue of these in search of an answer. Our goal is to create global citizens. Family is welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/cancun-mun-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/cancun-mun-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/cancun-mun-ias-hover.jpg' ),
  		'Thks' =>array('titulo'=>'Thanksgiving Day','des'=>'<p>An American tradition that brings families and friends together, the students and parents bring potluck style food to gather around and be merry! ​Family is encouraged to attend and welcome! Students compete in a Turkey Trot, in the hopes of winning a turkey.</p>', 'image'=>'http://placehold.it/770x300&text=Thks', 'thumbnail'=>'http://placehold.it/252x160&text=Thks', 'thumbnailh'=>'http://placehold.it/252x160&text=Thkshover' ),
  		'December' =>array('titulo'=>'December Festival','des'=>'<p>Students will act and/or sing a chosen number of performances from different holidays from around the world. Family is welcome and encouraged to attend!</p>', 'image'=>'http://placehold.it/770x300&text=December', 'thumbnail'=>'http://placehold.it/252x160&text=December', 'thumbnailh'=>'http://placehold.it/252x160&text=Decemberhover' ),
  		'Idol' =>array('titulo'=>'IAS Idol','des'=>'<p>Students sing and compete to become the next IAS Idol. Family is welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/ias-idol-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/ias-idol-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/ias-idol-ias-hover.jpg' ),
  		'Fair' =>array('titulo'=>'Science Fair','des'=>'<p>Students showcase their projects for other students and faculty. This event is organized to stimulate critical thinking and investigation.</p>', 'image'=>'static/img/high-middle-events/science-fair-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/science-fair-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/science-fair-ias-hover.jpg' ),
  		'Drama' =>array('titulo'=>'Drama Fest','des'=>'<p>Students perform a selected drama piece in front of other students, faculty and family. Family is welcome and encouraged to attend!</p>', 'image'=>'http://placehold.it/770x300&text=Drama', 'thumbnail'=>'http://placehold.it/252x160&text=Drama', 'thumbnailh'=>'http://placehold.it/252x160&text=Dramahover' ),
  		'Poetry' =>array('titulo'=>'Poetry Coffee House','des'=>'<p>Students read a selected poetry piece in front of other students and faculty.</p>', 'image'=>'http://placehold.it/770x300&text=Poetry', 'thumbnail'=>'http://placehold.it/252x160&text=Poetry', 'thumbnailh'=>'http://placehold.it/252x160&text=Poetryhover' ),
  		'Cup' =>array('titulo'=>'World Cup','des'=>'<p>Students play soccer on different countries’ teams to become the IAS World Cup Champions.</p>', 'image'=>'static/img/high-middle-events/world-cup-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/world-cup-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/world-cup-ias-hover.jpg' ),
  		'Jr' =>array('titulo'=>'Jr. and Sr. Lock­in','des'=>'<p>The goal of this sleepover is to welcome and bring together incoming 12th graders by easing their transition into the 12th grade. Selected current 12th graders are chosen to share their experiences.</p>', 'image'=>'http://placehold.it/770x300&text=Jr', 'thumbnail'=>'http://placehold.it/252x160&text=Jr', 'thumbnailh'=>'http://placehold.it/252x160&text=Jrhover' ),
  		'Parents' =>array('titulo'=>'Parents’ Day Celebration','des'=>'<p>Students get together to celebrate their loving parents. arents are welcome and encouraged to attend!</p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Parents', 'thumbnailh'=>'http://placehold.it/252x160&text=Parentshover' ),
  		'Students' =>array('titulo'=>'Students’ Day','des'=>'<p>The school celebrates its unique student body. In past years, we have celebrated this day by going to the movies and to Isla Mujeres, to name just a few.</p>', 'image'=>'http://placehold.it/770x300&text=Students', 'thumbnail'=>'http://placehold.it/252x160&text=Students', 'thumbnailh'=>'http://placehold.it/252x160&text=Studentshover' ),
  		'9grade' =>array('titulo'=>'9th Grade Breakfast Ceremony','des'=>'<p>It is very important to appreciate the success that our students have and the graduation is the culmination of their transition from middle school to high school. This is a formal breakfast ceremony. Parents are welcome and encouraged to attend!</p>', 'image'=>'http://placehold.it/770x300&text=9grade', 'thumbnail'=>'http://placehold.it/252x160&text=9grade', 'thumbnailh'=>'http://placehold.it/252x160&text=9gradehover' ),
  		'12grade' =>array('titulo'=>'12th Grade Graduation','des'=>'<p>It is very important to appreciate the success that our students have. Graduation is the culmination of their transition from high school to their future endeavors. This is a formal dinner ceremony, with a DJ included after. Parents are welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/12-grade-graduation-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/12-grade-graduation-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/12-grade-graduation-ias-hover.jpg' ),
  		'Eagle' =>array('titulo'=>'Eagle Houses Activities','des'=>'<p>School spirit is fundamental to IAS and having a positive learning environment. The Eagle Houses are pillars of IAS school spirit and bring together students from different grades and backgrounds. These form a team and partake school wide activities in hopes of becoming the Top Eagle House of the Year.</p>', 'image'=>'static/img/high-middle-events/eagle-houses-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/eagle-houses.jpg', 'thumbnailh'=>'static/img/high-middle-events/eagle-houses-hover.jpg' ),
  		'National' =>array('titulo'=>'National Honor Society Activities','des'=>'<p>The National Honor Society is a prestigious organization that coordinates different events focused on supporting local charities. Events range from in school to out of school, where parents are welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/national-honor-society-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/national-honor-society-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/national-honor-society-ias-hover.jpg' ),
  		
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
echo $twig->render('middle-high-school-events.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>