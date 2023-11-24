<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package selarl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="fix_data js-fixData">
		<div class="fix_data-overlay"></div>
		<div class="fix_data-container">
			<div class="container">
				<div class="h-row">
					<div class="h-logo-wrap">
						<a href="<?php echo get_home_url(); ?>" class="h-logo">
							<svg width="102" height="36" viewBox="0 0 102 36" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M94.6038 36H73.5321C69.4594 36 66.1428 32.6696 66.1428 28.5798V7.42017C66.1428 4.86317 64.0752 2.78692 61.5289 2.78692H40.4572C37.9109 2.78692 35.8433 4.86317 35.8433 7.42017V28.5798C35.8433 32.6696 32.5268 36 28.454 36H7.38929C3.31651 36 0 32.6696 0 28.5798V7.42017C0 3.33037 3.31651 0 7.38929 0H30.1816C30.9448 0 31.5693 0.627056 31.5693 1.39346C31.5693 2.15986 30.9448 2.78692 30.1816 2.78692H7.38929C4.84293 2.78692 2.77532 4.86317 2.77532 7.42017V28.5798C2.77532 31.1368 4.84293 33.2131 7.38929 33.2131H28.4609C31.0073 33.2131 33.0749 31.1368 33.0749 28.5798V7.42017C33.0749 3.33037 36.3914 0 40.4642 0H61.5358C65.6086 0 68.9251 3.33037 68.9251 7.42017V28.5798C68.9251 31.1368 70.9927 33.2131 73.5391 33.2131H94.6107C97.1501 33.2131 99.2247 31.1368 99.2247 28.5798V7.42017C99.2247 4.86317 97.1571 2.78692 94.6107 2.78692H71.8184C71.0552 2.78692 70.4307 2.15986 70.4307 1.39346C70.4307 0.627056 71.0552 0 71.8184 0H94.6107C98.6835 0 102 3.33037 102 7.42017V28.5798C101.993 32.6696 98.6766 36 94.6038 36Z" fill="white"/>
								<path d="M62.4447 17.3104H39.5483V19.4067H62.4447V17.3104Z" fill="white"/>
								<path d="M29.488 17.3104H16.6521V19.4067H29.488V17.3104Z" fill="white"/>
							</svg>
						</a>
					</div>
					<div class="h-menu_btn-wrap">
						<button class="h-menu_btn js-hMenuCls">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.5 7.5L7.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
								<path d="M7.5 7.5L22.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
					<div class="h-right">
						<div class="h-rdv">
							<?php $rdv = get_field('rdv', 'options'); ?>
							<?php if ($rdv) : ?>
								<button type="button" class="js-hRdvBtn">
									<span class="txt">RDV</span>
									<span class="icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13 7L9 11L5 7" stroke="white" stroke-linecap="square"/>
										</svg>
									</span>
								</button>
								<div class="h-rdv-list">
									<ul>
									<?php foreach ($rdv as $r) : ?>
										<li>
											<a href="<?php echo $r['link']; ?>" target="_blank"><?php echo $r['name']; ?></a>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="fix_data-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
				<div class="fix_data-contacts">
					<?php $hide = get_field('main-contacts-hid', 2); ?>
					<?php if (!$hide) : ?>
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
					<?php endif; unset($hide); ?>
				</div>
			</div>
		</div>
	</div>
	<?php $hide = get_field('main-contacts-hid', 2); ?>
	<?php if (!$hide) : ?>
		<div class="modal_window js-modal" data-modal="contacts">
			<div class="modal_window-overlay js-modalClose"></div>
			<div class="modal_window-wrap">
				<div class="modal_window-cls js-modalClose">
					<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.5 7.5L7.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
						<path d="M7.5 7.5L22.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="form">
					<div class="form-ttl">CONTACTEZ-NOUS</div>
					<?php echo str_replace('<br>', '', do_shortcode('[contact-form-7 id="9b338ab" title="Contact form"]')); ?>
				</div>
			</div>
		</div>
	<?php endif; unset($hide); ?>

	<div class="header-anchor js-headerAnch"></div>
	<header class="header js-header">
		<div class="container">
			<div class="h-row">
				<div class="h-logo-wrap">
					<a href="<?php echo get_home_url(); ?>" class="h-logo">
						<svg width="102" height="36" viewBox="0 0 102 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M94.6038 36H73.5321C69.4594 36 66.1428 32.6696 66.1428 28.5798V7.42017C66.1428 4.86317 64.0752 2.78692 61.5289 2.78692H40.4572C37.9109 2.78692 35.8433 4.86317 35.8433 7.42017V28.5798C35.8433 32.6696 32.5268 36 28.454 36H7.38929C3.31651 36 0 32.6696 0 28.5798V7.42017C0 3.33037 3.31651 0 7.38929 0H30.1816C30.9448 0 31.5693 0.627056 31.5693 1.39346C31.5693 2.15986 30.9448 2.78692 30.1816 2.78692H7.38929C4.84293 2.78692 2.77532 4.86317 2.77532 7.42017V28.5798C2.77532 31.1368 4.84293 33.2131 7.38929 33.2131H28.4609C31.0073 33.2131 33.0749 31.1368 33.0749 28.5798V7.42017C33.0749 3.33037 36.3914 0 40.4642 0H61.5358C65.6086 0 68.9251 3.33037 68.9251 7.42017V28.5798C68.9251 31.1368 70.9927 33.2131 73.5391 33.2131H94.6107C97.1501 33.2131 99.2247 31.1368 99.2247 28.5798V7.42017C99.2247 4.86317 97.1571 2.78692 94.6107 2.78692H71.8184C71.0552 2.78692 70.4307 2.15986 70.4307 1.39346C70.4307 0.627056 71.0552 0 71.8184 0H94.6107C98.6835 0 102 3.33037 102 7.42017V28.5798C101.993 32.6696 98.6766 36 94.6038 36Z" fill="white"/>
							<path d="M62.4447 17.3104H39.5483V19.4067H62.4447V17.3104Z" fill="white"/>
							<path d="M29.488 17.3104H16.6521V19.4067H29.488V17.3104Z" fill="white"/>
						</svg>
					</a>
				</div>
				<div class="h-menu_btn-wrap">
					<button class="h-menu_btn js-hMenuBtn">
						<svg width="40" height="14" viewBox="0 0 40 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M-9.71364e-08 1.11111L40 1.11111L40 0L0 -3.49691e-06L-9.71364e-08 1.11111ZM-6.60528e-07 7.55555L40 7.55556L40 6.44445L-5.63391e-07 6.44444L-6.60528e-07 7.55555ZM-1.22392e-06 14L40 14L40 12.8889L-1.12678e-06 12.8889L-1.22392e-06 14Z" fill="white"/>
						</svg>
					</button>
				</div>
				<div class="h-right">
					<nav class="h-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav>
					<div class="h-esp">
						<button type="button" class="js-modalOpen" data-modal="patient">Espace patient</button>
					</div>
					<div class="h-rdv">
						<?php $rdv = get_field('rdv', 'options'); ?>
						<?php if ($rdv) : ?>
							<button type="button" class="js-hRdvBtn">
								<span class="txt">RDV</span>
								<span class="icon">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13 7L9 11L5 7" stroke="white" stroke-linecap="square"/>
									</svg>
								</span>
							</button>
							<div class="h-rdv-list">
								<ul>
									<?php foreach ($rdv as $r) : ?>
										<li>
											<a href="<?php echo $r['link']; ?>" target="_blank"><?php echo $r['name']; ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

<?php echo get_template_part('template-parts/global', 'patient-modal') ?>
