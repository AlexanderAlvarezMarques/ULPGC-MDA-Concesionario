<script>
        function registrarCoche(){
            var resultado = true;
            var cuenta = $('#nombre_anuncio').val();
            var descripcion = $('#descripcion_anuncio').val();
            var precio = $('#precio_anuncio').val();
            var marca = $('#marca_anuncio').val();
            var modelo = $('#modelo_anuncio').val();
            var año = $('#año_vehiculo_anuncio').val();
            
            var datosRegistro = {
                "cuenta" : cuenta,
                "descripcion" : descripcion,
                "precio" : precio,
                "marca" : marca,
                "modelo" : modelo,
                "año" : año,
            };
            
            $.ajax({
                url: "../add_anuncio.php",
                type: "POST",
                data: JSON.stringify(datosRegistro),
                contentType: "application/json;charset=utf-8",
                dataType: "json",
                success: function(res) {
                    alert(res.message);
                    if (res.inserted === true){
                        window.location.href = "../views/anuncios.php";
                    }
                },
                error: function(res) {
                    var json_string = JSON.stringify(res);
                    console.log("Error: " + json_string);
                    alert("Error: ");
                }
            });
            return;
         };
    </script>