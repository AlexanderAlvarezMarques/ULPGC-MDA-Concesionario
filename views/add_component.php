<!DOCTYPE html>
<html lang="es">

<?php
include("../partials/head.php");
?>

<script src="../assets/js/advertisements.js"></script>

<body>

  <?php
  include("../partials/header.php");
  ?>

  <section id="page-section" class="page-section">  </section>

  <script>
    $parameters = {
      "page": 0
    }

    $.ajax({

      data: $parameters,
      url: '../components/components-display.php',
      type: 'post',
      success: function(response) {
        $("#page-section").html(response);
      }

    });
  </script>

  <?php
  include("../partials/footer.php");
  ?>

</body>

</html>