<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Agregar Region</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/form.css" >
    <!--Stylesheet-->
  
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="agregar_region" method="post" class="msform">
    <h3>Nueva Region</h3>
        <label for="txtId">CÓDIGO ID</label>
        <input type="number" name="txtId" id="txtId" autocomplete="off" placeholder="Ingrese el código ID">
        <label for="txtNombre">NOMBRE</label>
        <input type="text" name="txtNombre" id="txtNombre" autocomplete="off" placeholder="Ingrese su nombre">       
        <label for="txtDescripcion">REGIÓN</label>
        <input type="text" name="txtDescripcion" id="txtDescripcion" autocomplete="off" placeholder="Ingrese la región">
        <br>
        <input type="submit" class="btnGuardarRegion" name="btnGuardarRegion" class="form-control" value="Guardar Region">
    </form>
</body>
</html>