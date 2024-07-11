<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mr.Traveller</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
<link rel="stylesheet" href="css/style1.css">
<link href="css/style.css" rel='stylesheet' type='text/css' /><link rel="stylesheet" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<style>
    .selectBox {
    position: relative;
    margin-bottom: 20px;
}

.selectBox h3 {
    margin: 0;
    font-size: 16px;
    color: #333;
}

.selectWrapper {
    position: relative;
}

.selectWrapper select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    border: 2px solid #ccc;
    background-color: #fff;
    padding: 10px;
    font-size: 16px;
    width: calc(100% - 4px);
    height: 57px;
    margin-top: 0px;
}

.selectWrapper select:focus {
    outline: none;
    border-color: #007bff;
}

.arrow {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #555;
    cursor: pointer;
}

</style>
</head>
<body>
<?php include('includes/header.php');?>
    



<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="package-list.php" class="btn">discover more</a>
    </div>

    <!--<div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn " data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>-->

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

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
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="package-list.php" method="GET">
    <div class="inputBox">
        <h3>where to</h3>
        <div class="selectWrapper">
            <select name="destination" id="destinationSelect">
                <option value="option1">Dharmastala</option>
                <option value="option2">Bidar</option>
                <option value="option3">Chikkamagaluru</option>
                <option value="option1">Shivamogga</option>
                <option value="option2">Uttara Kannada</option>
                <option value="option3">Manglore</option>
            </select>
            <div class="arrow"></div>
        </div>
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
            <img src="images/66.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i>Dharmastala </h3>
                <p>Dharmasthala is a remarkable example of communal, religious and cultural harmony. The Manjunatha Temple is a prominent Shaivaite Center, that has Madhwa Vaishnavaite priests </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 5000.00 <span>RS 9000.00</span> </div>
                <a href="package-list.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/106-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> Bidar </h3>
                <p>Bidar Fort is located in old city area, Bidar, Karnataka.The fort, the city and the district are all affixed with the name Bidar. Sultan Ahmad Shah I of the Bahmanid dynasty shifted his capital from Gulbarga to Bidar </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 10000.00  <span>RS 15000.00 </span> </div>
                <a href="package-list.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/105-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> Chikkamagaluru</h3>
                <p>Mullayyanagiri is the highest peak in Karnataka, India. Mullayyanagiri is located in the Chandra Dhrona Hill Ranges of the Western Ghats of Chikkamagaluru Taluk. With a height of 1,925 metres</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 10000.00  <span>RS 12000.00 </span> </div>
                <a href="package-list.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/44.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> Shivamogga </h3>
                <p>Jog Falls is a waterfall in the Shivamogga district of Karnataka, India, that's located on the Sharavati River. It's the second highest plunge waterfall in India, with a drop of 830 feet </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 15000.00  <span>RS 20000.00 </span> </div>
                <a href="package-list.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/sirsi.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i>Uttara Kannada </h3>
                <p>Sirsi Marikamba Temple is a Hindu temple dedicated to Marikamba Devi, located in Sirsi, Karnataka, It was built in 1688, Sirsi Shri Marikamba Devi is "elder sister" of all Marikamba Devi's in Karnataka</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 9000.00  <span>RS 12000.00 </span> </div>
                <a href="package-list.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/112.jpg" alt="">
            <div class="content">
                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i>Manglore </h3>
                <p>Modest water park featuring colorful slides, a sizable swimming pool & an aquatic playground</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> RS 6000.00  <span>RS 10000.00 </span> </div>
                <a href="package-list.php" class="btn">book now</a>
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
            <p>Searching for affordable hotels for your travels, several websites can help you find budget-friendly accommodations. Booking.com offers a wide selection of options worldwide, often featuring discounts and deals for budget-conscious travelers. Hostelworld specializes in hostels.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>When embarking on your travels and seeking affordable options for food and drinks, several avenues can lead you to satisfying yet economical choices. Local eateries, street food vendors, and budget-friendly restaurants often offer delightful meals without straining your wallet.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Ensuring safety while traveling involves checking government advisories, investing in travel insurance, respecting local laws and customs, choosing secure accommodations, and staying vigilant in public spaces. Prioritize health precautions, such as vaccinations and medications, and establish communication plans with trusted contacts.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Prioritizing safety during global travels entails thorough research on government advisories, securing comprehensive travel insurance, respecting diverse cultural norms, selecting secure accommodations, and maintaining vigilance in public spaces.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>For expedited travel, prioritize direct flights to minimize layovers and streamline your journey. Opt for efficient transportation options such as high-speed trains or express shuttles between destinations.</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>For adventurous travel experiences, seek out destinations known for thrilling activities like hiking, scuba diving, or zip-lining. Research reputable adventure tour operators that prioritize safety and expertise.</p>
        </div>

    </div>

</section>
<!-- services section ends -->

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
            <img src="images/105-2.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Mullayanagiri is the highest peak in Karnataka, India. Mullayyanagiri is located at 13°23′26″N 75°43′18″E in the Chandra Dhrona Hill Ranges.</p>
                <a href="package-details.php?pkgid=1" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/106-2.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Bidar Fort was built by Ahmad Shah Wali Bahman.It was renovated in the 15th century by Sultan Ahmad Shah.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/112.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Modest water park featuring colorful slides, a sizable swimming pool & an aquatic playground.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/44.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Jog Falls is one of the Asia's second largest Waterfalls.it is one of the best water falls in karnataka.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/66.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Dharmasthala Temple is an 800-year-old Hindu religious institution in the temple town of Dharmasthala in Dakshina Kannada.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/sirsi.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Sirsi Marikamba Temple is a Hindu temple dedicated to Marikamba Devi ( Durga Devi ), located in Sirsi, Karnataka, It was built in 1688</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/106-2.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Bidar Fort was built by Ahmad Shah Wali Bahman.It was renovated in the 15th century by Sultan Ahmad Shah.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/44.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Jog Falls is one of the Asia's second largest Waterfalls.it is one of the best water falls in karnataka.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>The Great Pyramids were tombs for powerful pharaohs, and the tallest of the three pyramids at Giza reaches nearly 500 feet into the sky.</p>
                <a href="package-list.php" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->




<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>