<?php
    if(isset($_SESSION['auth'])){
      $ok=True;
    }
    else die("Falta verificar en ");
?>

<html>
    <head>
        <link rel="stylesheet" src="./styling/general.css">
        <link rel="stylesheet" src="./styling/navBar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            body {
              background: #F8F8F8;
            }
            
            a {
              text-decoration: none;
            }
            
            h1 {
              text-align: center;
              font-family: 'Lato', sans-serif;
              font-size: 25px;
              line-height: 32px;
              padding-top: 70px;
            }
            h1 a {
              color: #66CCCC;
            }
            
            .price-table-wrapper {
              font-family: 'Lato', sans-serif;
              text-align: center;
              margin-top: 30px;
            }
            .price-table-wrapper .featured-table {
              box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
            }
            .price-table-wrapper .pricing-table {
              display: inline-block;
              border: 1px solid #C8C8C8;
              border-radius: 10px;
              background: white;
              margin: 20px;
              -webkit-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
            }
            .price-table-wrapper .pricing-table__header {
              padding: 20px;
              font-size: 20px;
              color: #909090;
              background: #E0E0E0;
            }
            .price-table-wrapper .pricing-table__price {
              color: #66CCCC;
              padding: 20px;
              margin: auto;
              font-size: 40px;
              font-weight: 500;
            }
            .price-table-wrapper .pricing-table__button {
              display: block;
              background: #66CCCC;
              text-decoration: none;
              padding: 20px;
              color: white;
              position: relative;
              overflow: hidden;
              -webkit-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
            }
            .price-table-wrapper .pricing-table__button:before {
              position: absolute;
              left: -20%;
              top: -10%;
              content: '';
              width: 60%;
              height: 220%;
              -webkit-transform: rotate(-30deg);
                      transform: rotate(-30deg);
              background: white;
              opacity: .3;
              -webkit-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
            }
            .price-table-wrapper .pricing-table__button:after {
              position: absolute;
              content: '>';
              top: 0;
              right: 0;
              font-size: 25px;
              padding: 15px;
              padding-right: 40px;
              color: white;
              opacity: 0;
              -webkit-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
            }
            .price-table-wrapper .pricing-table__button:hover {
              background: black;
            }
            .price-table-wrapper .pricing-table__list {
              padding: 20px;
              color: #A0A0A0;
            }
            .price-table-wrapper .pricing-table__list li {
              padding: 15px;
              border-bottom: 1px solid #C8C8C8;
            }
            .price-table-wrapper .pricing-table__list li:last-child {
              border: none;
            }
            .price-table-wrapper .pricing-table:hover {
              box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
            }
            .price-table-wrapper .pricing-table:hover .pricing-table__button {
              padding-left: 0;
              padding-right: 35px;
            }
            .price-table-wrapper .pricing-table:hover .pricing-table__button:before {
              top: -80%;
              -webkit-transform: rotate(0deg);
                      transform: rotate(0deg);
              width: 100%;
            }
            .price-table-wrapper .pricing-table:hover .pricing-table__button:after {
              opacity: 1;
              padding-right: 15px;
            }
            </style>
            
              <script>
              window.console = window.console || function(t) {};
            </script>
            
              
              
              <script>
              if (document.location.search.match(/type=embed/gi)) {
                window.parent.postMessage("resize", "*");
              }
            </script>

    </head>
    <body class="genBackGround">
        <div class="navBar" id="navBar">
            <a href=".home.html">Home</a>
            <a href="#">TBD</a>
            <a href="#">TBD</a>
        </div>
        <div class="genContent">
            <div class="price-table-wrapper">
                <div class="pricing-table">
                    <h2 class="pricing-table__header">Punto 1</h2>
                    <h3 class="pricing-table__price">Sara García</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1624.2057609269762!2d-74.03365563724628!3d4.730135617962676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85616089077f%3A0x9f247183d089b481!2sConjunto%20Residencial%20Cedro%20Verde!5e0!3m2!1ses!2sco!4v1600713751792!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <ul class="pricing-table__list">
                        <li>Contacto: 3118573661</li>
                        <li>Dirección: Calle 152 #9-80</li>
                    </ul>
                </div>
                <div class="pricing-table">
                    <h2 class="pricing-table__header">Punto 2</h2>
                    <h3 class="pricing-table__price">Juan Esteban Cárdenas</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1445545069736!2d-74.0473576073099!3d4.669032676866936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a89815ebb23%3A0x1d5256b69918d5d7!2sCra.%208%20%2387-49%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1600714600025!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <ul class="pricing-table__list">
                        <li>Contacto: 3166933623</li>
                        <li>Dirección: Carrera 8 #87-49</li>
                    </ul>
                </div>
                <div class="pricing-table">
                    <h2 class="pricing-table__header">Punto 3</h2>
                    <h3 class="pricing-table__price">Luis Roa</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1804.4757086613542!2d-74.1151644543376!3d4.669116066902617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b7857412bd1%3A0xf44340cd75b73b57!2zQ2wuIDI1ZyAjNzRiLTUwLCBGb250aWLDs24sIEJvZ290w6E!5e1!3m2!1ses!2sco!4v1600714684052!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <ul class="pricing-table__list">
                        <li>Contacto: 3506587379</li>
                        <li>Dirección: Calle 25G #74B-50</li>
                    </ul>
                </div>
                <div class="pricing-table">
                    <h2 class="pricing-table__header">Punto 4</h2>
                    <h3 class="pricing-table__price">Oscar Felipe Ramírez</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1276.0719754913582!2d-74.05590844287984!3d4.605474287897153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99bfc71fb6b9%3A0xba85b287719f0707!2sBas%C3%ADlica%20Santuario%20del%20Se%C3%B1or%20de%20Monserrate!5e1!3m2!1ses!2sco!4v1600714855130!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <ul class="pricing-table__list">
                        <li>Contacto: 3118288220/li>
                        <li>Correo: of.ramirez10@uniandes.edu.co</li>
                    </ul>
                </div>
            </div>
        </div>
    <body>
</html>