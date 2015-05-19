<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-admissions.php';

$page_en=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'MIDDLE/HIGH PROCESS',
    'read_evaluation' => 'Read the evaluation process',
    'more_info' => 'For more information contact the school:',
    'content' => '
    <ol class="margin-15">
    	<li>Terms for Consideration:	</li>
    		<ul class="margin-15">
    			<li type="disc"> Required average is a minimum of 8.6, including English</li>
    			<li type="disc">No failed subjects</li>
    			<li type="disc">English is essential</li>
    		</ul>
    	<li>Application Process</li>
    		<ul>
				<li>a) ​By appointment only​. To make an appointment, call the middle/high school office from the
						hours of 9:00 am ­ 12:00 pm.</li>
				<li>b)​Appointment: ​For your appointment, bring the necessary documentation which consists of:.</li>
					<ul>
    					<li type="disc" class="margin-15">Current Report Card.</li>
    					<li type="disc" class="margin-15">Letter of Good Conduct</li>
    				</ul>
				<li>c) Admissions Exam: ​Once these are all reviewed and only if approved, the candidate will be
					scheduled for an admissions exam. The exam is all day, from 7:30 am to 2:30 pm. The exam has
					a cost of 350 pesos which must be paid in cash at the central office, the day of the exam.</li>
				<li>d) Results of the Exam: ​The results of the exam will be sent via email to the student’s legal
					guardians.</li>

    		</ul>
    	<li>Enrollment</li>
    		<ul>
    			<li  class="margin-15">a) Acceptance: ​If accepted, the email with the results of the exam will provide the information
					needed for the <a href="https://drive.google.com/file/d/0B6jaVMkzBXoGdzNaRmcxenBUYVk/view" target="_blank">deposit</a> of the registration fee and the time frame for this. The registration fee
					serves to reserve and hold the new student’s place at IAS.</li>
				<li  class="margin-15">b) Documentation after Registration Fee: ​All of the following must be original ​documents and
					brought to the middle/high school office.</li>
    				<ul>
						<li type="disc" class="margin-15"><a href="https://docs.google.com/file/d/0B6jaVMkzBXoGZ1dCMG9iNWlRaDhiWXFnQzVoT25BbG9KZ3Fj/edit" target="_blank">Application form</a> (provided by the office)</li>
						<li type="disc" class="margin-15">CURP</li>
						<li type="disc" class="margin-15">Birth Certificate</li>
						<li type="disc" class="margin-15">Primary School Diploma</li>
						<li type="disc" class="margin-15">Transfer Documents or Diploma for Secondary/Middle School Diploma (if applicable)</li>
						<li type="disc" class="margin-15">Transfer Documents from high school (if applicable)</li>
						<li type="disc" class="margin-15">SEP Approved ­­­­­­­​(for students who have studied abroad)</li>
						<li type="disc" class="margin-15">Prior Report Cards</li>
						<li type="disc" class="margin-15">Letter of Good Conduct</li>
						<li type="disc" class="margin-15">Letter from previous school stating no pending fees</li>
						<li type="disc" class="margin-15">Recent Medical Certificate</li>
						<li type="disc" class="margin-15">Legal Guardians Identification</li>
						<li type="disc" class="margin-15">Proof of Residency (for example, phone or water bill)</li>
						<li type="disc" class="margin-15">Immigration Documents (for foreign students)</li>
    				</ul>
    			
    		</ul>
    </ol>
'
);

$page_es=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'MIDDLE/HIGH PROCESS',
    'read_evaluation' => '',
    'more_info' => '',
    'content' => ''
);

if (LANG=='ES'){
    $page=$page_es; 
}
else{
    $page=$page_en;
}
echo $twig->render('admissions-process-high.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>