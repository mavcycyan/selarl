<?php
/**
 * Template Name: Cabinet
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package selarl
 */

get_header();
?>

	<main class="page-cabin">

		<section class="top_slider_section">
			<?php $slider = get_field('page-cabin-slider'); ?>
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
						<div class="content-block top_slider_section-txt"><?php the_content(); ?></div>
					</div>

					<div class="top_slider_section-slider-pagination js-tssSliderPagination" data-all="<?php echo count($slider); ?>">
						<div class="top_slider_section-slider-pagination-counter js-tssSliderCounter"></div>
						<div class="top_slider_section-slider-pagination-arrows js-tssSliderArrows"></div>
					</div>
				</div>
			</div>
		</section>

		<?php $conf = get_field('page-cabin-conf'); ?>
		<?php if ($conf) : ?>
			<section class="page-cabin-conf">
				<div class="section-in section-lines">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-7">
								<div class="page-cabin-conf-img-wrap">
									<div class="page-cabin-conf-img">
										<img src="<?php echo $conf['img']['sizes']['cabin-conf'] ?>" alt="<?php echo $conf['ttl'] ?>">
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 offset-lg-1">
								<div class="page-cabin-conf-bl">
									<h2 class="h2 page-cabin-conf-ttl"><?php echo $conf['ttl'] ?></h2>
									<div class="content-block page-cabin-conf-txt"><?php echo $conf['txt'] ?></div>
									<?php if ($conf['link_data']['link'] != '') : ?>
										<div class="page-cabin-conf-btn">
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

		<?php $gal = get_field('page-cabin-gal'); ?>
		<?php if ($gal && count($gal) > 0) : ?>
			<section id="technologies" class="page-cabin-gal">
				<div class="section-in section-lines">
					<div class="container">
						<h2 class="h2 page-cabin-gal-ttl">Technologies du cabinet</h2>
					</div>
					<div class="page-cabin-gal-row">
						<?php $i = 0; ?>
						<?php $col = 1; ?>
						<?php foreach($gal as $item) : ?>
							<div class="col-12 col-md-6 page-cabin-gal-col js-pageCabinGalCol" data-col="<?php echo $col; ?>">
								<div class="page-cabin-gal-bl" data-aos="fade-up" data-aos-duration="1000" <?php echo ($i != 0) ? 'data-aos-delay="200"' : ''; ?>>
									<div class="page-cabin-gal-bl-img" <?php echo ($item['img']['url']) ? 'style="background-image: url(\'' . $item['img']['url'] . '\');"' : ''; ?>>
										<div class="page-cabin-gal-bl-txt d-none d-md-block">
											<div class="page-cabin-gal-bl-txt-in-wrap">
												<div class="page-cabin-gal-bl-txt-in">
													<?php echo $item['txt'] ?>
												</div>
											</div>
										</div>
									</div>
									<div class="page-cabin-gal-bl-ttl"><?php echo $item['ttl'] ?></div>
									<div class="page-cabin-gal-bl-txt d-block d-md-none">
										<?php echo $item['txt'] ?>
									</div>
								</div>
							</div>
							<?php $i = ($i == 0) ? $i+1 : 0; ?>
							<?php $col++; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<div class="container">
			<div class="page-cabin-ret">
				<a href="javascript:history.back()" class="btn">Retour</a>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
