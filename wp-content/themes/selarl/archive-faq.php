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

	<main class="arch-faq">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl">FAQ</h1>
					<div class="arch-faq-top-data">
						<div class="breadcrumbs">
							<a href="<?php echo get_home_url(); ?>" class="crumb home">Accueil</a>
							<span class="crumb last_crumb">FAQ</span>
						</div>
						<div class="arch-faq-srch">
							<input type="text" placeholder="" class="js-archFaqSearch">
							<button class="js-archFaqSearchBtn">
								<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M24.2008 24.2L18.0007 18M11.4008 21C6.09885 21 1.80078 16.7019 1.80078 11.4C1.80078 6.09805 6.09885 1.79999 11.4008 1.79999C16.7027 1.79999 21.0008 6.09805 21.0008 11.4C21.0008 16.7019 16.7027 21 11.4008 21Z" stroke="white" stroke-width="2"/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="arch-faq-wrap">
				<div class="container">
					<div class="arch-faq-cats">
						<ul>
							<li>
								<button class="js-archFaqTerms active" data-term="0">Tout</button>
							</li>
							<?php
							$args = array(
								'number' => '',
								'hide_empty' => false,
								'taxonomy' => 'faq-categories',
								'orderby' => 'term_id',
								'order' => 'ASC'
							);
							$terms = get_terms($args);

							if ( count($terms) > 0 ) :
								foreach($terms as $term) :
									?>
									<li>
										<button class="js-archFaqTerms" data-term="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
									</li>
								<?php
								endforeach;
							endif;
							?>
						</ul>
					</div>
					<div class="arch-faq-posts">
						<div class="row js-archFaqPosts">

							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'posts_per_page' => $posts_per_page,
								'post_type' => 'faq',
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
									<div class="col-12 col-md-6">
										<div class="arch-faq-posts-bl">
											<div class="arch-faq-posts-bl-img">
												<?php the_post_thumbnail('faq-thumb'); ?>
											</div>
											<div class="arch-faq-posts-bl-data">
												<div class="arch-faq-posts-bl-cat-wrap">
													<?php
														$faq_tax = get_the_terms($post->ID, 'faq-categories');
														if ($faq_tax && count($faq_tax) > 0) :
													?>
														<div class="arch-faq-posts-bl-cat">
															<?php echo $faq_tax[0]->name; ?>
														</div>
													<?php
														endif;
													?>
												</div>
												<div class="arch-faq-posts-bl-in">
													<div class="arch-faq-posts-bl-ttl"><?php the_title(); ?></div>
													<div class="arch-faq-posts-bl-btn">
														<a href="<?php the_permalink(); ?>" class="btn">Voir plus</a>
													</div>
												</div>
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
					</div>
				</div>
		</section>

		<section class="arch-faq-btm">
			<div class="container js-archFaqPagi">
				<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'faq',
						'orderby' => 'date',
						'order' => 'ASC',
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
					?>
					<?php if ( $the_query->post_count > $posts_per_page ) : ?>
					<?php $pages = ceil($the_query->post_count / $posts_per_page); ?>
						<div class="pagination arch-faq-pagination">
							<ul>
								<?php for ( $i = 1; $i <= $pages; $i++ ) : ?>
									<li>
										<button class="js-archFaqPaginator<?php echo ($i === 1) ? ' active' : ''; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
									</li>
								<?php endfor; ?>
								<?php if ( $pages > 1 ) : ?>
									<li>
										<button class="js-archFaqPaginator" data-page="2">
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
					<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
				</div>
			</div>
		</section>

	</main><!-- #main -->

	<script>
		var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		var paged = 1;
		var posts_per_page = <?php echo $posts_per_page; ?>;
		var term = '';
		var search = '';
	</script>

<?php
get_footer();
