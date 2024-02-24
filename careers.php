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
            <div class="image_layer" style="background-image: url(images/how-it-works.jpg);"></div>
            <div class="container">
               <div class="banner_text">
                  <h2 class="banner-title">Careers</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="categoryPage_Wrapper">
         <div class="container">
            <div class="staticPage">
               <div class="heading">
                  <h4 class="h2">Reasons to Choose CSTPL</h4>
               </div>
               <p>In addition to maintaining a diverse work environment, enhancing morale through various programmes
                  and offering exponential opportunities to blaze their own trail, here are five ways in which we make
                  our employees’ lives at work more fulfilling.
               </p>
               <ul>
                  <li>Driven By Innovation</li>
                  <li>Enabling Continuous Learning</li>
                  <li>Leading through Team Work</li>
                  <li>Recognising Intent & Achievements</li>
                  <li>Respecting our Relationships</li>
               </ul>
               <div class="heading">
                  <h4 class="h2">Our Competencies</h4>
               </div>
               <ul>
                  <li>Achieve Results</li>
                  <li>Serve and Delight your Customers</li>
                  <li>Collaborate and Partner with others</li>
                  <li>Engage, Inspire and Develop people</li>
                  <li>Nurture Innovation, Lead Change</li>
                  <li>Think like an Entrepreneur</li>
               </ul>
               <div class="heading">
                  <h4 class="h2">Our Values</h4>
               </div>
               <ul>
                  <li>Customer Orientation</li>
                  <li>Integrity</li>
                  <li>Future Mindedness</li>
                  <li>Innovation</li>
                  <li>Empowerment</li>
                  <li>Excellence</li>
               </ul>
               <div class="heading">
                  <h4 class="h2">What We Offer</h4>
               </div>
               <p>Change, growth, learning and results – these are the dominant needs of employees in the workplace
                  today. Not only do we recognise them, but we also run successful programmes that facilitate and
                  encourage our employees to shift between functions, build leadership capabilities and expand their
                  expertise.
               </p>
               <ul>
                  <li>Leadership NEXT</li>
                  <li>Leaders as Coaches</li>
                  <li>Cross-functional teams for critical business projects</li>
               </ul>
               <div class="heading">
                  <h4 class="h2">The Advantage</h4>
               </div>
               <p>We accept no limitations and defy the norm at every turn. In our constant quest for a brighter
                  future, we strive to break new grounds and transform problems into possibilities. We treat
                  individuals with fairness and respect while empowering them to take ownership for their actions.
                  Above all, we champion a relentless pursuit of excellence by investing in our people and reinforcing
                  positive behaviour.
               </p>
               <p>Here are some stories that reaffirm our faith in our values, beliefs and the way we function.</p>
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