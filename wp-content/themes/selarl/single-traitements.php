<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
						<a href="<?php echo get_home_url(); ?>/#traitements" class="crumb">Traitements</a>
						<?php $terms = wp_get_post_terms( $post->ID, array( 'traitement' ) ); ?>
						<?php if (isset($terms[0])) : ?>
							<a href="<?php echo get_term_link($terms[0]); ?>" class="crumb"><?php echo $terms[0]->name; ?></a>
						<?php endif; ?>
						<span class="crumb last_crumb"><?php the_title(); ?></span>
					</div>
				</div>
			</div>
		</section>

		<section class="single_page-wrap">
			<div class="container">
				<?php /* ?><div class="single_page-img"><?php the_post_thumbnail(); ?></div><?php */ ?>
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
