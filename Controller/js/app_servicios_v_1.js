document.querySelectorAll("a").forEach(el => {
  el.addEventListener("mouseenter", e => {
    const id = e.target.getAttribute("id");
    console.log(id)
    switch (id) {
      case 'serv_1_diag':
        document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_2_sistem':
        document.getElementById('parrafo_servicios').innerHTML='Nuestro laboratorio cuenta con equipos de última tecnología y personal técnico calificado, brindando confianza, seguridad en nuestros procesos de reparación y evaluación en sistemas de inyección, electrónicos y convencionales.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/2.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_3_suministro':
        document.getElementById('parrafo_servicios').innerHTML='Dentro de nuestro portafolio de servicios garantizamos el suministro de repuestos nuevos, de primera línea y calidad, NO homologados, así su vehículo rendirá al máximo evitando pérdidas de tiempo por reproceso.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%"  id="imagen-de-opciones" src="../Controller/img/img_servicios/3.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_4_scanner':
        document.getElementById('parrafo_servicios').innerHTML='Un scanner diagnóstico es un servicio mecánico que nos ayuda a identificar una falla en específico o situaciones anormales en el automóvil.<br>Este servicio se realiza con personal calificado y un conjunto de herramientas adecuadas para encontrar la falla.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/4.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_5_mantenimiento':
        document.getElementById('parrafo_servicios').innerHTML='El mantenimiento preventivo es la manera óptima de reducir a su mínima expresión las averías repentinas, aumentar la seguridad de los colaboradores de la empresa y reducir los costos y elevar el rendimiento de la organización. Es muy importante llevar una bitácora donde anotes todos y cada uno de los mantenimientos por unidad, considerando fechas específicas o lapsos de odómetro. Actualmente existen diversas plataformas que te ayudan a sistematizar los mantenimientos de las unidades que componen tu flota.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/5.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_6_Cambio':
        document.getElementById('parrafo_servicios').innerHTML='Generalmente, los fabricantes recomiendan cambiar el filtro de combustible cada 60.000 kilómetros. No obstante, para garantizar un funcionamiento óptimo y eficiente del motor se aconseja realizar el cambio aproximadamente a la mitad del periodo, es decir cada 30.000 kilómetros.<br>Realizando el cambio del filtro de combustible cada 30.000 kilómetros garantizará que los inyectores, la bomba de presión y los circuitos se encuentren en buen estado durante mucho más tiempo, evitando así futuras y costosas averías.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/6.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_7_mantenimiento_electronico':
        document.getElementById('parrafo_servicios').innerHTML='Al tener una planta de ensamble para plantas eléctricas, sabemos que nuestros clientes van a necesitar soporte en servicio y partes. Por eso, buscamos ofrecer un plan 360° para que nuestros clientes siempre estén respaldados de una marca integra.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/7.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_8_mantenimiento_radiador':
        document.getElementById('parrafo_servicios').innerHTML='Con el paso del tiempo el radiador de tu vehículo empieza a perder capacidad de refrigeración debido a la suciedad acumulada por dentro y por fuera. La de su interior impide que el calor se transmita adecuadamente del anticongelante al radiador, además de dificultar o impedir la circulación del líquido. La suciedad exterior impide que el aire entre en contacto con el radiador para bajar su temperatura.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/8.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_9_bombas':
        document.getElementById('parrafo_servicios').innerHTML='Entre las piezas que componen el sistema de refrigeración encontramos el Fan Clutch o Embrague del Ventilador, encargado del enfriamiento termostático del motor que puede girar libremente a bajas temperaturas cuando no se necesita enfriamiento, lo que permite que el motor se caliente más rápido, aliviando la carga innecesaria del motor. Se acciona por la potencia del motor y mueve el aire para enfriarlo.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/9.jpeg" alt="Servicios de la empresa">';
        break;
      default:
        document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.';
        document.getElementById('figura_img_servicios').innerHTML='<img id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">';
        break;
    }
  });
});
document.querySelectorAll("a").forEach(el => {
  el.addEventListener("click", e => {
    const id = e.target.getAttribute("id");
    switch (id) {
      case 'serv_1_diag':
        document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_2_sistem':
        document.getElementById('parrafo_servicios').innerHTML='Nuestro laboratorio cuenta con equipos de última tecnología y personal técnico calificado, brindando confianza, seguridad en nuestros procesos de reparación y evaluación en sistemas de inyección, electrónicos y convencionales.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/2.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_3_suministro':
        document.getElementById('parrafo_servicios').innerHTML='Dentro de nuestro portafolio de servicios garantizamos el suministro de repuestos nuevos, de primera línea y calidad, NO homologados, así su vehículo rendirá al máximo evitando pérdidas de tiempo por reproceso.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%"  id="imagen-de-opciones" src="../Controller/img/img_servicios/3.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_4_scanner':
        document.getElementById('parrafo_servicios').innerHTML='Un scanner diagnóstico es un servicio mecánico que nos ayuda a identificar una falla en específico o situaciones anormales en el automóvil.<br>Este servicio se realiza con personal calificado y un conjunto de herramientas adecuadas para encontrar la falla.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/4.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_5_mantenimiento':
        document.getElementById('parrafo_servicios').innerHTML='El mantenimiento preventivo es la manera óptima de reducir a su mínima expresión las averías repentinas, aumentar la seguridad de los colaboradores de la empresa y reducir los costos y elevar el rendimiento de la organización. Es muy importante llevar una bitácora donde anotes todos y cada uno de los mantenimientos por unidad, considerando fechas específicas o lapsos de odómetro. Actualmente existen diversas plataformas que te ayudan a sistematizar los mantenimientos de las unidades que componen tu flota.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/5.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_6_Cambio':
        document.getElementById('parrafo_servicios').innerHTML='Generalmente, los fabricantes recomiendan cambiar el filtro de combustible cada 60.000 kilómetros. No obstante, para garantizar un funcionamiento óptimo y eficiente del motor se aconseja realizar el cambio aproximadamente a la mitad del periodo, es decir cada 30.000 kilómetros.<br>Realizando el cambio del filtro de combustible cada 30.000 kilómetros garantizará que los inyectores, la bomba de presión y los circuitos se encuentren en buen estado durante mucho más tiempo, evitando así futuras y costosas averías.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/6.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_7_mantenimiento_electronico':
        document.getElementById('parrafo_servicios').innerHTML='Al tener una planta de ensamble para plantas eléctricas, sabemos que nuestros clientes van a necesitar soporte en servicio y partes. Por eso, buscamos ofrecer un plan 360° para que nuestros clientes siempre estén respaldados de una marca integra.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/7.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_8_mantenimiento_radiador':
        document.getElementById('parrafo_servicios').innerHTML='Con el paso del tiempo el radiador de tu vehículo empieza a perder capacidad de refrigeración debido a la suciedad acumulada por dentro y por fuera. La de su interior impide que el calor se transmita adecuadamente del anticongelante al radiador, además de dificultar o impedir la circulación del líquido. La suciedad exterior impide que el aire entre en contacto con el radiador para bajar su temperatura.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/8.jpeg" alt="Servicios de la empresa">';
        break;
      case 'serv_9_bombas':
        document.getElementById('parrafo_servicios').innerHTML='Entre las piezas que componen el sistema de refrigeración encontramos el Fan Clutch o Embrague del Ventilador, encargado del enfriamiento termostático del motor que puede girar libremente a bajas temperaturas cuando no se necesita enfriamiento, lo que permite que el motor se caliente más rápido, aliviando la carga innecesaria del motor. Se acciona por la potencia del motor y mueve el aire para enfriarlo.';
        document.getElementById('figura_img_servicios').innerHTML='<img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/9.jpeg" alt="Servicios de la empresa">';
        break;
      default:
        document.getElementById('parrafo_servicios').innerHTML= '<li>El servicio de diagnóstico, reparación, ajuste y calibración es realizado por personal altamente calificado.<br><li>Garantizar la exactitud, precisión, confiabilidad y trazabilidad de las medidas.<br><li>Ajuste de instrumentos con calibradores de alta precisión.<br><li>Diagnóstico, reparación, y ajuste de instrumentos.<br><li>Proceso de verificación y ajuste posterior calibración por laboratorio acreditado.<br><li>Asesoramiento al personal técnico en instalación y configuración.';
        document.getElementById('figura_img_servicios').innerHTML='<img id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">';
        break;
    }
  });
});
 