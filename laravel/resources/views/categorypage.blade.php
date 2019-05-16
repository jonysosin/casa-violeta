@include('partials/productheader')
<div class="product-page-content">
    <ul id="category-products-list">
        <?php foreach($products as $product): ?>
            <?php $productTitle = $product->isPromo ? 'PROMO DEL MES' : $product->name; ?>
            <li class="category-product-item <?php echo $product->isPromo ? 'promo-product': ''  ?>">
                <div class="category-product-image">
                    <img src="" alt="">
                </div>
                <span class="category-product-title"><?php echo $productTitle; ?></span>
                <p class="category-product-subtitle"><?php echo $product->subTitle; ?></p>
                <a class="category-product-link" href="<?php echo $product->getUrl(); ?>">VER PRODUCTO</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
@include('partials/footer')
