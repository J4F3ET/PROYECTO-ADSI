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