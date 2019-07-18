<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>Suscripción

<?php $this->end();?>






    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Evento:</span> <?php echo $event->name ?></p>
          </div>
          <div class="col-md-3">
            <p><span>Organizador:</span> <?php echo $event->user['name']?></p>
          </div>
          <div class="col-md-3">
            <p><span>Telefono:</span> <a href="tel://1234567920">88234654</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">jrojas@proveedor.com</a></p>
          </div>

        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Complete esta informacion</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cantidad de comidas">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cantidad de comidas">
              </div>
              
            </form>
          
          </div>

        </div>
      </div>
    </section>