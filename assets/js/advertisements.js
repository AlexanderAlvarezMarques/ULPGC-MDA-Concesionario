function loadAdvertisements(page) {
  $parameters = {
    "page": page
  }

  $.ajax({

    data: $parameters,
    url: '../advertisements-display.php',
    type: 'post',
    success:
      function (response) {
        $("#page-section").html(response);
      }
  });
}

function deleteAdvertisement(id) {
  $parameters = {
    "id" : id
  }

  $.ajax({
    data: $parameters,
    url: '../advertisements-display.php',
    type: 'post'
  });
}