<?php include 'Header.PHP' ?>
<?php include 'Usuario.PHP' ?>


    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card bg-light shadow my-4">
                    <img src="https://t.ctcdn.com.br/DIEZqF3nbik0L6OFXKhoTDDj69Y=/27x180:5202x3095/640x360/smart/i334625.jpeg" class="card-img-top">
                    <div class="card-body">
                        <form action="./Cadastro_Usuario.PHP" method="post">
                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="Login.PHP">Clique aqui</a></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(!isset($_POST['nome'])) {
        exit();
        }
        if(!isset($_POST['email'])) {
        exit();
        }
        if(!isset($_POST['senha'])) {
        exit();
        }
        if(!isset($_POST['confirmar_senha'])) {
        exit();
        }
        
        $usuario = new Usuario('', '', '', '');
        echo '<div class="row d-flex justify-content-center">';
            echo '<div class="col-5">';
                echo '<div class="alert alert-primary" style="text-align: center;">';
                    echo $usuario->inserir($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['confirmar_senha'], 'Comum');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    ?>

<?php include 'Footer.PHP' ?>

