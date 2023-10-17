<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body>
    <div class="wrapper">
        <?php include 'menu.php'; ?>

        <div class="main">
            <?php include 'topmenu.php'; ?>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Cliente</h1>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Formulário do cliente</h5>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CEP</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label">Logradouro</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nº</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Logo/imagem Pessoa</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div style="text-align: right">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <?php include 'footer.php'; ?>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>