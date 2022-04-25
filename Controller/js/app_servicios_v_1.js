document.querySelectorAll("a").forEach(el => {
    el.addEventListener("click", e => {
      const id = e.target.getAttribute("id");
      switch (id) {
        case 'serv_1_diag':
          document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.<br><li>Reporte de servicios.'
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_2_sistem':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/2.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_3_suministro':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%"  id="imagen-de-opciones" src="../Controller/img/img_servicios/3.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_4_scanner':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/4.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_5_mantenimiento':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/5.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_6_Cambio':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/6.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_7_mantenimiento_electronico':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/7.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_8_mantenimiento_radiador':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/8.jpeg" alt="Servicios de la empresa">'
          break;
        case 'serv_9_bombas':
          document.getElementById('parrafo_servicios').innerHTML=''
          document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/9.jpeg" alt="Servicios de la empresa">'
          break;
        default:
          document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.<br><li>Reporte de servicios.'
          document.getElementById('figura_img_servicios').innerHTML='<img id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">'
          break;
      }
    });
  });