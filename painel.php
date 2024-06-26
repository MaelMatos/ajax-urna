<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel de Candidatos</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		 .cabecalho{
		 	background: teal;
            position: sticky; 
            z-index: 999px;  
            top: 0;
            left: 0;
            width: auto;            
            color: #FFFFFF;
            text-shadow: 4px 4px 4px black;
            box-shadow: 4px 4px 4px black;
            justify-content: space-between;
		 }

		.logo{
            float: left;
            width: 100px;
            height: 100px;
            border-radius: 24px;
            padding: 5px;

		}

		.fotocandidato{
			width: 120px;
			height: 120px;
		}

		.fotocandidato:hover{
            cursor: pointer;

		}

		.numerocandidato{
			font-size: 30px;
			color: black;
		}

		table{
			background-color: white;
			margin-left: 10px;

		}
	</style>
</head>
<body>
 <div class="cabecalho">
 	<img src="logoetec.png" class="logo">
 	 <center>
     <h1>Urna Eletrônica</h1>
     <h2><i>Sistema de Votação online</i></h2>
     </center>
 </div>
 <div class="container-fluid">
    <table border="1">
     <?php
        $servidor = '127.0.0.1';
        $banco = 'votacao';
        $usuario = 'root';
        $senha = '12345';
        $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
        if (!$conexao){
           die("Erro ao conectar com o Banco de Dados".mysqli_error($conexao));
        }
        $sql = "select * from candidatos order by numero";
        $resultado = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        	$foto = $dados['foto'];
        	$numero = $dados['numero'];
        	$nome = $dados['nome']; 
           ?>
           <td>
           	<center>
           	<img class="fotocandidato" src="<?php echo $foto;?>"><br>
            <label class="numerocandidato"><?php echo $numero;?><br>
            <?php echo $nome;?></label></center>
          </td>
          <?php
           }
          ?>
 </table>
</div>
</body>
</html>