<footer class="footer-area footer-eleven call-action">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="footer-widget f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{url('assets_index/images/logo.svg" alt="#" class="img-fluid')}}"/>
                                </a>
                            </div>
                            <p class=" text-white">
                                Making the world a better place through constructing elegant
                                hierarchies.
                            </p>
                            <p class="copyright-text text-white">
                                <span>© 2024 Business. Designed and Developed</span>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
</footer>

<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<!--====== js ======-->
<script src="{{url('assets_index/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets_index/js/glightbox.min.js')}}"></script>
<script src="{{url('assets_index/js/main.js')}}"></script>
<script src="{{url('assets_index/js/tiny-slider.js')}}"></script>

<script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
        ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
        navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
        sidebarLeft.classList.toggle("open");
        overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
        sidebarLeft.classList.remove("open");
        overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
        sidebarLeft.classList.add("open");
        overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

</script>
</body>

</html>
