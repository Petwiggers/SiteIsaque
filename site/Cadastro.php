<?php
require_once('../site/class/config.php');
require_once('../site/autoload.php');

//VERIFICAR SE EXISTE O POST COM TODOS OS DADOS
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repete_senha'])){
    //RECEBER VALORES VINDOS DO POST E LIMPAR
    $nome = limpaPost($_POST['nome']);
    $email = limpaPost($_POST['email']);
    $senha = limpaPost($_POST['senha']);
    $repete_senha = limpaPost($_POST['repete_senha']);

    //VERIFICAR SE VALORES VINDOS DO POST NÃO ESTÃO VAZIOS
    if(empty($nome) or empty($email) or empty($senha) or empty($repete_senha)){
        $erro_geral = "Todos os campos são obrigatórios!";
    }else{
        //INSTANCIAR A CLASSE USUARIO
        $usuario = new Usuario($nome,$email,$senha);

        //SETAR A REPETICAO DE SENHA
        $usuario->set_repeticao($repete_senha);

        //VALIDAR O CADASTRO
        $usuario->validar_cadastro();

        //SE NÃO TIVER NENHUM ERRO - ESTÁ VAZIO ERROS
        if(empty($usuario->erro)){
            //INSERIR
            if($usuario->insert()){
                header('location: ../Main/Login.php');
            }else{
                //DEU ERRADO - ERRO GERAL
                $erro_geral = $usuario->erro["erro_geral"];
            }
        }


    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="shortcut icon" href="imgBase/oie_transparent.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Estilos da tela de Cadastro -->
  <link rel="stylesheet" href="cssTelaDeInicio/styleCadastro.css">
  <link rel="icon" href="imgTelaDeInicio/gatinho.ico" type="image/x-icon">

  <title>Cadastre-se</title>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  
<form method="POST">

        <?php if(isset($erro_geral)){?>
        <div class="erro-geral animate__animated animate__rubberBand">
            <?php echo $erro_geral; ?>
        </div>
        <?php } ?>

  <div class="container" style="margin-left:10%;">
    <div class="form-image">
      <img src="imgTelaDeInicio/undraw_shopping_re_3wst.svg" alt="">
    </div>
    <div class="form">
      <form action="#">
        <div class="form-header">
          <div class="title">
            <h1 style="margin-left:-130%;">Cadastre-se</h1>
          </div>
          <div class="login-button" style="margin-left:80%;">
            <button><a href="Login.php">Entrar</a></button>
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="firstname">Nome</label>
           <input <?php if (isset ($usuario->erro["erro_nome"]) or isset($erro_geral)){ echo 'class="erro-input"'; }?> name="nome" type="text" <?php if(isset($_POST['nome'])){echo 'value="'.$_POST['nome'].'"';}?> placeholder="Nome Completo" required>
            <div class="erro"><?php if(isset($usuario->erro["erro_nome"])){echo $usuario->erro["erro_nome"];}?></div>
          </div>

          <div class="input-box">
            <label for="lastname">Idade</label>
            <input id="lastname" type="text" name="lastname" placeholder="Digite sua idade" required>
          </div>
          <div class="input-box">
            <label for="email">E-mail</label>
            <input <?php if (isset ($usuario->erro["erro_email"]) or isset($erro_geral)){ echo 'class="erro-input"'; }?> type="email" name="email" <?php if(isset($_POST['email'])){echo 'value="'.$_POST['email'].'"';}?> placeholder="Seu melhor email" required>
            <div class="erro"><?php if(isset($usuario->erro["erro_email"])){echo $usuario->erro["erro_email"];}?></div>
          </div>

          <div class="input-box">
            <label for="number">Celular</label>
            <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
          </div>

          <div class="input-box">
            <label for="password">Senha</label>
            <input <?php if (isset ($usuario->erro["erro_senha"]) or isset($erro_geral)){ echo 'class="erro-input"'; }?> type="password" name="senha" <?php if(isset($_POST['senha'])){echo 'value="'.$_POST['senha'].'"';}?> placeholder="Senha mínimo 6 Dígitos" required>
            <div class="erro"><?php if(isset($usuario->erro["erro_senha"])){echo $usuario->erro["erro_senha"];}?></div>
          </div>

          <div class="input-box">
            <label for="confirmPassword">Confirme sua Senha</label>
            <input <?php if (isset ($usuario->erro["erro_repete"]) or isset($erro_geral)){ echo 'class="erro-input"'; }?> type="password" name="repete_senha" <?php if(isset($_POST['repete_senha'])){echo 'value="'.$_POST['repete_senha'].'"';}?> placeholder="Repita a senha criada" required>
            <div class="erro"><?php if(isset($usuario->erro["erro_repete"])){echo $usuario->erro["erro_repete"];}?></div>
          </div>

        </div>

        <div class="gender-inputs">
          <div class="gender-title">
            <h6 style="margin-left:-45%;">Gênero</h6>
          </div>

          <div class="gender-group" style="margin-left:-15%;">
            <div class="gender-input" style="margin-left:-20%;">
              <input id="female" type="radio" name="gender">
              <label for="female">Feminino</label>
            </div>

            <div class="gender-input" style="margin-left:20%;">
              <input id="male" type="radio" name="gender">
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input" style="margin-left:20%;">
              <input id="others" type="radio" name="gender">
              <label for="others">Outros</label>
            </div>

            <div class="gender-input" style="margin-left:20%; margin-right:-20%;">
              <input id="none" type="radio" name="gender">
              <label for="none">Prefiro não dizer</label>
            </div>
          </div>
        </div>
        <button class="btn-blue" type="submit" style="background:#6610f2; padding: 7px 22px; border-radius: 5px; color: white; margin-top:10%;">CONTINUAR</button>

    </form>


</body>

</html>
