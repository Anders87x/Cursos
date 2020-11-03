function init(){
    $("#registro_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#registro_form")[0]);

    $.ajax({
        url: "../../controller/usuario.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            if (datos=="pass"){
                Swal.fire(
                    'AnderCursos',
                    'Error Contraseñas no Coinciden.',
                    'error'
                );
            }else if (datos=="correo"){
                Swal.fire(
                    'AnderCursos',
                    'La cuenta de correo electronico ya existe.',
                    'error'
                );
            }else{
                Swal.fire(
                    'AnderCursos',
                    'Se registro Correctamente.',
                    'success'
                );
                $('#registro_form')[0].reset();
            }
        }
    }); 
    
}

init();