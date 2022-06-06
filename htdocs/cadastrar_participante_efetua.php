<?php
  session_start();
  include_once("conexao.php");

  $nome= $_POST['nome'];
  $equipe= $_POST['equipe'];
  

  
  print "<br>$nome<br>$equipe";


  $result_semana = "INSERT INTO participantes (nome_participante, id_equipe_participante) VALUES ('$nome', '$equipe')";
  $resultado_semana = mysqli_query($conn, $result_semana) or die(mysqli_error($conn));


  if(mysqli_insert_id($conn)){
    echo "<script>alert('Participante Registrado com sucesso!')</script>";
    header("Location: cadastrar_participante.php");
  }else{
    echo "<script>alert('Participante não Registrado!')</script>";
    header("Location: cadastrar_participante.php");
  }
?>