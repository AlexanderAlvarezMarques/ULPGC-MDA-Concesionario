function loadProduct(page) {
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

  