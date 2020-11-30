function init(){

}

$(document).ready(function(){

    $.post("../../controller/libros.php?op=listar",{}, function (data) {
        $("#divlistlibros").html(data);
    });

});

init();