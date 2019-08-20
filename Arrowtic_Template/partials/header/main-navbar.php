<div class="container" id="myNavbar">
  <div class="wrapper">
    <div class="row align-items-center pl-15 pr-15">
      <div class="grid-141 text-center main-navbar relative">
        <div class="grid-item pt-25 pb-20 text-left">
            <a href="<?php echo getTemplateUrl() . '/index.php'; ?>">
            <img alt="Logo" class="logo" src="#">
            </a>
        </div>
        <div class="grid-item text-right un-display-986">
            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-home">
                <a href="<?php echo getTemplateUrl() . '/index.php'; ?>">HOME</a>
                <ul class="dropdown-content text-left">
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home1.php'; ?>">Home one</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home2.php'; ?>">Home two</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home3.php'; ?>">Home three</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home4.php'; ?>">Home four</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home5.php'; ?>">Home five</a></li>
                </ul>
            </div>

            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-pages">
                <a href="<?php echo getTemplateUrl() . '/views/pages/page-about-us.php'; ?>">PAGES</a>
                <ul class="dropdown-content text-left">
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-about-us.php'; ?>">About Us</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-services.php'; ?>">Our Services</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-offer.php'; ?>">Our Offer</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-team.php'; ?>">Our Team</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-pricing.php'; ?>">Pricing</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-clients.php'; ?>">Our Client</a></li>
                </ul>
            </div>
            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-port">
                <a href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-standard.php'; ?>">PORTFOLIO</a>
                <ul class="dropdown-content text-left">
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-gallery.php'; ?>">Portfolio Gallery</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-mansonry.php'; ?>">Portfolio Mansonry</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-three-columns.php'; ?>">Portfolio 3Columns</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-three-columns-wide.php'; ?>">3Columns Full Wide</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-four-columns.php'; ?>">Portfolio 4Columns</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-four-columns-wide.php'; ?>">4Columns Full Wide</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-details.php'; ?>">Portfolio Details</a></li>
                </ul>
            </div>
            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-shop">
                <a href="<?php echo getTemplateUrl() . '/views/shop.php'; ?>">SHOP</a>
            </div>
            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-blog">
                <a href="<?php echo getTemplateUrl() . '/views/blog/blog-v.php'; ?>">BLOG</a>
                <ul class="dropdown-content text-left">
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-right-sidebar-v.php'; ?>">Blog Right Sidebar</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-left-sidebar-v.php'; ?>">Blog left Sidebar</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-right-details-v.php'; ?>">Details Right Sidebar</a></li>
                    <li><a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-left-details-v.php'; ?>">Details Left Sidebar</a></li>
                </ul>
            </div>

            <div class="dropdown pb-35 pt-35 ml-40" id="main-page-contact">
                <a href="<?php echo getTemplateUrl() . '/views/contact-us.php'; ?>">CONTACT US</a>
            </div>

        </div>
        <div class="grid-item text-right un-display-986 margin-auto-0">
            <a href="#" class="pr-20 border-left-purple fla-head" onclick="viewSearch(1)">
                <i class="flaticon-magnifying-glass"></i>
            </a>
            <a href="#" class="pl-20 fla-head">
                <i class="flaticon-supermarket"></i>
            </a>
        </div>
        <div class="text-right mean-menu">
            <i onclick="dropdownNavMenu('myDropdown')" class="fa fa-bars dropbtn"></i>
            <div  id="myDropdown" class="dropdown-content-mobile text-left absolute width-100 left--0">
            <ul>
            <li>
            <a class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/index.php'; ?>">HOME</a>
            <a class="mean-expand" href="#" onclick="dropdownNavMenu('home-drop')">+</a>
            <ul class="drop-nav-item" id="home-drop">
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block" >
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home1.php'; ?>">Home one</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home2.php'; ?>">Home two</a>
                </li>
                <li  class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home3.php'; ?>">Home three</a>
                </li>
                <li  class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home4.php'; ?>">Home four</a>
                </li>
                <li  class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/home/home5.php'; ?>">Home five</a>
                </li>
            </ul>
            </li>
            <li>
            <a  class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/views/pages/page-about-us.php'; ?>">PAGES</a>
            <a class="mean-expand" href="#" onclick="dropdownNavMenu('page-drop')">+</a>
            <ul  class="drop-nav-item" id="page-drop">
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-about-us.php'; ?>">About us</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-services.php'; ?>">Our services</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-offer.php'; ?>">Our offer</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-team.php'; ?>">Our team</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-pricing.php'; ?>">Pricing</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/pages/page-our-clients.php'; ?>">Our Client</a>
                </li>
            </ul>
            </li>
            <li>
            <a class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-standard.php'; ?>">PORTFOLIO</a>
            <a class="mean-expand" href="#" onclick="dropdownNavMenu('port-drop')">+</a>
            <ul  class="drop-nav-item" id="port-drop">
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-gallery.php'; ?>">Portfolio Gallery</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-mansonry.php'; ?>">Portfolio Mansonry</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-three-columns.php'; ?>">Portfolio 3Columns</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-three-columns-wide.php'; ?>">3Columns Full Wide</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-four-columns.php'; ?>">Portfolio 4Columns</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-four-columns-wide.php'; ?>">4Columns Full Wide</a>
                </li>
                <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                    <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/portfolio/portfolio-details.php'; ?>">Portfolio Details</a>
                </li>
            </ul>
            </li>
            <li>
            <a  class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/views/shop.php'; ?>">SHOP</a>
            </li>
            <li>
            <a  class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/views/blog/blog.php'; ?>">BLOG</a>
            <a class="mean-expand" href="#" onclick="dropdownNavMenu('blog-drop')">+</a>
            <ul  class="drop-nav-item" id="blog-drop">
            <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-right-sidebar.php'; ?>">Blog Right Sidebar</a>
            </li>
            <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-left-sidebar.php'; ?>">Blog left Sidebar</a>
            </li>
              <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-right-details.php'; ?>">Details Right Sidebar</a>
            </li>
              <li class="footer-border-light pl-15 pt-10 pb-10 display-block">
                <a class="pl-15" href="<?php echo getTemplateUrl() . '/views/blog/blog-left-details.php'; ?>">Details Left Sidebar</a>
            </li>
            </ul>
            </li>
            <li>
            <a  class="footer-border-light pl-15 pt-10 pb-10 display-block" href="<?php echo getTemplateUrl() . '/views/contact-us.php'; ?>">CONTACT US</a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="search-icon" onclick="viewSearch(0)">
    <div class="search-content" onclick="viewSearch(2)">
        <form>
          <input type="text" placeholder="Search here..." onclick="viewSearch(2)">
          <button onclick="viewSearch(2)"><i class="flaticon-magnifying-glass"></i></button>
        </form>
      </div>
  </div>
</div>
