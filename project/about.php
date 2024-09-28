<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Sonoma, the beating heart of literary charm in Dehiwala, Sri Lanka! For half a century, we've been igniting imaginations and satisfying book cravings with our carefully curated collection. Whether you're a young dreamer or a seasoned scholar, our shelves hold treasures for everyone.   </p>
         <p>At Sonoma, we're not just selling books; we're offering keys to new worlds, pages that transport you to places unknown. Join us in the joy of exploration, where each title is a doorway to adventure. Discover the magic at Sonoma – where stories unfold and reading is an art.<p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/client1.jpeg" alt="">
         <p>"Sonoma is a literary oasis! From rare finds to bestsellers, their curated collection is a treasure trove for any book lover. The ambience is as delightful as the selection. A haven where stories come to life!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ujith</h3>
      </div>

      <div class="box">
         <img src="images/client2.jpeg" alt="">
         <p>"Sonoma is not just a bookstore; it's a sanctuary for the soul. The carefully chosen books, the cozy corners, and the friendly staff make every visit a literary escape. My go-to place for inspiration and relaxation."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ishani</h3>
      </div>

      <div class="box">
         <img src="images/client3.jpeg" alt="">
         <p>"Sonoma is a book lover's paradise! The curated collection is a symphony of genres, and each visit feels like stepping into a treasure trove. This is not just a bookstore; it's a haven for those who seek literary bliss."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>shane</h3>
      </div>

      <div class="box">
         <img src="images/client4.jpeg" alt="">
         <p>"Sonoma has transformed my reading habits. The thoughtfully curated collection ensures that there's always something exciting to discover. It's a haven for bookworms, and the sense of community among fellow readers makes it feel like a second home."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>kusal</h3>
      </div>

      <div class="box">
         <img src="images/client5.jpeg" alt="">
         <p>"Sonoma is my go-to sanctuary for literary escapades. The diverse selection, from local gems to international bestsellers, never fails to surprise and delight. Every shelf holds a new adventure, making each visit an absolute pleasure."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>pavani</h3>
      </div>

      <div class="box">
         <img src="images/client6.jpeg" alt="">
         <p>"Sonoma is where my bookish dreams come true! The expertly selected range of titles ensures that I always find something new and exciting to read. The staff's passion for literature is contagious, creating an atmosphere that keeps me coming back for more."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>justin</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/jk.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J. K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/shehan.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Shehan Karunatilaka</h3>
      </div>

      <div class="box">
         <img src="images/ashok.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ashok Ferrey</h3>
      </div>

      <div class="box">
         <img src="images/step.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/jam.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>James Patterson</h3>
      </div>

      <div class="box">
         <img src="images/leo.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Leo Tolstoy</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>