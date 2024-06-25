<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?=ROOT?>/assets/img/php3d.png" type="image/x-icon" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="vh-100 mx-auto w-50 d-flex flex-column align-items-center justify-content-center mw-25">
        <h1 class="mb-5">login</h1>
        <form style="max-width: 500px"
            class="bg-body-tertiary rounded shadow p-5 container d-flex flex-column justify-content-center align-items-center"
            method="post">
            <?php if(!empty($errors)):?>
            <div class="alert alert-danger">
                <?php
                 echo implode("<br>", $errors)?>
            </div>
            <?php endif;?>
            <div class="input-group mb-5">
                <span class="input-group-text">@</span>
                <div class="form-floating mx-auto">
                    <input type="text" id="user" class="form-control" name="login" maxlength="20"
                        value="<?php if(isset($_COOKIE['login'])) { echo $_COOKIE['login']; } ?>" />
                    <label for="user">usuário</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">#</span>
                <div class="form-floating">
                    <input type="password" id="pwd" class="form-control" name="senha" maxlength="20"
                        value="<?php if(isset($_COOKIE['senha'])) { echo $_COOKIE['senha']; } ?>" />
                    <label for="pwd">senha</label>
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="1" name="lembrar" id="lembrar"
                    <?php if(isset($_COOKIE['lembrar'])) { echo 'checked'; } ?> />
                Lembrar senha
            </div>
            <button class="btn btn-primary" type="submit">Entrar</button>
            <?php if (isset($error)) { echo "
                <div class='alert alert-danger' role='alert'>
                <p class='mb-5'>$error</p> 
                <p>$error</p> 
                </div>";
                } ?>
        </form>
        <div class="mt-3">
            <a href="<?=ROOT?>">Home</a>
            <a href="<?=ROOT?>/register">Cadastre-se</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>