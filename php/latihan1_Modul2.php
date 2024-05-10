<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 10px;
        }

        .produk {
            border: 1px solid #dddddd;
            padding: 10px;
            text-align: center;
        }

        .produk h3 {
            margin-top: 0;
        }

        .order-btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <h2>Daftar Produk</h2>

    <div class="container">
        <?php
        $dataProduk = array(
            array("Galaxy S21", "Samsung", 19000000, true),
            array("Galaxy A71", "Samsung", 6999000, false),
            array("iPhone 12 Pro Max", "Apple", 20999000, true),
            array("iPhone 12 Mini", "Apple", 10999000, false),
        );

        foreach ($dataProduk as $produk) {
            echo "<div class='produk'>";
            echo "<h3>" . $produk[0] . "</h3>";
            echo "<p>Merk: " . $produk[1] . "</p>";
            echo "<p>Harga: Rp " . number_format($produk[2], 0, ',', '.') . "</p>";
            echo "<p>Status Stok: " . ($produk[3] ? "Tersedia" : "Tidak Tersedia") . "</p>";
            if ($produk[3]) {
                echo "<a href='#' class='order-btn'>Order</a>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>

</html>