<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--     <link rel="stylesheet" href="<?php echo base_url('css/nav.css'); ?>">
 -->

    <link rel="stylesheet" href="<?php echo base_url('css/nav.css'); ?>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
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

    /* 
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
} */
    /* 
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
} */
    form {
        height: 520px;
        width: 400px;
        background-color: rgba(255, 255, 255, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }

    ::placeholder {
        color: #e5e5e5;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .btnGuardarRegion {
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
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
        color: #eaf0fb;
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

    /* 
 .container {
   opacity: 0.5; /* Adjust opacity (0 - fully transparent, 1 - fully opaque)  
 } */

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

    /* 
#nuevo {
    background-color: #F3A61F;
} */
</style>

<body>

    <br>
    <nav>
        <div class="logo">
            <img src="img/ciudadanos.png" id="imgCiudadanos" />
            <h1>CIUDADANOS</h1>
        </div>
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
            <h1>REGIONES</h1>
            <br>
            <a href="nueva_region" class="btn btn-outline-success">Nueva región</a>
        </center>
        <br>
        <br>
        <table class="table table-border">
            <thead class="table-success">
                <tr>
                    <td id="nuevo"><strong>CODIGO</strong></td>
                    <td id="nuevo"><strong>NOMBRE</strong></td>
                    <td id="nuevo"><strong>REGIÓN</strong></td>
                    <td id="nuevo"><strong>ACCIONES</strong></td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $region) :
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $region['cod_region'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $region['nombre'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $region['descripcion'];
                            ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-primary">
                                Actualizar
                            </a>
                            <a href="eliminar_region/<?php echo $region['cod_region']; ?>" class="btn btn-outline-danger">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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