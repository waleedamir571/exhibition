<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Expand Effect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="image-container">
            <!-- Image 1 -->
            <div class="image-box">
                <img src="images/what-we-do/anim.png" alt="Graphic Design">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                    <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                        three viewing distances? And consider the impact of color and lighting? And meet critical
                        deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="image-box">
                <img src="images/what-we-do/slider.png" alt="Product Displays">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="image-box">
                <img src="images/resource/faqs.png" alt="Interactive Elements">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="image-box">
                <img src="images/what-we-do/slider.png" alt="Rental Furniture">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="image-box">
                <img src="images/resource/faqs.png" alt="Meeting Spaces">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 6 -->
            <div class="image-box">
                <img src="images/what-we-do/slider.png" alt="Signage and Lighting">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 7 -->
            <div class="image-box">
                <img src="images/resource/faqs.png" alt="Carpet and Flooring">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
            <!-- Image 8 -->
            <div class="image-box">
                <img src="images/what-we-do/slider.png" alt="Custom Solutions">
                <div class="overlay">
                    <p class="graphic">Graphic design and production</p class="graphic">
                        <p class="g-text">Does your graphic designer know the complexities of trade show graphic design? And understand the
                            three viewing distances? And consider the impact of color and lighting? And meet critical
                            deadlines? We’ve met too many that don’t. Relax … we got this.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>

<style>
    /* General Page Styles */
    body {
        background-color: #121212;
        color: white;
        font-family: Arial, sans-serif;
    }

    .card1 {
    border: 0;
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .05);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .05);
    border-radius: 10px;
    border: 1px solid #323080 !important;
    background: #070713 !important;
}

    /* Container for Images */
    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 50px 0;
        overflow: hidden;
        height: 30rem;
    }

    .image-box:hover .overlay {
        opacity: 3 !important;
    }



    /* Image Box */
    .image-box {
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    /* Overlay Text */
    .image-box .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    display: flex
;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    padding: 20px;
    text-align: center;
}

    .image-box {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .image-box img {
        width: 100%;
        transition: transform 0.3s ease-in-out;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        /* Black transparent background */
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        text-align: center;
        padding: 10px;
    }

    .card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-title-color: ;
    --bs-card-subtitle-color: ;
    --bs-card-border-width: var(--bs-border-width);
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: var(--bs-border-radius);
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(var(--bs-border-radius) -(var(--bs-border-width)));
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: var(--bs-body-bg);
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex
;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    color: var(--bs-body-color);
    word-wrap: break-word;
    background-color: transparent !important;
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
    .graphic{
        color: #FFF;

font-size: 28px !important; 
font-style: normal;
font-weight: 600;
line-height: 36px !important;
text-align: start;
    }

    .g-text{
        color: #FFF;


font-size: 18px !important;
font-style: normal;
font-weight: 300;
line-height: 23px !important;
text-align: start;
    }

    /* Hover Effects */
    .image-box:hover img {
        transform: scale(1.1);
    }

    .image-box:hover .overlay {
        opacity: 1;
    }

    /* Shrinking Effect for Other Images */
    .image-box:hover~.image-box {
        width: 50%;
    }
</style>

<script>
    $(document).ready(function () {
        $(".image-box").hover(
            function () {
                $(this).siblings().css("width", "50%");
            },
            function () {
                $(".image-box").css("width", "50%");
            }
        );
    });


</script>