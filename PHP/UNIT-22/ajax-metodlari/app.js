$(function () {

    // $.ajax
    /*
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {'adsoyad': 'Ahmet Han Ucmaz'},
        success: function(response){
            if (response.adsoyad){
                alert(response.adsoyad);
            }
        },
        dataType: 'json'
    });
    */

    // $.post
    /*
    $.post('ajax.php', {'adsoyad': 'Ahmet Han Ucmaz'}, function(response){
        console.log(response);
    }, 'json');
    */

    // $.get 
    $.get('ajax.php', {'adsoyad': 'Ahmet Han Ucmaz'}, function (response) {
        console.log(response);
    }, 'json');

});