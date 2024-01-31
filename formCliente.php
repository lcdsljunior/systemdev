<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php include "header.php" ?>

<body>
    <div class="wrapper">

        <?php include "menu.php" ?>

        <div class="main">

            <?php include "topo.php" ?>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Formulário de Cliente</h1>
                    <!-- <div class="row"> -->
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CPF</label>
                                                <input name="cpf" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sem os pontos" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Permissão</label>
                                                <select name="permissao" class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Escolha a permissão</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Operacional</option>
                                                    <option value="3">Relatórios</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Usuário</label>
                                                <input name="user" type="text" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                                                <input name="password" type="password" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Exemplo de entrada de arquivo padrão</label>
                                            <input name="foto" class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Observação</label>
                                        <textarea name="observacao" class="form-control" rows="8" placeholder="Detalhe mais o funcionário"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <button name="cadastrar" type="submit" class="btn btn-success" style="width: 100%;">Cadastrar</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <button name="voltar" type="submit" class="btn btn-danger" style="width: 100%;">Voltar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


            <footer class="footer">
                <?php include 'footer.php' ?>
            </footer>
        </div>
    </div>
    <script src="js/app.js"></script>

</body>

</html>