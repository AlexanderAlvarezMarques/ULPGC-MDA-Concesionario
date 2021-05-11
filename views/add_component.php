<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/head.php");
include __DIR__ . "/../vendor/database/anuncios.php";

if (isset($_POST['mod'])) {

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $src = $_POST["image"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
}

if (!isset($_GET['id'])) {
    header("Location:http://localhost/ULPGC-MDA-Concesionario/views/anuncios.php");
}

$anuncio = Anuncios::getAdvertisement($_GET['id']);

$id = $anuncio[0]["idanuncios"];
$nombre = $anuncio[0]["nombre_anuncio"];
$descripcion = $anuncio[0]["descripcion_anuncio"];
$src = "data:image/jpeg;base64," . base64_encode($anuncio[0]['foto_anuncio']) . '"';
$precio = $anuncio[0]["precio_anuncio"];
$precio_financiado = $anuncio[0]["preciof_anuncio"];
$marca = $anuncio[0]["marca_anuncio"];
$modelo = $anuncio[0]["modelo_anuncio"];
$localidad = $anuncio[0]["localidad_anuncio"];
$ano = $anuncio[0]["ano_vehiculo_anuncio"];
$positiondusuario = $anuncio[0]["idusuario"];

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
            header("Location:/views/anuncios.php");
    }
    ?>

    <script>
        alert(<?php echo $message ?>);
    </script>
    <section style="display: flex; flex: row">

        <div class="container">
            <div class="row">
                <form action="../compra.php" id='loginForm' class="my-4" name="addForm" method='post' enctype="multipart/form-data" style="width:40%; font-family: 'Arial'">
                <label><i class="material-icons" style="font-size:100px;color:white;">directions_car</i></label>
                    <section>
                        <input id='marca_anuncio' name='marca' type='text' placeholder='Marca' value='<?php echo $marca ?>' required />
                    </section>
                    <section>
                        <input id='modelo_anuncio' name='modelo' type='text' placeholder='Modelo' value='<?php echo $modelo ?>' required />
                    </section>
                    
                    <section>
                        <textarea id='descripcion_anuncio' name='descripcion' type='text' placeholder='Descripción' value='<?php echo $descripcion ?>' rows="4"></textarea>
                    </section>
                    <section>
                        <input id='precio_anuncio' name='precio' type='text' placeholder='Precio' value='<?php echo $precio ?>' pattern="^[0-9]+" required />
                    </section>
                    <section>
                        <input id='año_vehiculo_anuncio' name='ano_vehiculo' type='text' placeholder='Año' value='<?php echo $ano ?>' required />
                    </section>
                    <div>
                        <input type='submit' value='Comprar Coche sin cambios' />
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <form action="../addComponent.php" id='loginForm' class="my-4" name="addForm" method='post' enctype="multipart/form-data" style="width:40%; font-family: 'Arial'">
                
                <label><i class="material-icons" style="font-size:100px;color:white;">miscellaneous_services</i></label>
                    <section>
                        <input id='alfombrilla' name='nombre' type='text' placeholder='Alfombrillas' value='' pattern="^[0-9]*" />
                    </section>
                    <section>
                        <input id='palancas' name='precio' type='text' placeholder='Polainas de palanca de cambios' value='' pattern="^[0-9]*" />
                    </section>
                    <section>
                        <input id='tapacubos' name='ano_vehiculo' type='text' placeholder='Tapacubos' value='' pattern="^[0-9]*" />
                    </section>
                    <section>
                        <input id='cubreasientos' name='precio' type='text' placeholder='Cubre asientos' value='' pattern="^[0-9]*" />
                    </section>
                    <section>
                        <input id='ambientadores' name='ano_vehiculo' type='text' placeholder='Ambientadores' value='' pattern="^[0-9]*" />
                    </section>
                    <div>
                        <input type="hidden" name="send" value="true">
                        <input style='width: 100%;' type='submit' value='Comprar con componentes' />
                    </div>
                    <div>
                        <input style='width: 100%;' type='button' value='Atrás' onclick="location.href='index.php'">
                    </div>
                </form>
            </div>
        </div>


    </section>


</body>


<?php
include("../partials/footer.php");
?>

</html>