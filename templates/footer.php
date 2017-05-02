<?php if (!is_page_template('contact.php')): ?>
<footer class="content-info" style="background:url('/wp-content/uploads/2017/04/footer-image-texture-idea-1.jpg') no-repeat center center;">
  <div class="container-fluid wrap">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <h4 class="white">Our Mission Is To Assist Our Clients In Achieving One Year Of Continuous Sobriety</h4>
      </div>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-2 text-center">
          <a href="#"><i class="fa fa-phone-square fa-3x"></i><small>Call</small></a>
        </div>
        <div class="col-md-2 text-center">
          <a href="#"><i class="fa fa-map-marker fa-3x"></i><small>Directions</small></a>
        </div>
        <div class="col-md-2 text-center">
          <a href="#"><i class="fa fa-envelope fa-3x"></i><small>Contact</small></a>
        </div>
      </div>
  </div>
</footer>
<?php endif; ?>
<?php if (is_page('home')): ?>
<?php get_template_part('templates/modal'); ?>
<?php endif; ?>
