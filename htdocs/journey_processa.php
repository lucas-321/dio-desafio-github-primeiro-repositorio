<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if(($resposta == 'SOFONIAS')||($resposta == 'sofonias')){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: puzzle.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: journey.php");
  }

?>