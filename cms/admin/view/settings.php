<?php require admin_view('static/header') ?>

<div class="box-">
    <h1>
        Ayarlar
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <form action="" method="post" class="form label">
        <ul>
            <li>
                <label ">Site Title</label>
                <div class="form-content">
                    <input type="text" name="settings[title]" value="<?php echo setting('title'); ?>">
                </div>
            </li>
            <li>
                <label ">Site Description</label>
                <div class="form-content">
                    <input type="text" name="settings[description]" value="<?php echo setting('description'); ?>">
                </div>
            </li>
            <li>
                <label ">Site Keywords</label>
                <div class="form-content">
                    <input type="text" name="settings[keywords]" value="<?php echo setting('keywords'); ?>">
                </div>
            </li>
            <li>
                <label ">Site theme</label>
                <div class="form-content">
                    <select name="settings[theme]">
                        <option value=""> -- Tema Seç --</option>
                        <?php foreach ($themes as $theme): ?>
                            <option <?php echo setting('theme') == $theme ? ' selected' : null ?>
                                    value="<?php echo $theme; ?>"><?php echo $theme; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </li>
            <li class="submit">
                <input type="hidden" name="submit" value="1">
                <button type="submit">Ayarları Kaydet</button>
            </li>
        </ul>
    </form>
</div>

<?php require admin_view('static/footer') ?>
