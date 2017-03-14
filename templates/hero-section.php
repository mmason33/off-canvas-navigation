<?php

$HeroImage = get_field('hero_image');
$CTAcontent = get_field('cta_content');
$bgColor = (get_field('bg_color') != '' ? '"background-color:'.get_field('bg_color').';' : '');
$bgRepeat = (get_field('bg_repeat') == 1 ? 'repeat;' : 'no-repeat;');
$bgPositionX = get_field('bg_position_x');
$bgPositionY = get_field('bg_position_y');
$parallax = get_field('parallax');
$fullWidth = (get_field('full_width') != 0 ? '-fluid' : '');
$centerContent = (get_field('center_contnent') != 0 ? ' justify-content-center' : '' );
$heroOverlay = (get_field('hero_overlay') != 0 ? '<div class="hero-overlay"></div>' : '');

?>
                  <?php
                  // If hero image is not empty, echo $HeroImage, $bgRepeat, $bgColor
                  // Else echo background color
                  if(!empty($HeroImage) && $parallax === false){
                  ?>
                  <section id="hero" style="background: url('<?php echo $HeroImage; ?>') <?php echo $bgRepeat; ?>;background-position:<?php echo $bgPositionX; ?> <?php echo $bgPositionY; ?>;background-size:cover;">
                  <?php echo $heroOverlay; ?>
                  <?php
                  //Checkbox conditional for parallax scrolling
                  }elseif($parallax === true){
                        echo '<section id="hero" data-parallax="scroll" data-image-src="'.$HeroImage.'" data-positionX="'.$bgPositionX.'" data-positionY="'.$bgPositionY.'">';
                        echo $heroOverlay;
                  //If first two params are false, echo background color - default == white
                  }else{
                    echo $bgColor.'>';
                  }

                  if(!empty($HeroImage)):
              ?>
                  <section id="cta-content">
                    <div class="container<?php echo $fullWidth; ?>">
                        <div class="row <?php echo $centerContent; ?>">
                          <div class="col-xs-12 head">
                          <?php echo $CTAcontent; ?>
                          </div>
                        </div>
                    </div><!--end container-->
                  </section><!--end cta-content-->
                </section><!--end hero-->
              <?php endif; ?>
<?php
 // dynamic_sidebar('sidebar-primary');
?>
</div>
<!--</div>-->
