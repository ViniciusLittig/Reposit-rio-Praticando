<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include_once "css/csspadrao.php"; ?>

    <style>
        #img {
            background-image: url('https://egestorab.saude.gov.br/resource/img/fundo_login.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
            .ligar {
                font-size: 30px;
                color: red;
            }
       
    </style>

</head>

<body>

    <body id="img" class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div id="ligar" class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>U</b>Bank</a>
                    <i class="ligar fas fa-piggy-bank"></i>
                </div>
                <div class="card-body">
                    <?php include_once "js/alert.php"; ?>
                    <form method="post" name="frmcadastro" id="frmcadastro">
                        <div class="input-group mb-3">
                            <input required autofocus name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome e sobre nome*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtemail" id="edtemail" type="email" class="form-control" placeholder="Digite seu endereço de e-mail*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtsenha" id="edtsenha" type="password" class="form-control" placeholder="Digite sua senha*" require>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="edttermos" name="edttermos" type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        Estou de acordo com todas as condições, <a class="primary" data-toggle="modal" data-target="#modal-default">Leia os termos</a>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="social-auth-links text-center">
                            <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-plus mr-2"></i>
                                Salvar
                            </button>
                        </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <a href="login.php" type="button" class="btn btn-block btn-warning">
                            <i class="fas fa-ban"></i>
                            Cancelar
                        </a>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">TERMOS DE USO</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Bem-vindo ao site. O PRESENTE DOCUMENTO ("TERMOS DE USO") ESTABELECE OS TERMOS E CONDIÇÕES APLICÁVEIS AO
                                        USO DO SITE. POR FAVOR, REVISE OS TERMOS DE USO CUIDADOSAMENTE ANTES DE UTILIZAR O SITE. AO ACESSAR,
                                        NAVEGAR OU UTILIZAR O SITE ("USO"), TODOS OS USUÁRIOS E VISITANTES ("VOCÊ", "VOCÊS," "USUÁRIO" OU "USUÁRIOS")
                                        DECLARAM ACEITAR OS TERMOS E CONDIÇÕES CONTIDOS NESTES TERMOS DE USO. CASO VOCÊ NÃO CONCORDE COM OS TERMOS E
                                        CONDIÇÕES CONTIDOS NESTES TERMOS DE USO, POR FAVOR, NÃO USE O SITE. A UBANK TRABALHO TEMPORARIO LTDA
                                        ("RHB") E SUAS SUBSIDIÁRIAS RESERVAM-SE O DIREITO DE ATUALIZAR OS TERMOS DE USO PERIODICAMENTE, AO EXCLUSIVO
                                        RITÉRIO DA RHB. VOCÊ DEVE REVISAR OS TERMOS DE USO PERIODICAMENTE PARA EVENTUAIS ATUALIZAÇÕES E
                                        MODIFICAÇÕES.</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>


        <!-- Valida os dados do forulário e caso seja valido salva os dado no banco de dados -->


        <script src="./Css_fixo/jquery.js"></script>
        <script src="./Css_fixo/jquery.min.js"></script>
        <script src="./Css_fixo/bootstrap.min.js"></script>
        <script src="./Css_fixo/adminlte.min.js"></script>
        <script src="./Css_fixo/jquery.validate.min.js"></script>
        <script src="./Css_fixo/messages_pt_BR.min.js"></script>

    </body>

</html>