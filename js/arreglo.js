function hola() {
    var datos = $.ajax({
        url: 'Controllers/pre-vista.php',
        datatype: 'text',
        async: false
    }).responseText;


    document.getElementById('prevista').innerHTML = datos
}