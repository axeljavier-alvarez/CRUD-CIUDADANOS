<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/menu.css'); ?>">



</head>

<style>
    a {
        text-decoration: none;
    }
</style>

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
    </div>
    <br>
    <br>
    <div class="container">
        <h1>Departamentos</h1>
        <br>
        <!-- Cambiarlo xd -->
        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
            data-bs-target="#modalAgregarDepartamento">
            Agregar
        </button>

        <br>
        <br>

        <table class="table table-border table-striped">
            <thead class="table-primary">
                <tr>
                    <td>Código Departamento</td>
                    <td>Nombre Departamento</td>
                    <td>Código Región</td>
                    <td id="nuevo"><strong>ACCIONES</strong></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $depto):
                    ?>
                    <tr>
                        <td>
                            <?php
                            echo $depto['cod_depto'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $depto['nombre_depto'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $depto['cod_region'];
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url('buscar_departamento/') . $depto['cod_depto']; ?>"
                                class="btn btn-outline-primary">
                                Editar
                            </a>
                            <a href="eliminar_departamento/<?php echo $depto['cod_depto']; ?>"
                                class="btn btn-outline-danger">
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
    <div class="modal fade" id="modalAgregarDepartamento" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <article class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Departamentos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </article>
                <article class="modal-body">
                    <form action="<?= base_url('agregar_departamento'); ?>" method="post" class="msform">
                        <div class="mb-3">
                            <label for="txtId" class="form-label">Departamento ID:</label>
                            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off"
                                placeholder="Ingrese el ID del departamento">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre del departamento:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off"
                                placeholder="Ingrese el nombre del departamento">
                        </div>
                        <div class="mb-3">
                            <label for="txtCodRegion" class="form-label">Codigo región:</label>
                            <input type="text" id="txtCodRegion" name="txtCodRegion" class="form-control"
                                autocomplete="off" placeholder="Ingrese el código de la región">
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                            <input type="submit" class="btnGuardarDepartamento btn btn-primary"
                                name="btnGuardarDepartamento" class="form-control" value="Guardar Departamento">

                        </div>

                    </form>
                </article>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

    <br>
    <br>
    <br>
    <footer>
        <br>
        Instituto Técnico de Capacitación y Productividad - INTECAP.
    </footer>

</body>

</html>