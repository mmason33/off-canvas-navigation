<?php //sidebar hero acf partial ?>

<?php

$heroImage = get_field('hero_image');
$heroContent = get_field('hero_content');

?>
<section id="hero">
  <div class="content-left-hero">
    <div class="row">
      <div class="col-md-9">
        <?php echo $heroContent; ?>
      </div>
    </div>
  </div>
  <div class="image-right-hero" style="background:url('/wp-content/uploads/2017/03/pexels-photo-89820-1.jpg') no-repeat center center;background-size:cover;"></div>

</section>
