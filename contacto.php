<?php require_once "twig_instance.php";
require 'layout.php';


$page_en=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Contact',
  'subtitle' => 'SEND US A MESSAGE',
  'nombre' => 'NAME',
  'mail' => 'MAIL',
  'tel' => 'PHONE',
  'mensaje' => 'MESSAGE',
  'enviar' => 'SEND',
  );

$page_es=array(
  'metaTitle'=>'',
  'metaDescription'=>'',
  'title' => 'Contacto',
  'subtitle' => 'ENVIANOS UN MENSAJE',
  'nombre' => 'NOMBRE',
  'mail' => 'MAIL',
  'tel' => 'TELÉFONO',
  'mensaje' => 'MENSAJE',
  'enviar' => 'ENVIAR',
  );

if (LANG=='ES'){
    $page=$page_es; 
}
else{
    $page=$page_en;
}
echo $twig->render('contacto.html',array('main_menu'=>$main_menu,'footer'=>$footer,'page'=>$page));
?>