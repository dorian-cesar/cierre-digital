<?php

$estado="true";

include "./output-set.php";


?>







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style3.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <title>Gama</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-2 text-center mt-5">
                        <a href="index-2.html">
                            <img src="assets/img/Icon awesome-arrow-left.png"
                                alt="Volver">
                        </a>
                    </div>
                    <div class="col-8 text-center mt-5 mb-5">
                        <img src="assets/img/Gama.svg" alt="Gama">
                    </div>
                    <div class="col-2 mt-5">
                        <a href="index-2.html">
                            <img src="assets/img/Icon ionic-ios-close.svg"
                                alt="Cerrar Sesion">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="coche-abierto">
                        <h1>Abierto</h1>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="margen-cerrado">
                        <a href="./cerrado.php">
                            <img src="assets/img/Lock.svg" alt="Cerrado">
                        </a>
                    </div>
                        
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="abierto">
                        <div class="abrir-coche">
                            <a href="#modal" class="btn">
                                <img src="assets/img/Unlock.svg"><img>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 text-center mt-5">
                        <img src="assets/img/WIT.png" alt="Wit">
                    </div>
                </div>
            </div>
        </footer>
        <div id="modal">
            <a href="#cerrar"></a>
              <div id="modalContent">
                <a href="#cerrar">X</a>
                 <h3 style="color: #fff; text-align:center;">Vehículo abierto</h3>
                 <button type="button" class="boton-abierto" data-bs-dismiss="modal">Aceptar</button>
              </div>
          </div>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>