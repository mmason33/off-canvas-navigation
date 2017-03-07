<?php

$textBox = get_sub_field('text_box');
$fullWidth = (get_sub_field('full_width') == 1 ? '-fluid' : '');
$bgColor = get_sub_field('bg_color');
$bgImage = get_sub_field('bg_image');
$bgRepeat = (get_sub_field('bg_repeat') == 1 ? 'repeat' : 'no-repeat');
$bgPosition = get_sub_field('bg_position');
$sideBar = get_sub_field('sidebar_checkbox');
$padding = (get_sub_field('padding') == 1 ? 'pad-150' : '');
$textCenter = (get_sub_field('text_center') == 1 ? 'text-center' : '');

?>
<section class="text-box-wrap <?php echo $padding; ?>"
<?php

	if(!empty($bgImage)){

?>
style="background: url('<?php echo $bgImage; ?>') <?php echo $bgRepeat;?>;background-position:<?php echo $bgPosition;?>;background-size:cover;">
<?php
}else{
?>
	style="background-color:<?php echo $bgColor; ?>;">
<?php
}
?>
<div class="container<?php echo $fullWidth; ?>">
	<section id="text-box">
<?php
			if($sideBar === true):
?>
			<div class="row">
				<div class="col-md-8 <?php echo $textCenter; ?>">
					<?php echo $textBox; ?>
				</div>
				<div class="col-md-4 <?php echo $textCenter; ?>">
					<?php get_template_part('templates/sidebar');?>
				</div>
			</div>
<?php
			else:
?>
			<div class="row">
				<div class="col-md-12 <?php echo $textCenter; ?>">
					<?php echo $textBox; ?>
				</div>
			</div>
<?php endif; ?>


		</section><!--#textbox-->
	</div><!--container-->
</section><!--text-box-wrap-->
