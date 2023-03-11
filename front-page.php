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
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="about-section">
              <div class="section-heading">
                <span>Who we are?</span>
                <h2>DONKYA PLASTICS</h2>
              </div>
              <article class="featured-content">
                <div class="featured-logo">
                  <img src="https://res.cloudinary.com/negocios-el-triunfo/image/upload/c_crop,h_1345/v1656528494/donkya/donkya_plastics_g0acdx.png" class="img-fluid">
                </div>
                <p class="fs-6 lh-sm">We are an organization focused on helping communities integate a sustainable way of living, changing habits and reducing waste.<br>Through education and research promoting a new ways of living.</p>
                <a class="alpha-button mt-5" href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>"><?php echo __('Read More', 'donkyatheme'); ?></a>
              </article>
            </div>
        </div>
      </div>
    </div>
	<!-- About Section Ends Here -->

  <!-- The Impact -->
  <div class="report-section">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <span>Project</span>
            <h2>Our Impact</h2>
            <p class="fs-5">With our activities we contribute to the United Nations Sustainable Development Goals</p>
          </div>
        </div>

        <div id="un-objetives" class="container">
          <div class="row">
            <div class="col-md-4 mb-1">
              <div class="un-objective-12">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\12.svg'; ?>" width="100%" />
                <div class="descriptive-item ">
                  <p class="text-left text-light fs-6"><strong>DONKYA's</strong> products and production methods are based on reducing the destructive cycle that is generated in the current plastic production system, providing an alternative by transforming plastic waste into new products.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 pb-1">
              <div class="un-objective-13">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\13.svg'; ?>" width="100%" />
                <div class="descriptive-item">
                  <p class="text-left text-light fs-6">Our products are made from recovered plastic, giving a more environmentally friendly option, taking into account that a percentage of the profits will be used to revive and maintain ecosystems that reduce CO2 emissions.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="un-objective-15">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\15.svg'; ?>" width="100%" />
                <div class="descriptive-item">
                  <p class="text-left text-light fs-6">A percentage of the profits from our products will be used to contribute to and conserve important biodiversity ecosystems.</p>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
  <!-- /The Impact -->

  <!-- Video Section -->
  <div class="container pt-5">
    <div class="responsive-video embed-responsive">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hE0Iix9vpEc" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <!-- /Video Section -->

	<!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Our Intitiatives</span>
              <h2><?php _e( 'What we do', 'donkyatheme' ); ?>?</h2>
              <p>Some of our key activities are as follows:</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="https://res.cloudinary.com/negocios-el-triunfo/image/upload/v1655601772/donkya/education.jpg" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Education & Research</h4>
              <p class="fs-6">Education is a key foundation in society development but there are some places on earth that require assitance in order to reach access to new tech and platforms that will empower them.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/pp_waste.jpg'; ?>" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Plastic Recycling</h4>
              <p class="fs-6">Through DONKYA <em>PLASTIC</em> we are implementing plastic recycling processes that will let us produce new products, from waste plastic.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/permaculture_01.jpg'; ?>" class="img-fluid">
            </div>
            <div class="service-item">
              <h4><?php _e( 'Permaculture', 'donkyatheme' ); ?></h4>
              <p class="fs-6"><?php _e('Our mision is to encourage local communities to live in armony with nature, not harming local species...', 'donkyatheme'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->

    <?php # get_template_part( /partials/sections/products ); ?>

    <!-- Team Features Starts Here-->
    <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span><?php _e('Joinning forces', 'donkyatheme'); ?></span>
              <h2><?php _e( 'The Team', 'donkyatheme' ); ?></h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 302 -->
                <img src="<?php echo wp_get_attachment_url( 302 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Romana Rainer</h4>
              <span>Austria</span>
              <!-- p>Founder, artist. Political scientist.</p-->
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 303 -->
                <img src="<?php echo wp_get_attachment_url( 317 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Anyelisa Yesquen</h4>
              <span>Perú</span>
              <!--p>Founder, Entrepreneur. Manager and self taught coder. Open source activist.</p-->
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 311 -->
                <img src="<?php echo wp_get_attachment_url( 311 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Carlos Sanabria</h4>
              <span>Colombia</span>
              <!--p>Founder, Permaculture Teacher and strong contributor to reforestation and nature preservation projects.</p-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Team Features Ends Here -->

<?php get_footer(); ?>