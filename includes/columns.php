<?php
$columns = get_sub_field('columns');
switch($columns){
    case '1': $num = '12'; break;
    case '2': $num = '6'; break;
    case '3': $num = '4'; break;
    case '4': $num = '3'; break;
    case '5': $num = '2'; break;
    case '6': $num = '2'; break;
}
$columnRows = get_sub_field('column_content');
$rowCount = count($columnRows);
$columnTitle = get_sub_field('column_title');
$bgImage = (get_sub_field('bg_image') != '' ? 'style="background:url('.get_sub_field('bg_image').') no-repeat center center;background-size:cover;"' : '');
$bgColor = (get_sub_field('bg_color') != '' && $bgImage == '' ? ' style="background-color:'.get_sub_field('bg_color').'"' : '');
$padding = get_sub_field('padding_class');
$fullWidth = (get_sub_field('full_width') != '' ? '-fluid' : '');
$justifyContentCenter = (get_sub_field('justify_content_center') != '' ? ' justify-content-center' : '');
?>
<section class="columns-section <?php echo $padding; ?>"<?php echo $bgImage; ?><?php echo $bgColor; ?>>
  <div class="container<?php echo $fullWidth; ?>">
    <?php if(!empty($columnTitle)){ ?>
      <div class="row">
        <div class="col-md-12 text-center column-title">
          <h2><?php echo $columnTitle; ?></h2>
        </div>
      </div>
    <?php }
  $i = 1;
  if(have_rows('column_content') ):
    while( have_rows('column_content') ) : the_row();
      $columnIcon = (get_sub_field('column_icon') != '' ? '<i class="fa '.get_sub_field('column_icon').' fa-4x column-icon"></i>' : '');
      $columnHeadline = (get_sub_field('column_headline') != '' ? '<h2 class="column-headline">'.get_sub_field('column_headline').'</h2>' : '');
      $columnBody = (get_sub_field('column_body') != '' ? '<p class="column-body">'.get_sub_field('column_body').'</p>' : '');
      $columnImage = (get_sub_field('column_image') != '' ? '<div class="column-image" style="background:url('.get_sub_field('column_image').') no-repeat center center; background-size:cover;"></div>' : '');
      if($i == 1):
        echo '<div class="row'.$justifyContentCenter.'">';
      endif;
?>
<div class="col-sm-<?php echo $num; ?> text-center column-content">
  <?php echo $columnImage; ?>
  <?php echo $columnIcon; ?>
  <?php echo $columnHeadline; ?>
  <?php echo $columnBody; ?>
</div>
<?php
  if($i === $rowCount){
        echo '</div><!--end row-->';
      echo '</div><!--end container-->';
    echo '</section><!--end columns section-->';
  } $i ++;
  endwhile;
endif;
?>
