<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main id="main-content">
        
        <section class="banner-contacto">
            <div class="banner-overlay">
                <div class="banner-texto">
                    <h1 class="titulo_br_pd titulo_br">Contacto</h1>
                </div>
            </div>
        </section>

        <section class="contacto">
            <div class="contacto-contenido container">
                <div class="contacto-datos-m">
                    <div class="contacto-datos-titulo">
                        <h4>Contacto</h4>
                        <h2>Datos de contacto</h2>
                    </div>
                    <div class="contacto-datos-info">
                        <div class="info-contacto">
                            <i class="fas fa-phone-alt"></i>
                            <h3>Teléfono</h3>
                            <p>984756342</p>
                        </div>
                        <div class="info-contacto">
                            <i class="far fa-envelope"></i>
                            <h3>Email</h3>
                            <p>hotelparacas@gmail.com</p>
                        </div>
                        <div class="info-contacto">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Dirección</h3>
                            <p>Av. Los Libertadores - Paracas, Perú</p>
                        </div>
                    </div>
                </div>
                <div class="contacto-formulario-m">
                    <form class="formulario-contacto">
                        <div class="formulario-contacto-titulo">
                            <h4>Contacto</h4>
                            <h2>Escríbenos</h2>
                        </div>
                        <div class="input-contacto">
                            <label>Nombre Completo</label>
                            <input type="text" name="nombresContacto" id="nombresContacto">
                            <p id="errorNombre"></p>
                        </div>
                        <div class="input-contacto">
                            <label>Correo</label>
                            <input type="email" name="correoContacto" id="correoContacto">
                            <p id="errorCorreo"></p>
                        </div>
                        <div class="input-contacto">
                            <label>Teléfono</label>
                            <input type="tel" name="telefonoContacto" id="telefonoContacto">
                            <p id="errorTelefono"></p>
                        </div>
                        <div class="input-contacto">
                            <label>Mensaje</label>
                            <textarea name="mensajeContacto" id="mensajeContacto" rows="5"></textarea>
                            <p id="errorMensaje"></p>
                        </div>
                        <div class="input-boton">
                            <!-- <button id="botonContacto" type="submit" class="boton-formulario">Enviar</button> -->
                            <input type="submit" class="boton-formulario" value="Enviar" id="botonContacto">
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <div class="modal-contacto">
            <i class="fas fa-check-circle"></i>
            <h2>Mensaje Enviado!</h2>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>