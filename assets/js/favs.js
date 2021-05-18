function loadFavs(page) {
    $parameters = {
      "page": page
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../../components/favs-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }

  function deleteAdvertisement(id) {
    $parameters = {
      "id": id
    }
  
    $.ajax({
  
      data: $parameters,
      url: '../../components/favs-display.php',
      type: 'post',
      success:
        function (response) {
          $("#page-section").html(response);
        }
    });
  }