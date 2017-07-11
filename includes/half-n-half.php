<?php //Hero section for sidebar pages and other templates ** Not part of the builder ?>

<?php
$heroPosition = get_field('hero_position');
$heroImage = (get_field('hero_image') != '' ? "background:url('".get_field('hero_image')."') no-repeat " : '');
$heroContent = get_field('hero_content');
$contentBGcolor = get_field('content_bg_color');
$heroSize = (get_field('hero_size') != '' ? 'background-size:'.get_field('hero_size').';' : '');

?>
<?php
	if($heroImage):
?>
<section id="hero" 

<?php if(is_page_template('page-with-sidebar.php') || is_page_template('leadership.php') || is_page_template('our-team.php') || is_page_template('template-custom.php') || is_page_template('facilities.php')): echo 'class="hero-sidebar"'; endif; ?>

style="<?php echo $heroImage; ?><?php echo $heroPosition; ?>;<?php echo $heroSize; ?>">

<div class="container-fluid wrap">
    <div class="row content-left head-sidebar" data-aos="fade-up" data-aos-once="true">
      <div class="col-lg-12 col-xl-12 col-md-12">

        <?php echo $heroContent; ?>

      </div>
    </div>
  </div>

  <div class="hero-overlay-gradient" style="background:/*linear-gradient(to right,*/ <?php //echo $contentBGcolor; ?>rgba(0,32,66,.65)/*, transparent)*/;"></div>
</section>
<? endif; ?>