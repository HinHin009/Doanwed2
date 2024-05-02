<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="index.html" class="logo">DHS</a>

      <nav class="navbar">
         <a href="index.html">Trang chủ</a>
         <a href="sanpham.html">Sản phẩm</a>
         <a href="orders.html">Mua hàng</a>
      </nav>

      <div class="icons">
         <a href="search.html"><i class="fas fa-search"></i></a>
         <a href="cart.html"><i class="fas fa-shopping-cart"></i><span></span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name">shaikh anas</p>
         <div class="flex">
            <a href="profile.html" class="btn">Thông tin</a>
            <a href="#" class="delete-btn">Đăng xuất</a>
         </div>
         <p class="account"><a href="login.html">Đăng nhập</a> /<a href="register.html">Đăng ký</a></p>
      </div>

   </section>

</header>

<div class="heading">
   <h3>Giỏ hàng</h3>
   <p><a href="index.html">Trang chủ </a> <span> / Giỏ hàng</span></p>
</div>

<section class="product">

   <h1 class="title">Giỏ hàng của bạn</h1>

   <div class="cart-total">
      <p>Tổng cộng : <span>đ</span></p>
      <a href="checkout.html" class="btn">Thanh toán</a>
      </div>
   </div>

   <div class="box-container">

      <form action="" method="post" class="box">
        <button type="submit" class="fas fa-eye" name="quick_view"></button>
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="images/1552815661-rainbow-male-god-gingle-01.jpg" alt="">
         <div class="name">Rainbow Male God Gingle</div>
         <div class="flex">
            <div class="price">120.000<span>đ</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">Tổng số tiền: <span>đ</span></div>
      </form>

      <form action="" method="post" class="box">
        <button type="submit" class="fas fa-eye" name="quick_view"></button>
        <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
        <img src="images/1552815661-rainbow-male-god-gingle-01.jpg" alt="">
        <div class="name">Rainbow Male God Gingle</div>
        <div class="flex">
           <div class="price">120.000<span>đ</span></div>
           <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
           <button type="submit" class="fas fa-edit"></button>
        </div>
        <div class="sub-total">Tổng số tiền: <span>đ</span></div>
    </form>

   </div>

   <div class="more-btn">
      <a href="#" class="delete-btn" onclick="return confirm('delete all from cart?');">delete all</a>
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
            <p>Đại học Sài Gòn, 273 An Dương Vương, phường 3, quận 5, thành phố Hồ Chí Minh</p>
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

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>