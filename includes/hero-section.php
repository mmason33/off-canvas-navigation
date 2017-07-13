<?php
//HERO CTA SECTION FOR ACF ASSET
$HeroImage = get_field('hero_image');
$CTAcontent = get_field('cta_content');
// $bgColor = (get_field('bg_color') != '' ? '"background-color:'.get_field('bg_color').';' : '');
$bgRepeat = (get_field('bg_repeat') == 1 ? 'repeat;' : 'no-repeat;');
$bgPositionX = get_field('bg_position_x');
$bgPositionY = get_field('bg_position_y');
$parallax = get_field('parallax');
$fullWidth = (get_field('full_width') != 0 ? '-fluid wrap' : '');
$centerContent = (get_field('center_content') != 0 ? ' justify-content-center' : '' );
$contentRelative = (get_field('cta_content_relative') == 1 ? 'style="position:relative;top:50%;left:0;"' : '' );
?>

<?php // Mutiple conditions for $heroImage and $parallax - Hero CTA Section markup ?>

<?php if(!empty($HeroImage) && $parallax === false): ?>
        <section id="hero" style="background: url('<?php echo $HeroImage; ?>') <?php echo $bgRepeat; ?>;background-position:<?php echo $bgPositionX; ?> <?php echo $bgPositionY; ?>;background-size:cover;">
<?php elseif($parallax === true):
        echo '<section id="hero" data-parallax="scroll" data-image-src="'.$HeroImage.'" data-positionX="'.$bgPositionX.'" data-positionY="'.$bgPositionY.'">'; ?>
<?php endif; ?>

    <?php if(!empty($HeroImage)): ?>
            <section id="cta-content"<?php echo $contentRelative; ?>>
                <?php if( is_page_template('page-with-sidebar.php') ): ?>
                        <?php //if true - use wrap container fluid - see global.scss line 88 ?>
                        <div class="wrap container-fluid">
                <?php else: ?>
                        <div class="container<?php echo $fullWidth; ?>">
                <?php endif; ?>

                          <div class="row<?php echo $centerContent; ?>">
                            <?php if($contentRelative == true):?>
                                <div class="col-md-12">
                            <?php else: ?>
                                <div class="col-md-12 head">
                            <?php endif; ?>
                            <?php echo $CTAcontent; ?>
                                </div><!--end col-md-12-->
                          </div><!-- end row -->
                        </div><!--end container-->
              </section><!--end cta-content-->
                <div class="hero-overlay-gradient" style="background:/*linear-gradient(to right,*/ <?php //echo $contentBGcolor; ?>rgba(0,32,66,.4)/*, transparent)*/;"></div>
          </section><!--end hero-->
    <?php endif; ?>
