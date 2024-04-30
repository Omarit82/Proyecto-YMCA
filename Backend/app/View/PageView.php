<?php

class PageView{


    public function __construct()
    {
        
    }

    function ShowHome(){
        require_once './Frontend/pages/header.html';
        ?>
        <main>
            <h1>LAS 24 HORAS DE LA YMCA</h1>
            <p>
                Es una experiencia única en nuestro país. Este año se estará realizando su Vigésima Octava edición, los días 8 y 9 de Septiembre.
            </p>
            <p>
                El evento se desarrolla simultáneamente en tres sedes propias, dos en la ciudad de <span>Buenos Aires</span> y una en <span>Rosario</span>. Una vez mas, volveremos a reunir más de 350 competidores durante 24 horas, Estarán presentes diversas escuelas de natación, escuelas de guardavidas, triatlonístas del Área Metropolitana y de diferentes partidos de la costa, además de gran cantidad de familiares y amigos.
            </p>
        </main>
        <?php
        require_once './Frontend/pages/footer.html';
    }
}