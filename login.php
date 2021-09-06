<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "css/csspadrao.php"; ?>
<style>
    .ligar{
        font-size: 30px;
        color: red;
    }
    .ligar:hover {
        color: greenyellow;
    }
    #lampada {
        background-image: url('img/on.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
    #lampada2 {
        background-image: url('img/off.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
</style>

    <title>Autenticação</title>
</head>

<body  id="lampada" class="off hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div id="ligar" class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>U</b>Bank</a>
                <i class="ligar fas fa-piggy-bank"></i>
                <i class="ligar fas fa-power-off icons" style="float: right;"></i>
            </div>
            <div class="card-body">
            <div class="callout callout-warning">
                  <h5>Atenção!</h5>

                  <p>Preencha todas as informações abaixo</p>
                </div>

                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="cadastro.php" class="btn btn-block btn-success">
                        <i class="fas fa-user-shield mr-2"></i> Solicitar Cadastro
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">Esqueceu a Senha</a><br>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <script src="./Css_fixo/jquery.js"></script>
<script src="./Css_fixo/jquery.min.js"></script>
<script src="./Css_fixo/bootstrap.min.js"></script>
<script src="./Css_fixo/adminlte.min.js"></script>
<script src="./Css_fixo/jquery.validate.min.js"></script>
<script src="./Css_fixo/messages_pt_BR.min.js"></script>
    
<script>
    var lampada = document.getElementById('lampada');
    var ligar = document.getElementById('ligar');
  
    ligar.addEventListener('click', () => {
        if (lampada.className == 'on login-page') {
            lampada.id = 'lampada';
            lampada.className = 'off login-page';
        } else {
            lampada.id = 'lampada2';
            lampada.className = 'on login-page';
        }
    });
</script>



</body>

</html>