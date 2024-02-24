<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
      <title>CAE Simulation Training Private Limited</title>
      <meta
         content="CAE is a global leader in training for the civil aviation, defence and security, and healthcare markets. Backed by a 70-year record of industry firsts, we continue to help define global training standards with our innovative virtual-to-live training solutions to make flying safer, maintain defence force readiness and enhance patient safety."
         name="description">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
         href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="css/swiper-bundle.min.css">
      <link rel="stylesheet" href="css/lightbox.min.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <?php include("widgets/header.php"); ?>
      <section class="inner_banner">
         <div class="banner_wrapper">
            <div class="image_layer" style="background-image: url(images/serv_A320_banner.jpg);"></div>
            <div class="container">
               <div class="banner_text">
                  <h2 class="banner-title">Simulators</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="categoryPage_Wrapper">
         <div class="container">
            <div class="photosDvs">
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-1.png" height="" width="" alt="" title="" />
                  </div>
               </figure>
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-2.png" height="" width="" alt="" title="" />
                  </div>
               </figure>
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-6.jpg" height="" width="" alt="" title="" />
                  </div>
               </figure>
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-3.jpg" height="" width="" alt="" title="" />
                  </div>
               </figure>
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-4.jpg" height="" width="" alt="" title="" />
                  </div>
               </figure>
               <figure>
                  <div class="img_wrap">
                     <img src="images/simulators-img-5.jpg" height="" width="" alt="" title="" />
                  </div>
               </figure>
            </div>
         </div>
      </section>
      <?php include("widgets/footer.php"); ?>
      <span class="scrolltop" style="display: inline;"></span>
      <script src="js/jquery.min.js"></script>
      <script src="js/swiper-bundle.min.js"></script>
      <script>
         var body = document.body;
         var container = document.getElementById('navBar');
         document.getElementById('toggleDiv').addEventListener('click', function (event) {
             event.preventDefault();
             if (!container.classList.contains('active')) {
                 container.classList.add('active');
                 body.classList.add('openMenu');
                 setTimeout(function () {
                     container.style.height = '100vh';
                 }, 0);
             } else {
                 container.style.height = '0px';
                 container.addEventListener('transitionend', function () {
                     container.classList.remove('active');
                     body.classList.remove('openMenu')
                 }, {
                     once: true
                 });
             }
         });
      </script>
      <script>
         if (screen.width < 960) {
             var submenus = document.querySelectorAll(".drop-down");
             for (var i = 0; i < submenus.length; i++) {
                 submenus[i].addEventListener("click", function (e) {
                     var last = this.closest('ul').querySelector('.active');
                     if (last && last !== this) last.classList.remove("active");
                     this.classList.toggle("active");
                 });
             }
         }
      </script>
      <script>
         document.addEventListener('scroll', function () {
             var scrollTop = window.scrollY;
             var toggleClass = document.getElementsByTagName("body")[0];
         
             if (scrollTop >= 100) {
                 toggleClass.classList.add('sticky');
             } else {
                 toggleClass.classList.remove('sticky');
             }
         });
      </script>
      <script>
         $(document).ready(function () {
             $(window).scroll(function () {
                 if ($(this).scrollTop() > 100) {
                     $(".scrolltop").fadeIn();
                 } else {
                     $(".scrolltop").fadeOut();
                 }
             });
             $(".scrolltop").click(function () {
                 $("html, body").animate({
                     scrollTop: 0
                 }, 600);
                 return false;
             });
         });
      </script>
   </body>
</html>