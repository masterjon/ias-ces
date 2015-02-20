<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-kinder.php';

$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Party Guidelines and permission',
  'content' => '<h4>In school party celebrations:</h4>
  <ul class="margin-15">
  	<li type=square><p>Please contact the main office in advance when you wish to celebrate
    your child&#39;s birthday at school.</p></li>
  	<li type=square><p>Please mention if you are considering both groups or just your child&#39;s for the for celebration</p></li>
  	<li type=square><p>Your child&#39;s birthday will be celebrated on the last Thursday of the month during lunch
	10:00 am.</p></li>
	<li type=square><p>Cakes, cupcakes and drinks are accepted for your child&#39;s celebration. Party favors,
	etc. are not admitted.</p></li>
	<li type=square><p>Avoid sharing with students or relatives from other classes.</p></li>
	<li type=square><p>Parents may only be present for 10 minutes to take pictures. Siblings may not attend.</p></li>
  </ul>
  <h4>Party celebrations outside of school:</h4>
  <ul class="margin-15">
  	<li type=square><p>Invitations for parties will only be delivered in school if the whole class is invited.</p></li>
  	<li type=square><p>The teacher must be notified before passing out invitations to avoid interrupting the class.</p></li>
  	<li type=square><p>We understand that you may decide to have a small party with some of your child ́s friends.
	advise you to not pass out the invitations at school and to tell your child to be discrete in order
	to avoid hurting other people ́s feelings.</p></li>
  	<li type=square><p>If you decide you will be taking students after school, please follow the guidelines:</p></li>
		<ol class="margin-15">
			<li ><p>Print the authorization file “After School Party“ and deliver it once it has been completed
			with all the specific information to the main office. It must be delivered at least a day
			in advance.</p></li>
			<li ><p>The parents of your child&#39;s guests must sign their authorization previously at the main
			office.</p></li>
			<li ><p>The day of the party, please park in the parking lot at the kinder gate. The children will
			be delivered at the gate based on the list provided.</p></li>
			<li ><p>No student will be allowed to leave without written authorization.</p></li>
			<li ><p>Make sure the children attending the party are notified, so they are ready at the gate.</p></li>
		</ol>
  </ul>',
  );

$page_es=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Kinder Lineamientos de Festejos',
  'content' => '<h4>Celebraciones dentro de la escuela:</h4>
  <ul  class="margin-15">
  	<li type=square><p>Favor de contactar a la oficina cuando menos dos días antes de la
	celebración del cumpleaños de su hijo (a) en la escuela.</p></li>
  	<li type=square><p>Favor de mencionar si está considerando ambos salones o únicamente el de su hijo (a).</p></li>
  	<li type=square><p>Los cumpleaños se celebraran el último jueves de cada mes a las 10:00 am, durante la hora
	del almuerzo. (Se festejan a todos los que cumplen años en el mes)</p></li>
	<li type=square><p>Pasteles, panqués y bebidas son aceptadas para la celebración. Globos, regalos, etc no son
	admitidos.</p></li>
	<li type=square><p>Evitar compartir con hermanos (as) y/o primos de otros salones.</p></li>
	<li type=square><p>Los padres podrán estar presentes durante 10 minutos para tomar fotos. Los hermanos (as) no
	podrán asistir.</p></li>
  </ul>
  <h4>Celebraciones fuera de la escuela:</h4>
  <ul  class="margin-15">
  	<li type=square><p>Las invitaciones a las fiestas solo serán entregadas en la escuela si todo el salón es invitado.</p></li>
  	<li type=square><p>El padre avisará y enviará las invitaciones al maestro para ser entregadas y así evitar
	interrumpir la clase.</p></li>
  	<li type=square><p>Entendemos que puede decidir hacer una fiesta pequeña con solo algunos de los compañeros
	de su hijo (a). De ser así, se pide que las invitaciones no se entreguen dentro de la escuela y
	pedir a su hijo (a) que sea discreto para no lastimar los sentimientos de algún compañero.</p></li>
  	<li type=square><p>Si decide llevarse alumnos después de clases el día de la fiesta, seguir los siguientes
	lineamientos:</p></li>
		<ol class="margin-15">
			<li type=circle><p>Imprimir el archivo de “Fiestas después de clases” y entregarlo firmado a la oficina.
			Deberá ser entregado por lo menos un día previo.</p></li>
			<li type=circle><p>Los padres de los niños invitados deben firmar su autorización en la oficina.</p></li>
			<li type=circle><p>El día de la fiesta, favor de estacionarse por la puerta de Kinder. Los niños serán
			entregados basados en la lista de autorizaciones.</p></li>
			<li type=circle><p>Ningún estudiante podrá irse de la escuela, sin la firma de autorización del padre.</p></li>
			<li type=circle><p>Asegurarse de que sus hijos (as) sepan de antemano que asistirán a la fiesta de su
			compñero para que estén listos en la reja de Kinder.</p></li>
		</ol>
  </ul>',
  );

if (LANG=='ES'){
    $page=$page_es; 
}
else{
    $page=$page_en;
}


echo $twig->render('kinder-party-guidelines.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>