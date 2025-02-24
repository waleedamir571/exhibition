<?php include 'header.php'; ?>

<style>
   .slick-slide {
  /* Opacity and scale down to place focus on active slide */
  opacity: 0.5;
  transition: all 0.2s ease-in-out;
  /* transform: scale(0.9); */
  outline: none;
  /* Grab Hand Cursor */
  cursor: move;
  cursor: grab;
  cursor: -moz-grab;
  cursor: -webkit-grab;
}

section.slider.slick-initialized.slick-slider::before {
    background: transparent;
}

/* Default Slick Slide ACTIVE
   Scale to full size and bring up opacity  */

.slick-slide.slick-center {
  opacity: 0.95;
  transform: scale(1);
  cursor: pointer;
}

/* Add padding between slides
*/

.slick-slider .slick-slide {
  padding: 0 15px;
}

/* Hide default slick prev - next text
   Still accessible.
*/
.slick-arrow {
  font-size: 1px !important;
  color: transparent;
}
.slider .slick-arrow {
    position: absolute;
    background: #3c3b6e;
    opacity: 0.7;
    bottom: -40px;
    z-index: 1;
    width: 3rem;
    height: 3rem;
    transform: translateY(-57%);
    padding: 0;
    overflow: hidden;
    font-size: 20px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border: 1px solid #514CA0;
    border-radius: 75%;
    cursor: pointer;
    outline: none;
    transition: 0.25s;
}
.slider .slick-arrow:hover,
.slider .slick-arrow:focus {
  border-color: white;
  color: #3c3b6e;
  background: #3c3b6e;
  opacity: 0.95;
}
.slider .slick-arrow:active {
  transform: translateY(-50%) scale(0.9);
}
.slider .slick-prev {
  right: 180px;
}
.slider .slick-next {
  right: 100px;
}
.slick-prev:before {
  content: "←";
  color: white;
  font-size: 30px;
}

.slick-next:before {
  content: "→";
  color: white;
  font-size: 30px;
}
.slick-slide img {
  width: 100%;
  height: 100%;
  max-width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}
/* Position Slick dots container down some */
ul.slick-dots {
  margin-top: 40px;
}

.slick-dots button {
  background: transparent;
  color: white;
  border: 1px solid white;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 10px;
  padding-left: 10px;
  cursor: pointer;
  opacity: 0.8;
}

.slick-dots > li {
  display: inline-block;

  margin: 12px;
}
.slick-dots > .slick-active {
  color: #3c3b6e;
  font-weight: bold;
}

.slick-dots {
  list-style: none;
  border-radius: 50%;
  transition: 0.2s;
  text-align: center;
  padding: 0;
  margin: 0;
  position: relative;
  width: 90vw;
  margin: 0 auto;
}

.slick-dots li {
  display: inline-block;
  vertical-align: top;
  margin: 0 8px;
}
.slick-dots li button {
  border: none;
  cursor: pointer;
  font-size: 13px;
  border: 1px solid #fff;
  box-shadow: 0 0 0 0 transparent;
  color: #fff;
  background-color: transparent;
  transition: all 0.3s ease;
  opacity: 0.4;
}
.slick-dots li button:focus {
  outline: none;
}
.slick-dots li button:hover {
  opacity: 1;
  background: #3c3b6e;
}
.slick-dots li.slick-active button {
  background: #3c3b6e;
  box-shadow: 0 0 0 1px #fff;
  opacity: 0.9;
}

/* SLIDER CARD  */

figure.menu-card {
    color: #fff;
    position: relative;
    overflow: hidden;
    width: 100%;
    background-color: transparent;
    text-align: left;
    font-size: 16px;
    opacity: 0.95;
}
figure.menu-card * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
figure.menu-card img {
  max-width: 100%;
  vertical-align: top;
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
figure.menu-card figcaption {
    padding: 25px;
    padding-left: 0px;
    position: relative;
}
figure.menu-card .date {
  background-color: rgba(60, 59, 110, 0.5);
  top: 0px;
  color: #fff;
  right: 0px;
  position: absolute;
  text-align: center;
  font-size: 21px;
  letter-spacing: 1px;
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 25px;
  padding-right: 25px;
}

figure.menu-card h2 {
  font-weight: 600;
  color: white;
  text-transform: uppercase;
  line-height: 1;
  margin: 0;
  padding-bottom: 5px;
  letter-spacing: 2px;
}
figure.menu-card h3 {
    color: #FFF;
font-size: 28px;
font-style: normal;
font-weight: 700;
line-height: 41.995px;
}
figure.menu-card p {
    color: #FFF;

font-size: 21px;
font-style: normal;
font-weight: 400;
line-height: 36.32px;
}
figure.menu-card button {
  border: medium none;
  padding: 10px 20px;
  background-color: rgba(60, 59, 110, 0.95);
  font-weight: 800;
  color: #ffffff;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-size: 15px;
  border: 1px solid white;
  width: 100%;
}
figure.menu-card a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.menu-card:hover img,
figure.menu-card.hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

figure.menu-card:hover button,
figure.menu-card.hover button {
  background-color: #3c3b6e;
  border: 1px solid white;
}

</style>


<section id="de-carousel section-schedule" class="no-top no-bottom carousel slide carousel-fade "
    data-mdb-ride="carousel">
    <!-- Indicators -->


    <!-- Inner -->
    <div class="">
        <div class=" position-relative">
            <!-- Single item -->
            <div class=" jarallax">
                <img src="images/slider/1.jpg" class="jarallax-img" alt="">
                <div class="mask">
                    <div class="h-100 v-center1">
                        <div class="container">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6 mb-sm-30 ">

                                    <p class=" text-uppercase mb-3 head-text"> <span class="wow fadeInRight"
                                            data-wow-delay=".2s">Newsroom</span></p>
                                    <p class="wow fadeInUp head-text1 animated" data-wow-delay=".3s">Never worry about
                                        your trade show exhibit again. With Exhibit Network, you can be confident all
                                        your trade show experiences will be seamless and stress-free.Trust us…we got
                                        this.

                                    <div class="spacer-10"></div>
                                    <?php include 'scroll-down.php'; ?>
                                </div>
                                <div class="col-md-6 mb-sm-30 text-center">

                                    <img src="images/newsroom/head.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single item -->
        </div>
    </div>
    <!-- Inner -->
</section>

<section id="first-section">

    <div class="container position-relative z1000">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <p class="about-us relax2 montserrat"> <img src="images/home/Line.png" alt=""> Press releases

                </p>
                <br>
                <p class="head-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <div class="spacer-single"></div>
            </div>


        </div>
    </div>
    <div class="container">


        <div class="row ">
            <div class="col-md-12">
                <section class="slider">


                    <!-- BEGIN SLICK SLIDE -->
                    <div class="slick__slide">
                        <figure class="menu-card">
                            <img src="images/newsroom/news.png" />
                           
                            <figcaption>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                <p >
                                    Dec 11, 2024
                                </p>
                               
                           
                        </figure>
                    </div>
                    <!-- // END SLICK SLIDE -->


                    <!-- BEGIN SLICK SLIDE -->
                    <div class="slick__slide">
                        <figure class="menu-card">
                            <img src="images/newsroom/n2.png" />
                           
                            <figcaption>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                <p >
                                    Dec 11, 2024
                                </p>
                               
                           
                        </figure>
                    </div>
                    <!-- // END SLICK SLIDE -->


                    <!-- BEGIN SLICK SLIDE -->
                    <div class="slick__slide">
                        <figure class="menu-card">
                            <img src="images/newsroom/n3.png" />
                           
                            <figcaption>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                <p >
                                    Dec 11, 2024
                                </p>
                               
                           
                        </figure>
                    </div>
                    <!-- // END SLICK SLIDE -->



                    <!-- BEGIN SLICK SLIDE -->
                    <div class="slick__slide">
                        <figure class="menu-card">
                            <img src="images/newsroom/n4.png" />
                           
                            <figcaption>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                <p >
                                    Dec 11, 2024
                                </p>
                               
                           
                        </figure>
                    </div>
                    <!-- // END SLICK SLIDE -->


                    <!-- BEGIN SLICK SLIDE -->
                    <!-- <div class="slick__slide">
                        <figure class="menu-card">
                            <img src="images/newsroom/n2.png" />
                           
                            <figcaption>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                <p >
                                    Dec 11, 2024
                                </p>
                               
                           
                        </figure>
                    </div> -->
                    <!-- // END SLICK SLIDE -->


                    <!-- // SLICK CONTAINER -->
                </section>
            </div>


        </div>
    </div>
</section>

<section id="section-schedule" class="jarallax no-bottom">

    <div class="de-gradient-edge-top"></div>
    <div class="container position-relative z1000">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <p class="about-us relax2 montserrat"> <img src="images/home/Line.png" alt=""> MEDIA MENTIONS
                    <img src="images/home/Line.png" alt="">
                </p>
                <br>
                <p class="head-text1">Exhibitors big and small, far and wide, trust Exhibit Network.</p>
                <div class="spacer-single"></div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row pt-50 pb-30">
            <div class="col-md-12">
                <img class="w-100" src="images/newsroom/group.png" alt="">
            </div>

        </div>
    </div>

</section>

<section id="section-schedule" class="jarallax no-bottom">

    <div class="de-gradient-edge-top"></div>
    <div class="container position-relative z1000">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <p class="about-us relax2 montserrat"> <img src="images/home/Line.png" alt=""> AWARDS & ACollades
                    <img src="images/home/Line.png" alt="">
                </p>
                <br>
                <p class="head-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <div class="spacer-single"></div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row pt-50 pb-30">

            <div class="row">

                <div class="col-md-12">
                    <div class="d-carousel wow fadeInRight">
                        <div id="item-carousel-big-type-2" class="owl-carousel no-hide owl-center" data-wow-delay="1s">
                            <div class="c-item">



                                <div class="c-item_wrap">
                                    <img class="w-100" src="images/newsroom/awards.png" class="lazy img-fluid" alt="">
                                    <div class="col-md-12">
                                        <p class="p-text1 plf-20">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                            in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>

                                </div>

                            </div>

                            <div class="c-item">



                                <div class="c-item_wrap">
                                    <img class="w-100" src="images/newsroom/awards.png" class="lazy img-fluid" alt="">
                                    <p class="p-text1 plf-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>

                            </div>

                            <div class="c-item">



                                <div class="c-item_wrap">
                                    <img class="w-100" src="images/newsroom/awards.png" class="lazy img-fluid" alt="">
                                    <p class="p-text1 plf-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>

                            </div>



                        </div>
                        <!-- <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                            <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div> -->
                    </div>
                </div>


            </div>

        </div>
    </div>



</section>



<?php include 'footer.php'; ?>

<script>
    $('.slider').slick({
  centerMode: true,
  dots: false,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 979,
      settings: {
        arrows: false,
        centerMode: true,
     
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
         slidesToShow: 1
      }
    }
  ]
});



// Make LEFT and RIGHT slides - i.e. not centered 
// clickable and Go to PREVIOUS and NEXT 
// slides respectively.

$(".slider").on("click", ".slick-slide", function(e) {
  e.stopPropagation();
  var index = $(this).data("slick-index");
  if ($(".slider").slick("slickCurrentSlide") !== index) {
    $(".slider").slick("slickGoTo", index);
  }
});

</script>