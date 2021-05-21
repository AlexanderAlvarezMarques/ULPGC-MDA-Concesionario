<!DOCTYPE html>
<html lang="es">

<?php
include __DIR__ . "/../partials/head.php";
include __DIR__ . "/../vendor/database/anuncios.php";

if (isset($_POST['mod'])) {

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $src = $_POST["image"];
    $precio = $_POST["precio"];
    //$precio_financiado = $_POST["precio_financiado"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    //$localidad = $_POST["localidad"];
    $ano = $_POST["ano"];
    //$positiondusuario = $_POST["positiondusuario"];

    $res = Anuncios::updateAdvertisement($id,$nombre,$descripcion,$src,$precio,$marca,$modelo,$ano);
    if ($res){
        header("Location:http://localhost/ULPGC-MDA-Concesionario/views/anuncios.php");
    }
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

<link href="../assets/css/login.css" rel="stylesheet" type="text/css">

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

    <form id='loginForm' action="../modifyanuncio.php" class="my-4" name="modifyForm" method='post' enctype="multipart/form-data" style="width:30%; font-family: 'Arial'">
    <label><i class="material-icons" style="font-size:100px;color:white;">directions_car</i></label>
        <section>
            <input id='nombre_anuncio' name='nombre' type='text' placeholder='Título del anuncio' value='<?php echo $nombre ?>' required />

        </section>
        <section>
            <textarea id='descripcion_anuncio' name='descripcion' type='text' placeholder='Descripción (opcional)' value='<?php echo $descripcion ?>' rows="4"></textarea>
        </section>
        <section>
            <input id='marca_anuncio' name='marca' type='text' placeholder='Marca' value='<?php echo $marca ?>' required />
        </section>
        <section>
            <input id='modelo_anuncio' name='modelo' type='text' placeholder='Modelo' value='<?php echo $modelo ?>' required />
        </section>
        <section>
            <input id='precio_anuncio' name='precio' type='text' placeholder='Precio' value='<?php echo $precio ?>' pattern="^[0-9]+" required />
        </section>
        <section>
            <input id='año_vehiculo_anuncio' name='ano_vehiculo' type='text' placeholder='Año' value='<?php echo $ano ?>' required />
        </section>
        <section>
            <input type="file" style="min-height:53px" class="form-control" id="foto" name="imagen" required />
        </section>
        <div>
            <input style='margin-right:10%;' type='button' value='Volver' onclick="location.href='anuncios.php'">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="send" value="true">
            <input type='submit' value='Modificar Coche' />
        </div>
    </form>

</body>


<?php
include("../partials/footer.php");
?>

</html>