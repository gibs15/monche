  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
	  <img src="images/logoMonche2.png" alt="Logo" height="85" width="180">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menú
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item inactive"><a class="nav-link">Administrar</a></li>
          <li class="nav-item "><?= $this->Html->link('Usuarios',['controller' => 'Users', 'action' => 'index'],['class' => 'nav-link']);?></li>
          <li class="nav-item "><?= $this->Html->link('ONGs',['controller' => 'Ongs', 'action' => 'index'],['class' => 'nav-link']);?></li>
          <li class="nav-item "><?= $this->Html->link('Eventos',['controller' => 'Events', 'action' => 'index'],['class' => 'nav-link']);?></li>
          <li class="nav-item "><?= $this->Html->link('Suscripciones',['controller' => 'Subscriptions', 'action' => 'index'],['class' => 'nav-link']);?></li>
          <li class="nav-item ">|</li>
          <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
          <li class="nav-item"><?= $this->Html->link('Sobre nosotros',['controller' => 'Pages', 'action' => 'display', 'about'],['class' => 'nav-link']);?></li>
          <li class="nav-item"><?= $this->Html->link('Eventos',['controller' => 'Events', 'action' => 'display'],['class' => 'nav-link']);?></li>
          <!--li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li-->
          <li class="nav-item"><a class="nav-link" href="javascript:modalLogin()">Ingresar</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->