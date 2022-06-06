<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if($resposta == '48020-280'){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: shelley.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: atento.php");
  }

?>