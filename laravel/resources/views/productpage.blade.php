@include('partials/productheader')
<div class="product-page-content">
    <div id="product-image-container">

    </div>
    <div id="product-details-container">
        <h1 class="product-title">{{ $product->name }}</h1>
        <span class="product-subtitle">{{ $product->subTitle }}</span>
        <p class="product-detail">{{ $product->detail }}</p>
        <span class="product-price">${{ $product->price }}</span>
        <a class="product-buy-link" href="{{ $product->buyLink }}">Comprar</a>
    </div>
</div>
@include('partials/footer')
