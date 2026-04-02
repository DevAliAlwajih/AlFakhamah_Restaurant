<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  عنوان الصفحة الرئيسي والمعاينة -->
  <title>مطعم الفخامة-الفعاليات والأخبار</title>
  <meta name="title" content="مطعم الفخامة-حيث تجد سعادتك">


  <!-- أيقونة الموقع -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- روابط الخطوط Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
  <!-- روايط ملفات التصميم Css-->
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body id="top">

  <!-- واجهة التحميل  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">مطعم الفخامة</p>
  </div>




  <!-- الشريط العلوي  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
        صنعاء
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">يومياً: 9:00 صباحاً حتى 12:00 مساءاً</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">777777777</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:info@fakhamah.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">info@fakhamah.com</span>
      </a>

    </div>
  </div>

  <!-- فائمة رأس الصفحة -->
  <header class="header" data-header>
    <div class="container">

      <a href="index.php#home" class="logo">
        <img src="./assets/images/logo.svg" width="160" height="50" alt="الفخامة-الرئيسية">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="الفخامة-الرئيسية">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php#home" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">الرئيسية</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="menuCategory.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">الأطباق</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="about.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">من نحن؟</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="team.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">فريق الطبخ</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="deliveryOrder.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">التوصيل</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="contact.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">التواصل</span>
            </a>
          </li>
          
          <li class="navbar-item">
            <a href="ourLocation.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">موقعنا</span>
            </a>
          </li>

        </ul>

        <!-- الثانوي -->
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="special.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">الأطباق المميزة</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="traditional.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">المأكولات الشعبية</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="seafood.php" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">المأكولات البحرية</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="appetizers.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">المقبلات</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="juices.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">العصائر</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="sweets.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">الحلويات</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">قم بزيارتنا</p>

          <address class="body-4">
            صنعاء، الدائري الغربي - جولةالقادسية
            <br>
            اليمن
          </address>

          <p class="body-4 navbar-text">مفتوح في: 9:00 صباحاً حتى 12:00 مساءاً</p>

          <a href="mailto:info@fakhamah.com" class="body-4 sidebar-link">info@fakhamah.com</a>

          <div class="separator"></div>

          <p class="contact-label">'طلب حجز'</p>

          <a href="tel:+967777777777" class="body-1 contact-number hover-underline">
            +967 7777777770
          </a>
        </div>

      </nav>

      <a href="#" class="btn btn-secondary">
        <span class="text text-1">حجز طاولة</span>

        <span class="text text-2" aria-hidden="true">حجز طاولة</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


  <main>
    <article>

      <!-- الاحداث والاخبار -->
      <section class="section event bg-black-10" aria-label="event" style="padding-top: 25%;">
        <div class="container">

          <p class="section-subtitle label-2 text-center">أحدث الأخبار</p>

          <h2 class="section-title headline-1 text-center">الفعاليات القادمة</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/events/event-1.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">25/09/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">الطعام والنكهات</p>

                  <h3 class="card-title title-2 text-center">
                    نكهات شهية تجعلك ترغب في التذوق بعينيك قبل فمك.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/events/event-2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">29/09/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">أطعمة صحية</p>

                  <h3 class="card-title title-2 text-center">
                    نكهات صحية ولذيذة تأسر الحواس منذ النظرة الأولى.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/events/event-3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/10/2025</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">وصفات</p>

                  <h3 class="card-title title-2 text-center">
                    وصفات شهية تأسر الحواس منذ النظرة الأولى.
                  </h3>
                </div>

              </div>
            </li>

          </ul>
        </div>
      </section>


      <!-- مقالات -->
      <section class="section testi text-center has-bg-image"
   style="background-image: url('./assets/images/events/blog-1.png'); padding-top: 200px; " aria-label="testimonials">
   <div class="container">

     <div class="quote">”</div>

     <p class="headline-2 testi-text">
      المأكولات الجديدة – نكهات مبتكرة وتجربة فريدة
     </p>

     <div class="wrapper">
       <div class="separator"></div>
       <div class="separator"></div>
       <div class="separator"></div>
     </div>
     <p class="headline-3 testi-text ">
      في مطعمنا نحرص دائمًا على أن تكون رحلتك مع الطعام مليئة بالمفاجآت الشهية. لذلك أضفنا إلى قائمتنا مجموعة من المأكولات الجديدة التي تمزج بين الأصالة اليمنية واللمسات العصرية، لتمنحك تجربة لا تُنسى.

نستخدم مكونات طازجة بعناية، ونبتكر وصفات تجمع بين النكهة الغنية والتقديم العصري، لنقدم لك أطباقًا تلبي مختلف الأذواق. سواء كنت من عشاق المأكولات الشعبية أو تبحث عن خيارات جديدة وغير تقليدية، ستجد دائمًا ما يُسعد حواسك.

انضم إلينا واكتشف قائمتنا الجديدة – حيث يتحول الطعام إلى رحلة نكهة مميزة.
     </p>

   </div>
      </section>

    </article>
  </main>





  <!--تذييل الصفحة-->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
           صنعاء 
          </address>

          <a href="mailto:info@fakhamah.com" class="body-4 contact-link">info@fakhamah.com</a>

          <a href="tel:+967777777777" class="body-4 contact-link">تقديم طلب :777777777</a>

          <p class="body-4">
            مفتوح في: 9:00 صباحاً حتى 12:00 مساءاً
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">احصل على أخر الأخبار والعروض</p>

          <p class="label-1">
            اشترك معنا واحصل على خصم <span class="span">25%.</span>
          </p>

          <form action="backend/subscribe.php" method="post" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">إشتراك</span>

              <span class="text text-2" aria-hidden="true">إشتراك</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">الرئيسية</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">الأطباق</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">من نحن؟</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">فريق الطبخ</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">للتواصل</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="ourLocation.php" class="label-2 footer-link hover-underline">الموقع الجغرافي</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2025 مطعم الفخامة, جميع الحقوق محفوظة | تم التطوير بواسطة <a href="#"
            target="_blank" class="link">Roaa Adil</a>
        </p>

      </div>

    </div>
  </footer>





  <!--زر الصعود الى أعلى الصفحة-->
  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>



  <!--روابط ملفات الجافا-->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>