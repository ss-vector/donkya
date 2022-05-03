<?
/**
 * 
 * @package Donkya
 * @since 1.0.0
*/
?>
<?php get_header(); ?>

   <!-- Page Content -->

    <!-- Banner/Slider Section Starts -->
    <?php get_template_part( '/partials/slider/slider' );  ?>
    <!-- Banner Ends Here -->

    <!-- About Section Starts -->
    <div class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Who we are?</span>
              <h2>DONKYA PLASTICS</h2>
            </div>
            <article class="featured-content">
              <div class="featured-logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/0_logo.jpg'; ?>" class="img-fluid">
              </div>
              <p>We are an organization focused on helping communities integate a sustainable way of living, changin habits and reducing waste.<br>Through education and research promoting a new ways of living.</p>
              <a class="alpha-button mt-5" href="https://donkya.com/?page_id=287">Read More</a>
            </article>
        </div>
        </div>
      </div>
    </div>
	<!-- About Section Ends Here -->

	<!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Our Intitiatives</span>
              <h2>What we do?</h2>
              <p>Some of our key activities are as follows:</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/education_neonbrand.jpg'; ?>" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Education & Research</h4>
              <p>Education is a key foundation in society development, </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/pp_waste.jpg'; ?>" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Plastic Recycling</h4>
              <p>Through DONKYA <em>PLASTIC</em> we are implementing plastic recycling processes that will let us produce new products, from waste plastic.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/permaculture_01.jpg'; ?>" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Permaculture</h4>
              <p>Our mision is to encourage local communities to live in armony with nature, not harming local species...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->

    <!-- Featured Projets Here -->
    <div class="pricing-section">
      <div class="background-image-pricing">
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 z-index-1">
            <div class="section-heading">
              <h2>Featured Projects</h2>
              <p>You can help our mision by buying some of our merchandising to support us, or make a donation...</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-item">
              <h4>Tetra pak Pouches</h4>
              <!-- 
                  TODO place reference images here
               -->
               <img src="<?php echo get_template_directory_uri() . '/assets/images/tp-pouch-featured.jpeg' ?>" width="100%" alt="Tetra pack recycled pouch">
              <p>A easy-to-use pouche made of recycled Tetra Pak material. This is one of the initiatives we've woking on.</p>
              <div class="dev"></div>
              <a href="#" class="main-button">Shop</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featured Projects Ends Here -->


    <!-- Features Starts Here -->
    <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Joinning forces</span>
              <h2>The Team</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <img src="assets/images/omar3.jpg" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Omar Mejia</h4>
              <span>Perú</span>
              <p>Project manager. Praesent lacinia tempus urna.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <img src="assets/images/romana.jpg" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Romana Rainer</h4>
              <span>Austria</span>
              <p>Founder.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <img src="assets/images/carlos.jpg" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Carlos Sanabria</h4>
              <span>Colombia</span>
              <p>Founder and contributor to nature preservation projects, permaculture and reforestation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features Ends Here -->


    <!-- Testimonials Starts Here -->
    <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Testimonials</span>
              <h2>What they say about us</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Yo digo que esta bien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada."</p>
                <h4>Omar Mejia</h4>
                <span>Local Partner</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                <h4>Vinny Smart</h4>
                <span>Digital Marketer</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
                <h4>Trevor Liam</h4>
                <span>Technology Chef</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Ends Here -->

<?php get_footer(); ?>