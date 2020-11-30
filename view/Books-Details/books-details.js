function init(){

}

$(document).ready(function(){
    var lib_id = getUrlParameter('id');

    $.post("../../controller/libros.php?op=mostrar",{lib_id : lib_id}, function (data) {
    
        data = JSON.parse(data);

        $('#lbltitulo1').html(data.lib_nom);
        $('#lbldescripcion').html(data.lib_descripcion);
        $("#lblimage1").attr("href","../../assets/images/book/"+data.lib_img);
        $("#lblimage2").attr("src","../../assets/images/book/"+data.lib_img);
        $("#lblimage3").attr("href","../../assets/images/book/"+data.lib_img);

        $("#lblvistos").html(' <strong>Vistos : </strong>'+ data.lib_vistas );
        $("#lblpublicado").html(' <strong>Publicado : </strong>'+ data.fech_crea );
        $("#lbldowload").html(' <strong>Descargas : </strong>'+ data.lib_dowload );

        $("#lbltotalpag").html('<strong>Total de Paginas</strong>: '+ data.lib_pag );

    });



});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


init();