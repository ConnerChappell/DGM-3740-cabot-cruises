<?php $title='Home'; include '_top.php'; ?>

    <!-- Image Slider -->
    <div class="mySlider">
        <picture>
            <source srcset="./images/square-slider1.jpg" media="(max-width: 35rem)">
            <source srcset="./images/image-slider1.jpg" media="(min-width: 35rem)">
            <img src="./images/image-slider1.jpg" alt="Slider Image 1">
        </picture>

        <picture>
            <source srcset="./images/square-slider2.jpg" media="(max-width: 35rem)">
            <source srcset="./images/image-slider2.jpg" media="(min-width: 35rem)">
            <img src="./images/image-slider2.jpg" alt="Slider Image 2">
        </picture>

        <picture>
            <source srcset="./images/square-slider3.jpg" media="(max-width: 35rem)">
            <source srcset="./images/image-slider3.jpg" media="(min-width: 35rem)">
            <img src="./images/image-slider3.jpg" alt="Slider Image 3">
        </picture>

        <picture>
            <source srcset="./images/square-slider4.jpg" media="(max-width: 35rem)">
            <source srcset="./images/image-slider4.jpg" media="(min-width: 35rem)">
            <img src="./images/image-slider4.jpg" alt="Slider Image 4">
        </picture>
    </div>

    <!-- Blog Articles -->
    <h2 class="blogHeader">Recent Blog Articles</h2>

    <div id="blogDiv">
        <a href="#">
            <div class="blogArticle activityArticle">
                <div class="blogTitle">
                    Onboard Activities
                </div>
                <div class="blogDate">
                    January 15, 2020
                </div>
            </div>
        </a>

        <a href="#">
            <div class="blogArticle diningArticle">
                <div class="blogTitle">
                    Dining
                </div>
                <div class="blogDate">
                    February 9, 2020
                </div>
            </div>
        </a>

        <a href="#">
            <div class="blogArticle destinationArticle">
                <div class="blogTitle">
                    Destinations
                </div>
                <div class="blogDate">
                    June 24, 2020
                </div>
            </div>
        </a>

        <a href="#">
            <div class="blogArticle roomArticle">
                <div class="blogTitle">
                    Rooms
                </div>
                <div class="blogDate">
                    August 17, 2020
                </div>
            </div>
        </a>
    </div>

<?php include '_bot.php'; ?>