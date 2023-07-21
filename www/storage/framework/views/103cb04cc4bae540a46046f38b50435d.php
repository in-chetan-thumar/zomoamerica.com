<header class="header">
    <div class="container">
        <a href="<?php echo e(route('frontend.home')); ?>" class="header-logo">
            <img src=<?php echo e(asset('assets/frontend/images/logo.webp')); ?> alt="logo" width="100" height="100">
        </a>
        <nav class="nav-menu" id="navbar">
            <ul class="menu">
                <li class="menu-item"><a href="<?php echo e(route('frontend.aboutus')); ?>" class="menu-link">About US</a></li>
                <li class="menu-item menu-dropdown">
                    <span class="menu-link" data-toggle="submenu">Flavors
                        <i class="bx bx-chevron-down">
                            <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_31_161)">
                                    <path
                                        d="M12.1328 9.11719C12.6211 9.60547 12.6211 10.3984 12.1328 10.8867L4.63281 18.3867C4.14453 18.875 3.35156 18.875 2.86328 18.3867C2.375 17.8984 2.375 17.1055 2.86328 16.6172L9.48047 10L2.86719 3.38281C2.37891 2.89453 2.37891 2.10156 2.86719 1.61328C3.35547 1.125 4.14844 1.125 4.63672 1.61328L12.1367 9.11328L12.1328 9.11719Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_31_161">
                                        <rect width="12.5" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </i>
                    </span>
                    <ul class="submenu" style="">
                        <li class="submenu-item"><a href="#" class="submenu-link">Classic Flavors</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">World Flavors</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Strong Line</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Splash Line</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="<?php echo e(route('frontend.series')); ?>" class="menu-link"></a></li>
                <li class="menu-item"><a href="<?php echo e(route('frontend.product')); ?>" class="menu-link">Product</a></li>
                <li class="menu-item"><a href="<?php echo e(route('frontend.news')); ?>" class="menu-link">News</a></li>
                <li class="menu-item"><a href="<?php echo e(route('frontend.contact')); ?>" class="menu-link">Contacts</a></li>
                <li class="menu-item"><a href="<?php echo e(route('frontend.wholesale')); ?>" class="menu-link">Wholesale</a></li>

            </ul>

        </nav>
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <span class="overlay"></span>
    </div>
</header>
<?php /**PATH D:\OSPanel\domains\zomoamerica\www\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>