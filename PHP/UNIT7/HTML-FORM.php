<form action="gonder.php" method="post">
    <!--
   input
   textarea
   file
   select
   radio
  checkbox
  multible select
  button
   -->
    Ad: <br>
    <input type="text" readonly value="ahmethan" name="ad">
    <hr>
    Hakkımda: <br>
    <textarea name="Hakkımda" id="" cols="50" placeholder="hakkımda birşeyler yazın" rows="5"></textarea>
    Meslek: <br>
    <select name="meslek" id="">
        <option>--Seç--</option>
        <option value="web developer"> Web Developer</option>
        <option selected value="front developer">Front Developer</option>
        <option value="back-end- developer"> Back-End-Developer</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" name="cinsiyet" value="erkek"> erkek</input>
    </label>
    <label>
        <input type="radio" checked name="cinsiyet" value="kadın"> kadın </input>
    </label> <br>
    <label for="input">buraya tıkla </label>
    <input type="text" id="input">

    <button type="submit">Gönder</button>

</form>