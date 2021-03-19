<?php

/*Template Name: Content Page*/

get_header();

$image = get_field('feature_image') ?? null;
$picture = $image['sizes']['large'];

$file = get_field('upload_a_file') ?? null;
$filename = $file['filename'] ?? null;
$fileurl = $file['url']?? null;


$embeded = get_field('embed_a_video') ?? null;


?>

<section class="page">
    <div class="container">



        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

<!--        --><?php //var_dump($file);?>

        <img src="<?php echo $picture?>" class="img-fluid">

        <br><br><br><br>
        <a href="<?php echo $fileurl;?>"><?php echo $filename;?></a>

        <?php
            echo $embeded;
        ?>

    </div>
</section>

<?php get_footer();?>
