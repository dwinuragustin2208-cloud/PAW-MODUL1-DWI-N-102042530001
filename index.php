<?php

$produk = [
    [
        "nama" => "Laptop ASUS",
        "kategori" => "Laptop",
        "harga" => 7500000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse Logitech",
        "kategori" => "Mouse",
        "harga" => 350000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Keyboard",
        "harga" => 850000,
        "stok" => 0
    ],
    [
        "nama" => "Monitor LG",
        "kategori" => "Monitor",
        "harga" => 2500000,
        "stok" => 3
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Headset",
        "harga" => 1200000,
        "stok" => 7
    ],
    [
        "nama" => "Webcam Logitech",
        "kategori" => "Webcam",
        "harga" => 900000,
        "stok" => 4
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">

        <h2>Cia Store</h2>

        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
        </nav>

    </header>


    <!-- Hero -->
    <section class="hero" id="home">

        <h1>Selamat Datang di Cia Store</h1>

        <p>
            Temukan berbagai perangkat dan aksesoris teknologi
            untuk kebutuhanmu.
        </p>

    </section>


    <!-- Informasi Jumlah Produk -->
    <section class="info">

        <h2>Katalog Produk</h2>

        <p>
            Jumlah produk:
            <strong><?= count($produk) ?></strong>
        </p>

    </section>


    <!-- Produk -->
    <main class="container" id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item) : ?>

                <div class="product-card">

                    <span class="category">
                        <?= $item["kategori"] ?>
                    </span>

                    <h3>
                        <?= $item["nama"] ?>
                    </h3>

                    <p class="harga">
                        Rp<?= number_format($item["harga"], 0, ',', '.') ?>
                    </p>

                    <p>
                        Stok: <?= $item["stok"] ?>
                    </p>


                    <?php if ($item["stok"] > 0) : ?>

                        <p class="tersedia">
                            Tersedia
                        </p>

                        <button>
                            Beli Sekarang
                        </button>

                    <?php else : ?>

                        <p class="habis">
                            Stok Habis
                        </p>

                        <button disabled>
                            Stok Habis
                        </button>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </main>


    <!-- Footer -->
    <footer>

        <p>
            &copy; 2026 Cia Store
        </p>

    </footer>

</body>

</html>