<?php
$products = [
    [
        'id' => 1,
        'name' => 'uQQRtUIV',
        'priceHT' => 755.06,
        'promo' => false,
        'color' => '#5c92cb' 
    ],
    [
        'id' => 2,
        'name' => 'dxUsVKbewkZlDCs',
        'priceHT' => 248.22,
        'promo' => false,
        'color' => '#3404ad' 
    ],
    [
        'id' => 3,
        'name' => 'dyUkuSuISPDSaq',
        'priceHT' => 584.53,
        'promo' => true,
        'color' => '#3d04bd' 
    ],
    [
        'id' => 4,
        'name' => 'mqphlGMRfCEy',
        'priceHT' => 704.52,
        'promo' => true,
        'color' => '#681c02' 
    ],
    [
        'id' => 5,
        'name' => 'ghyiRiTZFSYxYKblF',
        'priceHT' => 799.48,
        'promo' => false,
        'color' => '#edfb87' 
    ],
    [
        'id' => 6,
        'name' => 'GdFIXvRMfZPqovuMx',
        'priceHT' => 204.06,
        'promo' => true,
        'color' => '#c8254f' 
    ],
    [
        'id' => 7,
        'name' => 'sFUzZw',
        'priceHT' => 367.01,
        'promo' => false,
        'color' => '#cf3a28' 
    ],
    [
        'id' => 8,
        'name' => 'ENVfYbsoouCFCv',
        'priceHT' => 422.65,
        'promo' => true,
        'color' => '#6ea4d6' 
    ],
    [
        'id' => 9,
        'name' => 'jLXmTXb',
        'priceHT' => 592.72,
        'promo' => false,
        'color' => '#45293e' 
    ],
    [
        'id' => 10,
        'name' => 'JwhJr',
        'priceHT' => 193.94,
        'promo' => false,
        'color' => '#f855fc' 
    ],
    [
        'id' => 11,
        'name' => 'cUMYg',
        'priceHT' => 670.05,
        'promo' => false,
        'color' => '#41670f' 
    ],
    [
        'id' => 12,
        'name' => 'OSkrPBLnWKqY',
        'priceHT' => 259.51,
        'promo' => true,
        'color' => '#d32ebe' 
    ],
    [
        'id' => 13,
        'name' => 'IhaZyCOaFtLVK',
        'priceHT' => 353.50,
        'promo' => false,
        'color' => '#3a4b4c' 
    ],
    [
        'id' => 14,
        'name' => 'IhaZyCOaFtLVK',
        'priceHT' => 376.10,
        'promo' => true,
        'color' => '#a51b23' 
    ],
    [
        'id' => 15,
        'name' => 'cWzDKNRPlASHeWIjSs',
        'priceHT' => 523.38,
        'promo' => false,
        'color' => '#b577ea' 
    ],
    [
        'id' => 16,
        'name' => 'UEWUVAStpmVNpUcl',
        'priceHT' => 558.40,
        'promo' => false,
        'color' => '#65ada0' 
    ],
    [
        'id' => 17,
        'name' => 'kJPyERhHgJeulySYgNM',
        'priceHT' => 333.55,
        'promo' => true,
        'color' => '#02c826' 
    ],
    [
        'id' => 18,
        'name' => 'oELlxUsdngGpR',
        'priceHT' => 184.44,
        'promo' => false,
        'color' => '#7f6a05' 
    ]
];

function istrue($i){
    $i ? 
    $return = '
    <div class="card-text">
        <i class="bi bi-megaphone-fill text-danger"></i>
        <p class="mb-0">Profitez d\'une promotion sur ce produit ! </p>
        <i class="bi bi-megaphone-fill text-danger"></i>
    </div>': 
    $return = '';
    return $return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>PHP - Atelier Products</title>
</head>
<body>

    <section class="container">
        <div class="row text-center">
            <?php
            foreach ($products as $product): ?>
                <div class="card col-6 col-md-4 col-lg-2 g-2">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title mb-4">Référence : <?php echo $product['name'] ?> </h5>
                        <h4 class="card-subtitle mb-2 text-muted"> <?php echo $product['priceHT'] ?> € HT</h4>
                        <?php echo istrue($product['promo']) ?>
                        <p class="card-text text-white mt-2" style="background-color : <?php echo $product['color'] ?> "> <?php echo $product['color'] ?> </p>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>