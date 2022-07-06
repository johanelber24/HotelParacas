<?php
    require '../includes/funciones.php';
    incluirTemplate('header');

    $fechaMinima = fechaMinima();

    $fechaMaxima = fechaMaxima();
?>

    <main id="main-content">
        
        <section class="banner-reservas">
            <div class="banner-overlay">
                <div class="banner-texto">
                    <h1 class="titulo_br_pd titulo_br">Reservas</h1>
                </div>
            </div>
        </section>

        <section class="habitacion-reserva">
            <div class="habitacion-reserva-contenido container">
                <div class="habitacion-reserva-img-m">
                    <div class="habitacion-reserva-img">
                        <img src="/img/habitaciones/matrimonial-premium.jpg" alt="Habitacion de hotel matrimonial premium">
                    </div>
                    <div class="habitacion-reserva-volver">
                        <a href="../reservas.php" class="boton-volver">VOLVER</a>
                    </div>
                </div>
                <div class="habitacion-reserva-datos-m">
                    <div class="habitacion-reserva-descripcion">
                        <div class="habitacion-reserva-caracteristicas">
                            <h3>Habitación Matrimonial Premium</h3>
                            <ul class="habitacion-reserva-caracteristicas-datos">
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TV 4K UHD</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>WIFI GRATIS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CABLE DIRECTV</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TELEFONO</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MAQUINA DE CAFÉ</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MINI BAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AMENIDADES</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>2 BAÑOS CON TINA</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AGUA CALIENTE</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>BATA Y PANTUFLAS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA GRANDE</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CORTINAS ELECTRICAS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SERVICIO DE COMIDA</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AIRE ACONDICIONADO</span>
                                </li>
                            </ul>
                        </div>
                        <div class="habitacion-reserva-detalles">
                            <h3>Detalles</h3>
                            <ul class="habitacion-reserva-detalles-datos">
                                <li>Adultos: 2</li>
                                <li>Comodidades: <span>TV 4K UHD</span>, <span>WIFI Gratis</span>, <span>Cable movistar</span>, <span>Maquina de café</span>, <span>Teléfono</span>, <span>Amenidades</span>, <span>Baño con tina</span>, <span>Agua caliente</span>, <span>Bata y pantuflas</span>, <span>Sala mediana</span>, <span>Servicio de comida</span>, <span>Cortinas electricas</span>, <span>Aire acondicionado</span></li>
                                <li>Tipo de Cama: 2 camas de 2 plazas</li>
                                <li>Categoria: <span>Matrimonial Premium</span></li>
                                <li>Precio: <span>S/. 400</span> / por noche</li>
                            </ul>
                        </div>
                    </div>
                    <div class="habitacion-reserva-formulario">
                        <h3>Formulario de Reserva</h3>
                        <form class="formulario-reserva">
                            <div class="habitacion-reserva-formulario-detalles">
                            <div class="reserva-datos">
                                    <label for="nombresReserva">Nombres</label>
                                    <input type="text" name="nombresReserva" id="nombresReserva" placeholder="Nombres">
                                    <p id="errorNombresReserva">El campo es obligatorio.</p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="apellidosReserva">Apellidos</label>
                                    <input type="text" name="apellidosReserva" id="apellidosReserva" placeholder="Apellidos">
                                    <p id="errorApellidosReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="fechaNacimientoReserva">Fecha Nacimiento</label>
                                    <input type="date" name="fechaNacimientoReserva" id="fechaNacimientoReserva">
                                    <p id="errorFechaNacimientoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="tipoDocumentoReserva">Tipo Documento</label>
                                    <select name="tipoDocumentoReserva" id="tipoDocumentoReserva">
                                        <option value="" aria-readonly="true">--Seleccione--</option>
                                        <option value="DNI">DNI</option>
                                        <option value="CARNÉ DE EXTRANJERIA">CARNÉ DE EXTRANJERIA</option>
                                        <option value="PASAPORTE">PASAPORTE</option>
                                    </select>
                                    <p id="errorTipoDocumentoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="numeroDocumentoReserva">Número Documento</label>
                                    <input type="text" name="numeroDocumentoReserva" id="numeroDocumentoReserva" placeholder="Número Documento">
                                    <p id="errorNumeroDocumentoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="correoReserva">Correo</label>
                                    <input type="email" name="correoReserva" id="correoReserva" placeholder="Correo">
                                    <p id="errorCorreoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="telefonoReserva">Teléfono</label>
                                    <input type="tel" name="telefonoReserva" id="telefonoReserva" placeholder="Teléfono">
                                    <p id="errorTelefonoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="fechaIngresoReserva">Fecha Ingreso</label>
                                    <input type="date" name="fechaIngresoReserva" id="fechaIngresoReserva" min="<?php echo $fechaMinima ?>" max="<?php echo $fechaMaxima ?>">
                                    <p id="errorFechaIngresoReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="fechaSalidaReserva">Fecha Salida</label>
                                    <input type="date" name="fechaSalidaReserva" id="fechaSalidaReserva"
                                    min="<?php echo $fechaMinima ?>">
                                    <p id="errorFechaSalidaReserva"></p>
                                </div>
                                <div class="reserva-datos">
                                    <label for="habitacionReserva">Habitación</label>
                                    <input type="text" name="habitacionReserva" id="habitacionReserva" value="MATRIMONIAL PREMIUM" readonly>
                                </div>
                                <div class="reserva-datos-boton">
                                    <input type="submit" class="boton-reservar" value="Verificar disponibilidad" id="botonReserva">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal-reservas">
            <i class="fas fa-check-circle"></i>
            <h2>Reserva enviada!</h2>
            <p>Nos pondremos en contacto con usted.</p>
        </div>
    
    </main>

<?php
    incluirTemplate('footer');
?>