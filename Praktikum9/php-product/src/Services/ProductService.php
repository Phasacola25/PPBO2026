<?php

namespace App\Services;

use App\Models\Product;

class ProductService {
    public function getProducts(): array {
        return [
            new Product("Laptop", 7500000),
            new Product("Mouse", 150000)
        ];
    }
}
