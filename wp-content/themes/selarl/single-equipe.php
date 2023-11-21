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

	<main class="single-team">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl"><?php the_title(); ?></h1>
					<div class="breadcrumbs">
						<a href="<?php echo get_home_url(); ?>" class="crumb home">Accueil</a>
						<a href="<?php echo get_home_url(); ?>/equipe" class="crumb">Notre équipe</a>
						<span class="crumb last_crumb">Notre équipe</span>
					</div>
				</div>
			</div>
		</section>

		<section class="single-team-data first">
			<div class="container">
				<div class="single-team-data-row">
					<div class="single-team-data-row-left">
						<?php the_post_thumbnail('equipe_in'); ?>
					</div>
					<div class="content-block single-team-data-row-right"><?php the_content(); ?></div>
				</div>
			</div>
		</section>

		<?php $dipl = get_field('single_equipe-dipl-txt'); ?>
		<?php if ($dipl != '') : ?>
			<section class="single-team-data second">
				<div class="container">
					<div class="single-team-data-row">
						<div class="content-block single-team-data-row-left">
							<?php echo $dipl; ?>
						</div>
						<div class="single-team-data-row-right">
							<?php if ($dipl_img = get_field('single_equipe-dipl-img')) : ?>
								<img src="<?php echo $dipl_img['url']; ?>" alt="<?php echo $dipl_img['name']; ?>">
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php $crs = get_field('single_equipe-crs-txt'); ?>
		<?php if ($crs != '') : ?>
			<section class="single-team-data third">
				<div class="container">
					<div class="single-team-data-row">
						<div class="content-block single-team-data-row-left">
							<?php if ($crs_img = get_field('single_equipe-crs-img')) : ?>
								<img src="<?php echo $crs_img['url']; ?>" alt="<?php echo $crs_img['name']; ?>">
							<?php endif; ?>
						</div>
						<div class="content-block single-team-data-row-right">
							<?php echo $crs; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>


		<?php $info = get_field('single_equipe-info-txt'); ?>
		<?php if ($info != '') : ?>
			<section class="content-block single-team-info">
				<div class="section-in section-lines">
					<div class="container">
						<div class="single-team-info-row">
							<div class="content-block single-team-info-row-left">
								<?php echo $info; ?>
							</div>
							<div class="single-team-info-row-right">
								<?php if ($info_img = get_field('single_equipe-info-img')) : ?>
									<img src="<?php echo $info_img['url']; ?>" alt="<?php echo $info_img['name']; ?>">
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<div class="container">
			<div class="single-team-ret">
				<a href="<?php echo get_home_url(); ?>/equipe/" class="btn">Retour</a>
			</div>
		</div>

	</main>

<?php
get_footer();
