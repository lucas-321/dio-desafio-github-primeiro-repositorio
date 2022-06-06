<?php
  session_start();
  //include_once("conexao.php");

  $resposta= $_POST['resposta'];
  

  
  print "<br>$resposta";

  if(($resposta == 'baruque')||($resposta == 'BARUQUE')||($resposta == 'Baruque')){
    $_SESSION['msg'] = "<p style='color:green;'>Você acertou!</p>";
    header("Location: matrix.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Você errou!</p>";
    header("Location: certo.php");
  }

?>