<?php
    function selarl_breadcrumbs($id, $is_tax = false) {
        if ($id !== null) :
    ?>

        <div class="breadcrumbs">
            <a href="<?php echo get_home_url(); ?>" class="crumb home">
                Accueil
            </a>
            <?php if (!$is_tax) : ?>
                <?php $terms = wp_get_post_terms( $id, array( 'traitement', 'clinique' ) ); ?>
                <?php if (count($terms) > 0) : ?>
                    <a href="<?php echo get_term_link($terms[0]); ?>" class="crumb"><?php echo $terms[0]->name; ?></a>
                <?php endif; ?>
            <?php endif; ?>
            <span class="crumb last_crumb"><?php echo ($is_tax) ? get_term($id)->name : get_the_title($id); ?></span>
        </div>

    <?php
        endif;
    }