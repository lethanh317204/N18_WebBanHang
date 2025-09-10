<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Áo Thun Nam</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #fff;
            padding: 0 32px;
            height: 80px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            z-index: 1000;
        }
        .navbar-logo img {
            height: 76px;
            vertical-align: middle;
        }
        .navbar-menu {
            display: flex;
            align-items: center;
            flex: 1;
            gap: 32px;
        }
        .navbar-menu a {
            color: #111;
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
        }
        .content {
            margin-top: 96px;
            padding: 24px;
        }
        .products-container {
            display: flex;
            flex-direction: row;
            gap: 32px;
            max-width: 100%;
            overflow-x: auto;
            padding-bottom: 16px;
        }
        .product-card {
            min-width: 260px;
            max-width: 260px;
            flex: 0 0 auto;
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #eee;
        }
        .product-info {
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            color: #222;
            margin-bottom: 8px;
        }
        .product-desc {
            font-size: 14px;
            color: #555;
            margin-bottom: 12px;
        }
        .product-price {
            font-size: 17px;
            color: #d6001c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="../images/logo-clothix.png" alt="Clothix.vn">
        </div>
        <div class="navbar-menu">
            <a href="maincustomer.php">Trang chủ</a>
            <a href="aothun.php" style="color:#d6001c;font-weight:bold;">Áo Thun</a>
            <a href="#">Áo Nam</a>
            <a href="#">Quần Nam</a>
            <a href="#">DENIM</a>
            <a href="#">TechUrban</a>
            <span style="color:#d6001c;font-weight:bold;">OUTLET</span>
        </div>
    </div>
    <div class="content">
        <h2 style="text-align:center;">Áo Thun Nam</h2>
        <div class="products-container">
            <div class="product-card">
                <img class="product-image" src="../images/aothun1.jpg" alt="Áo Thun 1">
                <div class="product-info">
                    <div class="product-title">Áo Thun Nam Cotton Thêu Biểu Tượng</div>
                    <div class="product-desc">Chất liệu cotton thoáng mát, màu vàng nổi bật, form trẻ trung.</div>
                    <div class="product-price">99,000đ</div>
                </div>
            </div>
            <div class="product-card">
                <img class="product-image" src="../images/aothun2.jpg" alt="Áo Thun 2">
                <div class="product-info">
                    <div class="product-title">Set Đồ Nam Golden Script Hình In</div>
                    <div class="product-desc">Áo thun phối quần short, thiết kế năng động, phù hợp đi chơi.</div>
                    <div class="product-price">99,000đ</div>
                </div>
            </div>
            <div class="product-card">
                <img class="product-image" src="../images/aothun3.jpg" alt="Áo Thun 3">
                <div class="product-info">
                    <div class="product-title">Áo Thun Nam Cotton Tay Ngắn</div>
                    <div class="product-desc">Màu đen basic, in chữ Move in Silence Stop, chất liệu co giãn.</div>
                    <div class="product-price">99,000đ</div>
                </div>
            </div>
            <div class="product-card">
                <img class="product-image" src="../images/aothun4.jpg" alt="Áo Thun 4">
                <div class="product-info">
                    <div class="product-title">Áo Thun Nam Họa Tiết Drifted</div>
                    <div class="product-desc">Áo thun trắng, họa tiết nổi bật, phù hợp mọi hoạt động.</div>
                    <div class="product-price">99,000đ</div>
                </div>
            </div>
            <div class="product-card">
                <img class="product-image" src="../images/aothun5.jpg" alt="Áo Thun 5">
                <div class="product-info">
                    <div class="product-title">Áo Thun Nam ProCOOL New Gen</div>
                    <div class="product-desc">Chất liệu ProCOOL, màu đen, co giãn 4 chiều, siêu nhẹ.</div>
                    <div class="product-price">99,000đ</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>