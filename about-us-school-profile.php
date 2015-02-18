<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-about-us.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'SCHOOL PROFILE',
    'content' => '<h4>DESCRIPTION</h4><p>The International American School of Cancun, Mexico, is a private, non-profit, non-sectarian, co-educational institution
offering a bilingual, bicultural education for students from preschool through high school. The kinder and elementary 
section (CES) was founded in 1980 and the high school in 1998. The school is dedicated to an American style 
education, high academic standards and the caring environment a small school can offer. The International American 
School of Cancun is accredited by the Southern Association of Colleges and Schools (SACS), Mexico’s Ministry of 
Education (SEP) and the National Autonomous University of Mexico (UNAM).</p>
<p>Kinder/ Elementary: 306
Middle/High School: 292 
Student Population: 84% Mexican 5% U.S. 11% Other
CEEB: 870070</p><br>
<h4>THE FACULTY</h4><p>The International American School of Cancun maintains a highly trained professional staff, composed of teachers from 
the U.S., Mexico, England, and Canada. Thirty-three percent of the teachers hold a graduate degree. These teachers 
support the efforts of the school community to provide an American model of education in a bilingual, bicultural setting. 
The school enjoys a blend of staff members who are permanent residents of Cancun and others with shorter time 
commitments, as well as diversity in age and experience. This is yet another aspect that helps create a professional 
atmosphere where ideas are exchanged freely and challenges and goals are addressed in many different and unique 
ways.</p><br>
<h4>UNIQUE DUAL ACADEMIC PROGRAM</h4>
<p>Our elementary school students (CES) receive bilingual instruction that meets both Mexican and U.S. standards. Most 
of our high school students are enrolled in a full dual program, receiving both a U.S. diploma and a Mexican preparatory 
(high school) certificate. Thus, the majority of our graduates speak both English and Spanish fluently. These students 
are taking as a minimum the 24 Carnegie units required for a U.S. high school diploma as well as the Mexican program 
requirements in Spanish Literature, Mexican History, Geography, Law and Civics. English is the major language of 
instruction: English literature, science, social studies, math, and some electives and extracurricular activities are taught 
in English. In Kinder – 6th
eighty percent of the classes are taught in English.
 grade, students spend 50% of their time in English and 50% in Spanish. In grades 10-12,</p><br>
 <h4>ADVANCED PLACEMENT</h4>
 <p>Advanced Placement courses are offered this year in 11th grade (Spanish Literature and Culture, English Language)
and 12th grade (Calculus, English Literature). Given the small size of each grade level (maximum 25), staff 
requirements, the needs and interests of individual students, there is some variability in AP programming from year 
to year. Additional opportunities exist for supervised independent studies and honors classes in preparation for AP 
exams. Over the past five years, small groups of students have also taken exams in Spanish Language and Culture, 
French Language and Culture, and U.S. History. 75% of the Class of 2014 passed at least one AP exam.</p><br>
',
'content2'=>'<h4>THE SCHOOL PLANT</h4>
<p>The school plant consists of two campuses (Kinder-Primary and Middle-High School) separated by a parking lot shared by the two campuses.  The administrative offices are located in the area between the two campuses.  There is a wall surrounding the campus, with additional parking on one side. The middle-high school has fifteen classrooms, including an auditorium, a full library, science and computer laboratories, administrative offices, restrooms, storerooms, and a cafeteria.  The grounds include a basketball court, grass-covered sports field,  and shady rest areas.   The kinder-primary section has administrative offices, sixteen classrooms, computer lab, library, music room, and a kitchen which is used for school activities and cooking classes.  There is a basketball court, soccer field, and two playgrounds. Each campus has a psychologist who supports student academic and emotional education.</p><br>
<h4>EXTRA CURRICULAR ACTIVITIES</h4>
<p>Education at the International American School of Cancun extends beyond the classroom to ensure that all students are presented with the opportunity to grow in a rich environment of experiences.   Programs are diverse: student council, National Honor Society, Model United Nations, Earth Friendly Club, Community Service Club, CES Spirit and community service projects.   An after-school sports program for boys and girls is offered in soccer, basketball, tennis, and volleyball in high school . In elementary school chess, traditional games , cooking, Robotics, drama, yoga, and modern dance are offered.   The school also participates in a variety of events throughout Mexico within ASOMEX (American Schools of Mexico): sports events, workshops for teachers, and Model UN simulations.</p>
'
  );
echo $twig->render('about-us-school-profile.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>