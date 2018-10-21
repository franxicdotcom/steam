    <?php
        switch ($bodyID){
            case '/index.php':
                require_once 'index_content_neu.php';
                break;
            case '/termine.php':
                require_once 'termine_content.php';
                break;
            case '/gallery.php':
                require_once 'gallery_content_neu.php';
                break;
            case '/cocktails.php':
                require_once 'cocktails_content_neu.php';
                break;
            case '/darts.php':
                require_once 'darts_content_neu.php';
                break;
            case '/anfahrtkontakt.php':
                require_once 'anfahrtkontakt_content.php';
                break;
            case '/legends.php':
                require_once 'legends_content.php';
                break;
            case '/impressum.php':
                require_once 'impressum_content_neu.php';
                break;
            case '/bildnachweis.php':
                require_once 'bildnachweis_content_neu.php';
                break;
            default:
                echo 'Sorry, still under construction!<br/><br/>'
                . 'Leider noch kein Content vorhanden für '. $_SERVER['SCRIPT_NAME']
                . '.';
                break;
        }
    ?>
