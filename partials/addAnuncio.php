<script>
        function registrarCoche(){
            var resultado = true;
            var cuenta = $('#nombre_anuncio').val();
            var descripcion = $('#descripcion_anuncio').val();
            var precio = $('#precio_anuncio').val();
            var marca = $('#coche_anuncio').val();
            var modelo = $('#modelo_anuncio').val();
            var año = $('#año_vehiculo_anuncio').val();
            
            var datosRegistro = {
                "nombre_anuncio" : cuenta,
                "descripcion_anuncio" : descripcion,
                "precio_anuncio" : precio,
                "coche_anuncio" : marca,
                "modelo_anuncio" : modelo,
                "año_vehiculo_anuncio" : año,
            };
            
            $.ajax({
                url: "../inicio.php",
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