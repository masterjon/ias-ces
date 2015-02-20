<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'TEACHERS WEBSITES',
    'content' => '',
    'teachers' => array(
	    '0' => array('name' => 'Alejandra Velázquez','position' => 'Lic. en Historia','image' => '', 'link' => '' ),
	    '1' => array('name' => 'Andrea Terry','position' => 'B.S. Education/Sociology','image' => '', 'link' => '' ),
	    '2' => array('name' => 'Ann Pedersen','position' => 'Ann Pedersen B.A. English Literature','image' => '', 'link' => '' ),
	    '3' => array('name' => 'Arlen Pedersen','position' => 'B.A. History','image' => '', 'link' => '' ),
	    '4' => array('name' => 'Benjamin LeBeau','position' => 'B.A. in Mathematics','image' => '', 'link' => '' ),
	    '5' => array('name' => 'Catherine Hascoet','position' => 'MA French Language Education , B.A. Philosophy and Portuguese Language','image' => '', 'link' => '' ),
	    '6' => array('name' => 'Chelsea Nelson','position' => 'B.A. Elementary Education, Middle grades endorsement','image' => '', 'link' => '' ),
	    '7' => array('name' => 'Dea Monroy Acosta','position' => 'Lic. Lengua y Literatura Hispánica','image' => '', 'link' => '' ),
	    '8' => array('name' => 'Efren Lora Carrillo','position' => 'Lic. Derecho','image' => '', 'link' => '' ),
	    '9' => array('name' => 'Erica Daley','position' => 'B.S. Biochemistry Education','image' => '', 'link' => '' ),
	    '10' => array('name' => 'Eugenia Huerta','position' => 'B.S. Interdisciplinary Studies, Certified Bilingual Journalist','image' => '', 'link' => '' ),
	    '11' => array('name' => 'Francisco Negrete','position' => 'B.A. Fine Artes','image' => '', 'link' => '' ),
	    '12' => array('name' => 'Gabriel Antonio Vázquez Uc','position' => 'Lic. Educación Media / Matemáticas','image' => '', 'link' => '' ),
	    '13' => array('name' => 'Gabriela Gálvez Gayón','position' => 'B.S. in Psychology','image' => '', 'link' => '' ),
	    '14' => array('name' => 'Jessica Angel','position' => 'MA Liberal Studies - History/Interdisciplinary Studies B.A. History/Sociology AA Foreign Language/Applied Science','image' => '', 'link' => '' ),
	    '15' => array('name' => 'Jorge Macias','position' => 'Lic. Educación Física, Deporte y Recreación','image' => '', 'link' => '' ),
	    '16' => array('name' => 'Karen Castillejos','position' => 'B.A. M.A. Administration','image' => '', 'link' => '' ),
	    '17' => array('name' => 'Liliana Jimenez','position' => 'Lic. en Informática','image' => '', 'link' => '' ),
	    '18' => array('name' => 'Melanie Greene','position' => 'B.S. Human Kinetics, Education','image' => '', 'link' => '' ),
	    '19' => array('name' => 'Nancy Marroquin','position' => 'B.A. English / Education, M.A. Intercultural Education','image' => '', 'link' => '' ),
	    '20' => array('name' => 'Todd Laughlin','position' => 'B.A. Communications, M.A. School Counseling Postgraduate Certificate School Administration','image' => '', 'link' => '' ),

    )
);
echo $twig->render('middle-high-school-teachers.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>