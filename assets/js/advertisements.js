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
    "id": id
  }

  $.ajax({

    data: $parameters,
    url: '../components/advertisements-display.php',
    type: 'post',
    success:
      function (response) {
        $("#page-section").html(response);
      }
  });
}

function modifiedAdvertisement() {
  $parameters = {
    "id": id,
    "nombre": nombre,
    "description": description,
    "marca": marca,
    "modelo": modelo,
    "ano": ano,
    "image": image,
    "mod": true
  }

  $.ajax({

    data: $parameters,
    url: '../modified_anuncio.php',
    type: 'post',
    success:
      window.location("mda.servidor.com/views/:")
  });
}

function addFav(id){
  $parameters = {
    "ida": id,
  }
  $.ajax({
    data: $parameters,
    url: '../components/advertisements-display.php',
    type: 'post',
    success:
      alert("Coche añadido a favoritos")
  });
}