function loadOffer(page) {
    $parameters = {
      "page": page
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../../components/products-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }

  function deleteProduct(id) {
    $parameters = {
      "id": id
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../components/productos-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }