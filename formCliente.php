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
                                <form action="cadastroCliente.php" enctype="multipart/form-data" method="post">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" required autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CEP</label>
                                                <input type="text" class="form-control" id="cep" name="cep" maxlength="8" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Logradouro</label>
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nº</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="numero" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                                                    <input type="text" class="form-control" id="bairro" name="bairro" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                                                    <input type="text" class="form-control" id="cidade" name="cidade" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" id="uf" name="uf" required autocomplete="off">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Logo/imagem Pessoa</label>
                                        <input class="form-control" type="file" name="foto" id="formFile">
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
            <main class="content">
                <h4 class="h3 mb-3">Lista de clientes</h4>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Dados dos clientes</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'config.php';
                                    $sql = "SELECT * FROM cliente";
                                    $busca = mysqli_query($conn, $sql);

                                    while ($dados = mysqli_fetch_array($busca)) {
                                        $id = $dados['id_cliente'];
                                        $fotos = $dados['imagem'];
                                        $nome = $dados['nome'];
                                        $email = $dados['email'];
                                        $telefone = $dados['telefone'];
                                        $estado = $dados['estado'];


                                    ?>
                                        <tr>
                                            <td><img src="imagens/<?= $fotos ?>" class="img-fluid img-thumbnail" width="70px" height="70px"></td>
                                            <td><?= $nome ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $telefone ?></td>
                                            <td><?= $estado ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning editar-button" data-bs-toggle="modal" data-bs-target="#editarModal" data-id="<?= $id ?>" data-fotos="<?= $fotos ?>" data-nome="<?= $nome ?>" data-email="<?= $email ?>" data-telefone="<?= $telefone ?>" data-estado="<?= $estado ?>">
                                                    <i class="fa-solid fa-file-pen"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger excluir-button" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="<?= $id ?>" data-nome="<?= $nome ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>


                                                <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModal" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar cliente</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="atualizarCliente.php" method="post">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                                                        <input type="text" class="form-control" id="nome" name="nome" required autocomplete="off">
                                                                        <input type="hidden" id="id" name="id">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                                        <input type="text" class="form-control" id="email" name="email" required autocomplete="off">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                                                        <input type="text" class="form-control" id="telefone" name="telefone" required autocomplete="off">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                                                        <input type="text" class="form-control" id="estado" name="estado" required autocomplete="off">
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-success">Salvar</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModal" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir cliente</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="excluirCliente.php" method="post">
                                                                    <div class="mb-3">
                                                                        Tem certeza que deseja excluir o cliente selecionado?
                                                                        <input type="hidden" id="id" name="id">
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <div class=" card-body">
                <footer class="footer">
                    <?php include 'footer.php'; ?>
                </footer>
            </div>
        </div>

        <script src="js/app.js"></script>
</body>

</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editarButtons = document.querySelectorAll('.editar-button');
        const editarModal = document.getElementById('editarModal');

        const modalEditarTitle = editarModal.querySelector('.modal-title');
        const idInput = editarModal.querySelector('#id');
        const nomeInput = editarModal.querySelector('#nome');
        const emailInput = editarModal.querySelector('#email');
        const telefoneInput = editarModal.querySelector('#telefone');
        const estadoInput = editarModal.querySelector('#estado');

        const excluirButtons = document.querySelectorAll('.excluir-button');
        const excluirModal = document.getElementById('excluirModal');

        const modalExcluirTitle = excluirModal.querySelector('.modal-title');
        const idExcluirInput = excluirModal.querySelector('#id');
        const nomeExcluirInput2 = excluirModal.querySelector('#nome');

        editarButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('data-id');
                const nome = button.getAttribute('data-nome');
                const email = button.getAttribute('data-email');
                const telefone = button.getAttribute('data-telefone');
                const estado = button.getAttribute('data-estado');

                modalEditarTitle.textContent = "Editar cliente: " + nome;
                idInput.value = id;
                nomeInput.value = nome;
                emailInput.value = email;
                telefoneInput.value = telefone;
                estadoInput.value = estado;

                const editarModalInstance = new bootstrap.Modal(editarModal);
                editarModalInstance.show();
            });
        });

        excluirButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('data-id');
                const nome = button.getAttribute('data-nome');


                modalExcluirTitle.textContent = "Excluir cliente: " + nome;
                idExcluirInput.value = id;

                const excluirModalInstance = new bootstrap.Modal(excluirModal);
                excluirModalInstance.show();
            });
        });
    });
</script>


<script>
    document.getElementById("cep").addEventListener("input", function() {
        var numCep = document.getElementById("cep").value;
        if (numCep >= 7) {
            viaCEP();
        }
    });

    function viaCEP() {
        var numCep = document.getElementById("cep").value;
        var url = `https://viacep.com.br/ws/${numCep}/json`;
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Erro ao buscar CEP");
                }
                return response.json();
            }).then(({
                uf,
                localidade,
                logradouro,
                bairro
            }) => {
                document.getElementById("uf").value = uf;
                document.getElementById("cidade").value = localidade;
                document.getElementById("logradouro").value = logradouro;
                document.getElementById("bairro").value = bairro;
            })
            .catch(error => {
                console.error(error);
            });
    };
</script>

<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000");
    $("#cpfcnpj").keydown(function() {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) {}

        var tamanho = $("#cpfcnpj").val().length;

        if (tamanho < 14) {
            $("#cpfcnpj").mask("999.999.999-99");
        } else {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }

        var elem = this;
        setTimeout(function() {
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);

        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>