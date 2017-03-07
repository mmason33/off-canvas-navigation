<?php //check if the flexible content field has rows
	if( have_rows('builder') ):
		//loop through the data
		while (have_rows('builder')) : the_row();



			/************ Text Area ***************/

			if( get_row_layout() == 'text_area'):
				require('text-area.php');
			endif;


			/************ Slider in process of being ***************/

			if( get_row_layout() == 'image_slider'):
				require('image-slider.php');
			endif;

			/************ Half and Half ***************/

			if( get_row_layout() == 'half_and_half'):
				require('full-width-half-half.php');
			endif;

		endwhile;
	else :
		//no layouts found
	endif;
?>
