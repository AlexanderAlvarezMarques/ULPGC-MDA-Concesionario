<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/head.php");
?>

<script src="../assets/js/products.js"></script>

<body>

  <?php
  include("../partials/header.php");
  ?>

  <section id="page-section" class="page-section"> </section>

  <form action="payment.php" method="POST">
    <script>
      $parameters = {
        "page": 0
      }

      $.ajax({

        data: $parameters,
        url: '../components/products-display.php',
        type: 'post',
        success: function(response) {
          $("#page-section").html(response);
        }

      });
    </script>
    <button class="btn btn-danger buy-button">Finalizar compra</button>
  </form>
  <?php
  include("../partials/footer.php");
  ?>

</body>

</html>