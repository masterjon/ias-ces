<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'IAS CLASS OF 2014 COLLEGE ADMISSIONS SUMMARY',
  'subtitle' => '',
  'content'=>'<p>The IAS class of 2012 had a very successful college admissions season, with most of its members gaining admission to their top choice university or college</p>
  					<h4>Highlights and Interesting Facts</h4>
  					<ul class="margin-15">
  						<li>The graduating class of 2012 was made up of 41 students, which makes it the largest class to graduate from IAS.</li>
  						<li>7 students (17%) will be pursuing their education abroad - US, England, and Lebanon.</li>
  						<li>30 students (73%) will be pursuing their undergraduate university education in Mexico.</li>
  						<li>4 students (10%) will be taking a year off to travel or work before continuing their education.</li>
  						<li>13 (32%) students were members of the National Honor Society.</li>
  					</ul>
  					<h4>List of College Acceptances Class of 2011</h4>
  					<p>Bold type indicates more than one acceptance and an asterisk indicates an offer of financial aid has been extended.</p>
  					<table class="table-bordered">
					  <tr>
					    <th>Mexico</th>
					    <th>United States</th>
					    <th>Other Countries</th>
					  </tr>
					  <tr>
					    <td>I.T.A.M. I.T.E.S.M.*<br> - Puebla, Mexico City<br> Universidad Anáhuac - Cancun,<br>Universidad Autónoma de Guadalajara (UAG)<br>Universidad las Américas Puebla (UDLAP)* <br>Universidad Iberoamericana <br>Universidad Intercontinental<br> Universidad Jannette Klein <br>Universidad Mayab <br>Universidad Valle de Mexico</td>
					    <td>Concordia College <br>Eckerd College* <br>Florida Institute of Technology* <br>Florida International University<br> Florida Southern College <br>Georgetown University,<br>Gustavus Adolphus College* <br>Jacksonville University<br> Kendall College<br> Loyola University–Chicago <br>Manhattan College <br>NewSchool of Architecture Design <br>Nova Southeastern University,<br>Syracuse University,<br>University of Florida <br>University of Miami <br>University of New Mexico <br>University of San Francisco <br>Worcester Polytechnic Institute*</td>
					    <td>Durham University -<br>England University of Glasgow</td>
					  </tr>
					</table>
					<h4>Career Exploration</h4>	
					<p>At IAS we begin career exploration in tenth grade, using a number of tools available on the Internet. For students planning to study in Mexico and some other countries, this is especially important, as they must apply directly to a particular career/major starting their university studies. Those going on to the United States and often Canada have more time to choose their major, usually after one-two years in college. Even if they must apply to a particular program upon entry, they generally have the chance to change without jeopardizing the credits they have earned. As members of College Board, we use the Quickstart program as our principal tool for vocational guidance. A student might also want to explore the career development guide called career zone at <a target="_blank" href="https://www.nycareerzone.org/">https://www.nycareerzone.org/</a> in the State of New York that allows you to register and then follow the links to assess yourself using a test developed by the U.S. Department of Labor. The assessment suggests a list of possible careers, depending on your interests and the number of years you want to study. Most of the links on this site are free, but some of the more complex assessment sites charge a fee.</p>				
  					<p>Students begin to search for colleges in their junior year. We explore all aspects that affect a student’s choice: region, size, majors, financial aid, PAA/SAT’s, acceptance rates, requirements, selectivity, sports, activities, etc. We use various tools including The Princeton Review, U.S. News & World Report, and Quickstart. The student should end up with a short list of colleges to apply to by the end of the second semester of their junior year.</p>
  					<p>Applications for universities in the U.S begin in the first semester of their senior year. For students planning on applying to schools in Mexico, the application process is in the second semester</p>
  					<p>Interesting Links:</p>
  					<p><a target="_blank" href="https://quickstart.collegeboard.com/posweb/login ">https://quickstart.collegeboard.com/posweb/login </a></p>
  					<p><a target="_blank" href="www.nycareerzone.org ">www.nycareerzone.org </a></p>
  					<p><a target="_blank" href="http://www.princetonreview.com ">http://www.princetonreview.com </a></p>
  					<p><a target="_blank" href="www.collegeview.com">www.collegeview.com</a></p>
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