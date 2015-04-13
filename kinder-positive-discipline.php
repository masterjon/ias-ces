<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';
$page=array(
    'metaTitle'=>'',
    'metaDescription'=>'',
    'title' => 'Positive discipline',
    'download' => 'Download',
    'content' => '<p>During kinder and elementary years students are in the process of acquiring social 
    and interpersonal Skills. It is our job to offer support and encourage themthroughout this process 
    in a dynamic and motivating manner. The following strategies are applied:</p>
    <h4>1. Learning Centers</h4>
    <p>Learning centers are an exciting addition to a classroom. They make it possible to
	offer a variety of activities that can be completed by students in teams or
	individually. For example: drama, mathematics, art, writing, ipads for research and
	reading, amongst others.</p>
	<h4>2. Peace Station</h4>
    <p>It is normal for children to have conflicts or disagreements with their peers, friends
	or siblings. In the classroom there is a table to hold Peace Meetings where students
	can reach agreements and learn to resolve conflicts. This invites the students to
	look for solutions, develop self management and independence.</p>
	<p>The children involved must sit at the table, place their hand on their heart and take
	turns expressing how the situation made them feel, they will work together to find a
	solution or reach an agreement. When they have, they must ring a bell, signaling
	the end of the conflict for the teacher to know they have found a satisfactory solution
	to their disagreement.</p>
	<h4>3. Super Power Place</h4>
    <p>This is a strategy for relaxation where the designated spot is the super power place.
	The student may go there to calm down, reflect on the situation and think of a
	solution. This technique prevents impulsive behavior and helps with anger
	management or anxiety. It can be used prior to the Peace Table Strategy in order to
	open the lines of communication.</p>
	<h4>4. Emotional Development Forms</h4>
    <p>Students will learn to develop emotional skills by the use of worksheets that
	promote self­ evaluating and reflecting, identifying their emotions and resolving
	conflicts. We will encourage the students to use the Wheel of Choices to find a
	positive solution to the conflict.</p>
	<h4>5. Teachers will establish the class rules with their Spanish partners in order to
	avoid confusion.</h4>
	<h4>6. There will be a direct reflection form for the student that engages in any act of
	verbal or physical aggression.</h4>
	<h4>7. Brain Gym are exercises to activate motor and intellectual skills through a
	series of simple exercises.</h4>
	<h4>8. Natural Consequence</h4>
    <p>For example: If I forget my thermos, I will be thirsty. I need to find a bottle to use.
	A natural consequence is anything that happens as a result of an action. Natural
	consequences often help children learn responsibility.</p>',
    
); 
echo $twig->render('kinder-positive-discipline.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>