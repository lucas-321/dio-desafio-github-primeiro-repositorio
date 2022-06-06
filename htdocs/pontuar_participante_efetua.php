<?php
  session_start();
  include_once("conexao.php");

  $id= $_POST['nome'];

  $dados_cab2 = "SELECT * FROM participantes WHERE id_participante = $id";

      $result_dados2 = mysqli_query($conn, $dados_cab2);

      while ($row_dados2 = mysqli_fetch_assoc($result_dados2)) { 
          
          $atual = $row_dados2['pontuacao_participante'] ;
  
      }
  
  $pontos= $_POST['pontos'];
  $total = $pontos + $atual;
  

  
  print "<br>$id<br>$atual<br>$pontos<br>$total";


  $result_semana = "UPDATE participantes SET pontuacao_participante = '$total' WHERE id_participante = $id";
  $resultado_semana = mysqli_query($conn, $result_semana) or die(mysqli_error($conn));


  if(mysqli_insert_id($conn)){
    echo "<script>alert('Participante Pontuado com sucesso!')</script>";
    header("Location: pontuar_participante.php");
  }else{
    echo "<script>alert('Participante não Pontuado!')</script>";
    header("Location: pontuar_participante.php");
  }
?>