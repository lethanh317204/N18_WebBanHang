<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang khách hàng</title>
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
        .navbar-logo {
            font-weight: bold;
            font-size: 28px;
            color: #1a2750;
            letter-spacing: 2px;
            margin-right: 32px;
        }
        .navbar-menu {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: flex-start;
            gap: 32px; /* Tăng khoảng cách đều giữa các mục */
        }
        .navbar-menu a {
            color: #111;
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
            position: relative;
            margin: 0; /* Xóa margin cũ để dùng gap */
        }
        .navbar-menu .outlet {
            color: #d6001c;
            font-weight: bold;
            font-size: 18px;
            margin-left: 8px;
            position: relative;
            display: flex;
            align-items: center;
            height: 40px;
        }
        .navbar-menu .outlet span {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .navbar-menu .sale {
            color: #d6001c;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 2px;
            position: static;
            transform: none;
            letter-spacing: 0;
        }
        .navbar-icons {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-left: auto;
        }
        .navbar-icons .icon {
            font-size: 22px;
            color: #222;
            cursor: pointer;
            position: relative;
        }
        .navbar-icons a {
            display: flex;
            align-items: center;
        }
        .navbar-cart {
            margin-left: 20px;
        }
        .cart-badge {
            position: absolute;
            top: -8px;
            right: -10px;
            background: #d6001c;
            color: #fff;
            font-size: 12px;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .content {
            margin-top: 96px;
            padding: 24px;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-toggle {
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 420px;
            height: 30vh;
            min-height: 260px;
            background: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            border-radius: 8px;
            padding: 24px 32px;
            z-index: 999;
            gap: 40px;
            /* Xóa display: flex ở đây */
        }
        .dropdown-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .dropdown-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 8px;
            color: #007bff;
        }
        .dropdown-menu a {
            color: #222;
            text-decoration: none;
            font-size: 15px;
            padding: 2px 0;
            transition: color 0.2s;
        }
        .dropdown-menu a:hover {
            color: #e3451dff;
        }
        .dropdown:hover .dropdown-menu,
        .dropdown:focus-within .dropdown-menu {
            display: flex;
        }
    </style>
    <!-- Dùng Font Awesome cho icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
// ...existing code...
// ...existing code...
    <div class="navbar">
        <div class="navbar-logo">
            <img src="../images/logo-clothix.png" alt="Clothix.vn" style="height:76px; vertical-align:middle;">
        </div>
        <div class="navbar-menu">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Sản phẩm <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <div class="dropdown-column">
                        <div class="dropdown-title">Áo</div>
                        <a href="aothun.php">Áo thun</a>
                        <a href="#">Áo polo</a>
                        <a href="#">Áo sơ mi</a>
                        <a href="#">Áo khoác</a>
                        <a href="#">Áo nỉ</a>
                    </div>
                    <div class="dropdown-column">
                        <div class="dropdown-title">Quần</div>
                        <a href="#">Quần Jean</a>
                        <a href="#">Quần Short</a>
                        <a href="#">Quần Kaki</a>
                        <a href="#">Quần Tây</a>
                    </div>
                </div>
            </div>
            <a href="#">Hàng Mới <i class="fa fa-caret-down"></i></a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Áo Nam <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <div class="dropdown-column">
                        <a href="aothun.php">Áo thun</a>
                        <a href="#">Áo polo</a>
                        <a href="#">Áo sơ mi</a>
                        <a href="#">Áo khoác</a>
                        <a href="#">Áo nỉ</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Quần Nam <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <div class="dropdown-column">
                        <a href="#">Quần Jean</a>
                        <a href="#">Quần Short</a>
                        <a href="#">Quần Kaki</a>
                        <a href="#">Quần Tây</a>
                    </div>
                </div>
            </div>
            <a href="#">DENIM <i class="fa fa-caret-down"></i></a>
            <a href="#">TechUrban <i class="fa fa-caret-down"></i></a>
            <span class="outlet">
                <span style="display:flex; flex-direction:column; align-items:center;">
                    <span class="sale">-50%</span>
                    <span>OUTLET</span>
                </span>
            </span>
        </div>
        <div class="navbar-icons">
            <i class="fa fa-search icon"></i>
            <a href="login.php"><i class="fa fa-user icon"></i></a>
            <i class="fa fa-map-marker-alt icon"></i>
            <span style="position:relative;">
                <i class="fa fa-shopping-cart icon"></i>
                <span class="cart-badge">0</span>
            </span>
            <a href="#" style="position:relative;">
                <i class="fa fa-shopping-cart icon"></i>
                <span class="cart-badge">0</span>
            </a>
        </div>
    </div>
// ...existing code...
    <div class="content">
        <!-- Nội dung cuộn ở dưới -->
        <div style="height:1200px;">
            <h2>Trang khách hàng</h2>
            <p>Cuộn xuống để xem nội dung...</p>
        </div>
    </div>
</body>
</html>