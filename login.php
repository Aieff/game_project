<?php
include('config.php');
include_once __DIR__ . ('/language/translate.php');
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset ="UTF-8">
    <title><?php echo $keyword["titulo"]; ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/themes.css">

</head>

    <div class="container-fluid" id="logincont">

<div class="dropdown">
    <button class="dropbtn"><?php echo $keyword["lan_idioma"]; ?></button>
    <div class="dropdown-content">
        <a href="?language=pt-br"><?php echo $keyword["lan_pt"]; ?></a>
        <a href="?language=en-us"><?php echo $keyword["lan_en"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_es"]; ?></a>
        <a href="?language=fr-fr"><?php echo $keyword["lan_fr"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_de"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_jp"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_por"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_cn"]; ?></a>
    </div>
</div>

<body>

    <div class="area-login">
        <div class="login">
    
        <div>
            <img src="img/logo-login.png" class="logo-login">
        </div>

    <form method="POST">
        <input type="text" name="email-login" placeholder="<?php echo $keyword["login_placheholder_user"]; ?>" autofocus>
        <input type="password" name="senha-login" placeholder="<?php echo $keyword["login_placheholder_senha"]; ?>"><br>
        <input type="submit" value="<?php echo $keyword["login_logar"]; ?>">
        <input type="submit" value="<?php echo $keyword["login_cadastrar"]; ?>">
    </form>

    <p><?php echo $keyword["log_acc_create"]; ?><a href="#"><?php echo $keyword["log_create"]; ?></a></p>
    

        <i><?php echo $keyword["copyright"]; ?></i>
    </div>
</div>

                  
        
</body>
</div>

<script type="javascript" src="bootstrap/js/bootstrap.js"></script>
</html>

