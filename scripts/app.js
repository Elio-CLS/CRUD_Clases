function buscar_ahora(buscar){
    var parametros = {"buscar":buscar};

    $.ajax({
        data: parametros,
        type: 'POST',
        url: 'sql/buscador.php',
        success: function(data){
            document.getElementById("datos_buscador").innerHTML = data;
        }
    });
}