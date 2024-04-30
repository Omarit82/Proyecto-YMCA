<?php

class PageView{


    public function __construct()
    {
        
    }

    function ShowHome(){
    require_once './Frontend/pages/header.html';
        ?>
        <main>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./Frontend/assets/img/nadador2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./Frontend/assets/img/nadador.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div>                   
                <h1 class="text-prin"><img src="./Frontend/assets/img/recurso.png" alt=""> LAS 24 HORAS DE LA YMCA</h1>
                <p>Es una experiencia única en nuestro país. Este año se estará realizando su Vigésima Octava edición, los días 8 y 9 de Septiembre.</p>
                <p>El evento se desarrolla simultáneamente en tres sedes propias, dos en la ciudad de <span>Buenos Aires</span> y una en <span>Rosario</span>. Una vez mas, volveremos a reunir más de 350 competidores durante 24 horas, Estarán presentes diversas escuelas de natación, escuelas de guardavidas, triatlonístas del Área Metropolitana y de diferentes partidos de la costa, además de gran cantidad de familiares y amigos.</p>
            </div>
            <div>
                <h2 class="text-prin"><img src="./Frontend/assets/img/recurso.png" alt=""> DIRECCIÓN GENERAL</h2>
                <h3 class="fw-bold">En la sede central encontrarán:</h3>
                <p>Como Director de la prueba, Cristian Fernández,; Ejecutivo del Área de Programa de la Sede Reconquista.</p>
                <p>Como director de Fiscalización: Juan Pablo Soto, profesor de E. Física y Guardavidas egresado de la YMCA.</p>
                <h3 class="fw-bold">En la mesa de control:</h3>
                <p>Voluntarios que entregarán las grillas, y les marcará el número en el brazo.</p>
                <h3 class="fw-bold">En la Sede Parque se encontrarán:</h3>
                <p>Como Director de Fiscalización: Pablo Bardeal.</p>
                <h3 class="fw-bold">En la mesa de control:</h3>
                <p>Voluntarios que entregaran las grillas, y les marcara el numero en el brazo.</p>
            </div>
            <div>
                <h2 class="text-prin"><img src="./Frontend/assets/img/recurso.png" alt=""> ÚLTIMAS COMPETENCIAS</h2>
            </div>
            <div>  
                <h2 class="text-prin text-center"><img src="./Frontend/assets/img/recurso.png" alt=""> CLIENTES</h2>
            </div>
        </main>
        <?php
        require_once './Frontend/pages/footer.html';
    }
}