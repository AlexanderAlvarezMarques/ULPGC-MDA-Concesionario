<!DOCTYPE html>
<html lang="es">

<?php
	
	if (isset($_SESSION['loggedin'])) {
		
		echo "<h1 style='color: white;'>DEBUG 1</h1>";

		if ($_SESSION['loggedin']) {

			echo "<h1 style='color: white;'>DEBUG 2</h1>";

		}

	}


	include ("../partials/head.php");
?>

<body>

<?php
	include ("../partials/header.php");
?>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="../Imagenes/Coches/Coche de inicio.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Conoce nuestro concesionario</span>
          </h2>
          <table>
            <tr>
                <td style="border-right: 2px solid #2802d1; padding-right: 10px; ">
                  <h5>Encuentra tu coche totalmente revisado y garantizado</h5>
                </td>
                <td style="padding-left: 4px">
                  <h5>Facilidad de financiación y las mejores condiciones</h5>
                </td>
            </tr>
        </table>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">PIDE</span>
              <span class="section-heading-lower">CITA</span>
            </h2>
            <h6>Pide cita por teléfono para que uno de nuestros expertos te asesore para encontrar el modelo perfecto para ti.</h6>
            <br>
            <a class="nav-link text-expanded" style="font-family: 'Raleway'; font-size:X-Large" href="nosotros.php">Haz clic aqui</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<?php
	include ("../partials/footer.php");
?>

</html>