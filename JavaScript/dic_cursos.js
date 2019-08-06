function cargarPrograma(id){
    $("#modal-"+id).modal({show:true});
}
function cargarFormulario(id){
    var url_form_4 = "https://docs.google.com/forms/d/e/1FAIpQLSdfmFoOjKFf_PAcafUVZWofWVF_qB-ILc7MSkYOyKbBhotXUQ/viewform?usp=pp_url";
    var url_form_5 = "https://docs.google.com/forms/d/e/1FAIpQLSfHkSVS4HhxXSxxfbBBMojGJztTV1XAgwBeXuApdV_CF5UOQA/viewform?usp=pp_url";

    switch(id){
        case 4:
                window.open(url_form_4);
            break;
        case 5:
                window.open(url_form_5);
            break;
    }
}
$(document).ready(function() {
    var red = '#FF1212';
    var cyan = '#2DEAE9';
    var yellow = '#EDFF32';
    var green = '#32FF34';

    var jsonObject=
	{
        'cursos':[
            {
                'id':4,
                'color': cyan,
                'curso':'Ventas con Facebook y WhatsApp',
                'logo':'imagenes/cursos/flyer_fw.png',
                'fecha':'Sábado 27 de Octubre.',
                'dia':'27',
                'mes':'OCT',
                'modalidad':'Taller intensivo.',
                'valor':'222.222',
                'programa':{
                            'precio': 'Precio $15.000, incluye material de apoyo, Coffe break y diploma de participación.',
                            'horario': '10.00 hrs. a 14.00 hrs.',
                            'lugar_hora': 'Sábado 27 de Octubre, desde las 10.00 hrs, hasta las 14.00 hrs.<br>Salón multiuso Avenida Tres #220, Cerrillos, Buzeta. Línea 6 Metro Cerrillos.',
                            'objetivo':'Este taller te proporciona los conocimientos necesarios a nivel conceptual y práctico para que puedas implementar una página efectiva para ventas en Facebook y uso de WhatsApp, lo que podría ayudarte a aumentar tus ventas de tu negocio o emprendimiento..',
                            'publico':'Todas las personas que tienen un negocio o emprendimiento y quieran potenciar sus ventas por unas de las redes sociales mas utilizadas Facebook y Whatsapp.',
                            'relator':'Nombre_Apellido.',
                            'requisitos': [
                                        'Conocimientos básicos a nivel usuario de Facebook y Celulares. Se recomienda llevar tu notebook o celular para practicas en Facebook.',
                            ],
                            'contenidos':[
                                'Introducción a marketing por Redes Sociales.',
                                'Errores cometidos en anuncios de Facebook.',
                                'Crear una pagina efectiva para ventas en Facebook.',
                                'Seleccion de público objetivo en Facebook',
                                'Técnicas y buenas prácticas para los anuncios de ventas en Facebook',
                                'Medición de tráfico y alcance de la página en Facebook',
                                'Uso de WhatsApp para negocios.<br>✓ Mensajes automáticos en WhatsApp.',
                            ]
                },  
            },
            {
                'id':5,
                'color': green,
                'curso':'Alfabetización en uso de Celulares',
                'logo':'imagenes/cursos/flyer_celular.png',
                'fecha':'Sábado 27 de Octubre.',
                'dia':'27',
                'mes':'OCT',
                'modalidad':'Taller intensivo.',
                'valor':'333.333',
                'programa':{
                    'precio': 'Precio $15.000, incluye material de apoyo, Coffe break y diploma de participación.',
                    'horario': '10.00 hrs. a 14.00 hrs.',
                    'lugar_hora': 'Sábado 27 de Octubre, desde las 10.00 hrs, hasta las 14.00 hrs.<br>Salón multiuso Avenida Tres #220, Cerrillos, Buzeta. Línea 6 Metro Cerrillos.',
                    'objetivo':'Este taller te proporciona los conocimientos necesarios a nivel conceptual y práctico para que puedas utilizar de forma autónoma y eficiente un celular con todas sus funcionalidades básicas.',
                    'publico':'Todas las personas que tienen que poseen y quieren utilizar de forma independiente un dispositivo móvil (celular) sacando al máximo sus funcionalidades a nivel usuario.',
                    'relator':'Nombre_Apellido.',
                    'requisitos': [
                                'Poseer un dispositivo móvil (celular).',
                    ],
                    'contenidos':[
                        'Historia del celular.',
                        'Configuración básica del celular y su entorno.',
                        'Configuración de una cuenta Gmail en el celular.',
                        'Crear contactos y respaldarlos en la cuenta Gmail.',
                        'Respaldo de imágenes y sincronización de fotos en la cuenta Gmail.',
                        'Limpiar y liberar espacio de memoria.',
                        'Instalación de aplicaciones desde Play Store.',
                        'Uso de calendario y agenda.',
                        'Uso eficiente y ahorro de energía de la batería.',
                        'Uso de geolocalización.',
                        'Compartir contactos, archivos y puntos de referencia en WhatsApp.',
                        'Crear grupos en WhatsApp.',
                    ]
        }, 
        },
        ]
    }

    out='';
    for(i in jsonObject.cursos){
        // -> Estructura CURSOS <- //
        out+='<div class="container">';
        out+='<div class="row">';
        out+='  <div class="col-sm">';
        out+='    <div class="date">';
        out+='      <span class="binds"></span>';
        out+='      <span class="month" style="background-color: '+jsonObject.cursos[i].color+';">'+jsonObject.cursos[i].mes+'</span>';
        out+='      <h1 class="day">'+jsonObject.cursos[i].dia+'</h1>';
        out+='    </div>';
        out+='  </div>';
        out+='  <div class="col-sm pt-0">';
        out+='    '+jsonObject.cursos[i].curso+'';
        out+='  </div>';
        out+='  <div class="col-sm pt-2">';
        out+='    ✓ '+jsonObject.cursos[i].modalidad+'';
        out+='  </div>';
        out+='  <div class="col-sm pt-1">';
        out+='   <p style="font-size:20px;">$'+jsonObject.cursos[i].valor+' CLP</p>';
        out+='  </div>';
        out+=' <div class="col-sm pb-2"><button class="btn btn-info shadow-sm" onclick="cargarPrograma('+jsonObject.cursos[i].id+');">Ver Programa</button></div>';
        out+='  <div class="col-sm pb-2 text-white"><button class="btn btn-primary shadow-sm" onclick="cargarFormulario('+jsonObject.cursos[i].id+')">Reservar cupo</button></div>';
        out+='</div>';
        out+=' <hr class="pd-2 bg-light">';
        out+='</div>';
        // -> Estructura MODAL <- //
        out+='<div class="modal text-dark" id="modal-'+jsonObject.cursos[i].id+'">';
        out+='<div class="modal-dialog" style="max-width: 1400px;">';
        out+='<div class="modal-content p-5">';
        out+='<a class="close-button d-none d-md-block" data-dismiss="modal" href="#">';
        out+='<i class="float-right fa fa-3x fa-times"></i>';
        out+='</a>';
        out+='<div class="container text-center">';
        out+='<div class="row">';
        out+='<div class="col-lg-8 mx-auto">';
        out+='<h2 class="text-secondary mb-0">'+jsonObject.cursos[i].curso+'</h2>';
        out+='<hr class="star-dark mb-5">';
        out+='</div>';
        out+='</div>';
        out+='<div class="row">';
        out+='<div class="col-lg-12 mx-auto">';
        out+='<div class="row">';
        out+='<div class="col-lg-5 mx-auto">';
        out+='<img class="img-fluid mb-5" src="'+jsonObject.cursos[i].logo+'" alt="">';
        out+='</div>';
        out+='<div class="col-lg-7 mx-auto">';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-laptop"></i> Modalidad</h5>';
        out+='<p class="mb-3 text-left" >'+jsonObject.cursos[i].modalidad+'</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-users"></i> Dirigido a</h5>';
        out+='<p class="mb-3 text-left" >'+jsonObject.cursos[i].programa.publico+'</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-address-book"></i> Relator</h5>';
        out+='<p class="text-left">'+jsonObject.cursos[i].programa.relator+'</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-caret-right"></i> Objetivos</h5>';
        out+='<p class="text-left">'+jsonObject.cursos[i].programa.objetivo+'</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-book"></i> Contenido General</h5>';
        out+='<p class="mb-3 text-left" >';

            for (cont in jsonObject.cursos[i].programa.contenidos){
                out+='✓ '+jsonObject.cursos[i].programa.contenidos[cont]+'<br>';
            }

        out+='</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-bookmark"></i> Requisitos</h5>';
        out+='<p class="mb-3 text-left" >';

            for (req in jsonObject.cursos[i].programa.requisitos){
                out+='✓ '+jsonObject.cursos[i].programa.requisitos[req]+'<br>';
            }
            
        out+='</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-calendar"></i> Lugar y hora</h5>';
        out+='<p class="mb-3 text-left">'+jsonObject.cursos[i].programa.lugar_hora+'</p>';
        out+='<h5 class="mb-1 text-left"><i class="fa fa-credit-card"></i> Valor</h5>';
        out+='<p class="mb-3 text-left">'+jsonObject.cursos[i].programa.precio+'</p>';         
        out+='</div>';
        out+='</div>';
        out+='</div>';
        out+='</div>';
        out+='<div class="row">';
        out+='<div class="col-lg-8 mx-auto">';
        out+='<a class="btn btn-primary btn-lg rounded-pill" data-dismiss="modal" href="#">';
        out+='<i class="fa fa-close"></i>';
        out+='Cerrar';
        out+='</a>';
        out+='</div>';
        out+='</div>';
        out+='</div>';
        out+='</div>';
        out+='</div>';
        out+='</div>';
    }
    $('#jcurso').html(out);
});
