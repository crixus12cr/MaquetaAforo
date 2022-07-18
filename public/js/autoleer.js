function calcular() {
    try {
        let valorFlete = parseInt(document.getElementById("ValorAforo").value * 0.01) || 0;
        let valorSeguro = parseInt(document.getElementById("TipoUnidad").value) || 0;

        document.getElementById("ValorFlete").value = valorFlete;
        document.getElementById("VentaSeguro").value = valorSeguro;

        document.getElementById("SubTotal").value = valorFlete + valorSeguro;
    } catch (error) {

    }


}
