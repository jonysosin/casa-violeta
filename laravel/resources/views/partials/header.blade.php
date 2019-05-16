<html>
    <head>
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>CasaVioleta - <?php echo isset($pageTitle) ? $pageTitle : 'Home';  ?></title>
    </head>
    <?php 
        $extraClass = '';
        if (isset($bodyExtraClass)) {
            $extraClass = 'class="' . $bodyExtraClass . '"';
        }
    ?>
    <body <?php echo $extraClass; ?>>
        <div class="page-container">
            <header id="header">
                @include('partials/top')
                <div class="header-wave">
                    <h1><?php echo isset($pageTitle) ? $pageTitle : 'Home';  ?></h1>
                    <?php $icon = isset($headerIcon) ? $headerIcon : 'quienes-icon.png';  ?>
                    <img class="header-icon" src="<?php echo asset('img/' . $icon ); ?>" alt="">
                </div>
            </header>   