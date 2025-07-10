<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'banjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', [
    'products' => $products
]);
