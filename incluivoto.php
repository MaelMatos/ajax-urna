<?php
  require "head.php";
  $resultado = $con->query("insert into votos (candidato) values ($candidato)");
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Registro do Voto</title>
<style>
     .box{
         width: 500px;
         height: 400px;
         background-color: white;
     }
 
     audio{
      display: none;
     }
</style>
</head>
<body bgcolor="silver">
<div class="w3-display-middle"> <!-- Deixa o form no centro da tela-->
<div class="w3-center w3-animate-top"><!--animação caindo na tela-->
<div class="box"> <!-- Desenha uma caixa branca-->
<div class="w3-container w3-teal"><!--Desenha um quadrado na tela com o um título-->
<h1>Voto Registrado !</h1>
</div> 
<br>
<img src="ok.png" width="200px" height="200px">
<br>
<br>
<button class="w3-btn w3-blue-grey" onclick="voltar();">Voltar</button>
<script>
          function voltar(){
            window.location.assign("painel.php");
          } 
</script>
</div>
</div>
</div>
<audio controls autoplay>
<source src="confirmavoto.mp3" type="audio/mpeg">
</audio>
</body>
</html>