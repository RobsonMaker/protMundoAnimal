<?php 
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Novo Usuario";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu2.php"; // incluir o menu


// logica para inserir - obter dados do form e montar o comando insert
   // codigo que foi digitado

   
$nome = $_GET["nome"]; 
$email = $_GET["email"]; 
$senha = $_GET["senha"]; 
$endereco = $_GET["endereco"]; 


// nome que foi digitado
  // ...

// montando comando sql de insercao
$sql = "INSERT INTO usuario ( nome, email, senha, endereco) 
                VALUES ('$nome', '$email', '$senha', '$endereco')";
echo "<h1> $sql </h1>"; // exibindo so pra testar..

$con = conectarBanco("mundoanimal");
$res = executarInsert($con, $sql); // funcao executa o insert indicado
desconectarBanco($con);

if($res){
    $msg = "Dados do Usuario $nome registrados com sucesso!";
} else{
    $msg = "Houve um erro ao salvar os dados do Usuario $nome.";
}

?>

<!-- container com conteudo-->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="bg-info text-white text-center fs-1 py-2 mb-5">
                <?=$msg ?>
            </div>
        </div>
    </div>
</div>

<div>
<button type="submit" class="btn btn-color px-5 mb-5 w-100" action="perfil.php">Continuar</button>

</div>


<?php
include "fragmentos/rodape.php"; // rodape ao final
