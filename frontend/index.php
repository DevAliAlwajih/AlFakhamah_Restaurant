<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  عنوان الصفحة الرئيسي والمعاينة -->
  <title>مطعم الفخامة - حيث تجد سعادتك</title>
  <meta name="title" content="مطعم الفخامة-حيث تجد سعادتك">
  <!-- أيقونة الموقع -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- روابط الخطوط Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
  <!-- روايط ملفات التصميم Css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- خلفيات اللافتات الرئيسية -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- واجهة التحميل  -->
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">مطعم الفخامة </p>
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

        <a href="#home" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="الفخامة-الرئيسية">
        </a>

        <!-- الأساسي -->
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">الرئيسية</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">الأطباق</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
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
            <a href="#contact" class="navbar-link hover-underline">
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
            صنعاء
            <br>
            اليمن
          </address>

          <p class="body-4 navbar-text">مفتوح في: 9:00 صباحاً حتى 12:00 مساءاً</p>

          <a href="mailto:info@fakhamah.com" class="body-4 sidebar-link">info@fakhamah.com</a>

          <div class="separator"></div>

          <p class="contact-label">'طلب حجز'</p>

          <a href="tel:+967777777777" class="body-1 contact-number hover-underline">
            777777777
          </a>
        </div>

      </nav>

      <a href="booking.php" class="btn btn-secondary">
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

  <!-- اللافتات الرئيسية -->
      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">أصالة ونظافة</p>

            <h1 class="display-1 hero-title slider-reveal">
              من أجل عشق <br>
              الطعام الشهي
            </h1>

            <p class="body-2 hero-text slider-reveal">
              تعال مع عائلتك واستمتع بفرحة المذاق الشهي
            </p>

            <a href="menuCategory.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">استعرض أطباقنا</span>

              <span class="text text-2" aria-hidden="true">استعرض أطباقنا</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">تجربة لا تُنسى</p>

            <h1 class="display-1 hero-title slider-reveal">
              نكهات مستوحاة من  <br>
              الطبيعة
            </h1>

            <p class="body-2 hero-text slider-reveal">
              تعال مع عائلتك واستمتع بفرحة المذاق الشهي
            </p>

            <a href="menuCategory.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">استعرض أطباقنا</span>

              <span class="text text-2" aria-hidden="true">استعرض أطباقنا</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">مذاق مذهل ولذيذ</p>

            <h1 class="display-1 hero-title slider-reveal">
              كل نكهة تحكي <br>
              قصة
            </h1>

            <p class="body-2 hero-text slider-reveal">
              تعال مع عائلتك واستمتع بفرحة المذاق الشهي
            </p>

            <a href="menuCategory.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">استعرض أطباقنا</span>

              <span class="text text-2" aria-hidden="true">استعرض أطباقنا</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">إحجز طاولة</span>
        </a>
        
      </section>


  <!--قسم الخدمات -->
      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">نكهات ملكية</p>

          <h2 class="headline-1 section-title">جودة رفيعة المستوى</h2>

          <p class="section-text">
            نحرص على تقديم أعلى معايير الجودة والخدمة لتجربة استثنائية لا تُنسى.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="sweets.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="sweets.php">الحلويات</a>
                  </h3>

                  <a href="sweets.php" class="btn-text hover-underline label-2">تصفح الأطباق</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="appetizers.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="appetizers.php">المقبلات</a>
                  </h3>

                  <a href="appetizers.php" class="btn-text hover-underline label-2">تصفح الأطباق</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="juices.php" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="juices.php">المشروبات</a>
                  </h3>

                  <a href="juices.php" class="btn-text hover-underline label-2">تصفح الأطباق</a>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>



  <!--قسم من نحن -->
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">قصتنا</p>

            <h2 class="headline-1 section-title">كل نكهة تحكي قصة</h2>

            <p class="section-text">
              منذ بدايتنا، اخترنا أن يكون لكل طبق معنى ولكل نكهة حكاية تُحاكي الذوق الرفيع. نستخدم أفضل المكونات الطازجة لنمنحك تجربة مميزة تجمع بين الأصالة والابتكار.
            </p>

            <div class="contact-label">اتصل الآن للحجز</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">777777777</a>

            <a href="about.php" class="btn btn-primary">
              <span class="text text-1">معرفة المزيد</span>

              <span class="text text-2" aria-hidden="true">معرفة المزيد</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/badge-2.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>



  <!--قسم الأطباق المميزة -->
      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="./assets/images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">الأطباق المميزة</p>

            <h2 class="headline-1 section-title">الروبيان</h2>

            <p class="section-text">
              روبيان طازج مشوي أو مقلي مع خليط من التوابل اليمنية والأعشاب الطازجة، طبق شهي يبهج الحواس.               
            </p>

            <div class="wrapper">
              <del class="del body-3">9999 ي.ر</del>

              <span class="span body-1">8999 ي.ر</span>
            </div>

            <a href="special.php" class="btn btn-primary">
              <span class="text text-1">إستعراض جميع الأطباق</span>

              <span class="text text-2" aria-hidden="true">إستعراض جميع الأطباق</span>
            </a>

          </div>
        </div>

        <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

      </section>


  <!--قسم فئات الأطباق -->
      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">اختيارات مميزة</p>

          <h2 class="headline-1 section-title text-center">فئات الأطباق</h2>

          <ul class="grid-list ">

            <li>
              <div class="menu-card hover:card hover-underline">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/special/meet-mandi.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>
                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="special.php" class="card-title">الأطباق المميزة</a>
                    </h3>
                  </div>
                  <p class="card-text label-1">
                    تشكيلة مختارة بعناية من أشهى الأطباق التي تجمع بين المذاق الفاخر والتقديم العصري لتجربة لا تُنسى.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card hover-underline">
                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/traditional/fahsa.png" width="100" height="100" loading="lazy" alt="Lasagne"
                    class="img-cover">
                </figure>

                <div>
                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="traditional.php" class="card-title">المأكولات الشعبية</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    نكهات أصيلة من قلب المطبخ اليمني، أطباق تراثية تُحضّر بحب وتقدَّم لك كما لو كنت في بيت يمني عريق.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card hover-underline">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/seafood/fired-shrimp.png" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="seafood.php" class="card-title">المأكولات البحرية</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    أجود ما يقدمه البحر طازجًا، مطبوخًا على الطريقة اليمنية مع لمسة بهارات أصيلة تمنحك مذاقًا غنيًا وفريدًا.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card hover-underline">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/appetizers/bnt-alsahn.png" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="appetizers.php" class="card-title">المقبلات</a>
                    </h3>
                  </div>

                  <p class="card-text label-1">
                    بداية مثالية لرحلتك مع الطعم، مقبلات يمنية وعالمية تجمع بين النكهة الخفيفة واللمسة المقرمشة.
                  </p>

                </div>

              </div>
            </li>
          </ul>

          <a href="menuCategory.php" class="btn btn-primary">
            <span class="text text-1">إستعراض جميع الفئات</span>

            <span class="text text-2" aria-hidden="true">إستعراض جميع الفئات</span>
          </a>

          <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>


  <!--قسم توصيات العملاء -->
      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            أود أن أشكركم على دعوتي لتناول العشاء الرائع في الليلة الماضية. كان الطعام استثنائيًا بالفعل.
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">

            <p class="label-2 profile-name">محمد محمد</p>
          </div>

        </div>
      </section>


  <!--قسم الحجز -->
      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="backend/reserve.php" method="post" class="form-left">

              <h2 class="headline-1 text-center">الحجز أونلاين</h2>

              <p class="form-text text-center">
                قدّم طلبك للحجز الآن <a href="tel:+967777777777" class="link">+777777777</a>
                او قم بملء النموذج أدناه
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="أسمك" autocomplete="off" class="input-field">

                <input type="tel" name="phone" placeholder="رقم التواصل" autocomplete="off" class="input-field">
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="people" class="input-field">
                    <option value="1-person">شخص</option>
                    <option value="2-person">شخصين</option>
                    <option value="3-person">3 أشخاص</option>
                    <option value="4-person">4 أشخاص</option>
                    <option value="5-person">5 أشخاص</option>
                    <option value="6-person">6 أشخاص</option>
                    <option value="7-person">7 أشخاص</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="reservation-time" class="input-field">
                    <option value="08:00am">08 : 00 am</option>
                    <option value="09:00am">09 : 00 am</option>
                    <option value="010:00am">10 : 00 am</option>
                    <option value="011:00am">11 : 00 am</option>
                    <option value="012:00am">12 : 00 am</option>
                    <option value="01:00pm">01 : 00 pm</option>
                    <option value="02:00pm">02 : 00 pm</option>
                    <option value="03:00pm">03 : 00 pm</option>
                    <option value="04:00pm">04 : 00 pm</option>
                    <option value="05:00pm">05 : 00 pm</option>
                    <option value="06:00pm">06 : 00 pm</option>
                    <option value="07:00pm">07 : 00 pm</option>
                    <option value="08:00pm">08 : 00 pm</option>
                    <option value="09:00pm">09 : 00 pm</option>
                    <option value="10:00pm">10 : 00 pm</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="نص الرسالة" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">إحجز طاولة</span>

                <span class="text text-2" aria-hidden="true">إحجز طاولة</span>
              </button>

            </form>

            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">تواصل بنا</h2>

              <p class="contact-label">تقديم طلب</p>

              <a href="tel:+967777777777" class="body-1 contact-number hover-underline">777777777</a>

              <div class="separator"></div>

              <p class="contact-label">العنوان</p>

              <address class="body-4">
                صنعاء، الدائري الغربي - جولةالقادسية
                <br>
                اليمن
              </address>

            </div>

          </div>

        </div>
      </section>

  <!--قسم مميزاتنا-->
      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">لماذا تختارنا؟</p>

          <h2 class="headline-1 section-title">ما يميزنا</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">أطعمة آمنة ونظيفة</h3>

                <p class="label-1 card-text">نحرص على تقديم أطعمة طازجة ونظيفة بمستوى عالٍ من النظافة والجودة، لتستمتع بوجبات صحية وآمنة في كل مرة.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">بيئة نظيفة ومنعشة</h3>

                <p class="label-1 card-text">استمتع بأجواء نظيفة ومنعشة، حيث الجودة والنظافة تلتقي لتوفير تجربة مثالية لكل زائر.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">طهاة خبراء</h3>

                <p class="label-1 card-text">فريقنا من الشيفات المهرة يبدع في تحضير أطباق تجمع بين الجودة والنكهة الاستثنائية لتجربة طعام لا تُنسى.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">تنظيم الفعاليات والحفلات</h3>

                <p class="label-1 card-text">نقدّم خدمات تنظيم الفعاليات والحفلات مع أفضل الأجواء والخدمات لتجربة لا تُنسى لكل مناسبة.</p>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>

  <!--قسم الفعاليات والأحداث-->
      <section class="section event bg-black-10" aria-label="event">
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

                  <time class="publish-date label-2" datetime="2022-09-08">08/10/2025</time>
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

          <a href="events.php" class="btn btn-primary">
            <span class="text text-1">اطلع على أحدث مقالاتنا</span>

            <span class="text text-2" aria-hidden="true">اطلع على أحدث مقالاتنا</span>
          </a>

        </div>
      </section>

    </article>
  </main>





  <!--تذييل الصفحة-->
  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')" id="contact">
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

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>