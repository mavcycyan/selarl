<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package selarl
 */

get_header();
?>

	<main class="single_page">

		<section class="top_section">
			<div class="section-in section-lines">
				<div class="container">
					<h1 class="h1 top_section-ttl">404 Introuvable</h1>
				</div>
			</div>
		</section>

		<section class="single_page-wrap">
			<div class="container">
				<div class="content-block single_page-content">
					<h2>OOPS! CETTE PAGE NE PEUT ÊTRE TROUVÉE.</h2>
					<p>Il semble que rien n'ait été trouvé à cet endroit. Essayez peut-être l'un des liens ci-dessous ou une recherche ?</p>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="single_page-ret">
				<a href="javascript:history.back()" class="btn">Retour</a>
			</div>
		</div>

	</main>

<?php
get_footer();
