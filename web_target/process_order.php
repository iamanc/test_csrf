<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý đơn đặt hàng
    $product_name = $_POST['product_name'];
    echo "Bạn đã đặt hàng sản phẩm: $product_name";
}
?>
