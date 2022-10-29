<div class="col-md col-12 pb-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">PSD/Sketch to HTML</h5>
            <h6 class="card-subtitle mb-2 text-muted">Front-end Developer</h6>
            <p class="card-text">Photoshop ya da .sketch dosyalarınızı gönderin, html5/css3 kodlanmış şekilde
                geri alın.</p>
            <a href="#" class="btn btn-sm btn-danger">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<div class="col-md col-12 pb-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Web Yazılım</h5>
            <h6 class="card-subtitle mb-2 text-muted">Back-end Developer</h6>
            <p class="card-text">Projelerinize hayat verip dinamiklik katıyorum. Yazılım dili olarak PHP
                kullanıyorum.</p>
            <a href="#" class="btn btn-sm btn-primary">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<div class="col-md col-12 pb-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Mobil Uygulama</h5>
            <h6 class="card-subtitle mb-2 text-muted">Mobile Developer</h6>
            <p class="card-text">Native değil ama hybrid olarak istediğin projenin mobil uygulamasını yazıyorum.
                İster react ister cordova.</p>
            <a href="#" class="btn btn-sm btn-dark">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
</div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
                             width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 1993-2018</small>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md pr-5">
                        <h5>Hakkımda</h5>
                        <p class="small">
                            <?php echo setting('about'); ?>
                        </p>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Sosyal Medya</h5>
                        <ul class="list-unstyled text-small">
                            <?php if ($facebook = setting('facebook')): ?>
                                <li><a class="text-muted" href="https://facebook.com/<?php echo $facebook ?>"><i
                                                class="fab fa-facebook-square"></i> <?php echo $facebook; ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($twitter = setting('twitter')): ?>
                                <li><a class="text-muted" href="https://twitter.com/<?php echo $twitter; ?>"><i
                                                class="fab fa-twitter-square"></i>
                                        <?php echo $twitter; ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($instagram = setting('instagram')): ?>
                                <li><a class="text-muted" href="https://instagram.com/<?php echo $instagram ?>"><i
                                                class="fab fa-instagram"></i> <?php echo $instagram; ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($linkedin = setting('linkedin')): ?>
                                <li><a class="text-muted" href="https://linkedin.com/in/<?php echo $linkedin; ?>"><i class="fab fa-linkedin"></i> <?php echo $linkedin; ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>