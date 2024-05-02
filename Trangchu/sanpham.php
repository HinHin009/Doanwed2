<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <header class="header">
        
        <section class="flex">

            <a href="index.html" class="logo">DHS</a>

            <nav class="navbar">
                <a href="index.html">Trang chủ</a>
                <a href="sanpham.html">Sản phẩm</a>
                <a href="oders.html">Mua hàng</a>
            </nav>

            <div class="icons">
                <a href="search.html"><i class="fas fa-search"></i></a>
                <a href="cart.html"><i class="fas fa-shopping-cart"></i><span></span></a>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

            <div class="profile">
                <p class="name">Nguyễn Ngọc Sơn</p>
                <div class="flex">
                    <a href="profile.html" class="btn">Thông tin</a>
                    <a href="#" class="delete-btn">Đăng xuất</a>
                </div>
              <p class="account"><a href="login.html">Đăng nhập</a> / <a href="register.html">Đăng ký</a> </p>
            </div>
        </section>
    </header>

<div class="heading">
    <h3>Sản phẩm của chúng tôi</h3>
    <p><a href="index.html">Trang chủ</a> <span> / Sản phẩm</span> </p>
</div>

<section class="product">

    <h1 class="title">Sản phẩm mới nhất</h1>

    <div class="box-container">

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="images/1554974645-old-quarter-matte-paste-version-2-01 (1).jpg" alt="">
            <p>Sáp vuốt tóc</p>
            <div class="name">Old Quater version 2</div>
            <div class="flex">
                <div class="price">359.000<span>đ</span></div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
        </form>

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="images/1552815661-rainbow-male-god-gingle-01.jpg" alt="">
            <p>Sáp vuốt tóc</p>
            <div class="name">Rainbow male god gingle</div>
            <div class="flex">
                <div class="price">120.000<span>đ</span></div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
        </form>

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="images/1552816487-blumaan-te-giac-01.jpg" alt="">
            <p>Sáp vuốt tóc</p>
            <div class="name">Blumaan tê giác</div>
            <div class="flex">
                <div class="price">519.000<span>đ</span></div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
        </form>

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="images/1616420856-by-vilain-silver-fox-01.jpg" alt="">
            <p>Sáp vuốt tóc</p>
            <div class="name">By Vilain Silver Fox</div>
            <div class="flex">
                <div class="price">465.000<span>đ</span></div>
                <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            </div>
        </form>
    
    </div>

</section>








<footer class="footer">
    
    <section class="grid">

        <div class="box">
            <img src="images/email-icon.png" alt="">
            <h3>E-mail</h3>
            <a href="mailto:ngocsonvt0110@gmail.com">ngocsonvt0110@gmail.com</a>
            <a href="maito:@gmail.com">ngocsonvt0110@gmail.com</a>
        </div>

        <div class="box">
            <img src="images/clock-icon.png" alt="">
            <h3>Thời gian mở cửa</h3>
            <p>8h00 - 18h00</p>
            <p>Các ngày trong tuần</p>
        </div>

        <div class="box">
            <img src="images/map-icon.png" alt="">
            <h3>Địa chỉ</h3>
            <p>Đại học Sài Gòn, 273 Anh Dương Vương, phường 3, quận 5, thành phố Hồ Chí Minh</p>
        </div>

        <div class="box">
            <img src="images/phone-icon.png" alt="">
            <h3>Số điện thoại</h3>
            <p>0909123123</p>
            <p>0902456456</p>
        </div>

    </section>

    <div class="credit">Cảm ơn bạn đã sử dụng sản phẩm của<span> DHS</span></div>
</footer>





<script src="js/script.js"></script>

</body>
</html>