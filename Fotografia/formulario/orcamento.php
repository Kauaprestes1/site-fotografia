<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela | Formulario</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-7 bg-image-orcamento vh-100">

            </div>

            <div class="col-4 mt-5">
                <form>
                
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cidade:</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fone:</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Forma de pagamento:</label>
                        <select id="formaPagamento" class="form-select" onchange="calcularOrcamento()">
                            <option selected>Selecione a forma de pagamento...</option>
                            <option value="avista">à vista</option>
                            <option value="duas_vezes">2X no catão</option>
                            <option value="quatro_veses">4X no catão</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Valor do Orçamento:</label>
                        <input type="text" class="form-control" id="valorOrcamento" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

        </div>
    </div>

    <script src="../assets/js/pagamento.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
</body>

</html>