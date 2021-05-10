window.onload = function(){
    $('#carga').fadeOut();
}

function language() {
    var idioma = document.getElementById('language').value;
    if (idioma == 'EN') {
        window.location.href = '../index.html';
    } else {
        window.location.href = './es/index.html';
    }
}