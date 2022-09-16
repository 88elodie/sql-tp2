<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ecm5gnz.css">
</head>
<body>
    <ul class="navigation">
        <li><a href="?module=base&action=index">Accueil</a></li>
        <?php if(!empty($_SESSION['user_id'])){ ?>
        <li><a href="?module=forum&action=view">Mes forums</a></li>  
        <li><a href="?module=forum&action=create">Créer un forum</a></li>
        <li><a href="?module=user&action=logout">Déconnexion</a></li>
        <?php }else{ ?>
        <li><a href="?module=user&action=create">Créer un compte</a></li>
        <li><a href="?module=user&action=login">Connexion</a></li>
        <?php } ?>
    </ul>
    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>