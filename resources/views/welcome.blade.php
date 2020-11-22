@extends('layouts.layout')

@section('content')
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <a href="/" class="logo mr-auto"><img src="assets/img/slide_pizza.svg" alt="" class="img-fluid"></a>
    <h1 class="logo mr-auto"><a href="/">Slice Pizza</a></h1>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="book-a-table text-center"><a href="{{ route('pizzas.create') }}">Order Pizza</a></li>
        @if (Route::has('login'))
 
            @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>

              @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">Register</a></li>
              @endif
            @endauth
 
           @endif
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="mssg"><span>{{session('mssg')}}</span></h1>
        <br><br>
        <h1>Welcome to <span>Slice Pizza</span></h1>
        <h2>The Most Delicious Pizza in the West!</h2>

        <div class="btns">
          <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          <a href="{{ route('pizzas.create') }}" class="btn-book animated fadeInUp scrollto">Order Pizza</a>
        </div>
      </div>


    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="assets/img/about.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>About Slice Pizza</h3>
          <p class="font-italic">
            Slice Pizza’s culture can be defined in one word: Family. We are a family-owned company, but more than that, our team has a “family” way of connecting and caring for one another.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> 9-inch deep dish pizzas are made fresh, then flash frozen to preserve their hot out of the oven freshness, and shipped to your destination on dry ice.</li>
            <li><i class="icofont-check-circled"></i> Party Planning? Tell us all about it! We’d love to know some details about your event.</li>
            <li><i class="icofont-check-circled"></i> Flaky, buttery pizza crust, an exclusive sausage blend, vine ripened plum tomatoes from California, and Wisconsin cheese. Hungry yet?</li>
          </ul>
          <p>
            We work tirelessly to find new ways to improve your experience, keep you safe and bring you peace of mind - here are some things we are doing today to ensure your safety.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-starters">Classics</li>
            <li data-filter=".filter-salads">American</li>
            <li data-filter=".filter-specialty">Italian</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-starters">
          <img src="https://images.pexels.com/photos/5088697/pexels-photo-5088697.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Pepperoni Pizza</a><span>$8.95</span>
          </div>
          <div class="menu-ingredients">
            Pepperoni, Cheese, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/1.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Neapolitan Pizza</a><span>$11.95</span>
          </div>
          <div class="menu-ingredients">
            Features tomatoes, garlic, oregano, and extra virgin olive oil.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="https://cdnimg.webstaurantstore.com/uploads/buying_guide/2014/11/pizzatypes-deepdish.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Chicago Pizza</a><span>$11.95</span>
          </div>
          <div class="menu-ingredients">
            beef, sausage, pepperoni, onion, mushrooms, and green peppers
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="https://cdnimg.webstaurantstore.com/uploads/blog/2016/8/flat.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create"> New York-Style Pizza</a><span>$12.95</span>
          </div>
          <div class="menu-ingredients">
            pepperoni and sausage to mushroom and anchovies
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="https://cdnimg.webstaurantstore.com/uploads/blog/2016/8/onions.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Sicilian Pizza</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
          Sicilian pizzas are often topped with bits of tomato, onion, anchovies, and herbs.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="https://cdnimg.webstaurantstore.com/uploads/blog/2016/8/onions.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Greek Pizza</a><span>$10.95</span>
          </div>
          <div class="menu-ingredients">
            mozzarella, cheddar, feta cheese, black olives, and red onion.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="https://cdnimg.webstaurantstore.com/uploads/buying_guide/2014/11/pizzatypes-gourmet.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">California Pizza</a><span>$10.95</span>
          </div>
          <div class="menu-ingredients">
          When it comes to California pizza, there's no such thing as traditional toppings. This lack of specificity allows you to get inventive. You can include anything from chicken and artichokes to goat cheese and egg.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="assets/img/menu/7.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">Detroit Pizza</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            pepperoni, brick cheese (usually Wisconsin brick cheese), tomato sauce, mushrooms and olives.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/8.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="/pizzas/create">St. Louis Pizza</a><span>$12.95</span>
          </div>
          <div class="menu-ingredients">
            St. Louis pizza features Provel cheese and a sweeter tomato sauce with a hefty dosage of oregano. Because of its firm crust, St. Louis-style pizza can support several toppings of your choice. </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->




  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="open-hours">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>
                Monday-Saturday:<br>
                11:00 AM - 2300 PM
              </p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection