<?php
/*
# =================================================
# header.php
#
# The theme header.
# =================================================
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- HTML & CSS styles -->
        <link rel="stylesheet" type="text/css" href="http://localhost/new/news/wp-content/themes/bootstrap-portfolio/css/foundation.css">
        <script type="text/javascript" src="http://localhost/new/news/wp-content/themes/bootstrap-portfolio/js/foundation.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    

        <!-- Favicon & Apple Touch Icon -->
        <?php
            $favicon = IMAGES . '/icons/icon.png';
            $touchicon = IMAGES . '/icons/apple-touch-icon-precomposed.png';
        ?>

        <link rel="shortcut icon" href="<?php echo $favicon; ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $touchicon; ?>" sizes="152x152">

        <!-- TOP BAR -->
    <div id="topbar">
    <div class="top-bar">
        <div class="top-bar-right">
            <ul class="menu">
                
                <li> <a href="#" style="color: white; text-decoration:none;">Login</a> </li>
                <li> | </li>
                <li> <a href="#" style="color: white; text-decoration:none;">Sign up</a> </li>
                
            </ul>
        </div>
    </div>
    </div>
        
    <!-- MENU BAR -->
    <div id="menubar">
        <div class="top-bar">
            <div class="top-bar-left">
                <a href=""> <img src="http://localhost/new/news/wp-content/themes/bootstrap-portfolio/img/eureka.png" width="213px" height="43px"> </a>
            </div>
                <div class="top-bar-right">
                    <ul class="vertical medium-horizontal menu">
                        <li> <a href="../" style="text-decoration:none;">Home </li>
                        
                    </ul>           
                </div>
            </div>
    </div>
        <?php //wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->