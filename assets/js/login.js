function iniciarsesion(){
    var resultado = true;
    var usuario = $('#cuenta').val();
    var contra = $('#clave').val();
    
    var datosRegistro = {
        "usuario" : usuario,
        "password" : contra,
    };
    
    $.ajax({
        url: "inicio.php",
        type: "POST",
        data: JSON.stringify(datosRegistro),
        contentType: "application/json;charset=utf-8",
        dataType: "json",
        success: function(res) {
            alert(res.message);
            window.location.href = "index.html";
        },
        error: function(res) {
            var json_string = JSON.stringify(res);
            console.log("Error: " + json_string);
            alert("Error: ");
        }
    });
    return;
};