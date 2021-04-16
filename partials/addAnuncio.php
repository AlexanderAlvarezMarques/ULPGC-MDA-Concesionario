<script>
    function registrarCoche() {
        var resultado = true;
        var cuenta = $('#nombre_anuncio').val();
        var descripcion = $('#descripcion_anuncio').val();
        var foto = $('#foto').val();
        var precio = $('#precio_anuncio').val();
        var marca = $('#marca_anuncio').val();
        var modelo = $('#modelo_anuncio').val();
        var año = $('#año_vehiculo_anuncio').val();

        var patron_num = /[0-9]+/;
        if (!patron_num.exec(precio)) {
            alert('error en el precio');
            resultado = false;
        }

        if (!patron_num.exec(año)) {
            alert('error en el año');
            resultado = false;
        }

        if (resultado === true) {
            var datosRegistro = {
                "cuenta": cuenta,
                "descripcion": descripcion,
                "foto": foto,
                "precio": precio,
                "marca": marca,
                "modelo": modelo,
                "año": año,
            };
        }

        $.ajax({
            url: "../add_anuncio.php",
            type: "POST",
            data: JSON.stringify(datosRegistro),
            contentType: "application/json;charset=utf-8",
            dataType: "json",
            success: function(res) {
                alert(res.message);
                if (res.inserted === true) {
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