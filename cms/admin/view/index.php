
<?php require admin_view('static/header')?>

    <div class="box-container">
        <div class="box" id="div-0">
            <h3><?php echo 'Hoş geldin' ?></h3>
            <div class="box-content">
                <p>
                    <?php echo $homeText ?>
                </p>
            </div>
        </div>
    </div>

    <div class="box-container container-25">
        <div class="box" id="div-1">
            <h3>
                Quick Draft
            </h3>
            <div class="box-content">
                <form action="" class="form">
                    <ul>
                        <li>
                            <input type="text" id="input" placeholder="Title">
                        </li>
                        <li>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Whats on your mind?"></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="box-container container-50">
        <div class="box" id="div-2">
            <h3>
                Activity
            </h3>
            <div class="box-content">
                Yaz bir şeyler şenlensin yürekler :)
            </div>
        </div>
    </div>

    <div class="box-container container-25">
        <div class="box" id="div-3">
            <h3>
                Quick Draft
            </h3>
            <div class="box-content">
                <form action="" class="form">
                    <ul>
                        <li>
                            <label for="title" class="title">Title</label>
                            <input type="text" id="title">
                        </li>
                        <li>
                            <label for="message" class="title">Whats on your mind?</label>
                            <textarea name="" id="message" cols="30" rows="5"></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

<?php require admin_view('static/footer')?>
