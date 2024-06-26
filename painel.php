<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel de Candidatos</title>
   <?php include "head.php"; ?>
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
    <table border="1">
      <tr>
     <?php
        $dados =  $con->query("select * from candidatos order by numero")->fetchAll(PDO::FETCH_ASSOC);
         $i = 0;
        foreach ($dados as $dado){
        	$foto = $dado['foto'];
        	$numero = $dado['numero'];
        	$nome = $dado['nome']; 
            if($i==3){
               echo "</tr><tr>";
               $i = 0;
            }
         echo "<td><center><img class='fotocandidato' src='$foto'><br> <label class='numerocandidato'>$numero<br>$nome</label></center></td>";
         $i = $i+1;
         
      }
           ?>
 </table>
</div>
</body>
</html>