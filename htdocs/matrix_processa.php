<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if($resposta == 'jo1925'){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: zero.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: matrix.php");
  }

?>