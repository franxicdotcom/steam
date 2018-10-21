<!DOCTYPE html>

<html lang="de">
    <?php 
        $actBodyID = '';
        switch ($bodyID){
            case '/index.php':
                $actBodyID = 'index';
                break;
            case '/termine.php':
                $actBodyID = 'termine';
                break;
            case '/gallery.php':
                $actBodyID = 'gallery';
                break;
            case '/cocktails.php':
                $actBodyID = 'cocktails';
                break;
            case '/darts.php':
                $actBodyID = 'darts';
                break;
            case '/anfahrtkontakt.php':
                $actBodyID = 'anfahrtkontakt';
                break;
            case '/legends.php':
                $actBodyID = 'legends';
                break;
            case '/impressum.php':
                $actBodyID = 'impressum';
                break;
            case '/bildnachweis.php':
                $actBodyID = 'bildnachweis';
                break;
            default: echo 'default';
            }            
    require_once './headerinc.php';
?>
    <body id="<?= $actBodyID ?>">
<?php    
    require_once './header.php';
    
    require_once './nav.php';
    
    require_once './main.php';
    
    require_once './footer.php';
    ?>
    </body>
</html>