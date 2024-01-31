<?php
function clinics_ajax() {
    $paged = (isset($_POST['paged'])) ? $_POST['paged'] : '';
    $term = (isset($_POST['term'])) ? $_POST['term'] : '';
    $posts_per_page = (isset($_POST['posts_per_page'])) ? $_POST['posts_per_page'] : '';

    $args = array(
        'posts_per_page' => $posts_per_page,
        'post_type' => 'cas-cliniques',
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'ASC',
    );
    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'clinique',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    $html = '';
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
        $html .= '<div class="arch-clin-posts-row">';
        $html .= '    <div class="arch-clin-posts-bl">';
        $html .= '        <div class="h2 arch-clin-posts-bl-ttl">' . get_the_title() . '</div>';
        $html .= '        <div class="arch-clin-posts-bl-tags">';

        $tags = get_field('single_clin-tags');
        if ($tags && count($tags) > 0) :
            foreach ($tags as $tag) :
                $html .= '<span>' . $tag['tag'] . '</span>';
            endforeach;
        endif;

        $html .= '        </div>';
        $html .= '    </div>';
        $html .= '    <div class="arch-clin-posts-imgs">';

        $imgs = get_field('single_clin-imgs');
        if ($imgs && isset($imgs['before'])) :
            $html .= '        <div class="arch-clin-posts-img">';
            $html .= '            <img src="' . $imgs['before']['sizes']['clin-tax'] . '" alt="">';
            $html .= '            <span>Avant</span>';
            $html .= '        </div>';
        endif;
        if ($imgs && isset($imgs['after'])) :
            $html .= '            <div class="arch-clin-posts-img">';
            $html .= '                <img src="' . $imgs['after']['sizes']['clin-tax'] . '" alt="">';
            $html .= '                <span>Après</span>';
            $html .= '            </div>';
        endif;

        $html .= '    </div>';
        $html .= '</div>';
        endwhile;
    endif;

    $pagination = '';


    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'cas-cliniques',
        'orderby' => 'date',
        'order' => 'ASC',
    );
    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'clinique',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
        if ( $the_query->post_count > $posts_per_page ) :
            $pages = ceil($the_query->post_count / $posts_per_page);
        $pagination .= '<div class="pagination arch-clin-pagination">';
        $pagination .= '	<ul>';
        if ($paged > 1) {
            $pagination .= '		<li>';
            $pagination .= '			<button class="js-archClinPaginator" data-page="' . ($paged - 1) . '">';
            $pagination .= '				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">';
            $pagination .= '					<path d="M11 13L7 9L11 5" stroke="white" stroke-linecap="square"/>';
            $pagination .= '				</svg>';
            $pagination .= '			</button>';
            $pagination .= '		</li>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) :
            $pagination .= '		<li>';
            $is_active = (($i == $paged) ? ' active' : '');
            $pagination .= '			<button class="js-archClinPaginator' . $is_active . '" data-page="' . $i . '">' . $i .'</button>';
            $pagination .= '		</li>';
        endfor;
        if ($pages > $paged) {
            $pagination .= '		<li>';
            $pagination .= '			<button class="js-archClinPaginator" data-page="' . ($paged + 1) . '">';
            $pagination .= '				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">';
            $pagination .= '					<path d="M7 13L11 9L7 5" stroke="white" stroke-linecap="square"/>';
            $pagination .= '				</svg>';
            $pagination .= '			</button>';
            $pagination .= '		</li>';
        }
        $pagination .= '	</ul>';
        $pagination .= '</div>';
        endif;
    endif;

    echo json_encode(array('html' => $html, 'pagination' => $pagination));
    wp_die();
}

add_action('wp_ajax_clinics', 'clinics_ajax');
add_action('wp_ajax_nopriv_clinics', 'clinics_ajax');

function faq_ajax() {
    $paged = (isset($_POST['paged'])) ? $_POST['paged'] : '';
    $term = (isset($_POST['term'])) ? $_POST['term'] : '';
    $posts_per_page = (isset($_POST['posts_per_page'])) ? $_POST['posts_per_page'] : '';
    $search = (isset($_POST['search'])) ? $_POST['search'] : '';

    $args = array(
        'posts_per_page' => $posts_per_page,
        'post_type' => 'faq',
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'ASC',
    );
    if ($search !== '') {
        $args['s'] = $search;
    }
    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'faq-categories',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    $html = '';
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post();

            $html .= '<div class="col-12 col-md-6">';
            $html .= '    <div class="arch-faq-posts-bl">';
            $html .= '        <div class="arch-faq-posts-bl-img">';
            $html .= '            <img src="' . get_the_post_thumbnail_url($post->ID, 'faq-thumb') . '" />';
            $html .= '        </div>';
            $html .= '        <div class="arch-faq-posts-bl-data">';
            $html .= '            <div class="arch-faq-posts-bl-cat-wrap">';
            $faq_tax = get_the_terms($post->ID, 'faq-categories');
            if ($faq_tax && count($faq_tax) > 0) :
            $html .= '                    <div class="arch-faq-posts-bl-cat">';
            $html .=                         $faq_tax[0]->name;
            $html .= '                    </div>';
            endif;
            $html .= '            </div>';
            $html .= '            <div class="arch-faq-posts-bl-in">';
            $html .= '                <div class="arch-faq-posts-bl-ttl">' . get_the_title() . '</div>';
            $html .= '                <div class="arch-faq-posts-bl-btn">';
            $html .= '                    <a href="' . get_permalink() . '" class="btn">Voir plus</a>';
            $html .= '                </div>';
            $html .= '            </div>';
            $html .= '        </div>';
            $html .= '    </div>';
            $html .= '</div>';
        endwhile;
    endif;

    $pagination = '';


    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'faq',
        'orderby' => 'date',
        'order' => 'ASC',
    );
    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'faq-categories',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
        if ( $the_query->post_count > $posts_per_page ) :
            $pages = ceil($the_query->post_count / $posts_per_page);
        $pagination .= '<div class="pagination arch-faq-pagination">';
        $pagination .= '	<ul>';
        if ($paged > 1) {
            $pagination .= '		<li>';
            $pagination .= '			<button class="js-archFaqPaginator" data-page="' . ($paged - 1) . '">';
            $pagination .= '				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">';
            $pagination .= '					<path d="M11 13L7 9L11 5" stroke="white" stroke-linecap="square"/>';
            $pagination .= '				</svg>';
            $pagination .= '			</button>';
            $pagination .= '		</li>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) :
            $pagination .= '		<li>';
            $is_active = (($i == $paged) ? ' active' : '');
            $pagination .= '			<button class="js-archFaqPaginator' . $is_active . '" data-page="' . $i . '">' . $i .'</button>';
            $pagination .= '		</li>';
        endfor;
        if ($pages > $paged) {
            $pagination .= '		<li>';
            $pagination .= '			<button class="js-archFaqPaginator" data-page="' . ($paged + 1) . '">';
            $pagination .= '				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">';
            $pagination .= '					<path d="M7 13L11 9L7 5" stroke="white" stroke-linecap="square"/>';
            $pagination .= '				</svg>';
            $pagination .= '			</button>';
            $pagination .= '		</li>';
        }
        $pagination .= '	</ul>';
        $pagination .= '</div>';
        endif;
    endif;

    echo json_encode(array('html' => $html, 'pagination' => $pagination));
    wp_die();
}

add_action('wp_ajax_faq', 'faq_ajax');
add_action('wp_ajax_nopriv_faq', 'faq_ajax');
function articles_ajax() {
    $paged = (isset($_POST['paged'])) ? $_POST['paged'] : '';
    $term = (isset($_POST['term'])) ? $_POST['term'] : '';
    $posts_per_page = (isset($_POST['posts_per_page'])) ? $_POST['posts_per_page'] : '';

    $args = array(
        'posts_per_page' => $posts_per_page,
        'post_type' => 'articles',
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'ASC',
    );

    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'articles-categories',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    $html = '';
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post();

            $html .= '<div class="col-12 col-md-6 col-lg-3">';
            $html .= '    <div class="arch-articles-posts-bl">';
            $html .= '        <div class="arch-articles-posts-bl-img">';
            $html .=             get_the_post_thumbnail($post->ID, 'art-thumb');
            $html .= '        </div>';

            $html .= '        <div class="arch-articles-posts-bl-ttl">' . get_the_title() . '</div>';
            $pdf = get_field('arch-articles-pdf');
            $html .= '        <div class="arch-articles-posts-bl-btn">';
            $html .= '            <a href="';
            $html .= ($pdf && $pdf != '') ? $pdf : '#';
            $html .= '" target="_blank">Voir plus</a>';
            $html .= '        </div>';
            $html .= '    </div>';
            $html .= '</div>';
        endwhile;
    endif;

    $pagination = false;


    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'articles',
        'orderby' => 'date',
        'order' => 'ASC',
    );
    if ($term !== '') {
        $args['tax_query'] = array(
            array (
                'taxonomy' => 'articles-categories',
                'field' => 'slug',
                'terms' => $term,
            )
        );
    }
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
        if ( $the_query->post_count >= ($posts_per_page * $paged) ) :
            $pagination = true;
        endif;
    endif;

    echo json_encode(array('html' => $html, 'pagination' => $pagination));
    wp_die();
}

add_action('wp_ajax_articles', 'articles_ajax');
add_action('wp_ajax_nopriv_articles', 'articles_ajax');
function patient_modal_ajax() {
    $step = (isset($_POST['step'])) ? $_POST['step'] : '';
    $value = (isset($_POST['value'])) ? $_POST['value'] : '';

    $html = '';
    ob_start();
    if ($step === 'first') {
        if ($value === 'yes') {
            $html = get_template_part('template-parts/patient/step', 'third');
        }
        elseif ($value === 'no') {
            $html = get_template_part('template-parts/patient/step', 'second');
        }
    }
    elseif ($step === 'second') {
        if ($value === 'no') {
            $html = get_template_part('template-parts/patient/step', 'first');
        }
        elseif ($value === 'acc') {
            $html = get_template_part('template-parts/patient/step', 'second');
        }
    }
    elseif ($step === 'exit') {
        if ($value === 'reload') {
            $html = get_template_part('template-parts/patient/step', 'first');
        }
    }
    $html = ob_get_clean();

    echo json_encode(array('html' => $html));
    wp_die();
}

add_action('wp_ajax_patient_modal', 'patient_modal_ajax');
add_action('wp_ajax_nopriv_patient_modal', 'patient_modal_ajax');