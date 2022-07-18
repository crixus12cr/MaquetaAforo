<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1>Aforos</h1>

    <div class="container">

        <form action="#" method="post">
            <div class="row">
                <div class="col border border-success">
                    <h4>Remitente</h4>

                    <div class="form-group">
                        <label for="Nombre"> Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="Cedula"> Cedula</label>
                        <input type="number" class="form-control" name="Cedula" id="Cedula">
                    </div>

                    <div class="form-group">
                        <label for="Telefono"> Telefono</label>
                        <input type="number" class="form-control" name="Telefono" id="Telefono">
                    </div>

                    <div class="form-group">
                        <label for="CiudadOrigen"> Ciudad Origen</label>
                        <input type="text" class="form-control" name="CiudadOrigen" id="CiudadOrigen">
                    </div>

                    <div class="form-group m-2">
                        <div class="col border p-2">

                            <h6>Caracteristicas del aforo</h6>

                            <div class="form-group">
                                <label for="NumUnidades"> Numero de unidades</label>
                                <input type="number" class="form-control" name="NumUnidades" id="NumUnidades">
                            </div>

                            <div class="form-group">
                                <label for="Peso"> Peso en libras</label>
                                <input type="number" class="form-control" name="Peso" id="Peso">
                            </div>

                            <div class="form-group">
                                <label for="TipoUnidad"> Tipo de Unidad</label>
                                <select class="form-select form-select" aria-label="form-select-sm example" name="TipoUnidad" id="TipoUnidad" oninput="calcular()">
                                    <option selected value="1500">Sobre</option>
                                    <option value="5000">Caja Pequeña</option>
                                    <option value="10000">Caja Mediana</option>
                                    <option value="20000">Caja Grande</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ValorAforo"> Valor declarado</label>
                                <input type="number" class="form-control" name="ValorAforo" id="ValorAforo" oninput="calcular()">
                            </div>

                            <div class="form-group">
                                <label for="Descripcion"> Descripcion</label>
                                <input type="text" class="form-control" name="Descripcion" id="Descripcion">
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col border border-success">
                    <h4>Destinatario</h4>

                    <div class="form-group">
                        <label for="NombreDestinatario"> Nombre</label>
                        <input type="text" class="form-control" name="NombreDestinatario" id="NombreDestinatario">
                    </div>

                    <div class="form-group">
                        <label for="CedulaDestinatario"> Cedula</label>
                        <input type="number" class="form-control" name="CedulaDestinatario" id="CedulaDestinatario">
                    </div>

                    <div class="form-group">
                        <label for="TelefonoDestinatario"> Telefono</label>
                        <input type="number" class="form-control" name="TelefonoDestinatario"
                            id="TelefonoDestinatario">
                    </div>

                    <div class="form-group">
                        <label for="CiudadDestino"> Ciudad Destino</label>
                        <input type="text" class="form-control" name="CiudadDestino" id="CiudadDestino">
                    </div>

                    <div class="form-group m-2">
                        <div class="col border p-2">

                            <div class="form-group">
                                <label for="ValorFlete"> Valor del flete:</label>
                                <input readonly class="form-control" name="ValorFlete" id="ValorFlete">
                            </div>

                            <div class="form-group">
                                <label for="VentaSeguro"> Venta de Seguro</label>
                                <input readonly class="form-control" name="VentaSeguro" id="VentaSeguro">
                            </div>

                            <div class="form-group">
                                <label for="SubTotal"> SubTotal</label>
                                <input readonly class="form-control" name="SubTotal" id="SubTotal">
                            </div>

                            <div class="form-group">
                                <label for="Total"> Total</label>
                                <input readonly class="form-control" name="Total" id="Total">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <script type="text/javascript" src="js/autoleer.js"></script>
</body>

</html>
