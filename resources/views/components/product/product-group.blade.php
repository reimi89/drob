@props(['categories'])
<ul class="product-grid">
    @foreach ($categories as $category)
        @foreach ($category->products as $product)
            <li class="product-grid__item">
                <x-product.product-card :product="$product" />
            </li>
        @endforeach
    @endforeach
</ul>
