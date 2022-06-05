$(document).on('click','.btnResponder',function(){
    var idAsuntoPQRS = $(this).attr("idAsuntoPQRS");
    var idPQRS = $(this).attr("idPQRS");
    var estadoPQRS = $(this).attr("estadoPQRS");
    var datos = new FormData();
    datos.append("idPQRS",idPQRS);
    datos.append("tabla",idAsuntoPQRS);
    datos.append("estado",estadoPQRS);
    // peticion para los datos de laas pqrs del menu emergente
    $.ajax({
        url:"ajax/pqrs.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function(respuesta){
            $("#nombreClientePQRS").val(respuesta[0]["nombreCliente"]);
            $("#emailClientePQRS").val(respuesta[0]["emailCliente"]);
            $("#celularClientePQRS").val(respuesta[0]["celularCliente"]);
            $("#tablaPQRS").val(idAsuntoPQRS);
            $("#idPQRS").val(respuesta[0][0]);
            $("#parrafoIDPQRS").attr("estadoPQRS",respuesta[0]['estado']);
            document.getElementById('comentarioClientePQRS').innerHTML=respuesta[0]["comentarioCliente"];
            document.getElementById('parrafoIDPQRS').innerHTML="ID "+respuesta[0][0];
        },
        error: function (request, status, error) {
                console.log(request.responseText);
            }
        
    });
})