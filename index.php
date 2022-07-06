<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!-- Index -->
    <main id="main-content">

        <div class="presentacion"> <!-- Presentacion -->
            <div class="barra">
                <div class="spinner">Loading...</div>
            </div>
        </div> <!-- Presentacion -->

        <section id="bannerHotel" class="carousel slide banner-seccion" data-bs-ride="carousel"> <!-- Banner principal-->
            
            <div class="carousel-inner"> <!-- Carousel -->
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="banner1">
                    <div class="banner-overlay">
                        <div class="banner-texto">
                            <h1>Bienvenidos a <br> Hotel Paracas</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="banner2">
                    <div class="banner-overlay">
                        <div class="banner-texto">
                            <h1>Habitaciones <br> Relajantes</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="banner3">
                    <div class="banner-overlay">
                        <div class="banner-texto">
                            <h1> Experiencia <br> Extraordinaria</h1>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#bannerHotel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerHotel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <div class="banner-visitanos"> <!-- Banner visitanos -->
                <div class="banner-visitanos-contenido container">
                    <h4>Razones para que nos visites</h4>
                    <ul class="banner-visitanos-mensajes">
                        <li>
                            <i class="fas fa-money-bill"></i>
                            <span>Precios Comodos</span>
                        </li>
                        <li>
                            <i class="fas fa-wifi"></i>
                            <span>Wifi Gratis</span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Mejor Ubicación</span>
                        </li>
                        <li>
                            <i class="fas fa-concierge-bell"></i>
                            <span>Recepción 24/7</span>
                        </li>
                        <li>
                            <i class="fas fa-smile"></i>
                            <span>Servicio de calidad</span>
                        </li>
                    </ul>
                </div>      
            </div> <!-- Banner visitanos -->

        </section> <!-- Banner principal -->


        <section class="nosotros"> <!-- Nosotros -->
            <div class="nosotros-contenido container">
                <div class="nosotros-img-m">
                    <div class="nosotros-img">
                        <img src="img/principal/nosotros.jpg" alt="Foto Nosotros" class="img-fluid">
                    </div>
                </div>
                <div class="nosotros-texto-m">
                    <div class="nosotros-texto">
                        <h2>Nosotros</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio quidem vel sapiente asperiores! Molestiae modi non iste quae laudantium.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolores totam earum. Nesciunt mollitia natus veritatis aperiam reiciendis sapiente quam, atque optio tempore soluta at pariatur sint maxime eveniet modi?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae nostrum eaque quod non inventore culpa id provident quisquam vitae, minus est pariatur delectus voluptatem modi perspiciatis distinctio quibusdam nulla. Ipsa iste modi libero aut magni molestiae tenetur nihil eveniet cumque.</p>
                    </div>
                </div>
            </div>
        </section> <!-- Nosotros -->


        <section class="servicios">
            <div class="servicios-contenido container">
                <div class="servicios-texto-m">
                    <div class="servicios-texto">
                        <h2>Servicios</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt quo nulla explicabo, eos blanditiis reiciendis. Id at, facere nam illo eius itaque nihil commodi ea libero unde est deserunt soluta.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ipsam culpa ratione commodi eum aspernatur non iste magnam ducimus. Reprehenderit temporibus totam non modi fuga aliquid autem obcaecati quisquam iusto error, est optio, eaque exercitationem maiores in quam quasi nemo, asperiores accusamus omnis nostrum iste ex? Numquam in dolores corporis?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid officiis perspiciatis aperiam maiores fuga ipsa excepturi pariatur, soluta harum quasi.</p>
                    </div>
                </div>
                <div class="servicios-detalles-m">
                    <div class="servicios-detalles">
                        <div class="detalle-servicio">
                            <i class="fas fa-wifi"></i>
                            <h3>Wifi Gratis</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde repellat quis consequuntur ut laborum minima, reiciendis quibusdam ea et.</p>
                        </div>  
                        <div class="detalle-servicio">
                            <i class="fas fa-parking"></i>
                            <h3>Parking Gratis</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde repellat quis consequuntur ut laborum minima, reiciendis quibusdam ea et.</p>
                        </div>
                        <div class="detalle-servicio">
                            <i class="fas fa-briefcase"></i>
                            <h3>Custodia de equipaje</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde repellat quis consequuntur ut laborum minima, reiciendis quibusdam ea et.</p>
                        </div>  
                        <div class="detalle-servicio">
                            <i class="fas fa-concierge-bell"></i>
                            <h3>Recepción 24/7</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde repellat quis consequuntur ut laborum minima, reiciendis quibusdam ea et.</p>
                        </div>   
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonios">
            <div class="container">
                <div class="titulo">
                    <h2>Testimonios</h2>
                </div>
                <div class="testimonios-contenido">
                    <div class="testimonio-cliente-m">
                        <div class="testimonio-cliente">
                            <div class="mensaje">
                                <i class="fas fa-quote-right"></i>
                                <span>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, tempora. Id cum fugit ducimus eveniet voluptatum ad dicta tempore eos."
                                </span>
                            </div>
                            <div class="cliente">
                                <div class="img-cliente">
                                    <img src="img/principal/cliente1.jpg" alt="Imagen de chica">
                                </div>
                                <div class="nombre">
                                    Emilia Lopez
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonio-cliente-m">
                        <div class="testimonio-cliente">
                            <div class="mensaje">
                                <i class="fas fa-quote-right"></i>
                                <span>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, tempora. Id cum fugit ducimus eveniet voluptatum ad dicta tempore eos."
                                </span>
                            </div>
                            <div class="cliente">
                                <div class="img-cliente">
                                    <img src="img/principal/cliente2.jpg" alt="Imagen de hombre">
                                </div>
                                <div class="nombre">
                                    Roberto Mory
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonio-cliente-m">
                        <div class="testimonio-cliente">
                            <div class="mensaje">
                                <i class="fas fa-quote-right"></i>
                                <span>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, tempora. Id cum fugit ducimus eveniet voluptatum ad dicta tempore eos."
                                </span>
                            </div>
                            <div class="cliente">
                                <div class="img-cliente">
                                    <img src="img/principal/cliente3.jpg" alt="Imagen de chica">
                                </div>
                                <div class="nombre">
                                    Alessia Castro
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacto-fondo"> <!-- Contacto fondo-->
            <div class="contacto-overlay">
                <div class="contacto-boton">
                    <a href="contacto.php">Contáctanos</a>
                </div>
            </div>
        </section> <!-- Contacto fondo -->

        <section class="galeria-principal"> <!-- Galeria -->
            <div class="container">
                <div class="titulo">
                    <h2>Galería</h2>
                </div>
                <div class="galeria-principal-contenido mt-4">
                    <!-- Galeria creada con js -->
                </div>
            </div>
        </section>

        <section class="reservas-fondo"> <!-- Reservas fondo-->
            <div class="reservas-overlay">
                <div class="reservas-boton">
                    <a href="reservas.php">Ver habitaciones</a>
                </div>
            </div>
        </section> <!-- Reservas fondo -->

    </main>

<?php
    incluirTemplate('footer');
?>