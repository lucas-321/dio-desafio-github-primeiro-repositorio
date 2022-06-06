<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if($resposta == 'numeros1333'){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: journey.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: campo.php");
  }

?>