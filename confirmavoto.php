<?php
   $candidato = $_POST['candidato'];
  require "head.php";
  $dados = con->query("select * from candidatos where numero = $candidato order by numero")->fetch(PDO::FETCH_ASSOC);
   $foto = $dados['foto'];
   $nome = $dados['nome'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Confirmação do Voto</title>
<style>
         .box{
         	width: 500px;
         	height: 350px;
         	background-color: white;
         }
 
         img{
         	width: 100px;
         	height: 170px;
         	float: left;
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
<h1>Confirmar Voto</h1>
</div> 
<form name="form1" method="post" action="incluivoto.php">
<table>
<tr>
<td rowspan="3"><img src=<?php echo $foto;?>></td>
</tr>
<tr>  
<td><label class="w3-text-teal"><b>Número do Candidato</b></label></td>
<td><input class="w3-input w3-border w3-lightgrey" name="candidato" type="number" readonly value=<?php echo $candidato;?>></td>
</tr>
<tr>   
<td><label class="w3-text-teal"><b>Nome do Candidato</b></label></td>
<td><input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text" readonly value=<?php echo "'$nome'";?>></td>
</tr>
</table>
<br>
<button class="w3-btn w3-blue-grey">Confirmar</button>
</form>
</div>
</div>
</div>
</body>
</html>