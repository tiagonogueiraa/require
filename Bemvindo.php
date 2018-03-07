<?php

session_start();

$login = $_SESSION['login'];
$disciplina = $_SESSION['disciplina'];


echo "Bem - Vindo ".$login."!"." De ,".$disciplina."<br><br>";

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8' , 'pt_BR.utf-8' , 'portugues');
date_default_timezone_set('America/Sao_Paulo');


echo "Hoje são ".  strftime('%A, %B , %Y', strtotime('today'));

?>
