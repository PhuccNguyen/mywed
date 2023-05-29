<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('tdxi67typu82');
    </script>
    <!-- End of Async Drift Code -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lavender Shop </title>

    <!---custom css link--->
    <link type="text/css" rel="stylesheet" href="{{asset('cssfile/promotion.css')}}">


    <!---custom Google font link--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!---custom font-awesome  link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---custom font-awesomes link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---custom boxicons link--->
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<section class="banner-shop">
    <a> Discount 10% per items when buy over 25$ </a>
</section>
<header class="header--primary">
    <a href="#" class="logo-1"> <img src="Image/spit001.png"> </a>
    <ul class="navmenu">
        <li><a href="/index">Home</a></li>
        <li><a href="/promotion">Promotion</a></li>
        <li><a href="/product">Product</a></li>
        <li><a href="/upcomming">Upcomming </a></li>
        <li><a href="/newfashion">News Fashion</a></li>
    </ul>

    <div class="nav-icon">
        <a href="#"><i class='bx bx-search'></i></a>
        <a href="#"><i class='bx bx-user'></i></a>
        <a href="#"> <i class='bx bx-cart-alt'></i> </a>
        {{--        <div class="bx bx-menu" id="menu-icon"></div>--}}
    </div>
</header>

{{--@section('promotion-page')--}}
<section class="updates-new">
    <div class="up-center-text">
        <h2>New Promotion</h2>
    </div>
    <div class="updates-cart">
        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>
        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>
        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>

        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>

        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>
        <div class="cart">
            <img src="{{asset('image/Blog-header-Clothing-Brand-Marketing-Ideas.webp')}}">
            <h5>Date: 1 May 2023 </h5>
            <h4> <a href="#">Let's Start bring yourself design difference!!!</a></h4>
            <p> - Mẫu đầm xòe dự tiệc 3789 chất liệu vải gấm Tapta cao cấp phối
                ren màu đen với thiết kế sang trọng và vô cùng thời thượng.
                <!-- Sản phẩm gấm màu đen mặc đi tiệc với họa tiết dập nổi, -->
                <!-- thiết kế cổ vest đơn giản tạo nên tổng thể bộ trang phục thanh lịch, gọn gàng. -->
                <!-- Phần eo chiết nhẹ không chỉ tạo điểm nhấn cho chiếc đầm  -->
                <!-- mà còn giúp các nàng tôn lên vòng eo nhỏ gọn đầy duyên dáng. -->
             </p>
            <h6> Continute Reading...</h6>
        </div>
    </div>
</section>
{{--@endsection--}}

<section class="contact">
    <div class="information-connect">
        <div class="first-infor">
            <img src="/Image/spit001.png">
            <p><i class='bx bx-location-plus' ></i> 06 Dương Văn Dương <br> Sơn Kỳ - Tân Phú - Hồ Chí Minh </p>
            <p> <i class='bx bxs-phone'></i> 0334467655</p>
            <p> lavenderwomen@gmail.com </p>

            <div class="social-infor">
                <a href="#"> <i class='bx bxl-facebook-square'></i> </a>
                <a href="#"> <i class='bx bxl-twitter'></i> </a>
                <a href="#"> <i class='bx bxl-instagram' ></i> </a>
                <a href="#"> <i class='bx bxl-youtube' ></i></a>
                <a href="#"> <i class='bx bxl-linkedin' ></i> </a>
            </div>
        </div>

        <div class="second-infor">
            <h4> Support </h4>
            <p> Contact us</p>
            <p> About page</p>
            <P> Shopping & Return </P>
            <p> Privacy</p>
        </div>

        <div class="third-infor">
            <h4> Shop </h4>
            <p> Women's Skirts </p>
            <p> Women's dresses</p>
            <p> Ladies wear</p>
            <p> Tailor-made</p>
            <p> New Product</p>
        </div>
        <div class="four-infor">
            <h4> Company</h4>
            <p> About</p>
            <p> Blog</p>
            <p> Affliate</p>
            <p> Login</p>
        </div>
    </div>
</section>
<!---custom js link--->
<script rel="stylesheet" href="{{asset('javascript/index.css')}}"></script>
</body>
</html>
