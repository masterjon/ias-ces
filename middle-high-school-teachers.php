<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page=array(
	'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'TEACHERS WEBSITES',
    'content' => '',
    'teachers' => array(
	    '0' => array('name' => 'Alejandra Velázquez','position' => 'Lic. en Historia','image' => 'static/img/middle-high-teachers/VELAZQUEZ-VELAZQUEZ.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fmissalejandra.shutterfly.com%2F&sa=D&sntz=1&usg=AFQjCNFLvSx1XXZD8pu0chhzXFcmM1PLjA' ),
	    '1' => array('name' => 'Andrea Terry','position' => 'B.S. Education/Sociology','image' => '', 'link' => '' ),
	    '2' => array('name' => 'Ann Pedersen','position' => 'Ann Pedersen B.A. English Literature','image' => 'static/img/middle-high-teachers/PEDERSEN.jpg', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fjapanster27.wix.com%2Fiasenglish&sa=D&sntz=1&usg=AFQjCNEuY5RkrYhm2AHS-YtvHy4_20ytug' ),
	    '3' => array('name' => 'Arlen Pedersen','position' => 'B.A. History','image' => 'static/img/middle-high-teachers/PEDERSEN.jpg','link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fiasmrarlenpedersen%2F&sa=D&sntz=1&usg=AFQjCNGx55Mlfm7NNCCuapzcVcCVae-ORw' ),
	    '4' => array('name' => 'Benjamin LeBeau','position' => 'B.A. in Mathematics','image' => '', 'link' => '' ),
	    '5' => array('name' => 'Catherine Hascoet','position' => 'MA French Language Education , B.A. Philosophy and Portuguese Language','image' => '', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fmscathyhascoet.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNGqFO9cz_qz3m3YhhOf5FtytuAtMw' ),
	    '6' => array('name' => 'Chelsea Nelson','position' => 'B.A. Elementary Education, Middle grades endorsement','image' => 'static/img/middle-high-teachers/NELSON.jpg', 'link' => '' ),
	    '7' => array('name' => 'Dea Monroy Acosta','position' => 'Lic. Lengua y Literatura Hispánica','image' => 'static/img/middle-high-teachers/MONROY-ACOSTA.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fmissdeamonroy%2F&sa=D&sntz=1&usg=AFQjCNHhRqJaY2D2xKzxUTJ-w019N1zwaw' ),
	    '8' => array('name' => 'Efren Lora Carrillo','position' => 'Lic. Derecho','image' => 'static/img/middle-high-teachers/LORA-CARRILLO.jpg', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fderechoias.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNHR4ypjjM8XC_rfiWnM8LxfD5al2w' ),
	    '9' => array('name' => 'Erica Daley','position' => 'B.S. Biochemistry Education','image' => '', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fiasmisserica.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNEpkWa6hSrDVINZBaAQ0jNUBLYvUA' ),
	    '10' => array('name' => 'Eugenia Huerta','position' => 'B.S. Interdisciplinary Studies, Certified Bilingual Journalist','image' => 'static/img/middle-high-teachers/HUERTA-MONROY.jpg', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fmsginasclassroomias.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNE9Zjj8QyU0UiFF0CFe1e-1FDmACg' ),
	    '11' => array('name' => 'Francisco Negrete','position' => 'B.A. Fine Artes','image' => '', 'link' => '' ),
	    '12' => array('name' => 'Gabriel Antonio Vázquez Uc','position' => 'Lic. Educación Media / Matemáticas','image' => 'static/img/middle-high-teachers/VAZQUEZ-UC.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fprofgabrielmatfis%2F&sa=D&sntz=1&usg=AFQjCNEdebQS0p6xGb9IN-onQLkccF19iw' ),
	    '13' => array('name' => 'Gabriela Gálvez Gayón','position' => 'B.S. in Psychology','image' => 'static/img/middle-high-teachers/GALVEZ-GAYON.jpg', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fmissgabygalvez.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNHzi0Qzow75vBz7NVZsHPyMv6QwZA' ),
	    '14' => array('name' => 'Jessica Angel','position' => 'MA Liberal Studies - History/Interdisciplinary Studies B.A. History/Sociology AA Foreign Language/Applied Science','image' => 'static/img/middle-high-teachers/ANGEL.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fmrsjessicasclass%2F&sa=D&sntz=1&usg=AFQjCNHkA1Y2Pyvf99lJAPj1aHHMNuY7BQ' ),
	    '15' => array('name' => 'Jorge Macias','position' => 'Lic. Educación Física, Deporte y Recreación','image' => 'static/img/middle-high-teachers/MACIAS-CANO.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fjorgemaciasclub%2F&sa=D&sntz=1&usg=AFQjCNGXYsarWmQcRTQbbPw41B5Y6QmXtA' ),
	    '16' => array('name' => 'Karen Castillejos','position' => 'B.A. M.A. Administration','image' => '', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Fmisskarenias%2F&sa=D&sntz=1&usg=AFQjCNGdLnelDeYc51lY429qkI-ik5bXLA' ),
	    '17' => array('name' => 'Liliana Jimenez','position' => 'Lic. en Informática','image' => 'static/img/middle-high-teachers/JIMENEZ-LLANES.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fsites.google.com%2Fsite%2Finformaticaconlilianajimenez%2Fcomputacion&sa=D&sntz=1&usg=AFQjCNEv-ukYusfrOYXVJgM31nFnKUfhrQ' ),
	    '18' => array('name' => 'Melanie Greene','position' => 'B.S. Human Kinetics, Education','image' => 'static/img/middle-high-teachers/GREEN.jpg', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fmissmelaniegreene.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNFDs5cqzqgvduDNWn3ImFGX6JjeTQ' ),
	    '19' => array('name' => 'Nancy Marroquin','position' => 'B.A. English / Education, M.A. Intercultural Education','image' => '', 'link' => 'http://www.google.com/url?q=http%3A%2F%2Fnperkins.weebly.com%2F&sa=D&sntz=1&usg=AFQjCNGX06BxH2L00GJpOmnlrM3omawqfg' ),
	    '20' => array('name' => 'Todd Laughlin','position' => 'B.A. Communications, M.A. School Counseling Postgraduate Certificate School Administration','image' => 'static/img/middle-high-teachers/LAUGHLIN.jpg', 'link' => 'https://www.google.com/url?q=https%3A%2F%2Fmrlaughlinviceprincipal.shutterfly.com%2F&sa=D&sntz=1&usg=AFQjCNFAp6DO_9rxAflR3I61s1pn2a2aNQ' ),

    )
);
echo $twig->render('middle-high-school-teachers.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>