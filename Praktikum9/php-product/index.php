
<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\ProductService;

try {
    $productService = new ProductService();
    $products = $productService->getProducts();

    echo "<h1>Daftar Produk</h1>";

    foreach ($products as $product) {
        echo "<p>";
        echo "Nama: " . ($product->getName());
        echo "<br>";
        echo "Harga: " . ($product->getFormattedPrice());
        echo "</p>";
    }
} catch (Throwable $e) {
    echo "<h3>Terjadi Error</h3>";
    echo "Pesan: " . ($e->getMessage());
}
