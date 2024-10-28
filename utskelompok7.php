<!DOCTYPE html>
<html>
<head>
    <title>Tabel Harga Barang</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php
    $jumlah1 = 20 * 31790;
    $jumlah2 = 25 * 51880;
    $jumlah3 = 15 * 16780;
    $jumlah4 = 20 * 20670;
    $jumlah5 = 15 * 15890;
    $jumlah6 = 20 * 35500;
    $jumlah7 = 25 * 50999;

    $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7;
    ?>

    <tr>
        <td>1</td>
        <td>Minyak Telon</td>
        <td>20</td>
        <td>31.790</td>
        <td><?php echo number_format($jumlah1, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Diapers</td>
        <td>25</td>
        <td>51.880</td>
        <td><?php echo number_format($jumlah2, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Baby Oil</td>
        <td>15</td>
        <td>16.780</td>
        <td><?php echo number_format($jumlah3, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Shampo Baby</td>
        <td>20</td>
        <td>20.670</td>
        <td><?php echo number_format($jumlah4, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Bedak</td>
        <td>15</td>
        <td>15.890</td>
        <td><?php echo number_format($jumlah5, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Baju Bayi</td>
        <td>20</td>
        <td>35.500</td>
        <td><?php echo number_format($jumlah6, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Jumper</td>
        <td>25</td>
        <td>50.999</td>
        <td><?php echo number_format($jumlah7, 0, ',', '.'); ?></td>
    </tr>

    <tr>
        <td colspan="4"><strong>Total</strong></td>
        <td><strong><?php echo number_format($total, 0, ',', '.'); ?></strong></td>
    </tr>
</table>


</body>
</html>

<p>
    
</p>
<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style>
        .receipt {
            border: 1px solid black;
            padding: 15px;
            width: 300px;
            font-family: Arial, sans-serif;
        }
        .receipt h3 {
            text-align: center;
        }
        .receipt p {
            margin: 5px 0;
        }
        .item {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="receipt">
    <h3>Struk Pembayaran</h3>
    <p>Tanggal Transaksi: <?php echo date("d F Y"); ?></p>

    <?php
  
    $products = [
        ["name" => "Baju Bayi", "quantity" => 20, "price" => 35500],
        ["name" => "Diapers", "quantity" => 25, "price" => 51880],
        ["name" => "Bedak", "quantity" => 15, "price" => 15890],
        ["name" => "Minyak Telon", "quantity" => 20, "price" => 31790],
        ["name" => "Baby Oil", "quantity" => 15, "price" => 16780],
        ["name" => "Shampo Baby", "quantity" => 20, "price" => 20670],
        ["name" => "Jumper", "quantity" => 25, "price" => 50999],
        

    ];

    $total = 0;

   
    foreach ($products as $product) {
        $subtotal = $product["quantity"] * $product["price"];
        $total += $subtotal;
        echo "<div class='item'>
                <span>{$product['name']} ({$product['quantity']}x)</span>
                <span>Rp " . number_format($subtotal, 0, ',', '.') . "</span>
              </div>";
    }

  
    $discount = 0;
    if ($total >= 300000) {
        $discount = 0.2 * $total;
    } elseif ($total >= 200000) {
        $discount = 0.1 * $total;
    }

  
    $total_payment = $total - $discount;
    ?>

    <p><strong>Total:</strong> Rp <?php echo number_format($total, 0, ',', '.'); ?></p>
    <p><strong>Diskon:</strong> Rp <?php echo number_format($discount, 0, ',', '.'); ?></p>
    <p><strong>Total Pembayaran:</strong> Rp <?php echo number_format($total_payment, 0, ',', '.'); ?></p>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Harga Barang</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        th, td {
            width: 120px;
        }
    </style>
</head>
<body>

<h2>Tabel Harga Barang</h2>

<?php

$products = [
    ["name" => "Minyak Telon", "stock" => 20, "price" => 31790],
    ["name" => "Diapers", "stock" => 25, "price" => 51880],
    ["name" => "Baby Oil", "stock" => 15, "price" => 16780],
    ["name" => "Shampo Baby", "stock" => 20, "price" => 20670],
    ["name" => "Bedak", "stock" => 15, "price" => 15890],
    ["name" => "Baju Bayi", "stock" => 20, "price" => 35500],
    ["name" => "Jumper", "stock" => 25, "price" => 50999],
];

$total = 0;
?>

<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php foreach ($products as $index => $product): 
        $jumlah = $product["stock"] * $product["price"];
        $total += $jumlah;
    ?>
    <tr>
        <td><?php echo $index + 1; ?></td>
        <td><?php echo $product["name"]; ?></td>
        <td><?php echo $product["stock"]; ?></td>
        <td><?php echo number_format($product["price"], 0, ',', '.'); ?></td>
        <td><?php echo number_format($jumlah, 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="4"><strong>Total</strong></td>
        <td><strong><?php echo number_format($total, 0, ',', '.'); ?></strong></td>
    </tr>
</table>

</body>
</html>