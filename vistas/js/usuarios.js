// SUBIENDO LA FOTO DEL USUARIO
$(".nuevaFoto").change(function(){
    var imagen = this.files[0];
    // FILTROS PARA LA IMAGEN CON EL TYPO DE LA IMAGEN Y EL PESO Y EL ULTIMO ELSE ES PARA PREVIZUALIZAR
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevaFoto").val("");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'La imagen debe estar en formato JPG o PNG y no debe superar los 2mb',
            footer:'El archivo no se encuentra en el formato correcto',
            confirmButtonText: "¡Cerrar!"
          });
    }else if(imagen["size"] > 2097152){
        $(".nuevaFoto").val("");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'La imagen debe estar en formato JPG o PNG y no debe superar los 2mb',
            footer:'La imagen sobrepasa el maximo de capacidad (2mb)',
            confirmButtonText: "¡Cerrar!"
          });
    }else{
        var datoImagen = new FileReader;
        datoImagen.readAsDataURL(imagen);
        $(datoImagen).on("load",function(event){
            var rutaImagen = event.target.result;
            $(".previzualizar").attr("src",rutaImagen)
        })
    }
})
$(document).on('click','.btnEditarUsuario',function(){
    var idUsuario = $(this).attr("idUsuario");
    
    var datos = new FormData();
    datos.append("idUsuario",idUsuario);

    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function(respuesta){
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            $("#editarPerfil").val(respuesta["perfil"]);
            $("#passwordActual").val(respuesta["password"]);
            $("#fotoActual").val(respuesta["foto"]);
            if(respuesta["foto"]!=""){
                $(".previsualizar").attr("src",respuesta["foto"])
            }
        }
    });
})
$(document).on('click',".btnActivar",function(){
    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");
    var datos = new FormData();
    datos.append("activarId",idUsuario);
    datos.append("activarUsuario",estadoUsuario);
    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            if(window.matchMedia("(max-width:767px)").matches){
                Swal.fire({
                    title:'El usuario ha sido actualizado',
                    icon:'success',
                    confirmButtonText:"¡Cerrar!"
                }).then(function(result){
                    if(result.value){
                      window.location="inicio";  
                    }
                });
            }
        }
    })
    if(estadoUsuario == 0){
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html("Desactivado");
        $(this).attr("estadoUsuario",1);
    }else{
        $(this).removeClass('btn-danger');
        $(this).addClass('btn-success');
        $(this).html("Activado");
        $(this).attr("estadoUsuario",0);
    }
})
//PARA QUE NO SE REPITAN LOS USUARIOS
$('#nuevoUsuario').change(function(){
    var usuario = $(this).val();
    var datos = new FormData;
    datos.append("validarUsuario",usuario);
    $.ajax({
        url:"ajax/usuarios.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            if(respuesta != 'false'){
                user=$('#nuevoUsuario').val();
                Swal.fire('El usuario  "'+ user + '" ya se encuentra registrado en la base de datos');
                $('#nuevoUsuario').val("");
            }
        }
    })


});
// PARA ELIMINAR USUARIO ---> ALERTA <----
$(document).on('click','.btnEliminarUsuario',function(){
    idUsuario = $(this).attr('idUsuario');
    fotoUsuario = $(this).attr('fotoUsuario');
    nombreUsuario = $(this).attr('nombreUsuario');
    Swal.fire({
        title: '¿Está seguro de borrar el usuario?',
        text: "¡Si no lo está puede cancelar la acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:'Cancelar',
        confirmButtonText: 'Borrar Usuario'
    }).then((result) => {
        if (result.value) {
            window.location = "index.php?ruta=inicio&idUsuario="+idUsuario+"&nombreUsuario="+nombreUsuario+"&fotoUsuario="+fotoUsuario;
        }
    })
})