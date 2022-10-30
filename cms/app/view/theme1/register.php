<?php require view('static/header') ?>
<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="post">
                <h3 class="mb-3">Kayıt Ol</h3>
                <?php if ($err = error()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $err; ?>
                    </div>
                <?php endif; ?>
                <?php if ($success = success()): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success; ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Kullanıcı Adınız</label>
                    <input value="<?php echo post('username') ?>" name="username" type="text" class="form-control"
                           id="username"
                           placeholder="Kullanıcı adınızı yazın..">
                </div>
                <div class="form-group">
                    <label for="email">E-posta Adresiniz</label>
                    <input value="<?php echo post('email') ?>" name="email" type="text" class="form-control" id="email"
                           placeholder="E-posta adresinizi yazın..">
                </div>
                <div class="form-group">
                    <label for="password">Şifreniz</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="*******">
                </div>
                <div class="form-group">
                    <label for="password_again">Şifreniz (Tekrar)</label>
                    <input name="password_again" type="password" class="form-control" id="password_again"
                           placeholder="*******">
                </div>
                <input type="hidden" value="1" name="submit">
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>
