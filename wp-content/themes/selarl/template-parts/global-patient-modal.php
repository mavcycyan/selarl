
<div class="modal_window js-modal modal_window-patient" data-modal="patient">
    <div class="modal_window-overlay js-modalClose"></div>
    <?php $bg = get_field('patient-bg', 'options'); ?>
    <div class="modal_window-wrap" <?php echo ($bg != '') ? 'style="background-image: url(\'' . $bg['url'] . '\')"' : ''; ?>>
        <div class="container">
            <div class="modal_window-patient-top">
                <div class="modal_window-patient-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <svg width="102" height="36" viewBox="0 0 102 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M94.6038 36H73.5321C69.4594 36 66.1428 32.6696 66.1428 28.5798V7.42017C66.1428 4.86317 64.0752 2.78692 61.5289 2.78692H40.4572C37.9109 2.78692 35.8433 4.86317 35.8433 7.42017V28.5798C35.8433 32.6696 32.5268 36 28.454 36H7.38929C3.31651 36 0 32.6696 0 28.5798V7.42017C0 3.33037 3.31651 0 7.38929 0H30.1816C30.9448 0 31.5693 0.627056 31.5693 1.39346C31.5693 2.15986 30.9448 2.78692 30.1816 2.78692H7.38929C4.84293 2.78692 2.77532 4.86317 2.77532 7.42017V28.5798C2.77532 31.1368 4.84293 33.2131 7.38929 33.2131H28.4609C31.0073 33.2131 33.0749 31.1368 33.0749 28.5798V7.42017C33.0749 3.33037 36.3914 0 40.4642 0H61.5358C65.6086 0 68.9251 3.33037 68.9251 7.42017V28.5798C68.9251 31.1368 70.9927 33.2131 73.5391 33.2131H94.6107C97.1501 33.2131 99.2247 31.1368 99.2247 28.5798V7.42017C99.2247 4.86317 97.1571 2.78692 94.6107 2.78692H71.8184C71.0552 2.78692 70.4307 2.15986 70.4307 1.39346C70.4307 0.627056 71.0552 0 71.8184 0H94.6107C98.6835 0 102 3.33037 102 7.42017V28.5798C101.993 32.6696 98.6766 36 94.6038 36Z" fill="white"/>
                            <path d="M62.4447 17.3104H39.5483V19.4067H62.4447V17.3104Z" fill="white"/>
                            <path d="M29.488 17.3104H16.6521V19.4067H29.488V17.3104Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="modal_window-cls modal_window-patient-cls js-modalClose js-modalPatientBtn" data-step="exit" data-val="reload">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 7.5L7.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
                        <path d="M7.5 7.5L22.5 22.5" stroke="white" stroke-linecap="square" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="modal_window-patient-data js-modalPatientData">
                <?php echo get_template_part('template-parts/patient/step', 'first') ?>
            </div>
        </div>
    </div>
</div>
<script>
    var ajax_url = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
</script>