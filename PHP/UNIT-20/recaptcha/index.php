<script>
    var guvenlik1;
    var onloadCallback = function () {
        guvenlik1 = grecaptcha.render('guvenlik1', {
            'sitekey': '6LcYHIQUAAAAAMbkaF2gUWB7kTJDhBhEZl3UL_Z5',
            'theme': 'dark'
        });
    };
</script>
<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=tr' async defer></script>

<form action="form.php" method="post">
    <input type="text" name="name" placeholder="Adınız"> <br>
    <div id="guvenlik1"></div>
    <br>
    <button type="button" onclick="javascript:grecaptcha.reset(guvenlik1)">Resetle</button>
    <button type="submit">Gönder</button>
</form>

<!--<div class="g-recaptcha" data-sitekey="6LcYHIQUAAAAAMbkaF2gUWB7kTJDhBhEZl3UL_Z5"></div>-->