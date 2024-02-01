<?php
/**
 * The template for displaying archive pages
 * Template Name: Equipe
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package selarl
 */

get_header();
?>

	<main class="page-team">

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

		<section class="page-team-section">
			<div class="section-in section-lines">
				<div class="container">
					<?php
					// The Query.
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'equipe',
						'orderby' => 'date',
						'order' => 'ASC',
						'meta_query' => array(
							'relation'      => 'AND',
							array(
								'key'       => 'single_equipe-level',
								'value'     => 'main',
								'compare'   => '=',
							),
						),
					);
					$the_query = new WP_Query( $args );

					// The Loop.
					if ( $the_query->have_posts() ) :
						?>
						<div class="page-team-wrap">
							<h2 class="h2 page-team-subttl">Fondateur du GAD</h2>
							<div class="team-fond">
								<?php
								$index = 1;
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
									<div class="team-bl level1">
										<div class="team-bl-img">
											<?php the_post_thumbnail(); ?>
											<div class="team-bl-img-btn">
												<a href="<?php the_permalink(); ?>" class="btn"><?php the_field('single_equipe-btntxt'); ?></a>
											</div>
										</div>
										<div class="team-bl-info">
											<?php if ($ext = get_field('single_equipe-ext')) : ?>
												<a href="<?php echo $ext; ?>" target="_blank" class="team-bl-rdv">RDV</a>
											<?php endif; ?>
											<a href="<?php the_permalink(); ?>" class="team-bl-right">
												<span class="team-bl-ttl"><?php the_title(); ?></span>
												<span class="team-bl-job"><?php the_field('single_equipe-job'); ?></span>
											</a>
										</div>
									</div>
									<?php
									$index++;
								endwhile;
								?>
							</div>
						</div>
					<?php
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<section class="page-team-section">
			<div class="section-in section-lines">
				<div class="container">
					<?php
					// The Query.
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'equipe',
						'meta_key' => 'single_equipe-pos',
						'orderby' => 'meta_value_num',
						'meta_type' => 'NUMBER',
						'order' => 'ASC',
						'meta_query' => array(
							'relation'      => 'AND',
							array(
								'key'       => 'single_equipe-level',
								'value'     => 'level1',
								'compare'   => '=',
							),
						),
					);
					$the_query = new WP_Query( $args );

					// The Loop.
					if ( $the_query->have_posts() ) :
						?>
						<div class="page-team-wrap">
							<h2 class="h2 page-team-subttl">Chirurgien-dentiste</h2>
							<div class="team-slider js-teamSlider" data-ii="ii-1">
								<?php
								$index = 1;
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
									<div class="team-slide">
										<div class="team-bl level1">
											<div class="team-bl-img">
												<?php the_post_thumbnail(); ?>
												<div class="team-bl-img-btn">
													<div class="btn"><?php the_field('single_equipe-btntxt'); ?></div>
												</div>
											</div>
											<div class="team-bl-info">
												<?php if ($ext = get_field('single_equipe-ext')) : ?>
													<a href="<?php echo $ext; ?>" target="_blank" class="team-bl-rdv">RDV</a>
												<?php endif; ?>
												<div class="team-bl-right">
													<span class="team-bl-ttl"><?php the_title(); ?></span>
													<span class="team-bl-job"><?php the_field('single_equipe-job'); ?></span>
												</div>
											</div>
										</div>
									</div>
									<?php
									$index++;
								endwhile;
								?>
							</div>
							<div class="team-slider-pagination js-teamSliderPagination" data-all="<?php echo $the_query->post_count; ?>">
								<div class="team-slider-pagination-counter js-teamSliderCounter"></div>
								<div class="team-slider-pagination-arrows js-teamSliderArrows"></div>
							</div>
						</div>
					<?php
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<section class="page-team-section">
			<div class="section-in section-lines">
				<div class="container">
					<?php
					// The Query.
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'equipe',
						'meta_key' => 'single_equipe-pos',
						'orderby' => 'meta_value_num',
						'meta_type' => 'NUMBER',
						'order' => 'ASC',
						'meta_query' => array(
							'relation'      => 'AND',
							array(
								'key'       => 'single_equipe-level',
								'value'     => 'level2',
								'compare'   => '=',
							),
						),
					);
					$the_query = new WP_Query( $args );

					// The Loop.
					if ( $the_query->have_posts() ) :
						?>
						<div class="page-team-wrap">
							<h2 class="h2 page-team-subttl">Assistantes cliniques</h2>
							<div class="team-slider js-teamSlider" data-ii="ii-2">
								<?php
								$index = 1;
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
									<div class="team-slide">
										<div class="team-bl">
											<div class="team-bl-img">
												<?php the_post_thumbnail(); ?>
												<div class="team-bl-img-btn"></div>
											</div>
											<div class="team-bl-ttl"><?php the_title(); ?></div>
											<div class="team-bl-job"><?php the_field('single_equipe-job'); ?></div>
										</div>
									</div>
									<?php
									$index++;
								endwhile;
								?>
							</div>
							<div class="team-slider-pagination js-teamSliderPagination">
								<div class="team-slider-pagination-counter js-teamSliderCounter" data-all="<?php echo $the_query->post_count; ?>"></div>
								<div class="team-slider-pagination-arrows js-teamSliderArrows"></div>
							</div>
						</div>
					<?php
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<section class="page-team-section">
			<div class="section-in section-lines">
				<div class="container">
					<?php
					// The Query.
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'equipe',
						'meta_key' => 'single_equipe-pos',
						'orderby' => 'meta_value_num',
						'meta_type' => 'NUMBER',
						'order' => 'ASC',
						'meta_query' => array(
							'relation'      => 'AND',
							array(
								'key'       => 'single_equipe-level',
								'value'     => 'level3',
								'compare'   => '=',
							),
						),
					);
					$the_query = new WP_Query( $args );

					// The Loop.
					if ( $the_query->have_posts() ) :
						?>
						<div class="page-team-wrap">
							<h2 class="h2 page-team-subttl">Pôle administratif</h2>
							<div class="team-slider js-teamSlider" data-ii="ii-3">
								<?php
								$index = 1;
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
									<div class="team-slide">
										<div class="team-bl">
											<div class="team-bl-img">
												<?php the_post_thumbnail(); ?>
												<div class="team-bl-img-btn"></div>
											</div>
											<div class="team-bl-ttl"><?php the_title(); ?></div>
											<div class="team-bl-job"><?php the_field('single_equipe-job'); ?></div>
										</div>
									</div>
									<?php
									$index++;
								endwhile;
								?>
							</div>
							<div class="team-slider-pagination js-teamSliderPagination">
								<div class="team-slider-pagination-counter js-teamSliderCounter" data-all="<?php echo $the_query->post_count; ?>"></div>
								<div class="team-slider-pagination-arrows js-teamSliderArrows"></div>
							</div>
						</div>
					<?php
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="page-equipe-ret">
				<a href="javascript:history.back()" class="btn">Retour</a>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
