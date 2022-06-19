<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadtripSri Lanka</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a class="logo"><span>Roadtrip</span>Sri Lanka</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>

        <?php
            if (!isset($_SESSION['username'])) {
            echo "<i class='fas fa-user' id='login-btn'></i>";
        }
        ?>
        
        
    </div>
    <?php
    if (isset($_SESSION['username'])) {

    echo "<h1 class ='name'>";
    echo $_SESSION['username'];
    echo "</h1>";
    echo "<i class='fas fa-sign-out-alt' id='signout-btn'></i>";
    }
    ?>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container" id ="login">

    <i class="fas fa-times" id="loginform-close"></i>

    <form id="logform">
        <h3>login</h3>

        <input type="text" class="box"  id="username" name="username" placeholder="enter user name" maxlength="100" required>
        <input type="password" class="box" name="password" placeholder="enter your password" maxlength="100" required>
        <input type="submit" value="login now" class="btn" id ="logbtn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>don't have an account? <a id ="register">register now</a></p>
    </form>

</div>
<!-- register form -->
<div class="login-form-container" id="reg">

    <i class="fas fa-times" id="regform-close"></i>

    <form id="regform" autocomplete="off">
        <h3>Register</h3>
        <input type="text" class="box" name="username" placeholder="User Name" maxlength="100" required>
        <input type="email" class="box" name="email" placeholder="Email" maxlength="100" required>
        <input type="password" class="box" id="password"name="password" placeholder="Password" maxlength="100" required>
        <input type="password" class="box" id="cpassword" name="cpassword" placeholder="Comfirm Password" maxlength="100" required>
        <br>
        <input type="submit" value="Register now" class="btn" id="regbtn">
        
        <p>Already have an account? <a id ="relog" >login in</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Explore Wonderous Sri Lanka</h3>
        <p>Make Your Vacation Comfortable</p>
        <a href="details.php" class="btn-one">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->


<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Pinnawala Elephant Orphanage.jpg" alt="">
            <div class="content">
                <h3>Pinnawala Elephant Orphanage</h3>
                <a href="details.php#place-pinnawala" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Wilpattu National Park.jpg" alt="">
            <div class="content">
                <h3>Wilpattu National Park</h3>
                <a href="details.php#place-wilpattu" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Unawatuna.jpg" alt="">
            <div class="content">
                <h3>Unawatuna</h3>
                <a href="details.php#place-unawatuna" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Dambulla Cave Temple.jpg" alt="">
            <div class="content">
                <h3>Dambulla Cave Temple</h3>
                <a href="details.php#place-cave" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Lord Buddha figures at Gal Vihara.jpg" alt="">
            <div class="content">
                <h3>Gal Vihara</h3>
                <a href="details.php#place-gal-viharaya" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Seruwila Mangala Raja Maha Vihara.jpg" alt="">
            <div class="content">
                <h3>Seruwila Mangala Raja Maha Vihara</h3>
                <a href="details.php#place-seruwila" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Bellanwila Rajamaha Viharaya.jpg" alt="">
            <div class="content">
                <h3>Bellanwila Rajamaha Viharaya</h3>
                <a href="details.php#place-bellanwila" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Sithulpawwa Buddhist Monastery.jpg" alt="">
            <div class="content">
                <h3>Sithulpawwa Buddhist Monastery</h3>
                <a href="details.php#place-sithulpawwa" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Yala National Park.jpg" alt="">
            <div class="content">
                <h3>Yala National Park</h3>
                <a href="details.php#place-yala" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Sigiriya.jpg" alt="">
            <div class="content">
                <h3>Sigiriya</h3>
                <a href="details.php#place-sigiriya" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Arangala Mountain Peak.jpg" alt="">
            <div class="content">
                <h3>Arangala Mountain Peak</h3>
                <a href="details.php#place-arangala" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Horton Plains National Park.jpg" alt="">
            <div class="content">
                <h3>Horton Plains</h3>
                <a href="details.php#place-horton" class="btn">see more</a>
            </div>
        </div>
    </div>

</section>

<!-- gallery section ends -->


<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Temple Of Tooth Relic.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kandy </h3>
                <p>Kandy is a large city in central Sri Lanka. It's set on a plateau surrounded by mountains, which are home to tea plantations and biodiverse rainforest. The city's heart is scenic Kandy Lake (Bogambara Lake), which is popular for strolling. </p>
                
                <a href="details.php#kandy" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Ruwanwelisaya.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Anuradhapura </h3>
                <p>Anuradhapura is the capital city of North Central Province, Sri Lanka and the capital of Anuradhapura District. Anuradhapura is one of the ancient capitals of Sri Lanka, famous for its well-preserved ruins of an ancient Sinhala civilization.</p>
                
                <a href="details.php#Anuradhapura" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Galle Fort.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Galle </h3>
                <p>Galle is a city on the southwest coast of Sri Lanka. known for Galle Fort, the fortified old city founded by Portuguese colonists in the 16th century.</p>
                
                <a href="details.php#Galle" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Dambulla Cave Temple.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Dambulla </h3>
                <p>Dambulla is a town situated in the north of Matale District, Central Province of Sri Lanka. It is the second largest populated and urbanised centre after Matale in the Matale District.</p>
                
                <a href="details.php#Dambulla" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/The Royal Palace.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Polonnaruwa </h3>
                <p>Poḷonnaruwa is the main town of Polonnaruwa District in North Central Province, Sri Lanka. An older part of Polonnaruwa remains as the royal ancient city of the Kingdom of Polonnaruwa.</p>
                
                <a href="details.php#Polonnaruwa" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Uppuveli & Nilaveli Beaches.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Trincomalee </h3>
                <p>Trincomalee is a port city on the northeast coast of Sri Lanka. Set on a peninsula, Fort Frederick was built by the Portuguese in the 17th century.</p>
                
                <a href="details.php#Trincomalee" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Colombo Lotus Tower.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Colombo </h3>
                <p>Colombo is the commercial capital and largest city of Sri Lanka by population. According to the Brookings Institution, Colombo metropolitan area has a population of 5.6 million, and 752,993 in the Municipality.</p>
                
                <a href="details.php#Colombo" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Yala National Park.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hambanthota </h3>
                <p>Hambantota is the main town in Hambantota District, Southern Province, Sri Lanka. Hambantota District is part of the traditional south known as Ruhuna. </p>
                
                <a href="details.php#Hambanthota" class="btn">View Places</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Horton Plains National Park.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Nuwara Eliya </h3>
                <p>Nuwara Eliya is a city in the tea country hills of central Sri Lanka. The naturally landscaped Hakgala Botanical Gardens displays roses and tree ferns, and shelters monkeys and blue magpies.</p>
                
                <a href="details.php#Nuwara-Eliya" class="btn">View Places</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>We provide details of the best hotel accommodations where nearby famous destinations around the Sri Lanka</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and beverage</h3>
            <p>Our recommended hotels are guaranteed to provide the best food and beverage for their valuable customers.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty Transport</h3>
            <p>we provide the best and safe transport modes to achieve your destination.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the Sri Lanka</h3>
            <p>our service will help to plan your trip to famous destinations around Sri lanka.</p>
        </div>
        
        

    </div>

</section>

<!-- services section ends -->


<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/booking.png" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>

    </div>

</section>

<!-- book section ends -->







<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>Sarah Smith</h3>
                    <p>Just want to say that I am very happy using Roadtrip Sri Lanka to plan my holidays at Galle of Sri Lanka. 
                        I have recommended to 3 other couples and they have used this site as well to book staying at Galle. 
                        Hotel Recommandation was very helpful for me when planing the trip.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>John Allen</h3>
                    <p>This site was extremely helpful! Any questions we had were answered very quickly via email. 
                        Not my first time using Roadtrip Sri Lanka and definitely NOT my last!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>scarlett johansson</h3>
                    <p>Roadtrip Sri Lanka was a great company to deal with.
                        Everything was very simple, professional and we were given all the information we required.
                        Thank you for the great service</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>Michele Morrone</h3>
                    <p>We had a wonderful few days away at Nuwara Eliya. 
                        Roadtrip Sri Lanka were brilliant and it is very easy to plan the trip using this site. 
                        I couldn't believe how easy it was. Thank you, we will visit to Sri Lanka again.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact.png" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->
<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>“Travel is the main thing you purchase<br> that makes you more extravagant”. 
                We, at 'Roadtrip Sri Lanka', swear by this and put stock in satisfying<br> travel dreams that make you perpetually<br> rich constantly.
            We gave every bit of information<br> that you needs to planing your trip around sri lanka.</p>
        </div>
        
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="http://www.facebook.com">facebook</a>
            <a href="http://www.instagram.com">instagram</a>
            <a href="http://www.twitter.com">twitter</a>
            <a href="http://www.linkedin.com">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> ROADTRIP GROUP </span> | all rights reserved! </h1>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script>
    $(document).ready(function(){
        $("#logbtn").click(function(event){
            event.preventDefault();
            let formdata = $("#logform").serialize();
            
            $.post(
                "login.php",
                formdata,
                function(data,status){
                    if (data ==  "success"){
                        let loginForm = document.querySelector("#login");
                        loginForm.classList.remove("active");
                        location.reload();
                            
                   }else{
                        alert(data);
                   }
                }
            );
        });
    });
    $(document).ready(function(){
        $("#regbtn").click(function(event){
            event.preventDefault();
            let formdata = $("#regform").serialize();
            let password = $("#password").val();
            let cpassword = $('#cpassword').val();
            if(password == cpassword){

                $.post(
                    "register.php",
                    formdata,
                    function(data,status){
                    if (data ==  "success"){
                            let regForm = document.querySelector("#reg");
                            let loginForm = document.querySelector("#login");

                            regForm.classList.remove("active");
                            loginForm.classList.add("active");
                                
                    }else{
                        alert(data);
                    }
                    }
                );
            }else{
                alert("password and confirm password are not mached");
            }
        });
    });
    let logoutBtn = document.querySelector("#signout-btn");
    logoutBtn.addEventListener("click", () => {
        <?php session_destroy(); ?>
        location.reload();
    });


</script>
<script src="script.js"></script>


</body>
</html>