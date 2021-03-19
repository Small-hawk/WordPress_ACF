<?php get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <!--first way -->
<!--                --><?php /*the_field('page_title'); */?>

                <!--Second way -->
                <?php
                    $title = get_field('page_title') ?? null;
                    echo $title;
                ?>


                <?php
                    $description = get_field('description') ?? null;
                    echo nl2br($description);
                ?>

                <?php
                    $other_description = get_field('other_description') ?? null;
                    echo $other_description;

                ?>

                <?php
                    $my_input = get_field('my_input') ?? null;
                    echo $my_input;
                ?>


    </div>
</section>

<?php get_footer();?>



