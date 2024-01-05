<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package selarl
 */

get_header();

$trait = get_queried_object();
?>

	<main class="tax-trait">

		<section class="tax-trait-top">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 tax-trait-ttl"><?php echo $trait->name; ?></h1>
					<div class="tax-trait-content"><?php echo $trait->description; ?></div>
				</div>
			</div>
		</section>

		<?php $team = get_field('ctrait-team', $trait); ?>
		<?php if ($team && count($team) > 0 ) : ?>
			<section class="tax-trait-team">
				<div class="container">
					<?php

					// The Query.
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'equipe',
						'orderby' => 'post__in',
						'post__in' => $team,
					);
					$the_query = new WP_Query( $args );

					// The Loop.
					if ( $the_query->have_posts() ) :
						?>
						<div class="tax-trait-team-wrap">
							<div class="row">
								<div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-between">
									<h2 class="h2 tax-trait-team-subttl">Notre equipe</h2>
									<div class="team-slider-pagination js-teamTaxSliderPagination">
										<div class="team-slider-pagination-counter js-teamTaxSliderCounter"></div>
										<div class="team-slider-pagination-arrows js-teamTaxSliderArrows"></div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-8">
									<div class="team-slider js-teamTaxSlider">
										<?php
										while ( $the_query->have_posts() ) :
											$the_query->the_post();
											?>
											<div class="team-slide">
												<div class="team-bl level1">
													<div class="team-bl-img">
														<?php the_post_thumbnail(); ?>
														<div class="team-bl-img-btn">
															<?php if (get_field('single_equipe-level')['value'] === 'main') : ?>
																<a href="<?php the_permalink(); ?>" class="btn"><?php the_field('single_equipe-btntxt'); ?></a>
															<?php else : ?>
																<div class="btn"><?php the_field('single_equipe-btntxt'); ?></div>
															<?php endif; ?>
														</div>
													</div>
													<div class="team-bl-info">
														<?php if ($ext = get_field('single_equipe-ext')) : ?>
															<a href="<?php echo $ext; ?>" target="_blank" class="team-bl-rdv">RDV</a>
														<?php endif; ?>

														<?php if (get_field('single_equipe-level')['value'] === 'main') : ?>
															<a href="<?php the_permalink(); ?>" class="team-bl-right">
																<span class="team-bl-ttl"><?php the_title(); ?></span>
																<span class="team-bl-job"><?php the_field('single_equipe-job'); ?></span>
															</a>
														<?php else : ?>
															<span class="team-bl-right">
																<span class="team-bl-ttl"><?php the_title(); ?></span>
																<span class="team-bl-job"><?php the_field('single_equipe-job'); ?></span>
															</span>
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
						</div>
					<?php
					endif;
					wp_reset_postdata();
					?>
				</div>
			</section>
		<?php endif; ?>


		<section class="tax-trait-posts">
			<div class="section-in section-lines">
				<div class="h2 tax-trait-posts-ttl">Les traitements selon vos besoins</div>

				<?php
				// The Query.
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'traitements',
					'orderby' => 'date',
					'order' => 'ASC',
					'traitement' => get_queried_object()->slug,
				);
				$the_query = new WP_Query( $args );

				// The Loop.
				if ( $the_query->have_posts() ) :
					?>
					<?php
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
					<div class="tax-trait-posts-bl">
						<div class="tax-trait-posts-bl-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="tax-trait-posts-bl-data">
							<div class="tax-trait-posts-bl-ttl"><?php the_title(); ?></div>
							<div class="tax-trait-posts-bl-txt"><?php the_excerpt(); ?></div>
							<div class="tax-trait-posts-bl-btn">
								<a href="<?php the_permalink(); ?>">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_2556_2449)">
											<path d="M1 9.99988H19" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M10 18.9999L19 9.99988L10 0.999878" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
										<defs>
											<clipPath id="clip0_2556_2449">
												<rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
											</clipPath>
										</defs>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<?php
					endwhile;
						?>
				<?php
				endif;
				wp_reset_postdata();
				?>

			</div>

			<?php $crs = get_field('main-crs', $trait); ?>
			<?php if ($crs && count($crs) > 0) : ?>
				<div class="tax-trait-crs">
					<div class="section-in">
						<div class="container">
							<h2 class="h2 tax-trait-crs-ttl"><?php the_field('main-crs-ttl', $trait); ?></h2>
						</div>
						<div class="tax-trait-crs-wrap">
							<div class="tax-trait-crs-back">
								<svg width="100%" viewBox="0 0 1792 576" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M491 1H81C36.8172 1 1 36.8172 1 81V495C1 539.183 36.8172 575 81 575H514.958C559.141 575 594.958 539.183 594.958 495V81C594.958 36.8172 630.775 1 674.958 1H1116C1160.18 1 1196 36.8172 1196 81V495C1196 539.183 1231.82 575 1276 575H1711C1755.18 575 1791 539.183 1791 495V81C1791 36.8172 1755.18 1 1711 1H1301" stroke="white" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="tax-trait-crs-row">
								<?php
								foreach ($crs as $block) :
									?>
									<div class="tax-trait-crs-bl">
										<div class="tax-trait-crs-bl-img">
											<?php if (isset($block['icon']) && $block['icon']['url'] != ''): ?>
												<?php $svg = file_get_contents($block['icon']['url']); ?>
												<?php if ($svg && $svg !== ''): ?>
													<?php echo $svg; ?>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<div class="tax-trait-crs-bl-ttl"><?php echo $block['ttl']; ?></div>
										<div class="tax-trait-crs-bl-txt"><?php echo $block['txt']; ?></div>
									</div>
								<?php
								endforeach;
								?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; unset($crs); ?>
		</section>


		<?php
			$clin = get_field('tax-trait-clin', $trait);
		?>
		<?php if ($clin && ($clin['ttl'] || $clin['txt'] || $clin['img'])) : ?>
			<section class="tax-trait-clin">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<?php if (isset($clin['img']) && $clin['img'] != '') : ?>
								<div class="tax-trait-clin-img">
									<img src="<?php echo $clin['img']['sizes']['trait-clin']; ?>" alt="<?php echo $clin['img']['name']; ?>">
								</div>
							<?php endif; ?>
						</div>
						<div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
							<h2 class="h2 tax-trait-clin-ttl"><?php echo $clin['ttl']; ?></h2>
							<div class="tax-trait-clin-txt"><?php echo $clin['txt']; ?></div>
							<?php if (isset($clin['link']) && $clin['link'] != '' && $clin['link']['link'] != '') : ?>
								<div class="tax-trait-clin-btn">
									<a href="<?php echo $clin['link']['link']; ?>" <?php echo ($clin['link']['blank']) ? 'target="_blank"' : ""; ?> class="btn">Découvrir tous les cas</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<?php unset($second_img); ?>
		<?php endif; unset($hide); ?>

		<div class="tax-trait-mainp">
			<?php $hide = get_field('main-faq-hid', 2); ?>
			<?php if (!$hide) : ?>
				<?php $faq_img = get_field('main-faq-img', 2); ?>
				<section class="main-faq" <?php echo ($faq_img) ? 'style="background-image: url(\'' . $faq_img['url'] . '\')";' : ''; ?>>
					<div class="main-faq-overlay"></div>
					<div class="section-in section-lines">
						<div class="main-faq-bl">
							<div class="container">
								<div class="row">
									<div class="col-12 col-lg-6">
										<h2 class="h2 main-faq-ttl"><?php the_field('main-faq-title', 2); ?></h2>
										<div class="main-faq-txt"><?php the_field('main-faq-txt', 2); ?></div>
									</div>
								</div>

								<?php $faq_link = get_field('main-faq-link', 2); ?>
								<?php if (isset($faq_link['link']) && $faq_link['link'] != '') : ?>
									<div class="main-faq-btn">
										<a href="<?php echo $faq_link['link']; ?>" <?php echo ($faq_link['blank']) ? 'target="_blank"' : ""; ?> class="btn">Les réponses ici !</a>
									</div>
								<?php endif; ?>
								<?php unset($faq_link); ?>
							</div>
						</div>
					</div>
				</section>
				<?php unset($second_img); ?>
			<?php endif; unset($hide); ?>

			<?php $hide = get_field('main-contacts-hid', 2); ?>
			<?php if (!$hide) : ?>
				<section class="main-contacts">
					<div class="section-in">
						<?php $contacts_blocks = get_field('main-contacts', 2); ?>
						<div class="main-contacts-wrap">
							<div class="main-contacts-back">
								<svg width="100%" viewBox="0 0 1792 576" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M491 1H81C36.8172 1 1 36.8172 1 81V495C1 539.183 36.8172 575 81 575H514.958C559.141 575 594.958 539.183 594.958 495V81C594.958 36.8172 630.775 1 674.958 1H1116C1160.18 1 1196 36.8172 1196 81V495C1196 539.183 1231.82 575 1276 575H1711C1755.18 575 1791 539.183 1791 495V81C1791 36.8172 1755.18 1 1711 1H1301" stroke="white" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="main-contacts-row">
								<div class="main-contacts-bl">
									<h2 class="h2 main-contacts-bl-ttl"><?php echo $contacts_blocks['first']['ttl']; ?></h2>
									<div class="main-contacts-bl-txt"><?php echo $contacts_blocks['first']['txt']; ?></div>
									<div class="main-contacts-bl-btn">
										<a href="#" class="btn js-modalOpen" data-modal="contacts">Contactez-nous</a>
									</div>
								</div>
								<div class="main-contacts-bl">
									<?php if (isset($contacts_blocks['second']['link_data']['link']) && $contacts_blocks['second']['link_data']['link'] != '') : ?>
										<div class="main-contacts-bl-btn">
											<a href="<?php echo $contacts_blocks['second']['link_data']['link']; ?>" <?php echo ($contacts_blocks['second']['link_data']['blank']) ? 'target="_blank"' : ""; ?> class="btn">Visite virtuelle de <br>notre cabinet</a>
										</div>
									<?php endif; ?>
								</div>
								<div class="main-contacts-bl">
									<div class="h2 main-contacts-bl-ttl"><?php echo $contacts_blocks['third']['ttl']; ?></div>
									<div class="main-contacts-bl-item">
										<?php if ($contacts_blocks['third']['addr'] && $contacts_blocks['third']['addr']['txt'] != '') : ?>
											<?php if ($contacts_blocks['third']['addr']['link'] == '') : ?>
												<span><?php echo $contacts_blocks['third']['addr']['txt']; ?></span>
											<?php else: ?>
												<a href="<?php echo $contacts_blocks['third']['addr']['link']; ?>" target="_blank"><?php echo $contacts_blocks['third']['addr']['txt']; ?></a>
											<?php endif; ?>
										<?php endif; ?>
									</div>
									<div class="main-contacts-bl-item">
										<a href="tel:<?php echo str_replace(['(', ')', ' ', '-', '_'], '', $contacts_blocks['third']['phn']); ?>"><?php echo $contacts_blocks['third']['phn']; ?></a>
									</div>
									<?php if (isset($contacts_blocks['third']['link_data']['link']) && $contacts_blocks['third']['link_data']['link'] != '') : ?>
										<div class="main-contacts-bl-btn">
											<a href="<?php echo $contacts_blocks['third']['link_data']['link']; ?>" <?php echo ($contacts_blocks['third']['link_data']['blank']) ? 'target="_blank"' : ""; ?> class="btn">Itinéraire</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php unset($contacts_blocks); ?>
					</div>
				</section>
			<?php endif; unset($hide); ?>

			<?php $hide = get_field('main-sched-hid', 2); ?>
			<?php if (!$hide) : ?>
				<section class="main-schedule">
					<div class="container">
						<h3 class="h3 main-schedule-ttl"><?php the_field('main-sched-title', 2); ?></h3>
						<div class="main-schedule-row">
							<?php $contacts_graf = get_field('main-sched', 2); ?>
							<?php foreach($contacts_graf as $graf) : ?>
								<div class="main-schedule-bl <?php echo (ucfirst($graf['day']['value']) === date('l')) ? 'current' : ''; ?>">
									<div class="main-schedule-bl-day"><?php echo $graf['day']['label']; ?></div>
									<div class="main-schedule-bl-time"><?php echo $graf['from']; ?><?php echo ($graf['from'] != '' && $graf['to'] != '') ? ' - ' : ''; ?><?php echo $graf['to']; ?></div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
			<?php endif; unset($hide); ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
