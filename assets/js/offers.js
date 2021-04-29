function loadOffer(page) {
    $parameters = {
      "page": page
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../offers-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }
function deleteOffer(id) {
    $parameters = {
      "id": id
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../components/offers-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }