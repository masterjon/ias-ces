<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Paying for School',
  'subtitle' => '',
  'content'=>'<p>One of the most important aspects of planning for a university career is developing a budget well in advance. Have a very honest conversation with your parents about exactly how much they are willing to pay for your education. You need a specific number. Be aware that if you are not a US citizen or permanent resident, you cannot qualify for Federal Financial Aid in the US. However, anyone can qualify for institutional money. The college that you are applying to has its own funds. Fill out the paperwork, and they will tell you if youve qualified for institutional money.</p>
  			  <p>Do not think of the number your parents come up with as the maximum tuition/ fees/books/room and board amount that you should look for when you re applying to schools. For example, your parents can only pay $30,000, and you want to apply to a school. Having only $14,000, doesn t rule out the possibility of going to that school! Financial aid is often available and you might be able to make it work. It depends entirely on the school.</p>
  			  <p>Be honest when you are completing the paperwork. Hiding assets can work against you. Also, know that they aren t going to expect your family to contribute all their money to paying for college. Colleges know that your parents have to continue paying the bills, saving for retirement, saving for your little brother to go to college, etc.</p>
  			  <h4>Scholarships and Financial Aid</h4>
  			  <p>Many schools in the U.S. and in other countries provide scholarships and financial assistance for students, but the country of citizenship usually affects the amount of aid available. There are some schools in the U.S. that guarantee to meet financial need of foreign students, and there are some schools in other countries that offer full scholarships to select students</p>
  			  <p>U.S. citizens apply to colleges and universities for need-based financial aid through FAFSA, the Free Application for Federal Student Aid. Although the application cannot be submitted to universities until January 1 of the last year of high school, you can begin the process a couple of months before by applying for a pin and filling out worksheets available on the website. The pin is necessary to submit the application electronically, and both you and your parent(s) need a pin. Some federal money is also available for U.S. citizens to use at Canadian universities</p>
  			  <p>Most schools require additional documentation of financial need, usually including income tax records (from the U.S., Mexico, or another country) and statements of assets.</p>
  			  <p><b>Useful Links:</b><br><a target="_blank" href="">http://www.profileonline.collegeboard.com</a> The CSS/PROFILE is an online form, provided by the College Board. Many schools ask applicants to complete the CSS/PROFILE as a part of their financial aid application. Many of the member colleges, universities, graduate and professional schools, and scholarship programs use theinformation collected on PROFILE to help them award nonfederal student aid funds.</p>
  			  <p><a target="_blank" href="http://www.fafsa.ed.gov">http://www.fafsa.ed.gov</a> FAFSA on the web to apply for college financial aid after January 1st of the senior year. Do not be fooled by another site, fafsa.com - they are one of the sites that wants you to pay to </p>
  			  <p><a target="_blank" href="http://www.myroad.com">http://www.myroad.com</a> - The amount of aid available at U.S. universities is summarized here and is available at each school s website.</p>
  			  <p><a target="_blank" href="http://www.cois.org">http://www.cois.org</a> The Council of International Schools (CIS) provides financial aid information for their member universities throughout the world.</p>
  			  <p><a target="_blank" href="http://www.fastweb.com">http://www.fastweb.com</a> This website is a free service that can help you find scholarships. Enter some information about yourself to create a profile, and the site matches you with scholarships that it thinks for which they think you might be qualified. It takes some work!</p>
  			  <p><a target="_blank" href="http://www.edupass.org">http://www.edupass.org</a> This site provides information for international students who are thinking about pursuing an education in the United States. There is also some information for international students who are interested in studying in countries other than the US, but the main focus is on higher education in the US. This guide contains up-to-date information about everything an international student needs to know about studying and living in the United States. It covers every topic, from college admissions and financial aid to culture shock and clothing sizes.</p>
  			  <p><a target="_blank" href="http://www.finaid.org/">http://www.finaid.org/</a> This is similar to the above site, but it is for American citizens and permanent resident</p>
  			  <p><a target="_blank" href="http://www.mappingyourfuture.org/paying/standardcalculator.htm">http://www.mappingyourfuture.org/paying/standardcalculator.htm</a> If you are thinking about taking a student loan, use this tool to figure out how much your payments will be after college.</p>
  			  <p><a target="_blank" href="http://www.questbridge.org">http://www.questbridge.org</a> QuestBridge is a non-profit program that links bright, motivated low-income students with educational and scholarship opportunities at some of the best colleges in the US.</p>
  			  <p><a target="_blank" href="http://www.internationalscholarships.com">http://www.internationalscholarships.com</a> International scholarship resource for students wishing to study abroad. At this site, you will find the most comprehensive listing of grants, scholarships, loan programs, and other information to assist college and university students in their pursuit to study ab</p>
  			  <p><a target="_blank" href="http://www.oas.org/rowe">http://www.oas.org/rowe</a> The Leo S. Rowe Fund is a student loan program of the Organization of American States that helps citizens from Latin America and the Caribbean OAS Member countries finance their studies or research in accredited universities across the United States. The Rowe Fund loans are given to students on condition that upon completion of his or her studies, the beneficiary must promise to repay the loan in full and return to his or her country in order to further intercultural exchange and socioeconomic development in the region.</p>
  			  <p>Student Visas - You will need a student visa to study in a foreign country. You apply for your visa after you have received a letter of acceptance from a university. You can apply for a US student visa at the US Consulate in Merida. Information on the procedure to obtain an F-1 Student Visa is available here. You can apply for a Canadian visa through the Canadian Embassy in Mexico City. Information on the procedure to obtain a Study Permit is available here.</p>
  			  <p></p>
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
echo $twig->render('middle-high-school-financial-aid.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>