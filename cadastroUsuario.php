<?php

include "_funcoesConfigBanco.php";
$titulo = "Mundo Animal";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

$con = conectarBanco("mundoanimal");

/*
$dadosMax = executarSelect($con, "SELECT max(codigo) as maximo FROM usuario");
print_r($dadosMax);
$maxId = $dadosMax[0]["maximo"];
$proximoId = $maxId + 1; 
*/

// obtendo todos os autores para carregar combobox (select)
$gravadoras  = executarSelect($con, "SELECT codigo, nome, senha, email, endereco FROM usuario ORDER BY nome");
//print_r($gravadoras);
desconectarBanco($con);



?>


<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Cadastro</h2>
        
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="SalvarUsuario.php" method="GET">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
            </div>
            
            <div class="mb-3">
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Email " name="email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="endereco" placeholder="Endereco" name="endereco"required>
            </div>



            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Cadastrar</button></div>
            
            

            
          </form>
        </div>

      </div>
    </div>
  </div>

<?php

include "fragmentos/rodape.php"; 
