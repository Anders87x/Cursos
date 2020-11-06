function init(){

}

$(document).ready(function(){
    $.post("../../controller/cursos.php?op=listar",{filtro : 1}, function (data) {
        $("#divlistcourses").html(data);
    });
});

function FilterCourses(filtro){
    $.post("../../controller/cursos.php?op=listar",{filtro : filtro}, function (data) {
        $("#divlistcourses").html(data);
    });
}

init();