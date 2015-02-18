<?php 
//session_start();
$languages = array('ES','EN');
if(in_array($_GET['lang'], $languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}
define('LANG', in_array($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'EN');
$lang_redirect="http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];


$main_menu_en=array(
    'home'=>'Home',
    'about_us'=>'About Us',
    'admissions'=>'Admissions',
    'students_life'=>'Students Life',
    'schools'=>'Schools',
    'kinder'=>'Kinder',
    'primary'=>'Primary',
    'middle_high'=>'Middle/High School',
    'contact_us' => 'Contact Us',
    'search'=> 'Search',
    'lang_redirect'=>$lang_redirect,
    'lang'=>LANG
    );
$main_menu_es=array(
    'home'=>'Home',
    'about_us'=>'About Us',
    'admissions'=>'Admissions',
    'students_life'=>'Students Life',
    'schools'=>'Schools',
    'kinder'=>'Kinder',
    'primary'=>'Primary',
    'middle_high'=>'Middle/High School',
    'contact_us' => 'Contactanos',
    'search'=> 'Buscar',
    'lang_redirect'=>$lang_redirect,
    'lang'=>LANG
    );
$footer_en=array(
    'all_rights'=>'All rights reserved IAS/CES.2014',
    'privacy'=>'Privacy Note',
    );
$footer_es=array(
    'all_rights'=>'All rights reserved IAS/CES.2014',
    'privacy'=>'Privacy Note',
    );

if (LANG=='ES'){
    $main_menu=$main_menu_es;
    $footer=$footer_es; 
}
else{
    $main_menu=$main_menu_en;
    $footer=$footer_en;
    
}

?>
