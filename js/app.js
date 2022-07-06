window.addEventListener('DOMContentLoaded', IniciarApp);

function IniciarApp(){
    //Principal
    Presentacion();
    Scroll();
    NavActive();
    Galeria();
    //Contacto
    formularioContacto();
    //Reservas
    MostrarHabitaciones();
    //Reservar Habitacion
    formularioReserva();
}

// Presentacion
function Presentacion(){
    setTimeout(QuitarPresentacion, 1500)
}

function QuitarPresentacion(){
    const presentacion = document.querySelector('.presentacion');
    if(presentacion != null){
        presentacion.style.display = 'none';
    }
}

// Scroll
function Scroll(){

    window.onscroll = function(){
        //Subir
        const subir = document.querySelector('.subir');
        if(subir != null){
            if(scrollY >= 350){
                subir.classList.add('subir-efecto');
            }else{
                subir.classList.remove('subir-efecto');
            }
        }

        //Header
        const header = document.querySelector('.header');
        if(header != null){
            if(scrollY >= 25){
                header.classList.add('header-scroll');
            }else{
                header.classList.remove('header-scroll');
            }
        }

        // Animacion nosotros
        // const nosotros = document.querySelector('.nosotros');
        // const galeria = document.querySelector('.galeria-principal');
        // if(nosotros != null && galeria != null){
        //     let posicionNosotros = nosotros.getBoundingClientRect().top;
        //     let posicionGaleria = galeria.getBoundingClientRect().top;
    
        //     let tamañoPantallaN = window.innerHeight / 1.65;
        //     if(posicionNosotros < tamañoPantallaN){
        //         nosotros.style.opacity = 1;
        //         nosotros.style.animation = 'moverNosotros 1s ease-out';
        //     }
    
        //     let tamañoPantallaG = window.innerHeight / 1.2;
        //     if(posicionGaleria < tamañoPantallaG){
        //         galeria.style.opacity = 1;
        //         galeria.style.animation = 'moverGaleria 1s ease-out';
        //     }
        // }
    }

}

// Nav Active
function NavActive(){
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navegacion');

    if(burger != null && nav != null){
        burger.addEventListener('click', function(){
            //Nav Slide
            nav.classList.toggle('nav-active');
            //Burger Efecto
            burger.classList.toggle('burger-toggle');
        });
    }
}

// Agregar galeria
function Galeria(){
    const galeriaContenido = document.querySelector('.galeria-principal-contenido');

    if(galeriaContenido != null){
        for(let i=1; i<=28; i++){
            const imagen = document.createElement('picture');
            imagen.classList.add('galeria-img');
            imagen.innerHTML = '<img src="img/galeria/'+ i +'.jpg" alt="Galeria '+ i +'">';
    
            imagen.onclick = function(){
                mostrarImagen(i);
            }
            galeriaContenido.appendChild(imagen);
        }

        // Jquery
        $(function(){
            // Galeria efecto
            $(".galeria-img").append("<figcaption>");
            $(".galeria-img figcaption").append("<div><i class='fas fa-search-plus'></i></div>");

            $(".galeria-img").mouseenter(function(){
                $(this).find("figcaption").stop().fadeIn(200);
            });

            $(".galeria-img").mouseleave(function(){
                $(this).find("figcaption").stop().fadeOut(200);
            });
        })
    }
}



// Mostrar Imagen
function mostrarImagen(id){
    const imagen = document.createElement('picture');
    imagen.innerHTML = '<img class="galeria-img-overlay" src="img/galeria/'+ id +'.jpg" alt="Galeria '+ id +'">' +
    '<div class="retrocederImagen"><i id="retrocederImagen" class="fas fa-chevron-left"></i></div>' + '<div class="avanzarImagen"><i id="avanzarImagen" class="fas fa-chevron-right"></i></div>';
    //Crear overlay con la imagen
    const overlay = document.createElement('div');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay-galeria');
    // overlay.onclick = function(){
    //     const body = document.querySelector('body');
    //     body.classList.remove('fijar-body-galeria');
    //     overlay.remove();
    // }

    // Boton para cerrar el Modal
    const cerrarModal = document.createElement('p');
    cerrarModal.textContent = 'X';
    cerrarModal.classList.add('btn-cerrar-galeria');
    cerrarModal.onclick = function(){
        const body = document.querySelector('body');
        body.classList.remove('fijar-body-galeria');
        overlay.remove();
    }
    overlay.appendChild(cerrarModal);

    // Añadirlo al HTML
    const body = document.querySelector('body');
    body.appendChild(overlay);
    body.classList.add('fijar-body-galeria');

    avanzarImagen(id);
    retrocederImagen(id);    
}

// Avanzar imagen
function avanzarImagen(id){
    const avanzar = document.getElementById("avanzarImagen");
    const imagen = document.querySelector('.overlay-galeria picture');

    avanzar.onclick = function(){
        let siguienteImagen = id + 1;
        if(siguienteImagen > 28){
            siguienteImagen = 1;
            imagen.innerHTML = '<img class="galeria-img-overlay" src="img/galeria/'+ siguienteImagen +'.jpg" alt="Galeria '+ siguienteImagen +'">' + '<div class="retrocederImagen"><i id="retrocederImagen" class="fas fa-chevron-left"></i></div>' + '<div class="avanzarImagen"><i id="avanzarImagen" class="fas fa-chevron-right"></i></div>';
            avanzarImagen(siguienteImagen);
            retrocederImagen(siguienteImagen);
        }
        else{
            imagen.innerHTML = '<img class="galeria-img-overlay" src="img/galeria/'+ siguienteImagen +'.jpg" alt="Galeria '+ siguienteImagen +'">' + '<div class="retrocederImagen"><i id="retrocederImagen" class="fas fa-chevron-left"></i></div>' + '<div class="avanzarImagen"><i id="avanzarImagen" class="fas fa-chevron-right"></i></div>';
            avanzarImagen(siguienteImagen);
            retrocederImagen(siguienteImagen);
        }
    }
}

// Retroceder imagen
function retrocederImagen(id){
    const retroceder = document.getElementById("retrocederImagen");
    const imagen = document.querySelector('.overlay-galeria picture');

    retroceder.onclick = function(){
        let anteriorImagen = id - 1;
        if(anteriorImagen < 1){
            anteriorImagen = 28;
            imagen.innerHTML = '<img class="galeria-img-overlay" src="img/galeria/'+ anteriorImagen +'.jpg" alt="Galeria'+ anteriorImagen +'">' + '<div class="retrocederImagen"><i id="retrocederImagen" class="fas fa-chevron-left"></i></div>' + '<div class="avanzarImagen"><i id="avanzarImagen" class="fas fa-chevron-right"></i></div>';
            retrocederImagen(anteriorImagen);
            avanzarImagen(anteriorImagen);
        }
        else{
            imagen.innerHTML = '<img class="galeria-img-overlay" src="img/galeria/'+ anteriorImagen +'.jpg" alt="Galeria'+ anteriorImagen +'">' + '<div class="retrocederImagen"><i id="retrocederImagen" class="fas fa-chevron-left"></i></div>' + '<div class="avanzarImagen"><i id="avanzarImagen" class="fas fa-chevron-right"></i></div>';
            retrocederImagen(anteriorImagen);
            avanzarImagen(anteriorImagen);
        }
    }
}


// Contacto
function formularioContacto(){
    const formularioContacto = document.querySelector('.formulario-contacto');
    if(formularioContacto != null){

        const datosFormulario = {
            nombresContacto: '',
            correoContacto: '',
            telefonoContacto: '',
            mensajeContacto: '' 
        }

        formularioContacto.addEventListener('submit', function(e){
            e.preventDefault();
    
            //Validar formulario
            const {nombresContacto, correoContacto, telefonoContacto, mensajeContacto} = datosFormulario;

            //Mostrando mensaje
            let mensaje = "El campo es obligatorio.";
            const errorNombre = document.querySelector("#errorNombre");
            const errorCorreo = document.querySelector("#errorCorreo");
            const errorTelefono = document.querySelector("#errorTelefono");
            const errorMensaje = document.querySelector("#errorMensaje");

            //Si todos estan vacios
            if(nombresContacto === '' && correoContacto === '' && telefonoContacto === '' && mensajeContacto === ''){
                // Nombres
                errorNombre.style.display = 'block';
                errorNombre.textContent = mensaje;
                setTimeout(()=>{
                    errorNombre.style.display = 'none';
                }, 2000);

                // Correo
                errorCorreo.style.display = 'block';
                errorCorreo.textContent = mensaje;
                setTimeout(()=>{
                    errorCorreo.style.display = 'none';
                }, 2000)

                // Telefono
                errorTelefono.style.display = 'block';
                errorTelefono.textContent = mensaje;
                setTimeout(()=>{
                    errorTelefono.style.display = 'none';
                }, 2000);

                // Mensaje
                errorMensaje.style.display = 'block';
                errorMensaje.textContent = mensaje;
                setTimeout(()=>{
                    errorMensaje.style.display = 'none';
                }, 2000);
            }

            // Si uno de los campos esta vacio
            if(nombresContacto === ''){
                errorNombre.style.display = 'block';
                errorNombre.textContent = mensaje;
                setTimeout(()=>{
                    errorNombre.style.display = 'none';
                }, 2000);
            }

            if(correoContacto === ''){
                errorCorreo.style.display = 'block';
                errorCorreo.textContent = mensaje;
                setTimeout(()=>{
                    errorCorreo.style.display = 'none';
                }, 2000)
            }

            if(telefonoContacto === ''){
                errorTelefono.style.display = 'block';
                errorTelefono.textContent = mensaje;
                setTimeout(()=>{
                    errorTelefono.style.display = 'none';
                }, 2000);
            }

            if(mensajeContacto === ''){
                errorMensaje.style.display = 'block';
                errorMensaje.textContent = mensaje;
                setTimeout(()=>{
                    errorMensaje.style.display = 'none';
                }, 2000);
            }else{
                if(mensajeContacto.length < 80){
                    errorMensaje.style.display = 'block';
                    errorMensaje.textContent = 'El mensaje debe tener minimo 80 caracteres';
                    setTimeout(()=>{
                        errorMensaje.style.display = 'none';
                    }, 2000);
                }
                else if(mensajeContacto.length > 500){
                    errorMensaje.style.display = 'block';
                    errorMensaje.textContent = 'El mensaje debe tener maximo 500 caracteres';
                    setTimeout(()=>{
                        errorMensaje.style.display = 'none';
                    }, 2000);
                }
            }



            //Si todo bien...
            if(nombresContacto != '' && correoContacto != '' && telefonoContacto != '' && mensajeContacto != '' && mensajeContacto.length >= 80){
                console.log("Mensaje enviado!");

                // const datosBD = {
                //     nombres: '',
                //     correo: '',
                //     telefono: '',
                //     mensaje: ''
                // }

                // datosBD.nombres = nombresContacto;
                // datosBD.correo = correoContacto;
                // datosBD.telefono = telefonoContacto;
                // datosBD.mensaje = mensajeContacto;

                // console.log(datosBD);

                var txtNombres = $("#nombresContacto").val();
                var txtCorreo = $("#correoContacto").val()
                var txtTelefono = $("#telefonoContacto").val();
                var txtMensaje = $("#mensajeContacto").val();

                // txtNombres = nombresContacto;
                // txtCorreo = correoContacto;
                // txtTelefono = telefonoContacto;
                // txtMensaje = mensajeContacto;

                var ruta = "http://localhost:81/HotelParacas/servicios/agregarContacto.php";

                var formData = new FormData();
                formData.append("nombresContacto", txtNombres);
                formData.append("correoContacto", txtCorreo);
                formData.append("telefonoContacto", txtTelefono);
                formData.append("mensajeContacto", txtMensaje);

                fetch(ruta,{
                    method: "POST",
                    body: formData
                })
                // .then(response => response.text())

                //Limpiar Inputs
                limpiarFormulario();
                cambiarBoton();
                mostrarModal();
            }
        });


        // Eventos inputs
        const nombreCompleto = document.querySelector('#nombresContacto');
        const correo = document.querySelector("#correoContacto");
        const telefono = document.querySelector("#telefonoContacto");
        const mensaje = document.querySelector("#mensajeContacto");

        nombreCompleto.addEventListener('input', leerTexto);
        correo.addEventListener('input', leerTexto);
        telefono.addEventListener('input', leerTexto);
        mensaje.addEventListener('input', leerTexto);

        // Leer inputs
        function leerTexto(e){
            datosFormulario[e.target.id] = e.target.value;
        }

        // Limpiar formulario
        function limpiarFormulario(){
            nombreCompleto.value = '';
            correo.value = '';
            telefono.value = '';
            mensaje.value = '';
        }

        // Cambiar boton
        function cambiarBoton(){
            // Desaparecer boton
            const boton = document.querySelector("#botonContacto");
            boton.style.display = 'none';

            // Mostrar link reiniciar y agregar a input boton
            const inputBoton = document.querySelector(".formulario-contacto .input-boton")
            const reiniciar = document.createElement('a');
            reiniciar.textContent = 'Enviar otro mensaje';
            reiniciar.classList.add('reiniciar-formulario-contacto');
            reiniciar.href = 'contacto.php';
            inputBoton.appendChild(reiniciar);
        }

        // Mostrar modal
        function mostrarModal(){
            const modal = document.querySelector('.modal-contacto');
            // modal.style.opacity = 1;
            modal.style.zIndex = 99999;
            modal.style.display = 'flex';
    
            setTimeout(function(){
                modal.style = '';
            }, 1500)
        }
    }
}


//Habitaciones
function MostrarHabitaciones(){
    //Menu tipo habitaciones
    const estandar = document.querySelector('.estandar');
    const premium = document.querySelector('.premium');
    //Tipo de habitaciones
    const habitacionesEstandar = document.querySelector('.habitaciones-estandar');
    const habitacionesPremium = document.querySelector('.habitaciones-premium');

    if(estandar != null && premium != null && habitacionesEstandar != null && habitacionesPremium != null){
        //Cuando haga click en estandar
        estandar.addEventListener('click', function(){
            //Mostrar link activo
            estandar.classList.add('habitaciones-active');
            premium.classList.remove('habitaciones-active');
            //Mostrar tipo de habitacion y cerrar el otro
            habitacionesEstandar.classList.add('habitaciones-tipo-active');
            habitacionesPremium.classList.remove('habitaciones-tipo-active');
        });

        //Cuando haga click en premium
        premium.addEventListener('click', function(){
            //Mostrar link activo
            premium.classList.add('habitaciones-active');
            estandar.classList.remove('habitaciones-active');
            //Mostrar tipo de habitacion y cerrar el otro
            habitacionesPremium.classList.add('habitaciones-tipo-active');
            habitacionesEstandar.classList.remove('habitaciones-tipo-active');
        });
    }   
}

function formularioReserva(){
    const formularioReserva = document.querySelector('.formulario-reserva');

    if(formularioReserva != null){

        const datosFormulario = {
            nombresReserva: '',
            apellidosReserva: '',
            fechaNacimientoReserva: '',
            tipoDocumentoReserva: '',
            numeroDocumentoReserva: '',
            correoReserva: '',
            telefonoReserva: '',
            fechaIngresoReserva: '',
            fechaSalidaReserva: '',
            habitacionReserva: ''
        }

        formularioReserva.addEventListener('submit', function(e){
            e.preventDefault();

            //Validar formulario
            const {nombresReserva, apellidosReserva, fechaNacimientoReserva, tipoDocumentoReserva, numeroDocumentoReserva, correoReserva, telefonoReserva, fechaIngresoReserva, fechaSalidaReserva} = datosFormulario;

            //Ordenar valores para el registro de fecha en sql
            const ordernarFechas = [fechaNacimientoReserva, fechaIngresoReserva, fechaSalidaReserva];

            //Asignar valores de fecha
            const datosFechas = {
                formatoFechaNacimiento: '',
                formatoFechaIngreso: '',
                formatoFechaSalida: ''
            }

            //Fecha nacimiento
            if(fechaNacimientoReserva != '' && fechaIngresoReserva != '' && fechaSalidaReserva != ''){
                const dfechaNacimiento = ordernarFechas[0].substring(10,8);
                const mfechaNacimiento = ordernarFechas[0].substring(7,5);
                const yfechaNacimiento = ordernarFechas[0].substring(0,4);
                const formatoFechaNacimiento = dfechaNacimiento + '-' + mfechaNacimiento + '-' + yfechaNacimiento;
                // console.log(formatoFechaNacimiento);
                datosFechas.formatoFechaNacimiento = formatoFechaNacimiento;

                //Fecha ingreso
                const dfechaIngreso = ordernarFechas[1].substring(10,8);
                const mfechaIngreso = ordernarFechas[1].substring(7,5);
                const yfechaIngreso = ordernarFechas[1].substring(0,4);
                const formatoFechaIngreso = dfechaIngreso + '-' + mfechaIngreso + '-' + yfechaIngreso;
                // console.log(formatoFechaIngreso);
                datosFechas.formatoFechaIngreso = formatoFechaIngreso;

                //Fecha salida
                const dfechaSalida= ordernarFechas[2].substring(10,8);
                const mfechaSalida = ordernarFechas[2].substring(7,5);
                const yfechaSalida = ordernarFechas[2].substring(0,4);
                const formatoFechaSalida = dfechaSalida + '-' + mfechaSalida + '-' + yfechaSalida;
                // console.log(formatoFechaSalida); 
                datosFechas.formatoFechaSalida = formatoFechaSalida;
            }           

            let mensajeError = "El campo es obligatorio.";
            const errorNombres = document.querySelector("#errorNombresReserva");
            const errorApellidos = document.querySelector("#errorApellidosReserva");
            const errorFechaNacimiento = document.querySelector("#errorFechaNacimientoReserva");
            const errorTipoDocumento = document.querySelector("#errorTipoDocumentoReserva");
            const errorNumeroDocumento = document.querySelector("#errorNumeroDocumentoReserva");
            const errorCorreo = document.querySelector("#errorCorreoReserva");
            const errorTelefono = document.querySelector("#errorTelefonoReserva");
            const errorFechaIngreso = document.querySelector("#errorFechaIngresoReserva");
            const errorFechaSalida = document.querySelector("#errorFechaSalidaReserva");

            //Si todos estan vacios
            if(nombresReserva === '' && apellidosReserva === '' && fechaNacimientoReserva === '' && tipoDocumentoReserva === '' && numeroDocumentoReserva === '' && correoReserva === '' && telefonoReserva === '' && fechaIngresoReserva === '' && fechaSalidaReserva === ''){
                // Nombres
                errorNombres.style.display = 'block';
                errorNombres.textContent = mensajeError;
                setTimeout(()=>{
                    errorNombres.style.display = 'none';
                }, 2000);

                // Apellidos
                errorApellidos.style.display = 'block';
                errorApellidos.textContent = mensajeError;
                setTimeout(()=>{
                    errorApellidos.style.display = 'none';
                }, 2000);

                // Fec Nac
                errorFechaNacimiento.style.display = 'block';
                errorFechaNacimiento.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaNacimiento.style.display = 'none';
                }, 2000);

                // Tipo documento
                errorTipoDocumento.style.display = 'block';
                errorTipoDocumento.textContent = mensajeError;
                setTimeout(()=>{
                    errorTipoDocumento.style.display = 'none';
                }, 2000);

                // Num documento
                errorNumeroDocumento.style.display = 'block';
                errorNumeroDocumento.textContent = mensajeError;
                setTimeout(()=>{
                    errorNumeroDocumento.style.display = 'none';
                }, 2000);

                // Correo
                errorCorreo.style.display = 'block';
                errorCorreo.textContent = mensajeError;
                setTimeout(()=>{
                    errorCorreo.style.display = 'none';
                }, 2000)

                // Telefono
                errorTelefono.style.display = 'block';
                errorTelefono.textContent = mensajeError;
                setTimeout(()=>{
                    errorTelefono.style.display = 'none';
                }, 2000);

                // Fec Entrada
                errorFechaIngreso.style.display = 'block';
                errorFechaIngreso.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaIngreso.style.display = 'none';
                }, 2000);

                // Fec Salida
                errorFechaSalida.style.display = 'block';
                errorFechaSalida.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaSalida.style.display = 'none';
                }, 2000);                
            }

            // Si uno de los campos esta vacio
            if(nombresReserva === ''){
                errorNombres.style.display = 'block';
                errorNombres.textContent = mensajeError;
                setTimeout(()=>{
                    errorNombres.style.display = 'none';
                }, 2000);
            }

            if(apellidosReserva === ''){
                errorApellidos.style.display = 'block';
                errorApellidos.textContent = mensajeError;
                setTimeout(()=>{
                    errorApellidos.style.display = 'none';
                }, 2000);
            }

            if(fechaNacimientoReserva === ''){
                errorFechaNacimiento.style.display = 'block';
                errorFechaNacimiento.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaNacimiento.style.display = 'none';
                }, 2000);
            }

            if(tipoDocumentoReserva === ''){
                errorTipoDocumento.style.display = 'block';
                errorTipoDocumento.textContent = mensajeError;
                setTimeout(()=>{
                    errorTipoDocumento.style.display = 'none';
                }, 2000);
            }

            if(numeroDocumentoReserva === ''){
                errorNumeroDocumento.style.display = 'block';
                errorNumeroDocumento.textContent = mensajeError;
                setTimeout(()=>{
                    errorNumeroDocumento.style.display = 'none';
                }, 2000);
            }

            if(correoReserva === ''){
                errorCorreo.style.display = 'block';
                errorCorreo.textContent = mensajeError;
                setTimeout(()=>{
                    errorCorreo.style.display = 'none';
                }, 2000)
            }

            if(telefonoReserva === ''){
                errorTelefono.style.display = 'block';
                errorTelefono.textContent = mensajeError;
                setTimeout(()=>{
                    errorTelefono.style.display = 'none';
                }, 2000);
            }

            if(fechaIngresoReserva === ''){
                errorFechaIngreso.style.display = 'block';
                errorFechaIngreso.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaIngreso.style.display = 'none';
                }, 2000);
            }

            if(fechaSalidaReserva === ''){
                errorFechaSalida.style.display = 'block';
                errorFechaSalida.textContent = mensajeError;
                setTimeout(()=>{
                    errorFechaSalida.style.display = 'none';
                }, 2000); 
            }else{
                if(fechaSalidaReserva < fechaIngresoReserva){
                    errorFechaSalida.style.display = 'block';
                    errorFechaSalida.textContent = "La fecha de salida no puede ser menor a la fecha de entrada.";
                    setTimeout(()=>{
                        errorFechaSalida.style.display = 'none';
                    }, 2000); 
                }
            }

            


            //Asignamos el valor por defecto del input habitacion
            const habitacion = document.querySelector("#habitacionReserva");

            if(nombresReserva != '' && apellidosReserva != '' && fechaNacimientoReserva != '' && tipoDocumentoReserva != '' && numeroDocumentoReserva != '' && correoReserva != '' && 
            telefonoReserva != '' && fechaIngresoReserva != '' && fechaSalidaReserva != '' && fechaSalidaReserva > fechaIngresoReserva){

                    var txtNombres = $("#nombresReserva").val();
                    var txtApellidos = $("#apellidosReserva").val();
                    // var txtFechaNacimiento = $("$fechaNacimientoReserva").val();
                    var txtTipoDocumento = $("#tipoDocumentoReserva").val();
                    var txtNumDocumento = $("#numeroDocumentoReserva").val();
                    var txtCorreo = $("#correoReserva").val();
                    var txtTelefono = $("#telefonoReserva").val();
                    // var txtFechaIngreso = $("#fechaIngresoReserva").val();
                    // var txtFechaSalida = $("#fechaSalidaReserva").val();

                    var ruta = "http://localhost:81/HotelParacas/servicios/agregarReserva.php";

                    var formData = new FormData();
                    formData.append("nombres", txtNombres);
                    formData.append("apellidos", txtApellidos);
                    formData.append("fechaNacimiento", datosFechas.formatoFechaNacimiento);
                    formData.append("tipoDocumento", txtTipoDocumento);
                    formData.append("numDocumento", txtNumDocumento);
                    formData.append("correo", txtCorreo);
                    formData.append("telefono", txtTelefono);
                    formData.append("fechaIngreso", datosFechas.formatoFechaIngreso);
                    formData.append("fechaSalida", datosFechas.formatoFechaSalida);
                    formData.append("habitacion", habitacion.value);
                    
                    fetch(ruta,{
                        method: "POST",
                        body: formData
                    })

                    // window.location.reload();
                    limpiarFormulario();
                    // window.location = '/reservas.php';
                    mostrarModal();
                }
        });

        const nombres = document.querySelector("#nombresReserva");
        const apellidos = document.querySelector("#apellidosReserva");
        const fechaNacimiento = document.querySelector("#fechaNacimientoReserva");
        const tipoDocumento = document.querySelector("#tipoDocumentoReserva");
        const numeroDocumento = document.querySelector("#numeroDocumentoReserva");
        const correo = document.querySelector("#correoReserva");
        const telefono = document.querySelector("#telefonoReserva");
        const fechaIngreso = document.querySelector("#fechaIngresoReserva");
        const fechaSalida = document.querySelector("#fechaSalidaReserva");

        nombres.addEventListener('input', leerTexto);
        apellidos.addEventListener('input', leerTexto);
        fechaNacimiento.addEventListener('input', leerTexto);
        tipoDocumento.addEventListener('input', leerTexto);
        numeroDocumento.addEventListener('input', leerTexto);
        correo.addEventListener('input', leerTexto);
        telefono.addEventListener('input', leerTexto);
        fechaIngreso.addEventListener('input', leerTexto);
        fechaSalida.addEventListener('input', leerTexto);

        function leerTexto(e){
            datosFormulario[e.target.id] = e.target.value;
            // console.log(datosFormulario);
        }
        
        function limpiarFormulario(){
            
            nombres.value = '';
            apellidos.value = '';
            fechaNacimiento.value = '';
            
            numeroDocumento.value = '';
            correo.value = '';
            telefono.value = '';
            fechaIngreso.value = '';
            fechaSalida.value = '';
        }

        function mostrarModal(){
            const modal = document.querySelector('.modal-reservas');
            // modal.style.opacity = 1;
            modal.style.zIndex = 99999;
            modal.style.display = 'flex';

            setTimeout(()=>{
                modal.style = '';
            }, 2800);

            setTimeout(()=>{
                window.location = '/reservas.php';
            }, 3000);
            // cerrarModal();
        }

        // function cerrarModal(){
        //     const cerrar = document.querySelector(".cerrar-modal-reservas");
        //     const modal = document.querySelector('.modal-reservas');
        //     cerrar.addEventListener('click', function(){
        //         modal.style = '';
        //         window.location = '/reservas.php';
        //     });
        // }
    }
}