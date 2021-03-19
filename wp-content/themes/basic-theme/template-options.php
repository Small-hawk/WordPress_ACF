<?php
/*Template Name: Options*/

$colour = get_field('choose_your_colour');
$choise = get_field('choose_a_flavour') ?? null;
$where = get_field('where_do_you_want_to_go') ?? null;
$question = get_field('are_you_learning_anything_') ?? null;

get_header();?>


	<section class="page">
		<div class="container">


			<h1><?php the_title(); ?></h1>


<!--			--><?php //var_dump($colour);?>
			<?php
				echo implode($choise, ',');
//				var_dump($choise);
			?>
			<?php
				echo $where;
			?>

			<?php
				echo $question; /* 1 = true, 0 = False*/
			?>


		</div>
	</section>

<?php get_footer(); ?>