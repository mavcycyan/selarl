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

$posts_per_page = 16;
?>

	<main class="arch-articles">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl">Articles</h1>
					<div class="breadcrumbs">
						<a href="<?php echo get_home_url(); ?>" class="crumb home">Accueil</a>
						<span class="crumb last_crumb">Articles</span>
					</div>
				</div>
			</div>
		</section>


		<section class="arch-articles-wrap">
			<div class="container">
				<div class="arch-articles-cats">
					<ul>
						<li>
							<button class="js-archArticlesTerms active" data-term="0">Tout</button>
						</li>
						<?php
						$args = array(
							'number' => '',
							'hide_empty' => false,
							'taxonomy' => 'articles-categories',
							'orderby' => 'term_id',
							'order' => 'ASC'
						);
						$terms = get_terms($args);

						if ( count($terms) > 0 ) :
							foreach($terms as $term) :
								?>
								<li>
									<button class="js-archArticlesTerms" data-term="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
								</li>
							<?php
							endforeach;
						endif;
						?>
					</ul>
				</div>
				<div class="arch-articles-posts">
					<div class="row js-archArticlesPosts">

						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'posts_per_page' => $posts_per_page,
							'post_type' => 'articles',
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
								<div class="col-12 col-md-6 col-lg-3">
									<div class="arch-articles-posts-bl">
										<div class="arch-articles-posts-bl-img">
											<?php the_post_thumbnail('art-thumb'); ?>
										</div>
										<div class="arch-articles-posts-bl-ttl"><?php the_title(); ?></div>
										<?php $pdf = get_field('arch-articles-pdf'); ?>
										<div class="arch-articles-posts-bl-btn">
											<a href="<?php echo $pdf; ?>">Découvrir</a>
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

		<section class="arch-articles-btm">
			<div class="container">
				<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'articles',
						'orderby' => 'date',
						'order' => 'ASC',
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
					?>
					<?php if ( $the_query->post_count > $posts_per_page ) : ?>
					<?php $pages = ceil($the_query->post_count / $posts_per_page); ?>
						<div class="arch-articles-btm-btn">
							<button class="btn js-archArticlesLoadMore" type="button">Charger plus</button>
						</div>
					<?php endif; ?>
				<?php endif;
				wp_reset_postdata(); ?>
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
