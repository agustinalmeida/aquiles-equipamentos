<nav class="navbar navbar-expand-lg navbar-light bg-mash  pt-0 pb-0">
   <div class="container">
    <ul class="navbar-nav mr-auto social-links">
      <li>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
      </li>
      <li>
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
      </li>
    </ul>

    <a class="navbar-brand" href="<?php echo(site_url())?>">
      <img src="<?php echo getURLTheme(); ?>/assets/img/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse f-right" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo(site_url())?>#nosotros">Nosotros</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Producto 1</a>
            <a class="dropdown-item" href="#">Producto 2</a>
            <a class="dropdown-item" href="#">Producto 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo(site_url())?>#contacto">Contacto</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>