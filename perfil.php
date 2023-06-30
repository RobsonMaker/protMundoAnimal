<link href="layout/meuestilo.css" rel="stylesheet" />
<?php

// montar a pagina com os fragmentos de pagina
include "_funcoesConfigBanco.php";
$titulo = "Seu Perfil no Sistema ";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu2.php"; // incluir o menu

$con = conectarBanco("mundoanimal"); 


session_start();

$email = $_SESSION['email'];

$autores = executarSelect($con, "SELECT codigo, nome, email, senha, endereco FROM usuario where email='$email' ");


desconectarBanco($con); 

?>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>INFORMAÇÕES</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    


                    <?php 

if(isset($_SESSION["logado"])){ 
   
    printf("<p>  %s <p>", $_SESSION["email"]);
   
}       
               ?> 



                  </div>
                  <div class="col-6 mb-3">
                    <h6>Nome</h6>
                    <?php 

                    foreach($autores as $r){
                  echo $r['nome'];

                        }
                   ?> 
                  </div>
                </div>
                <h6>Informativo</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Endereco</h6>
                   
                    <?php 

            foreach($autores as $r){
                    echo $r['endereco'];

                    }
                    ?> 
                    
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Senha</h6>
                  
                    <?php 

foreach($autores as $r){
echo $r['senha'];

}
?> 


                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br>
           
           <div> 
           <a href="cadastroProduto.php" class="btn btn-primary responsivo"> Cadastrar Produto</a>
        
        </div>
 
