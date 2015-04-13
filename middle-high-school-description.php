<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Career Exploration',
  'subtitle' => '',
  'content'=>'
						
					<p>At IAS we begin career exploration in tenth grade, using a number of tools available on the Internet. For students planning to study in Mexico and some other countries, this is especially important, as they must apply directly to a particular career/major starting their university studies. Those going on to the United States and often Canada have more time to choose their major, usually after one-two years in college. Even if they must apply to a particular program upon entry, they generally have the chance to change without jeopardizing the credits they have earned. As members of College Board, we use the Quickstart program as our principal tool for vocational guidance. A student might also want to explore the career development guide called career zone at <a target="_blank" href="https://www.nycareerzone.org/">https://www.nycareerzone.org/</a> in the State of New York that allows you to register and then follow the links to assess yourself using a test developed by the U.S. Department of Labor. The assessment suggests a list of possible careers, depending on your interests and the number of years you want to study. Most of the links on this site are free, but some of the more complex assessment sites charge a fee.</p>				
  					<p>Students begin to search for colleges in their junior year. We explore all aspects that affect a student’s choice: region, size, majors, financial aid, PAA/SAT’s, acceptance rates, requirements, selectivity, sports, activities, etc. We use various tools including The Princeton Review, U.S. News & World Report, and Quickstart. The student should end up with a short list of colleges to apply to by the end of the second semester of their junior year.</p>
  					<p>Applications for universities in the U.S begin in the first semester of their senior year. For students planning on applying to schools in Mexico, the application process is in the second semester</p>
  					<p>For information about when universities will be visiting IAS, please check here:</p>
  					<p><a target="_blank" href="https://sites.google.com/site/iascollegeplanning">https://sites.google.com/site/iascollegeplanning</a></p>
  					',
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

echo $twig->render('middle-high-school-description.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>