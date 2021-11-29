<!doctype html>

<title>
    Products
</title>

<link rel="stylesheet" href="../css/app.css">

<body class="divide-y-2 divide-gray-200">
    <?php foreach ($products as $product) : ?>
        <article>
            <h1>
                <a href="/product">
                    {{$product->product_name}}
                </a>
            </h1>

            <div>
                <p>
                    <?= $product->product_description; ?>
                <br>
                    <?= $product->product_price; ?>
                </p>
            </div>
        </article>
    <?php endforeach;?>
</body>
