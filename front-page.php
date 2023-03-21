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
      <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id ,'full' );
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="about-section">
              <div class="section-heading">
                <span><?php _e('Quienes somos','donkyatheme'); ?>?</span>
                <h2>DONKYA</h2>
                <p class="fs-5">Asociación para la Renaturalización y Conservación de los Ecosistemas.</p>
              </div>
              <article class="featured-content pb-3">
                <div>
                  <img class="featured-logo" src="<?php echo $custom_logo_url; ?>" alt="featured logo">
                </div>
                <p class="fs-6 lh-sm"><?php _e( 'Somos una asociación enfocada en trabajar con las comunidades para integrar una forma de vida mas sustentable, preservando y restaurando las zonas naturales destruidas por las actividades humanas.', 'donkyatheme'); ?></p>
                <a class="alpha-button mt-5" href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>"><?php echo __( 'Conoce Más','donkyatheme' ); ?></a>
              </article>
            </div>
        </div>
      </div>
    </div>
	<!-- About Section Ends Here -->

  <!-- Projects Section-->
  <?php 
    $project_logo_url = wp_get_attachment_image_url( 421,'full' );
  ?>
  <div class="project-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
          <span><?php _e( 'Qué hacemos','donkyatheme' ); ?>?</span>
          <h2><?php _e( 'Nuestros Proyectos','donkyatheme' ); ?></h2>
        </div>
      </div>
        <div class="col-md-12">
          <article class="featured-content pb-3">
            <img class="featured-logo" src="<?php echo $project_logo_url; ?>">
            <p class="fs-6 lh-sm">El objetivo de la campaña <strong>SINERGISIEMBRA</strong> en colaboración con la asociación <strong>KOKOPELLI</strong> es desarrollar proyectos comunitarios con familias campesinas de Sudamérica a través de la adquisición de semillas, la educación sobre diversos puntos importantes de nuestra visión, como la promoción de la autonomía alimentaria y la motivación para multiplicar sus propias semillas.</p>
            <a class="alpha-button mt-5" href="#"><?php _e( 'Ver Más','donkyatheme' ); ?></a>
          </article>

        </div>
    </div>
  </div>

  <!-- The Impact -->
  <div class="report-section">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Impacto Ambiental</h2>
            <p class="fs-5">Con nuestro compromiso contribuimos a los Objetivos de Desarrollo Sostenible de las Naciones Unidas.</p>
          </div>
        </div>
        <div id="un-objetives" class="container">
          <div class="row">
            <div class="col-md-4 mb-1">
              <div class="un-objective-12">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\12.svg'; ?>" width="100%" />
                <div class="descriptive-item ">
                  <p class="text-left text-light fs-6"><strong>DONKYA</strong> busca cuidar y desarrollar responsablemente en cuanto a consumo y producción, aplicando técnicas de permacultura y regeneración sin la destrucción de ecosistemas naturales.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 pb-1">
              <div class="un-objective-13">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\13.svg'; ?>" width="100%" />
                <div class="descriptive-item">
                  <p class="text-left text-light fs-6">Con nuestras actividades contribuimos a reducir el CO2 de la atmósfera. Mediante la restauración y renaturalización de suelos desolados y contaminados, así como mediante la reforestación, se puede almacenar y absorber más CO2.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="un-objective-15">
                <embed src="<?php echo get_template_directory_uri() . '\assets\svg\15.svg'; ?>" width="100%" />
                <div class="descriptive-item">
                  <p class="text-left text-light fs-6">Al proteger y restaurar ecosistemas de diversos tipos, DONKYA crea y mantiene hábitats para animales y plantas salvajes y contribuye así a su protección y diversidad.</p>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
  <!-- /The Impact -->

	<!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="section-heading">
              <span><?php _e( 'Nuestros Fundamentos','donkyatheme' ); ?></span>
              <h2><?php _e( 'Actividades', 'donkyatheme' ); ?></h2>
              <p>Algunas de nuestras actividades principales</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-card">
              <img src="https://res.cloudinary.com/negocios-el-triunfo/image/upload/v1655601772/donkya/education.jpg" class="img-fluid">
            </div>
            <div class="service-item">
              <h4>Educación</h4>
              <p class="fs-6"><?php _e( 'La educación e investigación son piezas fundamentales para la evolución y el cambio consiente en relación de las comunidades y la naturaleza.'. 'donkyatheme' ); ?></p>
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
              <span><?php _e('Uniendo Fuerzas', 'donkyatheme'); ?></span>
              <h2><?php _e( 'Nuestro Equipo', 'donkyatheme' ); ?></h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 420 -->
                <img src="<?php echo wp_get_attachment_url( 420 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Romana Rainer</h4>
              <span>Austria</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 419 -->
                <img src="<?php echo wp_get_attachment_url( 419 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Anyelisa Yesquen</h4>
              <span>Perú</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 311 -->
                <img src="<?php echo wp_get_attachment_url( 311 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Carlos Sanabria</h4>
              <span>Colombia</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-item">
              <div class="id-image">
                <!-- id: 418 -->
                <img src="<?php echo wp_get_attachment_url( 418 ); ?>" class="m-3 rounded-circle mx-auto d-block" width="100%" alt="">
              </div>
              <h4>Priscila Pincay</h4>
              <span>Ecuador</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Team Features Ends Here -->

<?php get_footer(); ?>