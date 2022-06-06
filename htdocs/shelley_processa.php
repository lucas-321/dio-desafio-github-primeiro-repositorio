<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if($resposta == '514'){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: errado.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: shelley.php");
  }

?>