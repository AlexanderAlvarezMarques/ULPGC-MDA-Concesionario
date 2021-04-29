<!DOCTYPE html>
<html lang="es">

<?php
include("../addAnuncio.php");
include("../partials/head.php");
?>

<body>

    <?php
    include("../partials/header.php");

    if (isset($_GET['error'])) {

      $error = $_GET['error'];

      if ($error === null)
        $message = "Anuncio no añadido";
      else if ($error == "true")
        $message = "Campo no válido";
      else
        header("Location:http://localhost/ULPGC-MDA-Concesionario/views/");

    }
    ?>

    <script>
      alert(<?php echo $message ?>);
    </script>

    <form action="../addAnuncio.php" id='loginForm' class="my-4" name="addForm" method='post' enctype="multipart/form-data" style="width:30%; font-family: 'Arial'">
        <label><img src='../Imagenes/AddForm/car-xxl.png' alt="Imagen de inicio" style="width: 125px; height: 125px;" /></label>
        <section>
            <input id='nombre_anuncio' name='nombre' type='text' placeholder='Título del anuncio' value=''/>

        </section>
        <section>
            <textarea id='descripcion_anuncio' name='descripcion' type='text' placeholder='Descripción (opcional)' value='' rows="4"></textarea>
        </section>
        <section>
            <input id='marca_anuncio' name='marca' type='text' placeholder='Marca' value=''/>
        </section>
        <section>
            <input id='modelo_anuncio' name='modelo' type='text' placeholder='Modelo' value=''/>
        </section>
        <section>
            <input id='precio_anuncio' name='precio' type='text' placeholder='Precio' value='' pattern="^[0-9]+"/>
        </section>
        <section>
            <input id='año_vehiculo_anuncio' name='ano_vehiculo' type='text' placeholder='Año' value=''/>
        </section>
        <section>
            <input type="file" style="min-height:53px" class="form-control" id="foto" name="imagen" multiple/>
        </section>
        <div>
            <input style='margin-right:10%;' type='button' value='Volver' onclick="location.href='index.php'">
            <input type="hidden" name="send" value="true">
            <input type='submit' value='Registrar Coche' />  
        </div>
    </form>

</body>


<?php
include("../partials/footer.php");
?>

</html>