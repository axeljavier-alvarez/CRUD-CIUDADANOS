<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <center>
    <h1>Ciudadanos</h1>
    </center>

<table class="table table-border table-striped">
    <thead class="table-primary">
        <tr>
            <th>DPI</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Télefono casa</th>
            <th>Teléfono movil</th>
            <th>Email</th>
            <th>Fecha de nacimiento</th>
            <th>Código nivel académico</th>
            <th>Código municipio</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach($datos as $ciudadano): 
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
        </tr>
        <?php 
        endforeach;
    ?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>