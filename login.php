<?php

// montar a pagina com os fragmentos de pagina
$titulo = "login";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

if (isset($_GET["msg"])) {
  $msg = "Dados incorretos";
} else {
  $msg = ""; // caso contrario, eh a primeira vez que acessa a pagina
}

// conteudo vem aqui
?>


<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login</h2>
        
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="VerificarLogin.php" method="POST">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Email " name="email" required> 
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            
            <div class="text-danger"><?= $msg ?></div>

            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Não
              é Registrado? <a href="cadastroUsuario.php" class="text-dark fw-bold"> Crie uma
                Conta!</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

<?php

include "fragmentos/rodape.php"; 
