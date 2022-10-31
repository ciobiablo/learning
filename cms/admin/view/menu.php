<?php require admin_view('static/header') ?>

<div class="content">

    <div class="box-">
        <h1>
            Menü Yönetimi
            <a href="<?php echo admin_url('add_menu') ?>">Yeni Ekle</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Menü Başlığı</th>
                <th class="hide">Eklenme Tarihi</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td>
                        <?php echo $row['menu_title'] ?>
                    </td>
                    <td>
                        <?php echo $row['menu_date'] ?>
                    </td>
                    <td>
                        <a href="<?php echo admin_url('edit-menu?id=' . $row['menu_id']) ?>" class="btn">Düzenle</a>
                        <a href="<?php echo admin_url('delete?table=menu&column=menu_id&id=' . $row['menu_id']) ?>"
                           class="btn">Sil</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php require admin_view('static/footer') ?>
