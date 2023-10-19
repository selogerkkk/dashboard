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
                                        <input type="text" class="form-control" id="exampleFormControlInput1" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpfcnpj" required autocomplete="off">
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CEP</label>
                                                <input type="text" class="form-control" id="cep" maxlength="8" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Logradouro</label>
                                                <input type="text" class="form-control" id="logradouro" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nº</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                                                    <input type="text" class="form-control" id="bairro" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                                                    <input type="text" class="form-control" id="cidade" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" id="uf" required autocomplete="off">
                                                </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000");

    $("#cpfcnpj").keydown(function() {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) {}
    });

    $("#cpfcnpj").on("input", function() {
        var tamanho = $(this).val().replace(/[^0-9]/g, '').length;
        if (tamanho < 11) {
            $(this).mask("999.999.999-99");
        } else {
            $(this).mask("99.999.999/9999-99");
        }
    });

    $("#cpfcnpj").on("focus", function() {
        var elem = this;
        setTimeout(function() {
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
    });

    $("#cpfcnpj").on("input", function() {
        var currentValue = $(this).val();
        $(this).val(currentValue);
    });
</script>