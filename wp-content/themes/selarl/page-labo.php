<?php
/**
 * Template Name: Laboratoire
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package selarl
 */

get_header();
?>

	<main class="page-labo">

		<section class="top_slider_section">
			<?php $slider = get_field('page-labo-slider'); ?>
			<?php if ($slider && count($slider) > 0) : ?>
				<div class="top_slider_section-slider js-tssSlider">
					<?php foreach ($slider as $slide) : ?>
						<div class="top_slider_section-slide">
							<div class="top_slider_section-slide-img" style="background-image: url('<?php echo $slide['img']['url']; ?>');"></div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<div class="top_slider_section-overlay"></div>
			<div class="section-in section-lines">
				<div class="container">
					<div class="top_slider_section-bl">
						<h1 class="h1 top_slider_section-ttl"><?php the_title(); ?></h1>
						<div class="top_slider_section-txt"><?php the_content(); ?></div>
					</div>

					<div class="top_slider_section-slider-pagination js-tssSliderPagination" data-all="<?php echo count($slider); ?>">
						<div class="top_slider_section-slider-pagination-counter js-tssSliderCounter"></div>
						<div class="top_slider_section-slider-pagination-arrows js-tssSliderArrows"></div>
					</div>
				</div>
			</div>
		</section>

		<?php $conf = get_field('page-labo-info'); ?>
		<?php if ($conf) : ?>
			<section class="page-labo-info">
				<div class="section-in section-lines">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-5">
								<div class="page-labo-info-img-wrap">
									<div class="page-labo-info-img">
										<img src="<?php echo $conf['img']['sizes']['labo-info'] ?>" alt="<?php echo $conf['ttl'] ?>">
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-6 offset-lg-1">
								<div class="page-labo-info-bl">
									<h2 class="h2 page-labo-info-ttl"><?php echo $conf['ttl'] ?></h2>
									<div class="page-labo-info-txt"><?php echo $conf['txt'] ?></div>
									<?php if ($conf['link_data']['link'] != '') : ?>
										<div class="page-labo-info-btn">
											<a href="<?php echo $conf['link_data']['link']; ?>" class="btn" <?php echo ($conf['link_data']['blank']) ? 'target="_blank"' : ""; ?>>En savoir plus</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php $clin = get_field('page-labo-clin'); ?>
		<?php if ($clin && count($clin) > 0) : ?>
			<?php
		
			// The Query.
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'cas-cliniques',
				'orderby' => 'date',
				'order' => 'ASC',
				'post__in' => $clin,
			);
			$the_query = new WP_Query( $args );
		
			// The Loop.
			if ( $the_query->have_posts() ) :
				?>
				<section class="page-labo-clin">
					<div class="section-in section-lines">
						<div class="container">
							<h2 class="h2 page-labo-clin-ttl">Cas cliniques du laboratoire</h2>
							<div class="row">
								<?php
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
									<div class="col-12 col-md-4">
										<div class="page-labo-clin-bl">
											<div class="page-labo-clin-bl-ttl">
												<?php
	//												$clin_tax = get_the_terms($post->ID, 'clinique');
	//
	//												echo ($clin_tax && count($clin_tax) > 0) ? $clin_tax[0]->name : '';
												the_title();
												?>
											</div>

											<div class="page-labo-clin-bl-imgs">
												<?php $imgs = get_field('single_clin-imgs'); ?>
												<?php if ($imgs && isset($imgs['before'])) : ?>
													<div class="page-labo-clin-bl-img">
														<img src="<?php echo $imgs['before']['sizes']['labo-clin'] ?>" alt="<?php the_title(); ?>">
														<span>Avant</span>
													</div>
												<?php endif; ?>
												<?php if ($imgs && isset($imgs['after'])) : ?>
													<div class="page-labo-clin-bl-img">
														<img src="<?php echo $imgs['after']['sizes']['labo-clin'] ?>" alt="<?php the_title(); ?>">
														<span>Après</span>
													</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php
								endwhile;
								?>
							</div>
						</div>
					</div>
				</section>
			<?php
			endif;
			wp_reset_postdata();
			?>
		<?php endif; ?>

		<div class="container">
			<div class="page-labo-ret">
				<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
