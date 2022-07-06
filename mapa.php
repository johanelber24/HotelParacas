<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main id="main-content">
        
        <section class="banner-mapa">
            <div class="banner-overlay">
                <div class="banner-texto">
                    <h1 class="titulo_br_pd titulo_br">Mapa</h1>
                </div>
            </div>
        </section>

        <section class="mapa-hotel">
            <div class="container">
                <div class="direccion-mapa">
                    <p class="titulo_br_pd titulo_br">Av. Los Libertadores - Paracas - Perú</p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.0040069966326!2d-76.25965848558941!3d-13.838797781581372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110632505ade8bb%3A0xe234849dcb3aa809!2sAvenida%20Los%20Libertadores%2C%20Paracas%2011550!5e0!3m2!1ses-419!2spe!4v1655247849292!5m2!1ses-419!2spe" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        
    </main>

<?php
    incluirTemplate('footer');
?>