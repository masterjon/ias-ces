<?php require_once "twig_instance.php";
require 'layout.php';
//require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'EMPLOYMENT',
    'time' => 'TIME',
    'activity' => 'ACTIVITY',
    'content' =>'<p>The International American School of Cancun is a growing project serving a community that is also international. It requires understanding staff members willing to dedicate themselves to something that will someday be an important facet of the community. We need commitment, dedication, and enthusiasm, and offer in exchange an experience in another culture, a tropical location, and an opportunity to make one place in the world a little better.</p>
    <p>We are looking for dedicated professionals willing to meet the challenges of living abroad, of living in a city that does not all the amenities of American cities, and of working at a school that does not have the resources, equipment and support personnel an older school would have. Cancun is a wonderful city with great beaches and impressive historical areas,  but some important supplies may not be available on a regular basis and the quality of materials may be inferior to those found in the U.S.  It is a challenge that is not easy on a daily basis.</p>
    <p>We invite you to contact us to learn more about working at the International American School of Cancun.  We are regularly recruiting and interviewing candidates for teaching and administrative positions. All applicants should have a university degree and preferably a teaching credential or a degree in education.</p>
    <p>Please send an email your cover letter and resume to the following:</p>
    <p>Middle/ High School Positions  -   <a href="mailto:inquiries@iasces.com">inquiries@iasces.com</a></p>
    <p>Kinder / Primary Positions –  <a href="mailto:primary@iasces.com">primary@iasces.com</a></p>
    <p>The International American School of Cancun adheres to a policy of nondiscrimination in employment and educational programs/activities and strives affirmatively to provide equal opportunity for all.  We prohibit discrimination against employees or applicants on the basis of sex, race, color, ethnic or national origin, religion, marital status, disability, genetic information, age, political beliefs, sexual orientation, gender, gender identification, social and family background, linguistic preference, pregnancy, and any other legally prohibited basis.</p>'
);
echo $twig->render('middle-high-school-employment.html',array('main_menu'=>$main_menu,'footer'=>$footer,'page'=>$page));
?>