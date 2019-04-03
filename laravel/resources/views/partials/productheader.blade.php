<html>
    <head>
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no">
    </head>
    <body>
        <div class="page-container">
            <header>
                <ul class="columns">
                    <li class="column column-1">
                        <span class="subtitle">
                            <span>ALQUÍMICOS Y HERRAMIENTAS PARA LA</span>
                            <span>NUEVA ENERGÍA</span>
                        </span>
                    </li>
                    <li class="column column-2">
                        <span class="title">
                            <span>ALQUÍ</span>
                            <span>MICOS</span>
                        </span>
                        <span class="subtitle button">
                            <a href="#">VER PRODUCTOS</a hrefa>
                        </span>
                    </li>
                    <li class="column column-3">
                        <span class="title">
                            <span>TALLE</span>
                            <span>RES</span>
                        </span>
                        <span class="subtitle button">
                            <a href="#">VER PRODUCTOS</a>
                        </span>
                    </li>
                    <li class="column column-4">
                        <span class="title">
                            <span>CONFE</span>
                            <span>RENCIAS</span>
                        </span>
                        <span class="subtitle button">
                            <a href="#">VER PRODUCTOS</a>
                        </span>
                    </li>
                </ul>
                <div class="header-wave product-header">
                    <img class="header-icon flecha-abajo" src="{{ asset('img/flecha-abajo.png') }}" alt="">
                    <ul id="products-categories-list">
                        <?php foreach ($categories as $category):?>
                            <li>
                                <span class="category-title"><?php echo $category->name; ?></span>
                                <img class="category-image" src="<?php echo $category->img; ?>" alt="">
                                <div class="category-link-container">
                                    <a href="<?php echo $category->href; ?>" class="category-link">CONOCELOS</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <h1>Lociones</h1>
                </div>
            </header>