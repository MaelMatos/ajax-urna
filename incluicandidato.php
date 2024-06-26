<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
       $servidor = '127.0.0.1';
       $banco = 'votacao';
       $usuario = 'root';
       $senha = '12345';
       $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
       if (!$conexao){
       	die("Erro ao conectar com o Banco de Dados".mysqli_error($conexao));
       }
       $numero = $_POST['txtNumero'];
       $nome = $_POST['txtNome'];
       $foto = $_POST['fotocandidato'];
       $sql = "insert into candidatos(numero, nome, foto) values ('$numero', '$nome','$foto')";
       $resultado = mysqli_query($conexao, $sql);
       if (!$resultado){
       	  die("Erro ao inserir o Candidato!".mysqli_error($conexao));
       }
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
            window.location.assign("index.html");
          } 
      </script>
   </div>
   </div>
   </div>
</body>      
</html>