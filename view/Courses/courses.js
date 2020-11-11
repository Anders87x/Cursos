function init(){

}

$(document).ready(function(){
    $('#txtfiltro').val(1);
    $('#txtnivel').val(1);

    $.post("../../controller/cursos.php?op=listar",{filtro : 1}, function (data) {
        $("#divlistcourses").html(data);
    });
});

function FilterCourses(filtro){
    if (filtro==1){
        $('#afiltro1').addClass("active");
        $('#afiltro2').removeClass("active");

        $('#txtfiltro').val(1);

        FilterCoursesNivel($('#txtnivel').val());
    }else{
        $('#afiltro1').removeClass("active");
        $('#afiltro2').addClass("active");

        $('#txtfiltro').val(2);

        FilterCoursesNivel($('#txtnivel').val());
    }
}

function FilterCoursesNivel(niv_id){

    var filtro = $('#txtfiltro').val();
    $('#txtnivel').val(niv_id);

    if (niv_id==1){
        $('#lipopular').addClass("uk-active");
        $('#libasico').removeClass("uk-active");
        $('#liintermedio').removeClass("uk-active");
        $('#liavanzado').removeClass("uk-active");

        $.post("../../controller/cursos.php?op=listar",{filtro : filtro}, function (data) {
            $("#divlistcourses").html(data);
        });
    }else if (niv_id==2){
        $('#lipopular').removeClass("uk-active");
        $('#libasico').addClass("uk-active");
        $('#liintermedio').removeClass("uk-active");
        $('#liavanzado').removeClass("uk-active");

        $.post("../../controller/cursos.php?op=listar_nivel",{filtro : filtro,niv_id : niv_id}, function (data) {
            $("#divlistcourses").html(data);
        });
    }else if (niv_id==3){
        $('#lipopular').removeClass("uk-active");
        $('#libasico').removeClass("uk-active");
        $('#liintermedio').addClass("uk-active");
        $('#liavanzado').removeClass("uk-active");

        $.post("../../controller/cursos.php?op=listar_nivel",{filtro : filtro,niv_id : niv_id}, function (data) {
            $("#divlistcourses").html(data);
        });
    }else if (niv_id==4){
        $('#lipopular').removeClass("uk-active");
        $('#libasico').removeClass("uk-active");
        $('#liintermedio').removeClass("uk-active");
        $('#liavanzado').addClass("uk-active");

        $.post("../../controller/cursos.php?op=listar_nivel",{filtro : filtro,niv_id : niv_id}, function (data) {
            $("#divlistcourses").html(data);
        });
    }
}

init();