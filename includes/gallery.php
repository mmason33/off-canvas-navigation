<?php
//GALLERY FOR FACILITIES Template
$images = get_field('gallery');
?>
<?php   if ( $images ): ?>
            <ul id="imageGallery" class="gallery text-center">

        <?php foreach ( $images as $image ) :?>
                    <a href="<?php echo $image['url']; ?>">
                      <img class="gallery-item" src="<?php echo $image['url']; ?>" data-aos="zoom-in" data-aos-once="true">
                    </a>
<?php
              endforeach;
        endif;
?>
</ul>
