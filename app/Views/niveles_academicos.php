<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveles academicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/menu.css'); ?>">
</head>
<body>
    <br>
    <nav>
        <div class="logo">
            <img src="img/ciudadanos.png" id="imgCiudadanos" />
            <a href="http://localhost/fs2024/ci4_ciudadanos/public/">
                <h1>CIUDADANOS</h1>
            </a>
        </div>
        <ul>
            <li>
                <a href="ver_ciudadanos">Ciudadanos</a>
            </li>
            <li>
                <a href="ver_departamentos">Departamentos</a>
            </li>
            <li>
                <a href="ver_municipios">Municipios</a>
            </li>
            <li>
                <a href="ver_niveles_academicos">Niveles</a>
            </li>
            <li>
                <a href="ver_regiones">Regiones</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </nav>
    <div class="menubar">
        <ul>
            <li>
                <a href="#">Ciudadanos</a>
            </li>
            <li>
                <a href="#">Departamentos</a>
            </li>
            <li>
                <a href="#">Municipios</a>
            </li>
            <li>
                <a href="#">Niveles</a>
            </li>
            <li>
                <a href="">Regiones</a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    
    <div class="container">
        <center>
            <h1>Niveles Academicos</h1>
            <br>
    <!-- Cambiarlo xd --> 
            <a href="" class="btn btn-outline-success">Nuevo nivel</a>

            <br>
            <br>

        </center>
        <table class="table table-border table-striped">
            <thead class="table-primary">
                <tr>
                    <td>Código Nivel Académico</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td id="nuevo"><strong>ACCIONES</strong></td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $nivelacad) :
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $nivelacad['cod_nivel_acad'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $nivelacad['nombre'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $nivelacad['descripcion'];
                            ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-primary">
                                Actualizar
                            </a>
                            <a href="" class="btn btn-outline-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>


        </table>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <br>
        Instituto Técnico de Capacitación y Productividad - INTECAP.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>