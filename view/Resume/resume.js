function init(){
   
}

$(document).ready(function(){
    var cur_id = getUrlParameter('id');
    console.log(cur_id);

    $.post("../../controller/cursos.php?op=mostrar",{cur_id : cur_id}, function (data) {
        data = JSON.parse(data);
        console.log(data);
        $('#lbltitulo1').html(data.cur_titulo);
        $('#lbltitulo2').html(data.cur_titulo);
        $('#lbldescripcion').html(data.cur_descripcion);
        $('#lblusu_nom').html(data.usu_nom);

        $('#lbldescripcionlar').html(data.cur_descripcion_lar);

        $('#lblusuarionom').html(data.usu_nom+' '+data.usu_ape);
        $('#lblusuario_obs').html(data.usu_obs);

        $("#lblimage").attr("src","../../assets/images/course/"+data.cur_img);

        $("#lblusufoto").attr("src","../../assets/avatars/"+data.usu_foto);

        $('#lblduracion').html('<i class="uil-youtube-alt"></i> '+data.curd_dura+' minutos');
        $('#lblcantidad').html('<i class="uil-file-alt"></i> '+data.curd_total+' Videos');
    });

    $.post("../../controller/cursos.php?op=listar_aprender",{cur_id : cur_id}, function (data) {
        $('#lblaprender').html(data);
    });

    $.post("../../controller/cursos.php?op=listar_requerimiento",{cur_id : cur_id}, function (data) {
        $('#lblrequerimiento').html(data);
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
