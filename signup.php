<?php

  if(isset($_POST['submit']))
  {
     include_once('conexao.php');     
          
     $nome = $_POST['cad_nome'];
     $email = $_POST['cad_email'];
     $telefone = $_POST['cad_tel'];
     $endereco = $_POST['cad_ende'];
     $bairro = $_POST['cad_bairro'];
     $login = $_POST['cad_login'];     
     $senha = $_POST['cad_senha'];
          
     $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, telefone, endereco, bairro, login, senha)
     VALUES ('$nome', '$email', '$telefone', '$endereco', '$bairro', '$login', '$senha')");   
          
     header('Location: login_novo.html');      
  }    

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign up - Óleo Limpo</title>
    <meta name="description" content="O projeto ÓLEO DO BEM tem o objetivo de conscientizar e incentivar a população a descartar corretamente o óleo de cozinha, minimizando impactos ambientais e colaborando com uma educação ambiental ampla e efetiva.">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Raleway.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/Icon-Centered-Between-Lines.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"></a><img src="/img/LOGO-OLEO-LIMPO.png" width="171" height="36"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html" style="color: #121643;margin-left: 0px;">Home<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-home" data-bss-hover-animate="swing" style="margin-left: 5px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                            </svg></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><a class="btn btn-primary shadow" role="button" href="signup.html" style="margin-right: 6px;background: #00000000;color: var(--bs-body-color);">Inscreva-se</a><a class="btn btn-primary shadow" role="button" href="login_novo.html" style="background: rgb(1,113,61);">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-user" data-bss-hover-animate="swing" style="margin-left: 2px;">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>&nbsp;</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="/img/Asset%202.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1" style="color: rgb(1,113,61);">Crie Seu Acesso!</span></h2>
                    <form method="post" data-bs-theme="light" action="signup.php">
                        <div class="mb-3"><input class="shadow-sm form-control" type="text" name="cad_nome" placeholder="Digite seu nome" required/>  </div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="email" name="cad_email" placeholder="Digite seu email" required/></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="tel" maxlength="15" name="cad_tel" placeholder="Digite seu telefone" required/> </div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="text" name="cad_ende" placeholder="Digite seu endereço" required/></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="text" name="cad_bairro" placeholder="Digite seu bairro" required/></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="text" name="cad_login" placeholder="Digite seu login" required/></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="password" name="cad_senha" placeholder="Digite sua senha" required/></div>                     
                        <div class="mb-5"><a href="login_novo.html"><input class="btn btn-primary shadow" type="submit" name="submit" value="Criar Conta" style="background: rgb(1,113,61);"/></a></div>
                    </form>
                    <p class="text-muted">Tem uma conta?&nbsp;<a href="login_novo.html">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a>&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-3">
                    <div class="fw-bold d-flex align-items-center mb-2"><img src="/img/LOGO-OLEO-LIMPO.png" width="144" height="31"></div>
                    <p class="text-muted">Evite desperdícios de óleo, recicle conscientemente.</p>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Sobre</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a><a href="index.html"></a></li>
                        <li><a href="contacts.html"></a><a href="index.html"></a></li>
                        <li><a href="signup.html">Inscreva-se</a></li>
                        <li><a href="login.html">Entrar</a></li>
                        <li><a href="forgotten-password.html"></a><a href="login.html"></a></li>
                    </ul><a href="login.html"></a>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold"></h3>
                    <ul class="list-unstyled">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2023 Óleo Limpo - Feito com ❤️ por<strong> FutureMinds.&nbsp;</strong></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>