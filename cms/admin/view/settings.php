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
        </ul>
        <h1>Bakım Modu Ayarları</h1>
        <ul>
            <li>
                <label ">Bakım Modu Açık mı?</label>
                <div class="form-content">
                    <select name="settings[maintenance_mode]">
                        <option <?php echo setting('maintenance_mode') == 1 ? 'selected' : null; ?> value="1">Evet
                        </option>
                        <option <?php echo setting('maintenance_mode') == 2 ? 'selected' : null; ?> value="2">Hayır
                        </option>
                    </select>
                </div>
            </li>
            <li>
                <label ">Bakım Modu Başlık </label>
                <div class="form-content">
                    <input type="text" name="settings[maintenance_mode_title]"
                           value="<?php echo setting('maintenance_mode_title'); ?>">
                </div>
            </li>
            <li>
                <label ">Bakım Modu Açıklama </label>
                <div class="form-content">
                    <textarea name="settings[maintenance_mode_description]" cols="30"
                              rows="5"><?php echo setting('maintenance_mode_description'); ?></textarea>
                </div>
            </li>
        </ul>
        <h1>Tema Ayarları</h1>
        <ul>
            <li>
                <label ">Logo Başlığı </label>
                <div class="form-content">
                    <input type="text" name="settings[logo]"
                           value="<?php echo setting('logo'); ?>">
                </div>
            </li>
            <li>
                <label ">Arama Input Place Holder  </label>
                <div class="form-content">
                    <input type="text" name="settings[search_placeholder]"
                           value="<?php echo setting('search_placeholder'); ?>">
                </div>
            </li>
            <li>
                <label ">Hakkımda Yazısı </label>
                <div class="form-content">
                    <textarea name="settings[about]" cols="30"
                              rows="5"><?php echo setting('about'); ?></textarea>
                </div>
            </li>
            <li>
                <label ">Instagram </label>
                <div class="form-content">
                    <input type="text" name="settings[instagram]"
                           value="<?php echo setting('instagram'); ?>">
                </div>
            </li>
            <li>
                <label ">Facebook </label>
                <div class="form-content">
                    <input type="text" name="settings[facebook]"
                           value="<?php echo setting('facebook'); ?>">
                </div>
            </li>
            <li>
                <label ">Twitter </label>
                <div class="form-content">
                    <input type="text" name="settings[twitter]"
                           value="<?php echo setting('twitter'); ?>">
                </div>
            </li>
            <li>
                <label ">linkedin </label>
                <div class="form-content">
                    <input type="text" name="settings[linkedin]"
                           value="<?php echo setting('linkedin'); ?>">
                </div>
            </li>
            <li>
                <label ">Hoş Geldin Title </label>
                <div class="form-content">
                    <input type="text" name="settings[welcome_title]"
                           value="<?php echo setting('welcome_title'); ?>">
                </div>
            </li>
            <li>
                <label ">Hoş Geldin Description </label>
                <div class="form-content">
                    <textarea name="settings[welcome_description]" cols="30"
                              rows="5"><?php echo setting('welcome_description'); ?></textarea>
                </div>
            </li>
        </ul>
        <ul>
        <li class="submit">
            <input type="hidden" name="submit" value="1">
            <button type="submit">Ayarları Kaydet</button>

        </ul>
    </form>
</div>

<?php require admin_view('static/footer') ?>
