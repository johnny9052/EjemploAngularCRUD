function consumir() {

    var tipo = $("#selTipo").val();
    var url = $("#txtUrl").val();
    $.ajax({
        //type: 'post',
        type: tipo,
        url: "Controller/RestPersonas.php" + url,
//        dataType: "json",
//        contentType: 'application/json', // No olvidar
        beforeSend: function () {

        },
        data: {nombre: "johnny", cantidad: "1", valor: "9999999",
            descuento: "0", porcentajeDescuento: "0%",
            porcentajeIVA: "16%", tipoRespuesta: "tipo de respuesta"},
        success: function (data) {
            alert(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}
