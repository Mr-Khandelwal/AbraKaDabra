<?php

include 'components/connect.php' ;

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel ="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At AbraKaDabra, providing exceptional customer service is our USP, our 
               main strength. We take pride in providing outstanding services to our 
               clients.We know that our customers are important for us and hence we do not 
               leave any stone unturned in helping, guiding and providing the best possible
               products & after sales services and support to our clients. We have skills & 
               expertise that make us one of the most trusted names in the industry. Over 
               the years we have developed an extensive mechanism in order to deal with 
               some of the most complex issues.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>I recently purchased a variety of organic spices from this 
            company and I am extremely satisfied with my purchase. The 
            quality of the spices is outstanding and I love that they are 
            organic and free of any harmful chemicals. The packaging is also 
            well done, ensuring that the spices stay fresh and flavorful 
            for a long time.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>I recently purchased a set of organic spices and was blown away 
            by their quality and flavor. The spices were noticeably fresher 
            and more fragrant than the non-organic ones I had used before.
            Overall, I highly recommend these organic spices to anyone looking 
            to elevate their cooking with high-quality, responsibly sourced 
            ingredients.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Richard</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>I recently tried a range of herbal beauty products and I'm 
            absolutely in love with them! The herbal extracts and essential 
            oils in these products are not only gentle on my skin but also 
            have incredible nourishing properties that leave my skin feeling 
            soft, supple, and rejuvenated.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marlin</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>I recently purchased a Khadi cotton saree and I am absolutely in 
            love with it! The fabric is so soft and breathable, and the saree 
            has a beautiful drape that makes me feel elegant and stylish. 
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priyanka</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>I recently switched to using copper and mud utensils in my 
            kitchen, and I am blown away by their quality and versatility.
            The copper utensils are not only visually stunning with their 
            elegant design, but also have amazing heat conductivity which 
            makes cooking a breeze. The mud pots are perfect for slow-cooking 
            dishes and add a distinct flavor to my food. I love that these 
            utensils are not only durable but also have health benefits.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aayushman</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Food grains such as bajra,ragi and millets have a unique nutty 
            flavor and a pleasant texture that makes them a great addition to 
            any meal.Overall, I highly recommend incorporating bajra, ragi, and
            other millets into your diet for a delicious and healthy eating  
            experience. 
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lara</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>