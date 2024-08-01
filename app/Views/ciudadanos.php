<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/menu.css'); ?>">

    <style>
        a {
            text-decoration: none;
        }
    </style>

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
            <h1>Ciudadanos</h1>
            <br>
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                data-bs-target="#modalAgregarCiudadano">
                Agregar
            </button>

        </center>

        <br>
        <br>
        <table class="table table-border table-striped">
            <thead class="table-primary">
                <tr>
                    <td>DPI</td>
                    <td>Apellido</td>
                    <td>Nombre</td>
                    <td>Dirección</td>
                    <td>Télefono casa</td>
                    <td>Teléfono movil</td>
                    <td>Email</td>
                    <td>Fecha de nacimiento</td>
                    <td>Código nivel académico</td>
                    <td>Código municipio</td>
                    <td id="nuevo"><strong>ACCIONES</strong></td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $ciudadano):
                    ?>
                    <tr>
                        <td>
                            <?php
                            echo $ciudadano['dpi'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['apellido'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['nombre'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['direccion'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['tel_casa'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['tel_movil'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $ciudadano['email'];
                            ?>
                        </td>
                        <td>

                            <?php
                            echo $ciudadano['fechanac'];
                            ?>
                        </td>
                        <td>

                            <?php
                            echo $ciudadano['cod_nivel_acad'];
                            ?>
                        </td>
                        <td>

                            <?php
                            echo $ciudadano['cod_muni'];
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url('buscar_ciudadano/') . $ciudadano['dpi']; ?>"
                                class="btn btn-outline-primary">
                                Editar
                            </a>
                            <a href="eliminar_ciudadano/<?php echo $ciudadano['dpi']; ?>" class="btn btn-outline-danger">
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

    <div class="modal fade" id="modalAgregarCiudadano" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <article class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Ciudadanos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </article>
                <article class="modal-body">
                    <form action="<?= base_url('agregar_ciudadano'); ?>" method="post" class="msform">
                        <div class="mb-3">
                            <label for="txtId" class="form-label">DPI:</label>
                            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off"
                                placeholder="Ingrese el dpi del ciudadano">
                        </div>
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido:</label>
                            <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                                autocomplete="off" placeholder="Ingrese el apellido del ciudadano">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off"
                                placeholder="Ingrese el nombre del ciudadano">
                        </div>

                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Dirección:</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                                autocomplete="off" placeholder="Ingrese la dirección">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelCasa" class="form-label">Teléfono casa:</label>
                            <input type="number" id="txtTelCasa" name="txtTelCasa" class="form-control"
                                autocomplete="off" placeholder="Ingrese el teléfono de casa">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelMovil" class="form-label">Teléfono movil:</label>
                            <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control"
                                autocomplete="off" placeholder="Ingrese el teléfono móvil">
                        </div>
                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Email:</label>
                            <input type="text" id="txtEmail" name="txtEmail" class="form-control" autocomplete="off"
                                placeholder="Ingrese el email">
                        </div>

                        <div class="mb-3">
                            <label for="txtFecha" class="form-label">Fecha de nacimiento:</label>
                            <input type="date" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off"
                                placeholder="Ingrese la fecha de nacimiento">
                        </div>
                        <div class="mb-3">
                            <label for="txtCodAcad" class="form-label">Codigo nivel academico:</label>
                            <input type="number" id="txtCodAcad" name="txtCodAcad" class="form-control"
                                autocomplete="off" placeholder="Ingrese el código del nivel acádemico">
                        </div>
                        <div class="mb-3">
                            <label for="txtCodMuni" class="form-label">Codigo municipio:</label>
                            <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control"
                                autocomplete="off" placeholder="Ingrese el código del municipio">
                        </div>
                        <div class="mb-3">
                            <label for="txtPassword" class="form-label">Contraseña:</label>
                            <input type="password" id="txtPassword" name="txtPassword" class="form-control"
                                autocomplete="off" placeholder="Ingrese su conraseña">
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                            <input type="submit" class="btnGuardarCiudadano btn btn-primary" name="btnGuardarCiudadano"
                                class="form-control" value="Guardar Ciudadano">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

</body>

</html>