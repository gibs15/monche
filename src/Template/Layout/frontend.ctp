<!DOCTYPE html>
<html lang="es">

<head>
	<?= $this->element('head') ?>
	<?= $this->element('css') ?>
</head>

<body>

	<?= $this->element('navbar') ?>

	<div class="hero-wrap" style="background-image: url(<?= $this->fetch('backimg')?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $this->fetch('title') ?></h1>
          </div>
        </div>
      </div>
    </div>


    		<?= $this->fetch('content') ?>


    <?= $this->element('footer') ?>

	  <!-- loader -->
	  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <?= $this->element('login-modal') ?>
	<?= $this->element('scripts') ?>
  <?= $this->element('login-script') ?>
	<?= $this->fetch('scripts') ?>


</body>

</html>