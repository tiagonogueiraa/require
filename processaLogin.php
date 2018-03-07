<?php

   session_start();

   $login = $_REQUEST['login'];
   $senha = $_REQUEST['senha'];

  if(($login == "labweb") && ($senha == "cesjf1234" )){

      $_SESSION['login']= $login;
      $_SESSION['disciplina']= "Laboratorio de WEB - CESJF";

        header("Location:Bemvindo.php");



     }    else {
          echo "login errado";
     }
?>
