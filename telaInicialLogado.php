<?php

// montar a pagina com os fragmentos de pagina
include "_funcoesConfigBanco.php";
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu2.php";

$sql = "SELECT * FROM produto";

$con = conectarBanco("mundoanimal"); 

$realiza = executarSelect($con, $sql);

desconectarBanco($con); 

?>


<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Casa de Ração</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="layout/meuestilo.css" rel="stylesheet" />
</head>

<body class="container"> 

<div class="row responsivo ">


<?php
foreach ($realiza as $r) { 
?>

<div class="col mb-5">            
    
    <div class="card "  style="width: 350px;  " >
        <div class="card-body">
            <h5 class="card-title"> <?= $r["nome"] ?>  </h5> 
            <p class="card-text">
                                  
               valor:     <?= $r["valor"] ?> 
             
            </p>
            
        </div>
    </div>

</div>

<?php
}
?>

<br>
<div class="" >
  <img src="imagem/racao.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<div class="" >
  <img src="imagem/racao.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

</div>

</body>
