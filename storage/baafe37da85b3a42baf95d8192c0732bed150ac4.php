<header class="header">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12  box-navbar-left">
              <div class="bnt__navmobile">
                  <i class="ti-menu"></i>
              </div>
              <div class="navbar_top">
                  <ul>
                      <li><a href="./">Trang chủ</a></li>
                      <li><a href="">Giới thiệu</a></li>
                      <li><a href="./san-pham">Sản phẩm</a></li>
                      <li><a href="">Tin tức</a></li>
                      <li><a href="">Liên hệ</a></li>
                  </ul>
              </div>
               <div class='navbars_overlay'></div>
              <div class="navbar_top-mobile">
                  <div class="bnt-close-navbar">
                      <i class="ti-close"></i>
                  </div>
                  <div class="navbar_top-mobile-account">
                      <a href="">
                          <img src="<?php echo e(PUBLIC_PATH); ?>image/myavata.jpg" alt="">
                      </a>
                      <span>Võ Định</span>
                  </div>
                  <div class="navbar_top-search">
                      <form action="/search/" method="get">
                          <div class="inp-search-navbar-mobile">
                              <input type="text" name="key" placeholder="Bạn cần tìm gì ?">
                              <button><i class="ti-search"></i></button>
                          </div>
                      </form>
                  </div>
                  <ul>
                      <li><a href="./">Trang chủ</a></li>
                      <li><a href="">Giới thiệu</a></li>
                      <li><a href="./san-pham">Sản phẩm</a></li>
                      <li><a href="">Tin tức</a></li>
                      <li><a href="">Liên hệ</a></li>
                  </ul>
                  <div class="socialNetwork">
                      <a href="" title="facebook"><i class="ti-facebook"></i></a>
                      <a href="" title="twitter"><i class="ti-twitter-alt"></i></a>
                      <a href="" title="linkedin"><i class="ti-linkedin"></i></a>
                      <a href="" title="instagram"><i class="ti-instagram"></i></a>
                  </div>
              </div>
              <form action="/search/" method="get" class="form-search-left">
                  <div class="search">
                      <input type="text" name="key" placeholder="Bạn cần tìm gì ?">
                      <button><i class="ti-search"></i></button>
                  </div>
              </form>
              
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 logo ">
              <img src="<?php echo e(PUBLIC_PATH); ?>image/logo.png" alt="">
          </div>
          <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12 box-navbar-rights">
          <div class="header-rights">
              <form action="/search/" method="get">
                  <div class="search">
                      <input type="text" name="key" placeholder="Bạn cần tìm gì ?">
                      <button><i class="ti-search"></i></button>
                  </div>
              </form>
              <div class="favorite-cart-account">
                  <div class="favorite" title="Yêu thích">
                      <a href="">
                          <i class="ti-heart"></i>
                          <sup>0</sup>
                      </a>
                  </div>
                  <div class="cart" title="Giỏ hàng">
                      <i class="ti-shopping-cart"></i>
                          <sup>0</sup>
                  </div>
                  <div class="account">
                      <a href="">
                          <i class="fas fa-user-circle"></i>
                      </a>
                      <div class="drop-account">
                          <ul>
                              <li  title="Quản trị website"><a href="./admin/san-pham"><i class="ti-lock"></i>Quản trị</a></li>
                              <li title="Đăng xuất"><a href="./account/signout/"><i class="ti-shift-left"></i>Đăng xuất</a></li>
                              
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</header><?php /**PATH C:\xampp\htdocs\PHP2\mvc2\app\views/layout/header.blade.php ENDPATH**/ ?>