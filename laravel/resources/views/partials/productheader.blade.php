<html>
    <head>
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>CasaVioleta - <?php echo $title;  ?></title>
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
                    <img class="header-icon flecha-abajo" src="{{ asset('img/flecha-abajo.png') }}" alt="">
                    <ul id="products-categories-list">
                        <?php foreach ($categories as $category):?>
                            <li>
                                <span class="category-title"><?php echo $category->name; ?></span>
                                <img class="category-image" src="<?php echo $category->getImage(); ?>" alt="">
                                <div class="category-link-container">
                                    <a href="<?php echo $category->getUrl(); ?>" class="category-link">CONOCELOS</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <h1><?php echo $pageTitle; ?></h1>
                </div>
            </header>