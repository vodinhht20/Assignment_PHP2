<header class="header">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12  box-navbar-left">
              <div class="bnt__navmobile">
                  <i class="ti-menu"></i>
              </div>
              <div class="navbar_top">
                  <ul>
                      <li><a href="<?php echo e(BASE_URL); ?>">Trang chủ</a></li>
                      <li><a href="">Giới thiệu</a></li>
                      <li><a href="<?php echo e(BASE_URL); ?>san-pham">Sản phẩm</a></li>
                      <li><a href="<?php echo e(BASE_URL); ?>tin-tuc">Tin tức</a></li>
                      <li><a href="">Liên hệ</a></li>
                  </ul>
              </div>
               <div class='navbars_overlay'></div>
              <div class="navbar_top-mobile">
                  <div class="bnt-close-navbar">
                      <i class="ti-close"></i>
                  </div>
                  <div class="navbar_top-mobile-account">
                    <?php if(isset($_SESSION['auth'])): ?>
                        <a href="">
                            <img src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($_SESSION['auth']['avatar']); ?>" alt="">
                        </a>
                        <span><?php echo e($_SESSION['auth']['name']); ?></span>
                    <?php else: ?>
                    <a href="">
                        <img src="<?php echo e(PUBLIC_PATH); ?>image/avatar_empty.jfif" alt="">
                    </a>
                    <span>User name</span>
                    <?php endif; ?>
                      
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
                      <li><a href="<?php echo e(BASE_URL); ?>">Trang chủ</a></li>
                      <li><a href="">Giới thiệu</a></li>
                      <li><a href="<?php echo e(BASE_URL); ?>san-pham">Sản phẩm</a></li>
                      <li><a href="<?php echo e(BASE_URL); ?>tin-tuc">Tin tức</a></li>
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
                          <?php if(isset($_SESSION['auth'])): ?>
                              <img class="avatar" src="<?php echo e(PUBLIC_PATH); ?>image/<?php echo e($_SESSION['auth']['avatar']); ?>">
                          <?php else: ?>
                            <i class="fas fa-user-circle"></i>
                          <?php endif; ?>
                      </a>
                      <div class="drop-account">
                          <ul>
                            <?php if(isset($_SESSION['auth'])): ?>
                                <li  title="Quản trị website"><a href="<?php echo e(BASE_URL); ?>admin/san-pham"><i class="ti-lock"></i>Quản trị</a></li>
                                <li title="Đăng xuất"><a href="<?php echo e(BASE_URL); ?>logout"><i class="ti-shift-left"></i>Đăng xuất</a></li>
                            <?php else: ?>
                                <li title="Đăng ký"><a href="<?php echo e(BASE_URL); ?>signin">Đăng ký</a></li>
                                <li title="Đăng nhập"><a href="<?php echo e(BASE_URL); ?>login">Đăng nhập</a></li>
                            <?php endif; ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</header><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/layout/header.blade.php ENDPATH**/ ?>