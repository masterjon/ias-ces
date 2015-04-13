
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
  		'Independence' =>array('titulo'=>'Independence Day','des'=>'<p>This celebration is held during the school day over a long lunch hour.  Honor society students organize different activities for all students, and teachers are encouraged to participate as well. Some of the activities that have been held in the past:</p> <ul class="margin-15"><li type=square>Chile eating contest</li><li type=square>Donut eating contest</li><li type=square>Musical chairs</li><li type=square>Relay races with typical Mexican clothing</li></ul><p>Mexican food, such as tacos, tortas, esquites, is sold during the event.</p>', 'image'=>'static/img/high-middle-events/independence-day-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/independence-day-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/independence-day-ias-hover.jpg' ),
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
  		'Eagle' =>array('titulo'=>'Eagle Houses Activities','des'=>'<p>School spirit is fundamental to IAS and having a positive learning environment. The Eagle Houses are pillars of IAS school spirit and bring together students from different grades and backgrounds. These form a team and partake school wide activities in hopes of becoming the Top Eagle House of the Year.</p>', 'image'=>'static/img/high-middle-events/eagle-houses-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/eagle-houses.jpg', 'thumbnailh'=>'static/img/high-middle-events/eagle-houses-hover.jpg' ),
      'National' =>array('titulo'=>'National Honor Society Activities','des'=>'<p>The National Honor Society is a prestigious organization that coordinates different events focused on supporting local charities. Events range from in school to out of school, where parents are welcome and encouraged to attend!</p>', 'image'=>'static/img/high-middle-events/national-honor-society-ias-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/national-honor-society-ias.jpg', 'thumbnailh'=>'static/img/high-middle-events/national-honor-society-ias-hover.jpg' ),
      'Red_hand' =>array('titulo'=>'Red Hand','des'=>'<p>Red Hand Day is a worldwide initiative to stop the use of child soldiers.  This activity, organized by Model UN students and the secretariat elective, joins people around the world in their efforts to end the suffering of children who are forced to fight.  After an assembly explaining the problem, students and staff make red handprints with messages, which are then ycollected and sent to the United Nations.  </p>', 'image'=>'static/img/high-middle-events/red-hand-day-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/red-hand-thumbnail.jpg', 'thumbnailh'=>'static/img/high-middle-events/red-hand-thumbnail-hover.jpg' ),
      'International' =>array('titulo'=>'International Week','des'=>'<p>During this week different activities are held to honor the different nationalities represented in our school community.  There is usually one activity per day:<ul class="margin-15"><li type=square>International Buffet - Eagle houses bring food according to continents, and everyone shares  </li><li type=square>Language classes - students who speak different languages teach their classmates </li><li type=square>International Show – Students and teachers enjoy  dances, songs, and music from different countries. </li></ul></p>', 'image'=>'static/img/high-middle-events/international-week-gallery.jpg', 'thumbnail'=>'static/img/high-middle-events/international-week-thumbnail.jpg', 'thumbnailh'=>'static/img/high-middle-events/international-week-thumbnail-hover.jpg' ),
      'Leadership' =>array('titulo'=>'Leadership Workshop','des'=>'<p>This workshop is designed for students who are in student council and the honor society.  They spend the day participating in workshops that help develop their leadership skills, and they also plan  activities for the school year.  The event is held at a hotel on a Saturday in September, from 8:30 - 3:00 pm. </p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Leadership', 'thumbnailh'=>'http://placehold.it/252x160&text=Leadershiphover' ),
      'History' =>array('titulo'=>'Mexican History Celebration','des'=>'<p>This is an evening planned by the Mexican history classes, and its purpose is to celebrate Mexico’s amazing history.   Each year the format changes:  living time line, stands for each state, drama, etc.  In addition, those attending enjoy typical Mexican food, prepared by students and their families. </p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=History', 'thumbnailh'=>'http://placehold.it/252x160&text=Historyhover' ),
      'Cine' =>array('titulo'=>'Cine Arte','des'=>'<p>Four times a year the school community enjoys a night at the movies.  It is usually held on a Wednesday night, and the films are usually ones that students do not normally watch: classics, foreign films, documentaries, etc. Popcorn and soft drinks are sold by the seniors as a fundraising event for graduation.  </p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Cine', 'thumbnailh'=>'http://placehold.it/252x160&text=Cinehover' ),
      'Asomex' =>array('titulo'=>'ASOMEX Soccer Tournament ','des'=>'<p>The Association of American Schools in Mexico (ASOMEX) is the oldest of the many regional school associations throughout the world. IAS hosts an invitational ASOMEX Futbol 7 tournament the third week of February each year.  Local teams participate, as well as ASOMEX teams from different parts of Mexico.</p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Asomex', 'thumbnailh'=>'http://placehold.it/252x160&text=Asomexhover' ),
      'Book' =>array('titulo'=>'International Book Week ','des'=>'<p>During this week students participate in different activities to celebrate books and reading.  Some of the activities in the past have included the following: <ul class="margin-15"><li type=square>Reading stories/acting out stories for kinder and primary students </li><li type=square>Book Fair </li><li type=square>Poster Contest - Book Covers</li><li type=square>Exposition of posters and literary work</li><li type=square>Costumes – varies each year</li></ul></p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Parents', 'thumbnailh'=>'http://placehold.it/252x160&text=Parentshover' ),
      'Senior' =>array('titulo'=>'Senior Send-off ','des'=>'<p>The parents of the graduating class organize a party to say goodbye to the seniors. This usually includes gifts, mariaches, and lots of tears!  Juniors also help by organizing an activity.  The entire school watches the celebration, and  everyone  joins in at the end for food and refreshments.  </p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Book', 'thumbnailh'=>'http://placehold.it/252x160&text=Bookhover' ),
      'Improv' =>array('titulo'=>'Improv Show ','des'=>'<p>Organized by the Student Council, this is one of our newest activities.  The Improv Show is another opportunity for students to show their talents.  It is a form of live theater in which the plot, characters and dialogue of a game, scene or story are made up in the moment.   Improv is spontaneous, entertaining, and fun!</p>', 'image'=>'http://placehold.it/770x300&text=Parents', 'thumbnail'=>'http://placehold.it/252x160&text=Senior', 'thumbnailh'=>'http://placehold.it/252x160&text=Seniorhover' ),
  		
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