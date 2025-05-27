<section class="category-page">
    <div class="container">
        <nav class="breadcrumbs">
        </nav>
        <div class="category-header">
            <h1 class="category-title">{{ $category->name }}</h1>
            <p class="category-description">{{ $category->description }}</p>
        </div>
        <x-product.product-group :categories="$categories" />
    </div>
</section>
