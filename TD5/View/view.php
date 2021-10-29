<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <header>
        <nav>
            <div>
                <div><a href="http://192.168.64.2/TD-PHP/TD5/index.php?action=readAll"><span class="puce">■</span>Accueil</a></div>
                <div><a href="http://192.168.64.2/TD-PHP/TD5/index.php?action=readAll&controller=utilisateur"><span class="puce">■</span>Utilisateur</a></div>
                <div><a href="http://192.168.64.2/TD-PHP/TD5/index.php?action=readAll&controller=trajet"><span class="puce">■</span>Trajet</a></div>
            </div>
        </nav>
    </header>
    <body>
    <?php
    
        $filepath = File::build_path(array("View", $controller, "$view"));
        require $filepath;
    ?>
    </body>
    <footer>
        <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site de covoiturage
        </p>
    </footer>
</html>
