<html>
    <head>
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>CasaVioleta - Home</title>
    </head>
    <?php 
    $extraClass = '';
    if (isset($bodyExtraClass)) {
        $extraClass = 'class="' . $bodyExtraClass . '"';
    }
    ?>

    <body <?php echo $extraClass; ?> >
        <div class="page-container">
            <header>
                @include('partials/top')
                <div class="header-wave product-header">
                    <a href="#" id="btn-go-content">
                        <img class="header-icon flecha-abajo" src="{{ asset('img/flecha-abajo.png') }}" alt="">
                    </a>
                    <?php
                        $columns = [
                            [ 'img' => asset('img/home/home-col-1.png'), 'link' => '/quienes-somos' ],
                            [ 'img' => asset('img/home/home-col-2.png'), 'link' => '/distribuidores' ],
                            [ 'img' => asset('img/home/home-col-3.png'), 'link' => '/contacto' ],
                        ];
                    ?>
                    <ul id="products-categories-list">
                        <?php foreach ($columns as $column): ?>
                            <li>
                                <img class="category-image" src="<?php echo $column['img']; ?>" alt="">
                                <div class="category-link-container">
                                    <a href="<?php echo $column['link']; ?>" class="category-link">CONOCELOS</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <h1><?php echo $pageTitle; ?></h1>
                </div>
            </header>