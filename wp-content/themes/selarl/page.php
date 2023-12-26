<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package selarl
 */

get_header();
?>

	<main class="single_page">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl"><?php the_title(); ?></h1>
					<div class="breadcrumbs">
						<a href="<?php echo get_home_url(); ?>" class="crumb home">Accueil</a>
						<span class="crumb last_crumb"><?php the_title(); ?></span>
					</div>
				</div>
			</div>
		</section>

		<section class="single_page-wrap">
			<div class="container">
				<div class="content-block single_page-content"><?php the_content(); ?></div>
			</div>
		</section>

		<div class="container">
			<div class="single_page-ret">
				<a href="javascript:history.back()" class="btn">Retour</a>
			</div>
		</div>

	</main>

<?php
get_footer();
