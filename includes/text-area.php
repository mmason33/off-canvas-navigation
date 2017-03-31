<?php
// TEXT-BOX/AREA ACF ASSET - conditionals are done in the variable declarations
$textBox = get_sub_field('text_box');
$fullWidth = (get_sub_field('full_width') == 1 ? '-fluid wrap' : '');
$bgColor = (get_sub_field('bg_color') != '' && get_sub_field('bg_image') == '' ? 'style="background-color:'.get_sub_field('bg_color').';"' : '');
$bgImage = (get_sub_field('bg_image') != '' ? 'style="background:url('.get_sub_field('bg_image').') '.get_sub_field('bg_position').';background-size:cover;"' : '');
$bgRepeat = (get_sub_field('bg_repeat') == true ? 'repeat' : 'no-repeat');
$bgPosition = get_sub_field('bg_position');
$textCenter = (get_sub_field('text_center') == 1 ? 'text-center' : '');
$padding = get_sub_field('padding');
?>
<section class="text-box-wrap <?php echo $padding; ?>" <?php echo $bgImage; ?><?php echo $bgColor; ?>>


<div class="container<?php echo $fullWidth; ?>">
	<section id="text-box">
			<div class="row">
				<div class="col-md-12 <?php echo $textCenter; ?>">
					<?php echo $textBox; ?>
				</div>
			</div>
		</section><!--#textbox-->
	</div><!--container-->
</section><!--text-box-wrap-->
