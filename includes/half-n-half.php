<?php //sidebar hero acf partial ?>

<?php
$heroPosition = get_field('hero_position');
$heroImage = (get_field('hero_image') != '' ? "background:url('".get_field('hero_image')."') no-repeat " : '');
$heroContent = get_field('hero_content');
$heroHeadline = get_field('hero_headline');
$switchPostion = (get_field('content_right_image_left') != 1 ? 'float:right;' : 'float:left;');
$contentBGcolor = get_field('content_bg_color');
$heroSize = (get_field('hero_size') != '' ? 'background-size:'.get_field('hero_size').';' : '');
?>
<section id="hero">
<?php if($switchPostion == 'float:right;'): ?>
  <div class="content-left-hero" style="left:0;background:<?php echo $contentBGcolor; ?>;">
<?php else: ?>
  <div class="content-left-hero" style="left:50%;background:<?php echo $contentBGcolor; ?>;">
<?php endif; ?>
    <div class="row">
      <div class="col-md-12">
        <?php echo $heroHeadline; ?>
      </div>
      <div class="col-lg-9 col-xl-9 col-md-12 hidden-xs-down">
        <?php echo $heroContent; ?>
      </div>
    </div>
  </div>
  <div class="image-right-hero" style="<?php echo $heroImage; ?><?php echo $heroPosition; ?>;<?php echo $switchPostion; ?><?php echo $heroSize; ?>"></div>
</section>
