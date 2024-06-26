<?php
   $candidato = $_POST['txtNumero'];
   $nome = $_POST['txtNome'];
   $destino = $_FILES['foto']['name'];
   $foto = $_FILES['foto']['tmp_name'];
   move_uploaded_file($foto, $destino);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Candidato Cadastrado</title>
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
	</style>
</head>
<body bgcolor="silver">
 <div class="w3-display-middle"> <!-- Deixa o form no centro da tela-->
 <div class="w3-center w3-animate-top"><!--animação caindo na tela-->
 <div class="box"> <!-- Desenha uma caixa branca-->
 <div class="w3-container w3-teal"><!--Desenha um quadrado na tela com o um título-->
     <h1>Confirma Candidato</h1>
 </div> 
 <form name="form1" method="post" action="incluicandidato.php">
 <table>
    <tr>
      <td rowspan="3"><img src=<?php echo $destino;?>></td>
    </tr>
    <tr>  
      <td><label class="w3-text-teal"><b>Número do Candidato</b></label></td>
      <td><input class="w3-input w3-border w3-lightgrey" name="txtNumero" type="number" readonly value=<?php echo $candidato;?>></td>
    </tr>
    <tr>   
       <td><label class="w3-text-teal"><b>Nome do Candidato</b></label></td>
       <td><input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text" readonly value=<?php echo "'$nome'";?>></td>
    </tr>
  </table>
  <br>
  <input hidden="true" type="text" name="fotocandidato" value=<?php echo $destino;?>> 
  <button class="w3-btn w3-blue-grey">Confirmar</button>
</form>
</div>
</div>
</div>
</body>
</html>
