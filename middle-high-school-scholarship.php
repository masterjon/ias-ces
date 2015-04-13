<?php require_once "twig_instance.php";
require 'layout.php';
require 'sidebar-middle-high-school.php';
$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Scholarship',
  'subtitle' => '',
  'content'=>'<h4>Instituto Suizo de Gastronomía y Hotelería  (ISU)</h4>
  			  <p>www.isu.edu.mx</p>
  			  <ul class="margin-15 text-justify">
  			  	<li>Por cada generación  del último ciclo escolar   1  (una)  beca  del  50% al alumno con promedio mínimo 9.0 (nueve) acumulado en los 3 años de bachillerato; esta beca será valida para estudiar en el ISU cualquiera de sus licenciaturas y dicha beca podrá ser renovada mientras se mantenga   un promedio   mínimo de 9.0 (nueve) sin presentar materias reprobadas y el convenio siga vigente.</li> <br>
  			  	<li>Por cada generación del último ciclo escolar  2 (dos) becas del 25% a los alumnos con promedio mínimo 8.5 (ocho punto cinco) acumulado  en los 3  años  de  bachillerato;  esta  beca  será  valida  para  estudiar  en  el  ISU cualquiera de sus licenciaturas y dicha beca  podrá ser renovada mientras se mantenga   un promedio  mínimo de 8.5 (ocho punto cinco) sin presentar materias reprobadas y el convenio siga vigente.</li><br>
  			  	<li>Pase directo a cada alumno acreedor de las becas señaladas en el inciso A) y B) por lo que no habrá necesidad de que apliquen  examen de admisión.</li><br>
  			  	<li>La beca se renovará siempre y cuando:
				Entregue oportunamente toda la documentación requerida
				Cumpla con el reglamento interno del “ISU”
				No cause baja</li><br>
  			  </ul>
  			  <h4>Tecnologico de Monterrey Campus Puebla</h4>
  			  <p>www.itesm.edu/wps/wcm/connect/Campus/PUE/Puebla/</p>
  			  <p class="text-justify">El reconocimiento consiste en la asignación de becas la cual se realiza con base en los resultados de la evaluación de los alumnos de 5o semestre, a quienes se les aplica un examen diagnóstico en las áreas de verbal, matemáticas y de redacción indirecta (PAA).  El puntaje máximo del examen diagnostico es de 2,400 puntos.</p>
  			  <ul class="margin-15 text-justify">
				<li><b>Beca de Excelencia </b><br>
				90% al mejor promedio de la generación (no transferible).</li><br>
				<li><b>Becas de Talento</b> -  basadas en promedios de la generación (15 alumnos minimo)<br>
				1950 - 2100  Promedio de Generación PAA –  una beca del 50% pura<br>
				2101  - 2250  Promedio de Generación PAA  –  dos becas del 50% puras<br>
				2251 - 2400 Promedio de Generación PAA  –  una beca del 80% pura</li><br>
				<li>Las becas son asignadas a la generación que se gradúa.<br>
				La beca del 80% puede ser asignada entre el 1o y 2o mejor promedio de la generación<br>
				La beca del 50% pura puede ser transferible del 1o al 5o mejor promedio de la generación</li>
  			  </ul>
  			  <h4>Universidad Autónomo de Guadalajara  (UAG)</h4>
  			  <p>www.uag.mx</p>
  			  <ul class="margin-15 text-justify">
				<li>Con un promedio de 8.0 minimo – no hay examen de admision <br>
					Hay que hacer los demas requisitos de tramite de admision</li>
				<li>Con un promedio de 8.0 – 25% descuento en colegiatura</li>
  			  </ul>
  			  <h4>Universidad de las Americas Puebla (UDLAP)</h4>
  			  <p>Universidad de las Americas Puebla (UDLAP)</p>
  			  <p class="text-justify">Para todos aquellos alumnos con promedio acumulado de 8.0 como mínimo al término de sus estudios de preparatoria o equivalente:</p>
  			  <ol class="margin-15 text-justify">
  			  	<li>Ingreso automático sin presentar examen de admisión y realizando tramite en el Departamento de Admisiones.</li>
  			  	<li>Quedarán exentos del pago de la cuota del examen de admisión.</li>
  			  	<li>Quedarán exentos del pago de la cuto única de admisión.</li>
  			  	<li>Podrán calificar a la be “fraternitas.”  Esta beca cubrirá de manera automática y por toda la carrera al ser tramitada, un 10% de la colegiatura.  Podrá incrementarse hasta un 40% si el estudiante lo solicita, realizándose un estudio socioeconómico para la evaluación del incremento requerido.  Para obtener mayor apoyo podrá optar por un Crédito Educativo hasta de un 20%. Los estudiantes que obtengan un apoyo mayor del 10% participarán en el Programa de Formación al Estudiante Becario.  El estudiante deberá realizar el tramite en le periodo establecido por el Departamento de Beca.</li>
  			  	<li>Los alumnos con promedio acumulado de 9.5 podrán calificar a la beca “UDLA”, obteniendo en la aplicación del examen de admisión un puntaje mínimo de 1350, que cubre del 20 a un 60% de beca por el total de la colegiatura, previo estudio socioeconómico.  El apoyo se otorga durante toda la carrera, siempre y cuando el estudiante no repruebe materias y cumpla con el reglamento de Ayuda Financiera del la UDLA Puebla.  Para obtener mayor apoyo podrá optar por un Crédito Educativo hasta de un 20%.</li>
  			  </ol>
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

echo $twig->render('middle-high-school-scholarship.html',array('main_menu'=>$main_menu,'footer'=>$footer,'sidebar'=>$sidebar,'page'=>$page));
?>