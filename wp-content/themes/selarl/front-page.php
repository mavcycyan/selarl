<?php
/**
 * The template for displaying front page
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

	<main class="main">

		<?php $hide = get_field('main-first-hid'); ?>
		<?php if (!$hide) : ?>
		<section class="main-first">
			<?php $first_vid = get_field('main-first-video'); ?>
			<?php if ($first_vid) : ?>
				<div class="main-first-video">
					<video
						width="100%" autoplay loop muted>
						<source
							src="<?php echo $first_vid['url']; ?>"
							type="video/mp4" />
					</video>
				</div>
			<?php endif; ?>
			<?php unset($first_vid); ?>
			<div class="main-first-logo">
				<svg width="289" height="132" viewBox="0 0 289 132" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M268.138 101.511H208.333C196.726 101.511 187.48 92.0679 187.48 80.6578V20.853C187.48 13.5741 181.578 7.86905 174.496 7.86905H114.691C107.413 7.86905 101.707 13.7708 101.707 20.853V80.6578C101.707 92.2646 92.2646 101.511 80.8545 101.511H20.853C9.24613 101.511 0 92.0679 0 80.6578V20.853C0 9.24613 9.44286 0 20.853 0H85.5759C87.7399 0 89.5105 1.77054 89.5105 3.93453C89.5105 6.09851 87.7399 7.86905 85.5759 7.86905H20.853C13.5741 7.86905 7.86905 13.7708 7.86905 20.853V80.6578C7.86905 87.9366 13.7708 93.6417 20.853 93.6417H80.6578C87.9366 93.6417 93.6417 87.7399 93.6417 80.6578V20.853C93.6417 9.24613 103.085 0 114.495 0H174.299C185.906 0 195.152 9.44286 195.152 20.853V80.6578C195.152 87.9366 201.054 93.6417 208.136 93.6417H267.941C275.22 93.6417 280.925 87.7399 280.925 80.6578V20.853C280.925 13.5741 275.023 7.86905 267.941 7.86905H203.218C201.054 7.86905 199.284 6.09851 199.284 3.93453C199.284 1.77054 201.054 0 203.218 0H267.941C279.548 0 288.794 9.44286 288.794 20.853V80.6578C289.188 92.2646 279.745 101.511 268.138 101.511Z" fill="white"/>
					<path d="M177.054 47.8044H112.134V53.7062H177.054V47.8044Z" fill="white"/>
					<path d="M83.6087 47.8044H47.2144V53.7062H83.6087V47.8044Z" fill="white"/>
					<path d="M66.4936 127.479C66.4936 128.462 66.1001 129.249 65.5099 130.036C64.9198 130.823 63.9361 131.02 62.7558 131.02C61.5754 131.02 60.5918 130.626 59.8049 129.839C59.018 129.053 58.6245 127.872 58.6245 126.692V124.921C58.6245 123.544 59.018 122.561 59.8049 121.774C60.5918 120.987 61.5754 120.593 62.7558 120.593C63.9361 120.593 64.9198 120.987 65.5099 121.577C66.2968 122.167 66.4936 122.954 66.4936 124.134H65.1165C65.1165 123.347 64.9198 122.757 64.5263 122.364C64.1328 121.97 63.5427 121.774 62.7558 121.774C61.9689 121.774 61.3787 122.167 60.7885 122.757C60.395 123.347 60.0016 124.134 60.0016 125.118V127.085C60.0016 128.069 60.1983 128.856 60.7885 129.446C61.182 130.036 61.9689 130.43 62.7558 130.43C63.5427 130.43 64.1328 130.233 64.5263 129.839C64.9198 129.446 65.1165 128.856 65.1165 128.069H66.4936V127.479Z" fill="white"/>
					<path d="M76.5262 128.069H72.5917L71.608 130.823H70.231L73.9687 120.396H75.1491L78.8869 130.823H77.5098L76.5262 128.069ZM72.9851 126.888H76.1327L74.5589 122.364L72.9851 126.888Z" fill="white"/>
					<path d="M83.0181 130.823V120.396H86.3624C87.5428 120.396 88.3297 120.593 88.9199 121.183C89.51 121.577 89.9035 122.364 89.9035 123.347C89.9035 123.741 89.7068 124.134 89.51 124.528C89.3133 124.921 88.9198 125.118 88.3297 125.315C88.9198 125.315 89.51 125.708 89.9035 126.298C90.2969 126.888 90.4937 127.479 90.4937 128.069C90.4937 129.052 90.1002 129.839 89.51 130.233C88.9198 130.823 88.1329 131.02 86.9526 131.02H83.0181V130.823ZM84.3951 124.921H86.7559C87.346 124.921 87.7395 124.724 88.1329 124.528C88.5264 124.331 88.7231 123.741 88.7231 123.347C88.7231 122.757 88.5264 122.364 88.1329 122.167C87.7395 121.97 87.346 121.774 86.5591 121.774H84.5919V124.921H84.3951ZM84.3951 125.905V129.643H87.1493C87.7395 129.643 88.3297 129.446 88.7231 129.249C89.1166 128.856 89.3133 128.462 89.3133 127.872C89.3133 127.282 89.1166 126.888 88.7231 126.495C88.3297 126.102 87.9362 125.905 87.1493 125.905H84.3951Z" fill="white"/>
					<path d="M96.5927 130.823H95.2156V120.396H96.5927V130.823Z" fill="white"/>
					<path d="M109.773 130.823H108.396L103.281 122.757V130.823H101.904V120.396H103.281L108.396 128.462V120.396H109.773V130.823Z" fill="white"/>
					<path d="M120.593 125.905H116.266V129.643H121.38V130.823H114.888V120.396H121.184V121.577H116.266V124.921H120.593V125.905Z" fill="white"/>
					<path d="M133.184 121.577H129.643V131.02H128.266V121.577H124.921V120.396H133.184V121.577Z" fill="white"/>
					<path d="M143.611 130.823V120.396H146.955C148.332 120.396 149.512 120.79 150.299 121.577C151.086 122.364 151.48 123.544 151.48 124.921V126.298C151.48 127.675 151.086 128.659 150.299 129.643C149.512 130.43 148.332 130.823 146.955 130.823H143.611ZM144.988 121.577V129.839H146.955C147.939 129.839 148.725 129.446 149.316 128.856C149.906 128.266 150.103 127.479 150.103 126.495V125.118C150.103 124.134 149.906 123.347 149.316 122.757C148.725 122.167 147.939 121.774 146.955 121.774H144.988V121.577Z" fill="white"/>
					<path d="M161.906 125.905H157.578V129.643H162.693V130.823H156.201V120.396H162.496V121.577H157.578V124.921H161.906V125.905Z" fill="white"/>
					<path d="M174.89 130.823H173.513L168.398 122.757V130.823H167.021V120.396H168.398L173.513 128.462V120.396H174.89V130.823Z" fill="white"/>
					<path d="M187.087 121.577H183.546V131.02H182.169V121.577H178.824V120.396H187.087V121.577Z" fill="white"/>
					<path d="M196.136 128.069H192.202L191.218 130.823H189.841L193.579 120.396H194.759L198.497 130.823H197.12L196.136 128.069ZM192.595 126.888H195.743L194.169 122.364L192.595 126.888Z" fill="white"/>
					<path d="M204.398 130.823H203.021V120.396H204.398V130.823Z" fill="white"/>
					<path d="M210.891 126.298V130.823H209.514V120.396H213.055C214.235 120.396 215.022 120.593 215.612 121.183C216.203 121.774 216.596 122.364 216.596 123.347C216.596 123.938 216.399 124.331 216.203 124.724C216.006 125.118 215.416 125.511 215.022 125.708C215.612 125.905 216.006 126.102 216.203 126.692C216.399 127.085 216.596 127.675 216.596 128.266V129.249C216.596 129.643 216.596 129.839 216.793 130.036C216.793 130.233 216.99 130.43 217.186 130.626V130.823H215.809C215.612 130.626 215.416 130.43 215.416 130.036C215.416 129.643 215.416 129.446 215.416 129.052V128.069C215.416 127.479 215.219 127.085 214.826 126.692C214.432 126.298 214.039 126.102 213.448 126.102H210.891V126.298ZM210.891 125.118H212.858C213.645 125.118 214.235 124.921 214.629 124.724C215.022 124.331 215.219 123.938 215.219 123.347C215.219 122.757 215.022 122.364 214.629 121.97C214.235 121.577 213.842 121.577 213.055 121.577H210.891V125.118Z" fill="white"/>
					<path d="M227.415 125.905H223.088V129.643H228.202V130.823H221.71V120.396H228.006V121.577H223.088V124.921H227.415V125.905Z" fill="white"/>
				</svg>
			</div>
		</section>
		<?php endif; unset($hide); ?>

		<?php $hide = get_field('main-second-hid'); ?>
		<?php if (!$hide) : ?>
			<?php $second_img = get_field('main-second-img'); ?>
			<section class="main-second" <?php echo ($second_img) ? 'style="background-image: url(\'' . $second_img['url'] . '\')";' : ''; ?>>
				<div class="section-in section-lines">
					<div class="main-second-bl">
						<div class="container">
								<div class="row">
									<div class="col-12 col-lg-5">
										<h1 class="main-second-ttl"><?php the_field('main-second-title'); ?></h1>
										<div class="main-second-subttl"><?php the_field('main-second-subtitle'); ?></div>
										<div class="content-block main-second-txt"><?php the_field('main-second-txt'); ?></div>
									</div>
								</div>

								<?php $second_link = get_field('main-second-link'); ?>
								<?php if (isset($second_link['link']) && $second_link['link'] != '') : ?>
									<div class="main-second-btn">
										<a href="<?php echo $second_link['link']; ?>" <?php echo ($second_link['blank']) ? 'target="_blank"' : ""; ?> class="btn">Découvrez notre <br>cabinet</a>
									</div>
								<?php endif; ?>
								<?php unset($second_link); ?>
						</div>
					</div>
				</div>
			</section>
			<?php unset($second_img); ?>
		<?php endif; unset($hide); ?>

		<?php $hide = get_field('main-values-hid'); ?>
		<?php if (!$hide) : ?>
			<section class="main-values">
				<div class="section-in">
					<div class="container">
						<h2 class="h2 main-values-ttl"><?php the_field('main-values-title'); ?></h2>
					</div>
					<?php
					$values_blocks = get_field('main-values');
					if (is_array($values_blocks) && count($values_blocks) > 0) : ?>
						<div class="main-values-wrap">
							<div class="main-values-back">
								<svg width="100%" viewBox="0 0 1792 576" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M491 1H81C36.8172 1 1 36.8172 1 81V495C1 539.183 36.8172 575 81 575H514.958C559.141 575 594.958 539.183 594.958 495V81C594.958 36.8172 630.775 1 674.958 1H1116C1160.18 1 1196 36.8172 1196 81V495C1196 539.183 1231.82 575 1276 575H1711C1755.18 575 1791 539.183 1791 495V81C1791 36.8172 1755.18 1 1711 1H1301" stroke="white" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="main-values-row">
								<?php
								$index = 1;
								foreach ($values_blocks as $block) :
									?>
									<div class="main-values-bl">
										<?php if (isset($block['bg']) && $block['bg']['url'] != ''): ?>
											<?php if ($block['bg'] && $block['bg']['url'] !== ''): ?>
												<div class="main-values-bl-bg" style="background-image: url('<?php echo $block['bg']['url']; ?>');"></div>
											<?php endif; ?>
										<?php endif; ?>
										<div class="main-values-bl-img">
											<?php if (isset($block['icon']) && $block['icon']['url'] != ''): ?>
												<?php $svg = file_get_contents($block['icon']['url']); ?>
												<?php if ($svg && $svg !== ''): ?>
													<?php echo $svg; ?>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<div class="main-values-bl-ttl"><?php echo $block['ttl']; ?></div>
										<div class="main-values-bl-txt"><?php echo $block['txt']; ?></div>
									</div>
									<?php
									$index++;
								endforeach;
								?>
							</div>
						</div>
					<?php endif;
					unset($values_blocks);
					?>
				</div>
			</section>
		<?php endif; unset($hide); ?>

		<?php $hide = get_field('main-team-hid'); ?>
		<?php if (!$hide) : ?>
			<?php $team_img = get_field('main-team-img'); ?>
			<section id="equipe" class="main-team" <?php echo ($team_img) ? 'style="background-image: url(\'' . $team_img['url'] . '\')";' : ''; ?>>
				<div class="section-in section-lines">
					<div class="main-team-bl">
						<div class="container">
							<h2 class="h2 main-team-ttl"><?php the_field('main-team-ttl'); ?></h2>
							<div class="main-team-txt"><?php the_field('main-team-txt'); ?></div>
							<?php $team_link = get_field('main-team-link'); ?>
							<?php if (isset($team_link['link']) && $team_link['link'] != '') : ?>
								<div class="main-team-btn">
									<a href="<?php echo $team_link['link']; ?>" <?php echo ($team_link['blank']) ? 'target="_blank"' : ""; ?> class="btn">Découvrez notre <br>équipe</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<?php unset($second_link); ?>
			<?php unset($team_img); ?>
		<?php endif; unset($hide); ?>


		<?php $hide = get_field('main-traits-hid'); ?>
		<?php if (!$hide) : ?>
			<section id="traitements" class="main-traits">
				<div class="section-in section-lines">
					<div class="container">
						<h2 class="h2 main-traits-ttl d-block d-md-none"><?php the_field('main-traits-ttl'); ?></h2>
						<?php
						$args = array(
							'number' => 10,
							'hide_empty' => false,
							'taxonomy' => 'traitement',
							'orderby' => 'term_id',
							'order' => 'ASC'
						);
						$terms = get_terms($args);

						if ( count($terms) > 0 ) :
							?>
							<div class="row">
								<div class="col-12 col-md-6 col-lg-7">
									<div class="main-traits-img-wrap">
										<div class="main-traits-img js-mainTraitsImg">
											<?php $term_img = get_field('ctrait-img', $terms[0]); ?>
											<?php if ($term_img) : ?>
												<img src="<?php echo $term_img['sizes']['main-traitements-category']; ?>" alt="<?php echo $terms[0]->name; ?>">
											<?php endif; ?>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 col-lg-4 offset-lg-1">
									<div class="main-traits-col">
										<div class="h2 main-traits-ttl d-none d-md-block"><?php the_field('main-traits-ttl'); ?></div>
										<?php
										$index = 1;
										foreach ( $terms as $term ) :
											?>
											<?php $term_img = get_field('ctrait-img', $term); ?>
											<div class="main-traits-bl js-mainTraitsImgChange" data-img="<?php echo ($term_img) ? $term_img['sizes']['main-traitements-category'] : ''; ?>">
												<h3 class="h3 main-traits-bl-ttl"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></h3>
												<div class="main-traits-bl-hidden">
													<div class="main-traits-bl-txt"><?php echo $term->description; ?></div>
													<div class="main-traits-bl-btn">
														<a href="<?php echo get_term_link($term); ?>">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0_2573_2462)">
																	<path d="M1 10H19" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
																	<path d="M10 19L19 10L10 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
																</g>
																<defs>
																	<clipPath id="clip0_2573_2462">
																		<rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
																	</clipPath>
																</defs>
															</svg>
														</a>
													</div>
												</div>
											</div>
											<?php
											$index++;
										endforeach;
										?>
									</div>
								</div>
							</div>
						<?php
						endif;
						?>
					</div>
				</div>
			</section>
		<?php endif; unset($hide); ?>

		<?php $hide = get_field('main-faq-hid'); ?>
		<?php if (!$hide) : ?>
			<?php $faq_img = get_field('main-faq-img'); ?>
			<section id="faq" class="main-faq" <?php echo ($faq_img) ? 'style="background-image: url(\'' . $faq_img['url'] . '\')";' : ''; ?>>
				<div class="main-faq-overlay"></div>
				<div class="section-in section-lines">
					<div class="main-faq-bl">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-6">
									<h2 class="h2 main-faq-ttl"><?php the_field('main-faq-title'); ?></h2>
									<div class="main-faq-txt"><?php the_field('main-faq-txt'); ?></div>
								</div>
							</div>

							<?php $faq_link = get_field('main-faq-link'); ?>
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

		<?php $hide = get_field('main-contacts-hid'); ?>
		<?php if (!$hide) : ?>
			<section id="contacts" class="main-contacts">
				<div class="section-in">
					<?php $contacts_blocks = get_field('main-contacts'); ?>
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
								<?php if (isset($contacts_blocks['second']['bg']) && $contacts_blocks['second']['bg']['url'] != ''): ?>
									<?php if ($contacts_blocks['second']['bg'] && $contacts_blocks['second']['bg']['url'] !== ''): ?>
										<div class="main-contacts-bl-bg" style="background-image: url('<?php echo $contacts_blocks['second']['bg']['url']; ?>');"></div>
									<?php endif; ?>
								<?php endif; ?>
								<?php if (isset($contacts_blocks['second']['link_data']['link']) && $contacts_blocks['second']['link_data']['link'] != '') : ?>
									<div class="main-contacts-bl-btn">
										<a href="<?php echo $contacts_blocks['second']['link_data']['link']; ?>" <?php echo ($contacts_blocks['second']['link_data']['blank']) ? 'target="_blank"' : ""; ?> class="btn">Visite virtuelle de <br>notre cabinet</a>
									</div>
								<?php endif; ?>
							</div>
							<div class="main-contacts-bl">
								<div class="h2 main-contacts-bl-ttl"><?php echo $contacts_blocks['third']['ttl']; ?></div>
								<div class="main-contacts-bl-item"><span><?php echo $contacts_blocks['third']['addr']; ?></span></div>
								<div class="main-contacts-bl-item">
									<a href="<?php echo str_replace(['(', ')', ' ', '-', '_'], '', $contacts_blocks['third']['phn']); ?>"><?php echo $contacts_blocks['third']['phn']; ?></a>
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

		<?php $hide = get_field('main-sched-hid'); ?>
		<?php if (!$hide) : ?>
			<section class="main-schedule">
				<div class="container">
					<h3 class="h3 main-schedule-ttl"><?php the_field('main-sched-title'); ?></h3>
					<div class="main-schedule-row">
						<?php $contacts_graf = get_field('main-sched'); ?>
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

	</main>

<?php
get_footer();
