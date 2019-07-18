<?php 
    $this->start('backimg');

?>

    <?php echo $this->request->webroot; ?>images/bg_1.jpg

<?php $this->end();?>

<?php 
    $this->start('title');

?>Eventos

<?php $this->end();?>





    <section class="ftco-section">
      <div class="container">
        <div class="row">


          <?php foreach ($events as $event): ?>
          	<div class="col-md-4 d-flex ftco-animate">
            	<div class="blog-entry align-self-stretch">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo $this->request->webroot; ?>images/event-1.jpg');">
                </a>
                <div class="text p-4 d-block">
                	<div class="meta mb-3">
                    <div><a href="#"><?= h($event->user['name']) ?></a></div>
                    <!--div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div-->
                  </div>
                  <h3 class="heading mb-4"><a href="#"><?= h($event->name) ?></a></h3>
                  <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> <?= h($event->datetime) ?></span> </p>
                  <p><?= h($event->address) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                  <p><?= $this->Html->link('Suscribirse al evento',['controller' => 'Subscriptions', 'action' => 'new',$event->id]);?></i></a></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>


        </div>
       
      </div>
    </section>
		
