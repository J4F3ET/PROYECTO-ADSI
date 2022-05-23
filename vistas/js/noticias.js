function borrarComillas(mensaje){
    valor=mensaje.length
    mensaje[0]=' 2 '
    mensaje[valor-1]=' 2 '
    return mensaje
}
document.querySelectorAll(".divImgNoticia").forEach(el => {
      el.addEventListener("mouseover", e => {
        const id = e.target.getAttribute("id");
        switch (id) {
          case 'imgPublicaNoticia1':
                var usuario = 1;
                var datos = new FormData;
                datos.append("imgPublicaNoticia1",usuario);
                $.ajax({
                    url:"ajax/noticia.ajax.php",
                    method:"POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta){
                        if(respuesta != 'error'){
                            document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FL</h1>'+respuesta.replace(/["]/g,"\ ");
                        }else{
                            document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FLaaaa</h1>'
                        }
                    }
                })
            break;
          case 'imgPublicaNoticia2':
                var usuario = 2;
                var datos = new FormData;
                datos.append("imgPublicaNoticia2",usuario);
                $.ajax({
                    url:"ajax/noticia.ajax.php",
                    method:"POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta){
                        if(respuesta != 'error'){
                            document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FL</h1>'+respuesta.replace(/["]/g,"\ ");
                        }else{
                            document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FLaaaa</h1>'
                        }
                    }
                })
            break;
          default:
                document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FL</h1><p>Calle 17 C # 114 A 50 Interior 3, Fontibón Bogotá, Colombia</p><p>Contáctanos<br>cstdieselsas@hotmail.com<br>gerencia@cstdiesel.com<br>Teléfono Fijo 2673954<br>+57 (314) 200-9758<br>+57 (311) 249-5396<br>+57 (310) 819-0393<br>+57 (313) 442-8112<br></p><p>Te atendemos<br>Lunes a Viernes 8:00 am a 5:30 pm <br>Sábados 8:00 am a 1:30 pm</p>'
            break;
        }
      });
    });
  document.querySelectorAll("#contenedorApli").forEach(el => {
    el.addEventListener("mouseout", e => {
      document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h1 class="mt-2" >ServiDiesel FL</h1><p>Calle 17 C # 114 A 50 Interior 3, Fontibón Bogotá, Colombia</p><p>Contáctanos<br>cstdieselsas@hotmail.com<br>gerencia@cstdiesel.com<br>Teléfono Fijo 2673954<br>+57 (314) 200-9758<br>+57 (311) 249-5396<br>+57 (310) 819-0393<br>+57 (313) 442-8112<br></p><p>Te atendemos<br>Lunes a Viernes 8:00 am a 5:30 pm <br>Sábados 8:00 am a 1:30 pm</p>'
    });
});