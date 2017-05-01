<?php
/**
 * Template Name: Contact Page Template
 */
 // style="background:url('/wp-content/uploads/2017/04/pexels-photo-360698.jpeg')no-repeat center center;background-size:cover;"
?>
<section id="contact">
<div class="container">
  <div class="row">
    <div class="col-md-5 head" data-aos="fade" data-aos-once="true">
      <div class="contact-info contact">
      <div class="row">
        <div class="col-md-12">
          <h4>Von Karman</h4>
          <p>4343 Von Karman Avenue, Suite 200</p>
          <p>Newport Beach, CA 92660</p>
        </div>
        <div class="col-md-12">
          <h4>Newport Beach</h4>
          <p>1545 Newport Blvd</p>
          <p>Costa Mesa, CA 92627</p>
        </div>
        <div class="col-md-12">
          <h4>Behr Center</h4>
          <p>1040 W 17th St</p>
          <p>Costa Mesa, CA 92627</p>
        </div>
        <div class="col-md-12">
          <h5>Social</h5>
          <ul class="social-list">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-5 offset-md-2 offset-lg-2 offset-xl-2 head" data-aos="fade" data-aos-once="true">
      <div class="contact">
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</div>
</section>
