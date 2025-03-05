<?php include 'header.php'; ?>


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
                                            data-wow-delay=".2s">NEED A BOOTH? </span></p>
                                    <p class="wow fadeInUp head-text1 animated" data-wow-delay=".3s">This short form
                                        helps us understand your goals and
                                        how we can make your experience with us as smooth
                                        and enjoyable as possible. There are no right or wrong
                                        answers—just a chance for us to get to know you better.
                                        Let’s get started!</p>
                                    <div class="spacer-10"></div>
                                    <?php include 'scroll-down.php'; ?>
                                </div>
                                <div class="col-md-6 mb-sm-30 text-center">

                                    <img src="images/happy-hour/happy.png" alt="">
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


<form action="backend/action/action.php" method="POST">
    <input type="hidden" name="type" value="questionnaireForm">
    <section id="first-section" class=" no-bottom " data-mdb-ride="carousel">
        <!-- Indicators -->

        <!-- Inner -->
        <div class="">
            <div class=" position-relative">
                <!-- Single item -->
                <div class=" jarallax">
                    <!-- <img src="images/slider/1.jpg" class="jarallax-img" alt=""> -->
                    <div class="mask">
                        <div class="h-100 ">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-md-12 mb-sm-30 ">
                                        <div class="bg-purple">
                                            <p class="discover ">Which of the following are most important to you?</p>
                                        </div>
                                        <br><br>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Meeting lead generation targets"> Meeting lead generation targets
                                        </p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Increasing brand awareness/visibility"> Increasing band
                                            awareness/visibility</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Measuring return on investment"> Measuring return on investment
                                        </p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Monitoring cost per lead"> Monitoring cost per lead</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Booking trade show meetings or demos"> Booking trade show
                                            meetings or demos</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Showcasing or introducing products"> Showcasing or introducing
                                            products</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Increasing foot traffic to the booth"> Increasing foot traffic to
                                            the booth</p>
                                        <br>

                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <p class="size30"> Other :</p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1"></label>
                                                    <textarea class="form-control2" id="exampleFormControlTextarea1"
                                                        rows="3" name="other_goals"></textarea>
                                                </div>
                                            </div>
                                        </div>



                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Capturing # of Quality Customer interaction"> Capturing # of
                                            Quality Customer interaction</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Initiating Partnership discussions"> Initiating Partnership
                                            discussions</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Calculating social media likes, comments, shares"> Calculating
                                            social media likes, comments, shares</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Garnering press coverage and/or awards"> Garnering press coverage
                                            and/or awards</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Quantifying post-show lead conversion to sales"> Quantifying
                                            post-show lead conversion to sales</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Calculating post-show revenue attribution"> Calculating post-show
                                            revenue attribution</p>
                                        <p class="size30"><input class="form-check-input" type="checkbox"
                                                id="flexCheckDefault" name="important_goals[]"
                                                value="Ensuring the show is seamless and stress-free"> Ensuring the show
                                            is seamless and stress-free</p>
                                    </div>
                                </div>

                                <br>

                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-sm-30 ">
                                        <div class="bg-purple">
                                            <p class="discover ">Tell us a little about yourself</p>
                                        </div>
                                        <br><br>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="size30" style="font-weight: bold;"> Depth of trade show experience</p>
                                        <p class="size30"><img class="mw-4" src="images/exhibit/Vector.png" alt="">
                                            Developing the trade show strategy</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="size30"> Low</p>
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Developing strategy][]" value="Low">

                                    </div>

                                    <div class="col-md-2">
                                        <p class="size30"> Medium</p>
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Developing strategy][]" value="Medium">

                                    </div>

                                    <div class="col-md-2">
                                        <p class="size30"> High</p>
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Developing strategy][]" value="High">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <p class="size30"><img class="mw-4" src="images/exhibit/Vector.png" alt="">
                                            Designing the trade show experience</p>


                                    </div>
                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Designing experience][]" value="Low">

                                    </div>

                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Designing experience][]" value="Medium">

                                    </div>

                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Designing experience][]" value="High">

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">

                                        <p class="size30"><img class="mw-4" src="images/exhibit/Vector.png" alt="">
                                            Attending / managing the booth</p>

                                    </div>
                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Managing booth][]" value="Low">

                                    </div>

                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Managing booth][]" value="Medium">


                                    </div>

                                    <div class="col-md-2">

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="trade_show_experience[Managing booth][]" value="High">


                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <p class="size30"> Are you planning for a one-time event or recurring?</p>


                                        <br>

                                    </div>
                                    <div class="col-md-2">


                                        <p class="size30"> One</p>

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="event_type" value="One-time">


                                    </div>

                                    <div class="col-md-2">

                                        <p class="size30"> Recurring</p>


                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="event_type" value="Recurring">


                                    </div>




                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">

                                        <p class="size30"> If recurring, do you need design flexibility among events?
                                        </p>


                                        <br>

                                    </div>
                                    <div class="col-md-2">

                                        <p class="size30"> Yes</p>
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="design_flexibility" value="Yes">


                                    </div>

                                    <div class="col-md-2">
                                        <p class="size30"> No</p>

                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            name="design_flexibility" value="No">


                                    </div>




                                </div>


                                <!-- <div class="text-center">
                                <button type="button" class="btn btn-primary1 ">submit</button>
                            </div> -->

                            </div>


                        </div>
                    </div>
                </div>
                <!-- Single item -->
            </div>
        </div>
        <!-- Inner -->
    </section>

    <section class="no-top no-bottom " data-mdb-ride="carousel">
        <!-- Indicators -->

        <!-- Inner -->
        <div class="">
            <div class=" position-relative">
                <!-- Single item -->
                <div class=" jarallax">
                    <!-- <img src="images/slider/1.jpg" class="jarallax-img" alt=""> -->
                    <div class="mask">
                        <div class="h-100 v-center1">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-md-6 mb-sm-30 ">
                                        <p class=" text-uppercase mb-3 head-text">LAST BUT NOT LEAST </p>

                                        <img src="images/happy-hour/happy1.png" alt="">
                                    </div>
                                    <div class="col-md-6 mb-sm-30 ">


                                      
                                        <div class="form-group">

                                            <div class="ptb-25">
                                                <label class="label1" for="exampleInputEmail1">first name</label>
                                                <input type="text" class="form-control1" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="" name="first_name"
                                                    required>
                                            </div>

                                        </div>
                                        <div class="form-group ptb-25">
                                            <label class="label1" for="exampleInputEmail1">last name</label>
                                            <input type="text" class="form-control1" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="" name="last_name" required>

                                        </div>
                                        <div class="form-group">

                                            <div class="ptb-25">
                                                <label class="label1" for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control1" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="" name="title" required>
                                            </div>

                                        </div>
                                        <div class="form-group ptb-25">
                                            <label class="label1" for="exampleInputEmail1">Company Name</label>
                                            <input type="text" class="form-control1" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="" name="company_name"
                                                required>

                                        </div>
                                        <div class="form-group ptb-25">
                                            <label class="label1" for="exampleInputEmail1">email</label>
                                            <input type="email" class="form-control1" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="" name="email" required>

                                        </div>
                                        <div class="form-group ptb-25">
                                            <label class="label1" for="exampleInputPassword1">message</label>
                                            <input type="text" class="form-control1" id="exampleInputPassword1"
                                                placeholder="" name="message" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary1 ">submit</button>


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
</form>

<?php include 'footer.php'; ?>