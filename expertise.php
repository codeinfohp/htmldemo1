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
                  <h2 class="banner-title">Expertise</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="categoryPage_Wrapper">
         <div class="container">
            <div class="common_teams">
               <figure>
                  <div class="image_wrap">
                     <img height="155" width="155" src="images/ajeet-singh.jpg" alt="">
                     <h3>Capt. Ajeet Singh Tushir</h3>
                     <small>Head of Training</small>
                  </div>
                  <figcaption>
                     <p>Capt Ajeet Singh Tushir is our Head of Training in our esteemed company. With a wealth of
                        experience in the aviation industry, As a qualified SFI (Synthetic Flight Instructor) and
                        SFE (Synthetic Flight Examiner), Captain Tushir plays a pivotal role in shaping the future
                        of aviation training and ensuring the highest standards of safety and proficiency among our
                        pilots.
                     </p>
                     <p>Captain Tushir's qualifications as a Synthetic Flight Instructor /Examiner (SFI/SFE) are a
                        testament to his commitment to enhancing pilot training methodologies. As an SFI, he
                        leverages cutting-edge simulation technologies to recreate realistic flight scenarios,
                        allowing pilots to practice and refine their skills in a safe and controlled environment.
                        Captain Tushir's expertise in this field significantly enhances the effectiveness and
                        efficiency of our training programs.
                     </p>
                     <p>As an SFE, he conducts thorough examinations of our pilots' practical flying abilities,
                        ensuring their proficiency in critical flight maneuvers and emergency procedures. His
                        meticulous evaluations play a vital role in maintaining the highest safety standards within
                        our organization.
                     </p>
                     <p>Captain Ajeet Singh Tushir's extensive experience, combined with his roles as an SFI and SFE,
                        make him an invaluable asset to our company
                     </p>
                  </figcaption>
               </figure>
               <figure>
                  <div class="image_wrap">
                     <img height="200" width="200" src="images/rakesh-negi.jpg" alt="">
                     <h3>Mr. Rakesh Negi</h3>
                     <small>Chief Ground Instructor</small>
                  </div>
                  <figcaption>
                     <p>Mr. Rakesh Negi is an Aeronautical graduate. He is also a holder of DGCA BAMEC with RTR(A)
                        license and MBA (Aviation Management) degree.
                     </p>
                     <p>He has 10+ years of experience in aviation industry; inclusive of instructional and
                        maintenance experience on modern jets like Airbus/Boeing aircrafts and on Level “D”
                        Simulators. He has trained 300+ aircraft maintenance engineers (ab-initio training) at
                        School of Aeronautics (Neemrana), HAL-Pravara Aviation Institute and on freelance. Also, he
                        has an instructional experience in Ground Training of Airbus A320 aircraft
                        pilots/instructors/examiners; trained 200+ pilots from Indigo Airline, Air Asia (I) Ltd and
                        Air Vistara. Currently, he is Airbus A320 Technical + Performance Instructor. 
                     </p>
                     <p>Currently, He is nominated as Chief Ground Instructor. He is responsible for the supervision
                        of all ground instructors and for the standardization of all theoretical knowledge
                        instruction. He has extensive previous experience in giving theoretical knowledge
                        instruction.
                     </p>
                  </figcaption>
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