<?php require view('static/header')?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"><?php echo setting('welcome_title') ?></h1>
        <p class="lead text-muted"><?php echo setting('welcome_description') ?></p>
        <p>
            <a href="#" class="btn btn-primary my-2">Blog'a Gözat</a>
            <a href="#" class="btn btn-secondary my-2">İletişime Geç</a>
        </p>
    </div>
</section>
<div class="container">
    <div class="row pb-2">
        <div class="col-md-12">
            <h4 class="pb-3">Neler yapıyorum?</h4>
        </div>
        <?php require view('static/footer')?>
