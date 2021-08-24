<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font que é usada para pegar icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Estilos caixas de Seleção -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- Estilos Template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    
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
                    <a href="#" class="btn btn-block btn-success">
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

    <!-- Biblioteca Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Biblioteca JavaScript Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <!-- Biblioteca JavaScript Admin LTDE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

    
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