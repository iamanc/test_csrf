<?php
session_start();
?>

<html>
<head>
    <title>Trang Web Đích - Đặt Hàng</title>
</head>
<body>
    <h1>Trang Web Đích - Đặt Hàng</h1>
    <form action="process_order.php" method="post">
        <input type="text" name="product_name" placeholder="Tên Sản Phẩm">
        <input type="submit" value="Đặt Hàng">
    </form>
</body>
</html>
