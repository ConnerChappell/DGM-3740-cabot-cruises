</main>


<!-- Information Footer -->
    <div id="infoFooterWrapper">
        <div id="infoFooter">
            <div class="column1">
                <div class="addressInfo">
                    <h3>Contact Us</h3>
                    <a href="https://www.google.com/maps/place/23+S+Main+St+%2316,+Lexington,+VA+24450/@37.7847859,-79.4447707,17z/data=!3m1!4b1!4m5!3m4!1s0x884ccbb95964eead:0x73409eee0e1e0c8f!8m2!3d37.7847859!4d-79.442582" target="_blank">
                        Cabot Cruises<br>
                        23 South Main St. Suite 16<br>
                        Lexington, VA 24450
                    </a>
                </div>

                <div class="phoneInfo">
                    <h3>Phone:</h3>
                    <a href="tel:1-800-555-1234">1-800-555-1234</a>
                </div>

                <div class="hourInfo">
                    <h3>Hours of Operation:</h3>
                    <p>M - F: 9:00am - 4:00pm</p>
                </div>
            </div>

            <div class="column2">
                <form>
                    <h3>News Letter</h3>
                    <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
                    <input type="email" placeholder="Enter Email" name="email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>

            <div class="column3">
                <h3>Why Cabot Cruises</h3>
                <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises.</p>
                <p>We do not sell travel to residents of Delaware, Iowa, Florida, Hawaii, and Washington state because those states are just weird. If you you are a resident of one of those states, call your cogressman and tell them to change the regulations.</p>
            </div>
                
        </div>
    </div>


<!-- Social Bar -->
    <div id="socialBar">
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter-square"></i>
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-pinterest-square"></i>
        <i class="fab fa-youtube-square"></i>
    </div>
    

<!-- Page Footer -->   
    <footer>
        &copy; 2021 &bull; Conner Chappell &bull; <a href="https://github.com/ConnerChappell" target="_blank">GitHub</a>
    </footer>

    <script src="./js/index.js"></script>

<!-- Slick Image Slider Script Stuff -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.mySlider').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 1500,
                autoplay: true,
                autoplaySpeed: 3000
            });
        });
    </script>


<!-- JSON-LD Data -->
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",
        "@type":"TravelAgency",
        "name":"Cabot Cruises",
        "description":"Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
        "openingHours":"M-F 09:00-16:00",
        "telephone":"+18005551234",
        "address":{
            "@type":"PostalAddress",
            "streetAddress":"23 South Main St. Suite 16",
            "addressLocality":"Lexington",
            "addressRegion":"VA"
        },
        "image":"https://dgm3740-cabot-cruises.netlify.app/images/logo2-example.png",
        "priceRange":"$500 to $4000"
        }
    </script>

</body>
</html>