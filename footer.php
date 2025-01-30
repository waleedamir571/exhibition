<a href="#" id="back-to-top"></a>
        <!-- ` begin -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-lg-3 col-md-6 footer-border">
                        <div class="footer-logo">
                            <img class="w-90" src="images/home/footer-logo.png" alt="">
                        </div>
                        <p class="footer-description we-got">
                            Relax...We got this.<br>
                        </p>
                        <p class="head-text1">Legendary provider of shamelessly awesome custom tradeshow exhibits and
                            services for over 30 years. We’re not a catalog store.</p>
                    </div>


                    <!-- Resources -->
                    <div class="col-lg-2 offset-md-1 col-md-6">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Who We Serve
                            </a></li>
                            <li><a href="#">What We Do
                            </a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Production</a></li>
                            <li><a href="#">Exhibits</a></li>
                            <li><a href="#">Ask A Question</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 offset-md-1 col-md-6">
                        <h5>Resources</h5>
                        <ul>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Connect</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Upload</a></li>
                            <li><a href="#">Pay</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term of Services</a></li>
                        </ul>
                    </div>

                    <!-- Contact Us -->
                    <div class="col-lg-3 col-md-12">
                        <h5>Contact Us</h5>
                        <p><img class="w-10" src="images/home/location.png" alt=""> EXHIBIT NETWORK, LLC<br>3434 Lang
                            Rd, Houston TX 77092</p>
                        <p><img class="w-10" src="images/home/call.png" alt=""> 713.290.1212</p>
                        <p><img class="w-10" src="images/home/sms.png" alt=""> info@exhibithouston.com</p>
                        <div class="social-icons">
                            <a href="#"><img src="images/home/twitter.png" alt=""></a>
                            <a href="#"><img src="images/home/fb (2).png" alt=""></a>
                            <a href="#"><img src="images/home/yiu.png" alt=""></a>
                            <a href="#"><img src="images/home/pinterest.png" alt=""></a>
                            <a href="#"><img src="images/home/insta (2).png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom head-text1">
                    © 2024 Exhibit Network. All rights reserved.
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/custom-marquee.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->


</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let accordionButtons = document.querySelectorAll(".accordion-button");

        accordionButtons.forEach(button => {
            button.addEventListener("click", function () {
                let icon = this.querySelector(".toggle-icon");

                // Close all icons first
                document.querySelectorAll(".toggle-icon").forEach(i => i.classList.replace("fa-minus", "fa-plus"));

                // Toggle the clicked icon
                if (!this.classList.contains("collapsed")) {
                    icon.classList.replace("fa-plus", "fa-minus");
                } else {
                    icon.classList.replace("fa-minus", "fa-plus");
                }
            });
        });
    });
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            btn.classList.add('active');
            const tabId = btn.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
});
</script>

<script>
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>


<script>
// window.onload = function() {
//     // Default "active" tab ko set karo
//     const buttons = document.querySelectorAll(".filter-button");
    
//     // Remove active class from all buttons
//     buttons.forEach(button => button.classList.remove("active"));
    
//     // Default active button set (first button in this case)
//     const defaultActiveButton = document.querySelector('[data-filter="all"]');
//     defaultActiveButton.classList.add("active");
// };


</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentUrl = window.location.pathname.split("/").pop(); // Get current page file name
    let menuItems = document.querySelectorAll("#mainmenu .menu-item");

    menuItems.forEach(item => {
        if (item.getAttribute("href") === currentUrl) {
            item.classList.add("active"); // Add active class to the current page link
        }
    });
});
</script>

<script>
 $(document).ready(function () {
    $(".image-box").hover(
        function () {
            $(this).siblings().css("width", "10%");
        },
        function () {
            $(".image-box").css("width", "30%");
        }
    );
});


</script>


<!-- <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script> -->
