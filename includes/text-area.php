<?php
// TEXT-BOX/AREA ACF ASSET - conditionals are done in the variable declarations
$textBox = get_sub_field('text_box');
$bgColor = (get_sub_field('bg_color') != '' && get_sub_field('bg_image') == '' ? 'style="background-color:'.get_sub_field('bg_color').';"' : '');
$bgImage = (get_sub_field('bg_image') != '' ? 'style="background:url('.get_sub_field('bg_image').') no-repeat '.get_sub_field('bg_position').';background-size:cover;"' : '');
$bgPosition = get_sub_field('bg_position');
$textCenter = (get_sub_field('text_center') == 1 ? 'text-center' : '');
$padding = get_sub_field('padding');
$aos = (get_sub_field('aos_animate') == 1 ? ' data-aos="fade" data-aos-once="true"' : '' );
?>
<section class="text-box-wrap <?php echo $padding; ?>" <?php echo $bgImage; ?><?php echo $bgColor; ?>>

<div class="container">
	<section id="text-box"<?php echo $aos; ?>>
			<div class="row">
				<div class="col-md-12 <?php echo $textCenter; ?>">
					<?php echo $textBox; ?>
				</div>
			</div>
		</section><!--#textbox-->
	</div><!--container-->
</section><!--text-box-wrap-->
