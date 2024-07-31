<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('css/menu.css'); ?>">

</head>

<style>
    a {
        text-decoration: none;
    }

    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #080710;

        font-family: 'Poppins', sans-serif;

        text-align: center;
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }


    .social {
        margin-top: 30px;
        display: flex;
    }

    .social div {
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255, 255, 255, 0.27);
        text-align: center;
    }

    .social div:hover {
        background-color: rgba(255, 255, 255, 0.47);
    }

    .social .fb {
        margin-left: 25px;
    }

    .social i {
        margin-right: 4px;
    }


    .table {
        background-color: rgba(0, 0, 0, 0.5);
        /* Adjust opacity (0 - fully transparent, 1 - fully opaque) */
    }
    .table {
        border: none;
    }
    .table td {
        background-color: transparent;
        background-color: rgba(255, 255, 255, 0.13);

        color: white;
    }
    .table {
        border: 1px solid white;
        /* Add white border to the table itself */
    }
    .table td {
        border: 1px solid white;
        /* Add white border to each cell */
    }
    .table {
        border-collapse: collapse;
        /* Collapse borders within the table */
    }
    h1 {
        color: white;
    }
    footer {
        background-color: black;
        color: white;
        text-align: center;
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
        <h1>Municipios</h1>
        <br>
        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarMunicipio">
            Agregar
        </button>
        <br>
        <br>
        <table class="table table-border table-striped">
            <thead class="table-primary">
                <tr>
                    <td>Código Municipio</td>
                    <td>Nombre Municipio</td>
                    <td>Código Departamento</td>
                    <td id="nuevo"><strong>ACCIONES</strong></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $municipio) :
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $municipio['cod_muni'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $municipio['nombre_municipio'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $municipio['cod_depto'];
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url('buscar_municipio/') . $municipio['cod_muni']; ?>" class="btn btn-outline-primary">
                                Editar
                            </a>
                            <a href="eliminar_municipio/<?php echo $municipio['cod_muni']; ?>" class="btn btn-outline-danger">
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

    <div class="modal fade" id="modalAgregarMunicipio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <article class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Municipios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </article>
                <article class="modal-body">
                    <form action="<?= base_url('agregar_municipio'); ?>" method="post" class="msform">
                        <div class="mb-3">
                            <label for="txtId" class="form-label">Municipio ID:</label>
                            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del municipio">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre del municipio:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off" placeholder="Ingrese el nombre del municipio">
                        </div>
                        <div class="mb-3">
                            <label for="txtDepartamentoId" class="form-label">Departamento ID:</label>
                            <input type="number" id="txtDepartamentoId" name="txtDepartamentoId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del departamento">
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                            <input type="submit" class="btnGuardarMunicipio btn btn-primary" name="btnGuardarMunicipio" class="form-control" value="Guardar Municipio">

                        </div>

                    </form>
                </article>
            </div>
        </div>
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