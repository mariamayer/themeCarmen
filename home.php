<?php
/**
 Template Name: Home
 */

get_header(); ?>

<script>
  jQuery(function() {
    jQuery(".rslides").responsiveSlides();
  });
</script>

<div class="site-wrapper">
	<section id="hero" class="content-section">
		<ul class="rslides">
	  		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt=""></li>
	  		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" alt=""></li>
	  		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" alt=""></li>
		</ul>
	</section>
	<div class="container">
		<section id="about">
			<div class="row">
		        <div class="col-lg-4">
		          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		          <h2>Heading</h2>
		          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		          <h2>Heading</h2>
		          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		          <h2>Heading</h2>
		          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		        </div><!-- /.col-lg-4 -->
		    </div>
		</section>
		<section id="noticias">
		</section>
		<section id="notas">
		</section>
		<section id="social">
		</section>
		<section id="contacto">
		</section>
	</div>

</div>

<?php get_footer(); ?>
