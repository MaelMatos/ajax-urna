<!DOCTYPE html>
<html>
  <?php include "head.php"; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastro de Candidatos</title>
<style>
     .box{
      	width: 500px;
       	height: 450px;
       	background-color: white;
     }
</style>
</head>
<body bgcolor="silver">
 <div class="w3-display-middle"> <!-- Deixa o form no centro da tela-->
 <div class="w3-center w3-animate-top"><!--animação caindo na tela-->
 <div class="box"> <!-- Desenha uma caixa branca-->
 <div class="w3-container w3-teal"><!--Desenha um quadrado na tela com o um título-->
     <h1>Candidato Cadastrado</h1>
 </div>	
    <?php
       $numero = $_POST['txtNumero'];
       $nome = $_POST['txtNome'];
       $foto = $_POST['fotocandidato'];
       $con->query("insert into candidatos(numero, nome, foto) values ('$numero', '$nome','$foto')");
     ?>
      <audio controls autoplay>
          <source src="owin31.mp3" type="audio/mpeg">
      </audio>
      <img src="ok.png" width="200px" height="200px">
      <br>
      <br>
      <button class="w3-btn w3-blue-grey" onclick="voltar();">Voltar</button>
      <script>
          function voltar(){
            window.location.assign("index.php");
          } 
      </script>
   </div>
   </div>
   </div>
</body>      
</html>