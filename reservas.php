<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main id="main-content">
        
        <section class="banner-reservas">
            <div class="banner-overlay">
                <div class="banner-texto">
                    <h1 class="titulo_br_pd titulo_br">Reservas</h1>
                </div>
            </div>
        </section>


        <section class="habitaciones"><!--Habitaciones-->
            <ul class="menu-habitaciones">
                <li class="estandar habitaciones-active">ESTANDAR</li>
                <li class="premium">PREMIUM</li>
            </ul>
            <div class="habitaciones-contenido container">
                <div class="habitaciones-estandar habitaciones-tipo-active"><!--Habitaciones estandar-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>INDIVIDUAL</h2>
                            </div>
                            <img src="img/habitaciones/individual.jpg" alt="Habitacion de hotel individual">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>1 cama de 1 <sub>1/2</sub> plaza</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-prescription-bottle"></i>
                                    <span>Botella agua cortesia</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TV 2K HD</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>WIFI GRATIS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CABLE MOVISTAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TELEFONO</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA PEQUEÑA</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AIRE ACONDICIONADO</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 200 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/individual.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>DOBLE</h2>
                            </div>
                            <img src="img/habitaciones/doble.jpg" alt="Habitacion de hotel doble">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>2 camas de 1 plaza</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-prescription-bottle"></i>
                                    <span>Botella agua cortesia</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TV 2K HD</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>WIFI GRATIS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CABLE MOVISTAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TELEFONO</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA PEQUEÑA</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AIRE ACONDICIONADO</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 250 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/doble.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>MATRIMONIAL</h2>
                            </div>
                            <img src="img/habitaciones/matrimonial.jpg" alt="Habitacion de hotel matrimonial">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>1 cama de 2 plazas</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-prescription-bottle"></i>
                                    <span>Botella agua cortesia</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TV 2K HD</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>WIFI GRATIS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CABLE MOVISTAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TELEFONO</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MAQUINA DE CAFE</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA MEDIANA</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 300 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/matrimonial.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>FAMILIAR</h2>
                            </div>
                            <img src="img/habitaciones/familiar.jpg" alt="Habitacion de hotel familiar">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>2 camas de 2 plazas</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-prescription-bottle"></i>
                                    <span>Botella agua cortesia</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TV 2K HD</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>WIFI GRATIS</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>CABLE MOVISTAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>TELEFONO</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MAQUINA DE CAFE</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA MEDIANA</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 350 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/familiar.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                </div><!--Habitaciones estandar-->
                <div class="habitaciones-premium"><!--Habitaciones premium-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>INDIVIDUAL PREMIUM</h2>
                            </div>
                            <img src="img/habitaciones/individual-premium.jpg" alt="Habitacion de hotel individual premium">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>1 cama de 2 plazas</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-utensils"></i>
                                    <span>Servicio de comida</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
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
                                    <span>MAQUINA DE CAFÉ</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MINI BAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA MEDIANA</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 300 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/individual-premium.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>DOBLE PREMIUM</h2>
                            </div>
                            <img src="img/habitaciones/doble-premium.jpg" alt="Habitacion de hotel doble premium">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>2 camas de 1 <sub>1/2</sub> plaza</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-utensils"></i>
                                    <span>Servicio de comida</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
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
                                    <span>MAQUINA DE CAFÉ</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MINI BAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA MEDIANA</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 350 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/doble-premium.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>MATRIMONIAL PREMIUM</h2>
                            </div>
                            <img src="img/habitaciones/matrimonial-premium.jpg" alt="Habitacion de hotel matrimonial premium">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>2 camas de 2 plazas</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-utensils"></i>
                                    <span>Servicio de comida</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
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
                                    <span>SALA MEDIANA</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>MINI BAR</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>AIRE ACONDICIONADO</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 400 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/matrimonial-premium.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                    <div class="habitacion-categoria"><!--Habitacion categoria-->
                        <div class="habitacion-categoria-img">
                            <div class="titulo-categoria">
                                <h2>FAMILIAR PREMIUM</h2>
                            </div>
                            <img src="img/habitaciones/familiar-premium.jpg" alt="Habitacion de hotel familiar premium">
                        </div>
                        <div class="habitacion-categoria-descripcion">
                            <ul class="categoria-descripcion-datos">
                                <li>
                                    <i class="fas fa-bed"></i>
                                    <span>2 camas de 2 <sub>1/2</sub> plaza</span>
                                </li>
                                <li>
                                    <i class="fas fa-fan"></i>
                                    <span>Aire acondicionado</span>
                                </li>
                                <li>
                                    <i class="fas fa-utensils"></i>
                                    <span>Servicio de comida</span>
                                </li>
                            </ul>
                            <ul class="categoria-descripcion-caracteristicas">
                                <h3>Caracteristicas principales</h3>
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
                                    <span>MAQUINA DE CAFÉ</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA GRANDE</span>
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    <span>SALA DE JUEGOS</span>
                                </li>
                            </ul>
                            <div class="categoria-descripcion-precio">
                                <h3>S/. 450 <span>/ por noche</span></h3>
                            </div>
                            <div class="categoria-descripcion-reservar">
                                <a href="/reservas/familiar-premium.php">RESERVAR</a>
                            </div>
                        </div>
                    </div><!--Habitacion categoria-->
                </div>
            </div>
        </section>
    
    </main>

<?php
    incluirTemplate('footer');
?>