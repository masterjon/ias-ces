
<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'IAS Academic Programs',
    'junior_high' => 'JUNIOR HIGH: SEQ and SACS Programs 2014-2015',
    'high_school' => 'HIGH SCHOOL: UNAM / SACS 2014-2015',
    'seventh' => 'SEVENTH GRADE',
    'eight' => 'EIGHTH GRADE',
    'ninth' => 'NINTH GRADE',
    'tenth' => 'TENTH GRADE',
    'eleventh' => 'ELEVENTH GRADE',
    'twelfth' => 'TWELFTH GRADE',
    'table_junior' => array(
    	'0' => array('seventh' => 'Spanish', 'eight' => 'Spanish', 'ninth' =>	'Spanish'),
    	'1' => array('seventh' => 'English', 'eight' => 'English', 'ninth' =>	'English'),
    	'2' => array('seventh' => 'Science 7', 'eight' => 'Science: Intro to Physics', 'ninth' =>	'Science: Intro to Chemistry'),
    	'3' => array('seventh' => 'History of Quintana Roo  ', 'eight' => 'Physics', 'ninth' =>	'Mexican History'),
    	'4' => array('seventh' => 'Mathematics', 'eight' => 'Mathematics', 'ninth' =>	'Mathematics'),
    	'5' => array('seventh' => 'Mathematics', 'eight' => 'Algebra I ', 'ninth' =>	'Geometry'),
    	'6' => array('seventh' => 'World Geography  ', 'eight' => 'World History', 'ninth' =>	'United States History'),
    	'7' => array('seventh' => 'Geography of Mexico', 'eight' => 'Civics', 'ninth' =>	'Civics'),
    	'8' => array('seventh' => 'Fine Arts', 'eight' => 'Fine Arts ', 'ninth' =>	'Elective'),
    	'9' => array('seventh' => 'Computer Skills ', 'eight' => 'Computer Skills', 'ninth' =>	'Intro to French'),
    	'10' => array('seventh' => 'Physical Education', 'eight' => 'Physical Education', 'ninth' =>	'Physical Education'),
    	'11' => array('seventh' => 'Orientation', 'eight' => 'Orientation', 'ninth' =>	'Orientation'),
    ),
'table_high_school' => array(
    	'0' => array('tenth' => 'Spanish Language Arts  ', 'eleventh' => 'AP Spanish Literature', 'twelfth' =>	'Etymology/ Creative Writing'),
    	'1' => array('tenth' => 'Geography of Mexico ', 'eleventh' => 'History of Mexico II ', 'twelfth' =>	'Mexican Law'),
    	'2' => array('tenth' => 'English 10  ', 'eleventh' => 'English 11/AP English Language', 'twelfth' =>	'English 12/AP English Literature'),
    	'3' => array('tenth' => 'World History  ', 'eleventh' => 'U.S. History II', 'twelfth' =>	'US Government and Economics'),
    	'4' => array('tenth' => 'Biology ', 'eleventh' => 'Chemistry', 'twelfth' =>	'Physics or Ecology'),
    	'5' => array('tenth' => 'Algebra II', 'eleventh' => 'Precalulus', 'twelfth' =>	'Advanced Math/AP Calculus'),
    	'6' => array('tenth' => 'Electives', 'eleventh' => 'Electives', 'twelfth' =>	'Electives'),
    	'7' => array('tenth' => 'Model UN', 'eleventh' => '', 'twelfth' =>	''),
    	'8' => array('tenth' => 'Computer Skills or French II', 'eleventh' => 'Computer Skills or French III', 'twelfth' =>	'Computer Skills or French IV'),
    	'9' => array('tenth' => 'Orientation', 'eleventh' => 'Orientation', 'twelfth' =>	'Orientation'),
    ),
);
echo $twig->render('middle-high-school-academy-program.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>