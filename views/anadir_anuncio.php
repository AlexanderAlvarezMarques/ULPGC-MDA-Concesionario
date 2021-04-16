<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/addAnuncio.php");
include("../partials/head.php");
?>

<link href="../assets/css/login.css" rel="stylesheet" type="text/css">

<body>

    <?php
    include("../partials/header.php");
    ?>


    <form id='loginForm' class="my-4" name="addForm" method='post'>
        <label><img src='../Imagenes/AddForm/car-xxl.png' alt="Imagen de inicio" style="width: 125px; height: 125px;" /></label>
        <section>
            <input id='nombre_anuncio' name='nombre_anuncio' type='text' placeholder='Coche' value='' />
        </section>
        <section>
            <textarea id='descripcion_anuncio' name='descripcion_anuncio' type='text' placeholder='Descripcion' value='' rows="4"></textarea>
        </section>
        <section>
            <input id='marca_anuncio' name='marca_anuncio' type='text' placeholder='Marca' value='' />
        </section>
        <section>
            <input id='modelo_anuncio' name='modelo_anuncio' type='text' placeholder='Modelo' value='' />
        </section>
        <section>
            <input id='precio_anuncio' name='precio_anuncio' type='text' placeholder='Precio' value='' />
        </section>
        <section>
            <input id='año_vehiculo_anuncio' name='año_vehiculo_anuncio' type='text' placeholder='Año' value='' />
        </section>
        <section>
            <input type="file" class="form-control" id="foto" name="foto" multiple>
        </section>
        <div>
            <input style='margin-right:10%;' type='button' value='Volver' onclick="location.href='index.php'">
            <input type='button' onclick='registrarCoche()' value='Registrar Coche' />
        </div>
    </form>

</body>


<?php
include("../partials/footer.php");
?>

</html>