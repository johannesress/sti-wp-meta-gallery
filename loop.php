
<!-- USER THIS INSIDE THE LOOP TO DISPLAY THE NECESSAY HTML FOR THE GALLERY -->
<?php 

global $gallery_mb;
$gallery = $gallery_mb->the_meta();
$slides = $gallery['slides'];

if(isset($slides[0])) :

    foreach ($slides as $index => $slide) {
        $id = fjarrett_get_attachment_id_by_url( $slide['slide'] );
        $url = wp_get_attachment_image_src( $id, 'slider-image' );
        $slides[$index]['thumb'] = $url[0];
    }

?>

<div class="full-size-slider" id="full-slider">
    <?php foreach($slides as $slide) : ?>
        <div class="slider-page" style="background-image: url(<?= $slide['thumb'] ?>);">
            <div class="overlay">
                <h3><?= $slide['title'] ?></h3>
                <p><?= $slide['text'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>