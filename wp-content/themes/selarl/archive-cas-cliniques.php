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

$posts_per_page = 6;
?>

	<main class="arch-clin">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl">Cas cliniques</h1>
					<div class="breadcrumbs">
						<a href="<?php echo get_home_url(); ?>" class="crumb home">Accueil</a>
						<span class="crumb last_crumb">Cas cliniques</span>
					</div>
				</div>
			</div>
		</section>


		<section class="arch-clin-wrap">
			<div class="section-in section-lines">
				<div>
					<div class="arch-clin-row">
						<div class="arch-clin-col1">
							<div class="arch-clin-terms">
								<ul>
									<li>
										<button class="js-archClinTerms active" data-term="0">Tout</button>
									</li>
									<?php
										$args = array(
											'number' => '',
											'hide_empty' => false,
											'taxonomy' => 'clinique',
											'orderby' => 'term_id',
											'order' => 'ASC'
										);
										$terms = get_terms($args);

										if ( count($terms) > 0 ) :
											foreach($terms as $term) :
									?>
										<li>
											<button class="js-archClinTerms" data-term="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
										</li>
									<?php
											endforeach;
										endif;
									?>
								</ul>
							</div>
						</div>
						<div class="arch-clin-col2">
							<div class="arch-clin-posts js-archClinPosts">

								<?php
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									'posts_per_page' => $posts_per_page,
									'post_type' => 'cas-cliniques',
									'paged' => $paged,
									'orderby' => 'date',
									'order' => 'ASC',
								);
								$the_query = new WP_Query( $args );

								if ( $the_query->have_posts() ) :
									?>
									<?php
									while ( $the_query->have_posts() ) :
										$the_query->the_post();
										?>
										<div class="arch-clin-posts-row">
											<div class="arch-clin-posts-bl">
												<div class="h2 arch-clin-posts-bl-ttl"><?php the_title(); ?></div>
												<div class="arch-clin-posts-bl-tags">
													<?php $tags = get_field('single_clin-tags'); ?>
													<?php if ($tags && count($tags) > 0) : ?>
														<?php foreach ($tags as $tag) : ?>
															<span><?php echo $tag['tag']; ?></span>
														<?php endforeach; ?>
													<?php endif; ?>
												</div>
											</div>
											<div class="arch-clin-posts-imgs">
												<?php $imgs = get_field('single_clin-imgs'); ?>
												<?php if ($imgs && isset($imgs['before'])) : ?>
													<div class="arch-clin-posts-img">
														<img src="<?php echo $imgs['before']['sizes']['clin-tax'] ?>" alt="">
														<span>Avant</span>
													</div>
												<?php endif; ?>
												<?php if ($imgs && isset($imgs['after'])) : ?>
													<div class="arch-clin-posts-img">
														<img src="<?php echo $imgs['after']['sizes']['clin-tax'] ?>" alt="">
														<span>Après</span>
													</div>
												<?php endif; ?>
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
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="arch-clin-btm">
			<div class="container js-archClinPagi">
				<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'cas-cliniques',
						'orderby' => 'date',
						'order' => 'ASC',
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
					?>
					<?php if ( $the_query->post_count > $posts_per_page ) : ?>
					<?php $pages = ceil($the_query->post_count / $posts_per_page); ?>
						<div class="pagination arch-clin-pagination">
							<ul>
								<?php for ( $i = 1; $i <= $pages; $i++ ) : ?>
									<li>
										<button class="js-archClinPaginator<?php echo ($i === 1) ? ' active' : ''; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
									</li>
								<?php endfor; ?>
								<?php if ( $pages > 1 ) : ?>
									<li>
										<button class="js-archClinPaginator" data-page="2">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7 13L11 9L7 5" stroke="white" stroke-linecap="square"/>
											</svg>
										</button>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					<?php endif; ?>
				<?php endif;
				wp_reset_postdata(); ?>
			</div>
			<div class="container">
				<div class="arch-clin-btm-btn">
					<a href="javascript:history.back()" class="btn">Retour</a>
				</div>
			</div>
		</section>

	</main><!-- #main -->

	<script>
		var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		var paged = 1;
		var posts_per_page = <?php echo $posts_per_page; ?>;
		var term = '';
	</script>

<?php
get_footer();
