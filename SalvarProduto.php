<?php 
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Novo Produto";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu2.php"; // incluir o menu


// logica para inserir - obter dados do form e montar o comando insert
   // codigo que foi digitado

   print_r($_POST);
   print_r($_FILES);  


$nome = $_POST["nome"]; 
$valor = $_POST["valor"]; 
$imagems = realizarUploadImagemServidor();
$descricao = $_POST["descricao"];


print_r($nome);


$sql = "INSERT INTO produto( nome ,valor, descricao, imagem) 
                VALUES ('$nome',$valor, '$descricao', '$imagems')";
echo "<h1> $sql </h1>"; 






$con = conectarBanco("mundoanimal");
$res = executarInsert($con, $sql,); // funcao executa o insert indicado
desconectarBanco($con);

if($res){
    $msg = "Dados da Racao $nome registrados com sucesso!";
} else{
    $msg = "Houve um erro ao salvar os dados da Racao $nome.";
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


<?php
include "fragmentos/rodape.php"; // rodape ao final
