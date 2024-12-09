<?php $this->load->view('front/layout/v_header'); ?>

<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-gray-200 overflow-x-hidden">

  <!--  Search modal -->
  <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white"
      data-uc-height-viewport="">
      <button
        class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
        type="button">
        <i class="unicon-close"></i>
      </button>
      <div class="panel w-100 sm:w-500px px-2 py-10">
        <h3 class="h1 text-center">Search</h3>
        <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
          <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i
              class="unicon-search icon-3"></i></span>
          <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white"
            placeholder="Type your keyword.." aria-label="Search" autofocus>
        </form>
      </div>
    </div>
  </div>

  <!--  Menu panel -->
  <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
      <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
        <div class="uc-logo">
          <a href="index.html" class="h5 text-none text-gray-900 dark:text-white">
            <img class="w-32px" src="<?= base_url("assets/front/template") ?>/images/common/logo-icon.svg" alt="News5"
              data-uc-svg>
          </a>
        </div>
        <button
          class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
          type="button">
          <i class="unicon-close"></i>
        </button>
      </header>

      <div class="panel">
        <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
          <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
          <span class="form-icon text-gray">
            <i class="unicon-search icon-1"></i>
          </span>
        </form>
        <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
          <li class="uc-parent">
            <a href="#">Homepages</a>
            <ul class="uc-nav-sub" data-uc-nav="">
              <li><a href="../main/index.html">Main</a></li>
              <li><a href="../demo-two/index.html">Classic News</a></li>
              <li><a href="../demo-three/index.html">Tech</a></li>
              <li><a href="../demo-four/index.html">Classic Blog</a></li>
              <li><a href="../demo-five/index.html">Gaming</a></li>
              <li><a href="../demo-six/index.html">Sports</a></li>
              <li><a href="../demo-seven/index.html">Newspaper</a></li>
              <li><a href="../demo-eight/index.html">Magazine</a></li>
              <li><a href="../demo-nine/index.html">Travel</a></li>
              <li><a href="../demo-ten/index.html">Food</a></li>
            </ul>
          </li>
          <li><a href="#">Latest</a></li>
          <li><a href="#">Trending</a></li>
          <li class="uc-parent">
            <a href="#">Inner Pages</a>
            <ul class="uc-nav-sub" data-uc-nav="">
              <li class="uc-parent">
                <a href="blog.html">Blog</a>
                <ul class="uc-nav-sub">
                  <li><a href="blog.html">Full Width</a></li>
                  <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                  <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                  <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                </ul>
              </li>
              <li class="uc-parent">
                <a href="blog-details.html">Blog - detail</a>
                <ul class="uc-nav-sub">
                  <li><a href="blog-details.html">Blog detail</a></li>
                  <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                </ul>
              </li>
              <li class="uc-parent">
                <a href="#">Useful pages</a>
                <ul class="uc-nav-sub">
                  <li><a href="sign-up.html">Sign up</a></li>
                  <li><a href="sign-in.html">Sign in</a></li>
                  <li><a href="reset-password.html">Reset password</a></li>
                  <li><a href="404.html">404 page</a></li>
                  <li><a href="coming-soon.html">Coming soon</a></li>
                </ul>
              </li>
              <li class="uc-parent">
                <a href="#">Other pages</a>
                <ul class="uc-nav-sub">
                  <li><a href="page-faq.html">FAQ</a></li>
                  <li><a href="page-terms.html">Terms of use</a></li>
                  <li><a href="page-privacy.html">Privacy policy</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="uc-parent">
            <a href="shop.html">Shop</a>
            <ul class="uc-nav-sub" data-uc-nav="">
              <li class="uc-parent">
                <a href="shop.html">Shop layouts</a>
                <ul class="uc-nav-sub">
                  <li><a href="shop.html">Shop 4 cols</a></li>
                  <li><a href="shop-3.html">Shop 3 cols</a></li>
                  <li><a href="shop-2.html">Shop 2 cols</a></li>
                  <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                </ul>
              </li>
              <li><a href="shop-category.html">Archive category</a></li>
              <li><a href="shop-product-detail.html">Product detail</a></li>
              <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
              <li><a href="shop-cart.html">Cart</a></li>
              <li><a href="shop-cart-2.html">Cart - v2</a></li>
              <li><a href="shop-checkout.html">Checkout</a></li>
              <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
              <li><a href="shop-order.html">Order confirmation</a></li>
            </ul>
          </li>
          <li class="hr opacity-10 my-1"></li>
          <li><a href="sign-in.html">Sign in</a></li>
          <li><a href="sign-up.html">Create an account</a></li>
        </ul>
        <ul class="social-icons nav-x mt-4">
          <li>
            <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
            <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
            <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
            <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
          </li>
        </ul>
        <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
          <div class="vstack gap-1">
            <span class="fs-7 opacity-60">Select theme:</span>
            <div class="darkmode-trigger" data-darkmode-switch="">
              <label class="switch">
                <input type="checkbox">
                <span class="slider fs-5"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Cart panel -->
  <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
      <button
        class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90"
        type="button">
        <i class="unicon-close"></i>
      </button>

      <div class="mini-cart-content vstack justify-between panel h-100">
        <div class="mini-cart-header">
          <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
        </div>
        <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
          <p class="alert alert-warning" hidden>Your cart empty!</p>
          <div class="panel vstack gap-3">
            <div>
              <article class="product type-product panel">
                <div class="hstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/common/products/img-07.jpg"
                      alt="Laptop Cover" data-uc-img="loading: lazy">
                    <a href="shop-product-detail.html" class="position-cover" data-caption="Laptop Cover"></a>
                  </figure>
                  <div class="content vstack gap-narrow fs-6">
                    <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                        href="shop-product-detail.html">Laptop Cover</a></h5>
                    <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span>
                      x <span class="price">$24.00</span></div>
                    <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                  </div>
                  <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger"
                    hidden>
                    <i class="unicon-close icon-1"></i>
                  </a>
                </div>
              </article>
            </div>
            <div>
              <article class="product type-product panel">
                <div class="hstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/common/products/img-08.jpg"
                      alt="Disney Toys" data-uc-img="loading: lazy">
                    <a href="shop-product-detail.html" class="position-cover" data-caption="Disney Toys"></a>
                  </figure>
                  <div class="content vstack gap-narrow fs-6">
                    <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                        href="shop-product-detail.html">Disney Toys</a></h5>
                    <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span>
                      x <span class="price">$5.00</span></div>
                    <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                  </div>
                  <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger"
                    hidden>
                    <i class="unicon-close icon-1"></i>
                  </a>
                </div>
              </article>
            </div>
            <div>
              <article class="product type-product panel">
                <div class="hstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/common/products/img-09.jpg"
                      alt="Screen Axe" data-uc-img="loading: lazy">
                    <a href="shop-product-detail.html" class="position-cover" data-caption="Screen Axe"></a>
                  </figure>
                  <div class="content vstack gap-narrow fs-6">
                    <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                        href="shop-product-detail.html">Screen Axe</a></h5>
                    <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span>
                      x <span class="price">$19.00</span></div>
                    <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                  </div>
                  <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger"
                    hidden>
                    <i class="unicon-close icon-1"></i>
                  </a>
                </div>
              </article>
            </div>
            <div>
              <article class="product type-product panel">
                <div class="hstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/common/products/img-10.jpg"
                      alt="Airpods Pro" data-uc-img="loading: lazy">
                    <a href="shop-product-detail.html" class="position-cover" data-caption="Airpods Pro"></a>
                  </figure>
                  <div class="content vstack gap-narrow fs-6">
                    <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                        href="shop-product-detail.html">Airpods Pro</a></h5>
                    <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span>
                      x <span class="price">$49.00</span></div>
                    <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                  </div>
                  <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger"
                    hidden>
                    <i class="unicon-close icon-1"></i>
                  </a>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="mini-cart-footer panel pt-3 border-top">
          <div class="panel vstack gap-3 justify-between">
            <div class="mini-cart-total hstack justify-between">
              <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
              <b class="fs-5">$97.00</b>
            </div>
            <div class="mini-cart-actions vstack gap-1">
              <a href="shop-cart.html"
                class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View
                cart</a>
              <a href="shop-checkout.html" class="btn btn-md btn-primary text-white">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Favorites modal -->
  <div id="uc-favorites-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
      <button
        class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
        type="button">
        <i class="unicon-close"></i>
      </button>
      <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
        <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
        <h2 class="h4 md:h3 m-0">Saved articles</h2>
        <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
        <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
      </div>
    </div>
  </div>

  <!--  Newsletter modal -->
  <!-- <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
      <button
        class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
        type="button">
        <i class="unicon-close"></i>
      </button>
      <div class="row md:child-cols-6 col-match g-0">
        <div class="d-none md:d-flex">
          <div class="position-relative w-100 ratio-1x1">
            <img class="media-cover"
              src="<?= base_url("assets/front/template") ?>/images/demo-seven/common/newsletter.jpg"
              alt="Newsletter image">
          </div>
        </div>
        <div>
          <div class="panel vstack self-center p-4 md:py-8 text-center">
            <h3 class="h3 md:h2">Subscribe to the Newsletter</h3>
            <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and tips.</p>
            <div class="panel mt-2 lg:mt-4">
              <form class="vstack gap-1">
                <input type="email"
                  class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                  placeholder="Your email address..">
                <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
              </form>
              <p class="fs-7 mt-2">Do not worry we don't spam!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!--  Account modal -->
  <div id="uc-account-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
      <button
        class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
        type="button">
        <i class="unicon-close"></i>
      </button>
      <div class="panel vstack gap-2 md:gap-4 text-center">
        <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none"
          data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
          <li><a href="#">Sign in</a></li>
          <li><a href="#">Sign up</a></li>
          <li><a href="#">Reset password</a></li>
          <li><a href="#">Terms of use</a></li>
        </ul>
        <div
          class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
          <div class="w-100">
            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
              <h4 class="h5 lg:h4 m-0">Log in</h4>
              <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                <form class="vstack gap-2">
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                    type="email" placeholder="Your email" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                    type="password" placeholder="Password" autocomplete="new-password" required>
                  <div class="hstack justify-between items-start text-start">
                    <div class="form-check text-start">
                      <input
                        class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                        type="checkbox" id="inputCheckRemember">
                      <label class="hstack justify-between form-check-label fs-7 sm:fs-6"
                        for="inputCheckRemember">Remember me?</label>
                    </div>
                    <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot password</a>
                  </div>
                  <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                </form>
                <div class="panel h-24px">
                  <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                  <span
                    class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                </div>
                <div class="hstack gap-2">
                  <a href="#google"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-google"></i>
                  </a>
                  <a href="#facebook"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-facebook"></i>
                  </a>
                  <a href="#twitter"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-x-filled"></i>
                  </a>
                </div>
              </div>
              <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign
                  up</a></p>
            </div>
          </div>
          <div class="w-100">
            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
              <h4 class="h5 lg:h4 m-0">Create an account</h4>
              <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                <form class="vstack gap-2">
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                    type="text" placeholder="Full name" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                    type="email" placeholder="Your email" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                    type="password" placeholder="Password" autocomplete="new-password" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                    type="password" placeholder="Re-enter Password" autocomplete="new-password" required>
                  <div class="hstack text-start">
                    <div class="form-check text-start">
                      <input id="input_checkbox_accept_terms"
                        class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                        type="checkbox" required>
                      <label for="input_checkbox_accept_terms"
                        class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and
                        accept the <a href="#" class="uc-link ms-narrow" data-uc-switcher-item="3">terms of use</a>.
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                </form>
                <div class="panel h-24px">
                  <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                  <span
                    class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                </div>
                <div class="hstack gap-2">
                  <a href="#google"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-google"></i>
                  </a>
                  <a href="#facebook"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-facebook"></i>
                  </a>
                  <a href="#twitter"
                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                    <i class="icon icon-1 unicon-logo-x-filled"></i>
                  </a>
                </div>
              </div>
              <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#" data-uc-switcher-item="0">Log
                  in</a></p>
            </div>
          </div>
          <div class="w-100">
            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
              <h4 class="h5 lg:h4 m-0">Reset password</h4>
              <div class="panel w-100 sm:w-350px">
                <form class="vstack gap-2">
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                    type="email" placeholder="Your email" required>
                  <div class="form-check text-start">
                    <input class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                      type="checkbox" id="inputCheckVerify" required>
                    <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm
                        not a robot</span>. </label>
                  </div>
                  <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a
                    password</button>
                </form>
              </div>
              <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#"
                  data-uc-switcher-item="0">Log in</a></p>
            </div>
          </div>
          <div class="w-100">
            <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
              <h4 class="h5 lg:h4 m-0">Terms of use</h4>
              <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam
                  aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus
                  adipisci, ducimus ea modi odio assumenda.</p>
                <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus
                  officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad
                  iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto
                  totam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                  eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda
                  esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum
                  facere excepturi architecto totam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                  eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet
                  ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium
                  error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                  eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
                  voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium
                  error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                  eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
              </div>
              <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#"
                  data-uc-switcher-item="1">Sign up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GDPR modal -->
  <!-- <div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
    <div class="uc-notification-message">
      <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
      <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
      <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By continuing
        to use our site, you accept our use of cookies, <a href="page-privacy.html"
          class="uc-link text-underline">Privacy Policy</a>, and <a href="page-terms.html"
          class="uc-link text-underline">Terms of Service</a>.</p>
      <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
    </div>
  </div> -->

  <!--  Bottom Actions Sticky -->
  <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
    <div
      class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white"
      data-darkmode-toggle="">
      <label class="switch">
        <span class="sr-only">Dark mode toggle</span>
        <input type="checkbox">
        <span class="slider fs-5"></span>
      </label>
    </div>
    <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
      <i class="icon-2 unicon-chevron-up"></i>
    </a>
  </div>

  <!-- Header start -->
  <?php $this->load->view('front/layout/v_navbar'); ?>

  <!-- Header end -->

  <!-- Wrapper start -->
  <div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
      <div class="container max-w-xl">
        <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><i class="unicon-chevron-right opacity-50"></i></li>
          <!-- <li><a href="blog.html">Blog</a></li>
          <li><i class="unicon-chevron-right opacity-50"></i></li>
          <li><a href="blog-category.html">Strategy</a></li>
          <li><i class="unicon-chevron-right opacity-50"></i></li> -->
          <li><span class="opacity-50"><?= $majalah->judulMajalah ?></span></li>
        </ul>
      </div>
    </div>

    <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
      <div class="container max-w-xl">
        <div class="post-header">
          <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
            <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
              <h1 class="h4 sm:h2 lg:h1 xl:display-6"><?= $majalah->judulMajalah ?></h1>
              <span><?= $majalah->views ?> Orang Telah Melihat Article Ini</span>
              <ul class="post-share-icons nav-x gap-1 dark:text-white">
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                </li>
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                </li>
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                </li>
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                </li>
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-email icon-1"></i></a>
                </li>
                <li>
                  <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                    href="#"><i class="unicon-link icon-1"></i></a>
                </li>
              </ul>
            </div>
            <!-- <figure class="featured-image m-0">
              <figure
                class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                  src="<?= base_url("assets/front/majalah/img/cover/") . $majalah->coverMajalah ?>"
                  data-src="<?= base_url("assets/front/majalah/img/cover/") . $majalah->coverMajalah ?>"
                  alt="<?= $majalah->judulMajalah ?>" data-uc-img="loading: lazy">
              </figure>
            </figure> -->
          </div>
        </div>
      </div>
      <div class="panel mt-4 lg:mt-6 xl:mt-9">
        <div class="container max-w-lg">
          <?php if ($majalah->fileMajalah) { ?>
            <iframe src="<?= base_url('assets/front/majalah/pdf/file/') . $majalah->fileMajalah . '#zoom=FitH'; ?>"
              class="mx-auto" style="width:100%; height:100vh  ;  " class="mt-4"></iframe>
          <?php } else {
            echo "<p>Majalah Tidak Tidak Tersedia</p>";
          } ?>
          <!-- <div
            class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
            <ul class="nav-x gap-narrow text-primary">
              <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
              <li>
                <a href="#" class="uc-link gap-0 dark:text-white">Food <span
                    class="text-black dark:text-white">,</span></a>
              </li>
              <li>
                <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span
                    class="text-black dark:text-white">,</span></a>
              </li>
              <li>
                <a href="#" class="uc-link gap-0 dark:text-white">Tech <span
                    class="text-black dark:text-white">,</span></a>
              </li>
              <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li>
            </ul>
            <ul class="post-share-icons nav-x gap-narrow">
              <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
              <li>
                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                  href="#"><i class="unicon-logo-facebook icon-1"></i></a>
              </li>
              <li>
                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                  href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
              </li>
              <li>
                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                  href="#"><i class="unicon-email icon-1"></i></a>
              </li>
              <li>
                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                  href="#"><i class="unicon-link icon-1"></i></a>
              </li>
            </ul>
          </div>
          <div class="post-author panel py-4 px-3 sm:p-3 xl:p-4 bg-gray-25 dark:bg-opacity-10 rounded lg:rounded-2">
            <div class="row g-4 items-center">
              <div class="col-12 sm:col-5 xl:col-3">
                <figure
                  class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                  <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                    src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                    data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/post-author.jpg"
                    alt="Amir Nisi" data-uc-img="loading: lazy">
                </figure>
              </div>
              <div class="col">
                <div class="panel vstack items-start gap-2 md:gap-3">
                  <h4 class="h5 lg:h4 m-0">Amir Nisi</h4>
                  <p class="fs-6 lg:fs-5">Creative and experienced content writer with 6+ years of
                    experience lazy to create unique content strategy for News5 to turn website
                    visitors into customers.</p>
                  <ul class="nav-x gap-1 text-gray-400 dark:text-white">
                    <li>
                      <a href="#medium"><i class="icon-2 unicon-logo-medium"></i></a>
                    </li>
                    <li>
                      <a href="#twitter"><i class="icon-2 unicon-logo-x-filled"></i></a>
                    </li>
                    <li>
                      <a href="#instagram"><i class="icon-2 unicon-logo-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="post-navigation panel vstack sm:hstack justify-between gap-2 mt-8 xl:mt-9">
            <div class="new-post panel hstack w-100 sm:w-1/2">
              <div class="panel hstack justify-center w-100px h-100px">
                <figure
                  class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                  <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                    src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                    data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-02.jpg"
                    alt="Tech Innovations Reshaping the Retail Landscape: AI Payments" data-uc-img="loading: lazy">
                  <a href="blog-details.html" class="position-cover"
                    data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                </figure>
              </div>
              <div class="panel vstack justify-center px-2 gap-1 w-1/3">
                <span class="fs-7 opacity-60">Prev Article</span>
                <h6 class="h6 lg:h5 m-0">Tech Innovations Reshaping the Retail Landscape: AI Payments
                </h6>
              </div>
              <a href="blog-details.html" class="position-cover"></a>
            </div>
            <div class="new-post panel hstack w-100 sm:w-1/2">
              <div class="panel vstack justify-center px-2 gap-1 w-1/3 text-end">
                <span class="fs-7 opacity-60">Next Article</span>
                <h6 class="h6 lg:h5 m-0">The Rise of AI-Powered Personal Assistants: How They Manage
                </h6>
              </div>
              <div class="panel hstack justify-center w-100px h-100px">
                <figure
                  class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                  <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                    src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                    data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-01.jpg"
                    alt="The Rise of AI-Powered Personal Assistants: How They Manage" data-uc-img="loading: lazy">
                  <a href="blog-details.html" class="position-cover"
                    data-caption="The Rise of AI-Powered Personal Assistants: How They Manage"></a>
                </figure>
              </div>
              <a href="blog-details.html" class="position-cover"></a>
            </div>
          </div>
          <div class="post-related panel border-top pt-2 mt-8 xl:mt-9">
            <h4 class="h5 xl:h4 mb-5 xl:mb-6">Related to this topic:</h4>
            <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">
              <div>
                <article class="post type-post panel vstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-07.jpg"
                      alt="The Art of Baking: From Classic Bread to Artisan Pastries" data-uc-img="loading: lazy">
                    <a href="blog-details.html" class="position-cover"
                      data-caption="The Art of Baking: From Classic Bread to Artisan Pastries"></a>
                  </figure>
                  <div class="post-header panel vstack gap-1">
                    <h5 class="h6 md:h5 m-0">
                      <a class="text-none" href="blog-details.html">The Art of Baking: From
                        Classic Bread to Artisan Pastries</a>
                    </h5>
                    <div class="post-date hstack gap-narrow fs-7 opacity-60">
                      <span>Feb 28, 2024</span>
                    </div>
                  </div>
                </article>
              </div>
              <div>
                <article class="post type-post panel vstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-08.jpg"
                      alt="AI and Marketing: Unlocking Customer Insights" data-uc-img="loading: lazy">
                    <a href="blog-details.html" class="position-cover"
                      data-caption="AI and Marketing: Unlocking Customer Insights"></a>
                  </figure>
                  <div class="post-header panel vstack gap-1">
                    <h5 class="h6 md:h5 m-0">
                      <a class="text-none" href="blog-details.html">AI and Marketing: Unlocking
                        Customer Insights</a>
                    </h5>
                    <div class="post-date hstack gap-narrow fs-7 opacity-60">
                      <span>Feb 22, 2024</span>
                    </div>
                  </div>
                </article>
              </div>
              <div>
                <article class="post type-post panel vstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-09.jpg"
                      alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-img="loading: lazy">
                    <a href="blog-details.html" class="position-cover"
                      data-caption="Hidden Gems: Underrated Travel Destinations Around the World"></a>
                  </figure>
                  <div class="post-header panel vstack gap-1">
                    <h5 class="h6 md:h5 m-0">
                      <a class="text-none" href="blog-details.html">Hidden Gems: Underrated Travel
                        Destinations Around the World</a>
                    </h5>
                    <div class="post-date hstack gap-narrow fs-7 opacity-60">
                      <span>Feb 14, 2024</span>
                    </div>
                  </div>
                </article>
              </div>
              <div>
                <article class="post type-post panel vstack gap-2">
                  <figure
                    class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                      src="<?= base_url("assets/front/template") ?>/images/common/img-fallback.png"
                      data-src="<?= base_url("assets/front/template") ?>/images/demo-seven/posts/img-10.jpg"
                      alt="Eco-Tourism: Traveling Responsibly and Sustainably" data-uc-img="loading: lazy">
                    <a href="blog-details.html" class="position-cover"
                      data-caption="Eco-Tourism: Traveling Responsibly and Sustainably"></a>
                  </figure>
                  <div class="post-header panel vstack gap-1">
                    <h5 class="h6 md:h5 m-0">
                      <a class="text-none" href="blog-details.html">Eco-Tourism: Traveling
                        Responsibly and Sustainably</a>
                    </h5>
                    <div class="post-date hstack gap-narrow fs-7 opacity-60">
                      <span>Feb 8, 2024</span>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div id="blog-comment" class="panel border-top pt-2 mt-8 xl:mt-9">
            <h4 class="h5 xl:h4 mb-5 xl:mb-6">Comments (5)</h4>

            <div class="spacer-half"></div>

            <ol>
              <li>
                <div class="avatar">
                  <img src="<?= base_url("assets/front/template") ?>/images/avatars/01.png" alt="">
                </div>
                <div class="comment-info">
                  <span class="c_name">Merrill Rayos</span>
                  <span class="c_date id-color">2 days ago</span>
                  <span class="c_reply"><a href="#">Reply</a></span>
                  <div class="clearfix"></div>
                </div>

                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                  inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                <ol>
                  <li>
                    <div class="avatar">
                      <img src="<?= base_url("assets/front/template") ?>/images/avatars/02.png" alt="">
                    </div>
                    <div class="comment-info">
                      <span class="c_name">Jackqueline Sprang</span>
                      <span class="c_date id-color">2 days ago</span>
                      <span class="c_reply"><a href="#">Reply</a></span>
                      <div class="clearfix"></div>
                    </div>
                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                      quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                      explicabo.</div>
                  </li>
                </ol>
              </li>

              <li>
                <div class="avatar">
                  <img src="<?= base_url("assets/front/template") ?>/images/avatars/03.png" alt="">
                </div>
                <div class="comment-info">
                  <span class="c_name">Sanford Crowley</span>
                  <span class="c_date id-color">2 days ago</span>
                  <span class="c_reply"><a href="#">Reply</a></span>
                  <div class="clearfix"></div>
                </div>
                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                  inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                <ol>
                  <li>
                    <div class="avatar">
                      <img src="<?= base_url("assets/front/template") ?>/images/avatars/04.png" alt="">
                    </div>
                    <div class="comment-info">
                      <span class="c_name">Lyndon Pocekay</span>
                      <span class="c_date id-color">2 days ago</span>
                      <span class="c_reply"><a href="#">Reply</a></span>
                      <div class="clearfix"></div>
                    </div>
                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                      quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                      explicabo.</div>
                  </li>
                </ol>
              </li>

              <li>
                <div class="avatar">
                  <img src="<?= base_url("assets/front/template") ?>/images/avatars/05.png" alt="">
                </div>
                <div class="comment-info">
                  <span class="c_name">Aleen Crigger</span>
                  <span class="c_date id-color">2 days ago</span>
                  <span class="c_reply"><a href="#">Reply</a></span>

                  <div class="clearfix"></div>
                </div>
                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                  inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
              </li>
            </ol>

            <div class="spacer-single"></div>

            <div id="comment-form-wrapper" class="panel pt-2 mt-8 xl:mt-9">
              <h4 class="h5 xl:h4 mb-5 xl:mb-6">Leave a Comment</h4>
              <div class="comment_form_holder">
                <form class="vstack gap-2">
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                    type="text" placeholder="First name" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                    type="text" placeholder="Last name" required>
                  <input
                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                    type="email" placeholder="Your email" required>
                  <textarea
                    class="form-control h-250px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                    type="text" placeholder="Your comment" required></textarea>
                  <button class="btn btn-primary btn-sm mt-1" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </article>

    <!-- Newsletter -->
  </div>

  <!-- Wrapper end -->

  <!-- Footer start -->
  <?php $this->load->view('front/layout/v_footer'); ?>
  <!-- Footer end -->

  <!-- script end -->
  <?php $this->load->view('front/layout/v_script'); ?>