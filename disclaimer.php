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
            <div class="image_layer" style="background-image: url(images/about_page_img.png);"></div>
            <div class="container">
               <div class="banner_text">
                  <h2 class="banner-title">disclaimer</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="categoryPage_Wrapper">
         <div class="container">
            <div class="staticPage">
               <p>Content on this website has been prepared by InterGlobe Enterprises Private Limited ("InterGlobe")
                  for informational purpose only. Transmission of the content contained herein and receipt thereof, is
                  not intended to create or constitute formation of any contractual relationship.
               </p>
               <p>The information contained in this website is general in nature, which may or may not reflect the most
                  recent developments; accordingly, information on this website is not promised or guaranteed to be
                  updated. InterGlobe makes no representations or warranties of any kind, expressed or implied, about
                  the completeness, accuracy, reliability, suitability or availability with respect to the website or
                  the information, products, services, or related graphics contained on the website for any purpose.
                  In no event will we be liable for any loss or damage including without limitation, indirect or
                  consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits
                  arising out of, or in connection with, the use of this website.
               </p>
               <p>Through this website you are able to link to other websites which are not under the control of
                  InterGlobe. We have no control over the nature, content and availability of those sites. The
                  inclusion of any links does not necessarily imply a recommendation or endorse the views expressed
                  within them.
               </p>
            </div>
            <div class="staticPage">
               <h4>Netiquette:</h4>
               <P>In our endeavour to make content interesting and relevant, InterGlobe Enterprises (“InterGlobe”) may
                  refer to secondary sources of information. InterGlobe does not guarantee the accuracy, reliability,
                  or completeness of the information and expressly disclaims any warranty of any kind, whether express
                  or implied, whatsoever relating to the information. All users are responsible for assessing the
                  relevance and accuracy of the contents of our social media channels (Facebook, Twitter, YouTube,
                  Instagram and LinkedIn). InterGlobe will not be liable for any direct, indirect, special, incidental
                  or consequential loss or damage, incurred or arising by reason of any person using or relying on the
                  information. Please bear in mind that there is no way to guarantee data security and privacy in a
                  public network. So, for your own protection, please do not publish any private contact or account –
                  related information, or other confidential information such as log-in data and passwords on our
                  pages.
               </P>
               <P>Our Social Media channels feature logos, brand identities and other trademarks and service marks
                  (collectively, the “Marks”) that are the property of or are licensed to InterGlobe and/or its group
                  companies. Nothing contained on these pages should be construed as granting, by implication,
                  estoppel, or otherwise, any license or right to use any Mark without written permission of
                  InterGlobe or any third party who owns the Mark. InterGlobe is not responsible for user-generated
                  content or for direct/ indirect links to other websites. The people who use our social media are
                  subject to underlying rights and responsibilities. We reserve the right to delete or report content
                  that contains:
               </P>
               <ul>
                  <li>insults, verbal attacks or degrading statements</li>
                  <li>incitement to break laws, e.g. content which encourages crime, is unsuitable for minors, or
                     infringes personal rights, copyright laws or the data privacy of third parties
                  </li>
                  <li>incitement to hatred, or racist, obscene, discriminatory or pornographic content</li>
                  <li>incorrect, fraudulent, misleading or other dubious content which does not foster fair and open
                     dialogue
                  </li>
                  <li>irrelevant comments, external links and spam</li>
                  <li>commercial or private offers/advertisements for goods, websites and services</li>
                  <li>names and contact details of our employees; private information such as bank account or contact
                     information
                  </li>
                  <li>viruses, Trojan horses, links to external websites, or other content, which could potentially
                     hamper the performance of our social media channels
                  </li>
               </ul>
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