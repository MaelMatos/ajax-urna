<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "head.php"; ?>
	<title>Cadastro de Candidatos</title>
	<style>
         .box{
         	width: 500px;
         	height: 350px;
         	background-color: white;
         }
	</style>
</head>
<body bgcolor="silver">
 <div class="w3-display-middle"> <!-- Deixa o form no centro da tela-->
 <div class="w3-center w3-animate-top"><!--animação caindo na tela-->
 <div class="box"> <!-- Desenha uma caixa branca-->
 <div class="w3-container w3-teal"><!--Desenha um quadrado na tela com o um título-->
     <h1>Cadastro de Candidatos</h1>
 </div>
 <form  enctype="multipart/form-data" method="post" action="confirmacandidato.php"> 
 <label class="w3-text-teal"><b>Número do Candidato</b></label>
 <input class="w3-input w3-border w3-lightgrey" name="txtNumero" type="number">
 <label class="w3-text-teal"><b>Nome do Candidato</b></label>
 <input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text">
 <label class="w3-text-teal"><b>Selecione uma Foto</b></label>
 <input class="w3-input w3-border w3-lightgrey" name="foto" type="file">
 <br>
 <button class="w3-btn w3-blue-grey">Enviar</button>
</form>
</div>
</div>
</div>
</body>
</html>