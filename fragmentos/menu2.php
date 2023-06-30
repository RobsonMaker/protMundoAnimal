<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md fixed-top py-1 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"> Mundo Animal</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item "><a href="telaInicialLogado.php" class="navbar-brand">Home</a></li>
        
        
      <form class="d-flex">
  
  <?php 
      if( !isset($_SESSION["logado"]) ){ // se nao esta logado, exibe botao entrar
        
        echo "<li class='nav-item'><a href='perfil.php' class='navbar-brand'>Perfil</a></li>";
        
        echo "<li class='nav-item bg-danger'><a href='Logout.php' class='navbar-brand'>Sair</a></li>";
      
        } 

    ?>
    </form>
           
        <li class="nav-item"><a href="#" class="navbar-brand">Sobre</a></li>
        <li class="nav-item"><a href="#" class="navbar-brand">Serviços</a></li>
        <li class="nav-item"><a href="#" class="navbar-brand">Contato</a></li>

      </ul>
    </div>
  </div>
</nav>

<br><br>