<?php 
    $preloader_style  = cliper_get_option( 'preloader_style', $default = 'style_6' );
    $custom_preloader = cliper_get_option( 'add_preloader_image' );
?>
<?php if( '1' == cliper_get_option( 'enable_custom_preloader' ) && !empty( $custom_preloader['url'] ) ) : ?>
    <?php if( $custom_preloader['url'] ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( $custom_preloader['url'] ); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php endif; ?>
<?php else: ?>
    <?php if( 'style_3' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <div class="preloader-spinner"></div>
        </div>
    <?php elseif( 'style_4' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loader_horizontal.gif'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_5' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loader_spinner.gif'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_6' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loader_spinner.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_7' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loader_square_circle.gif'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_8' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loader_wave.gif'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_9' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/loeader_square.gif'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_10' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/wave_preloader.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_11' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/ajax_loader.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_12' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/audio.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_13' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/ball_triangle.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_14' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/bars.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_15' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/circle_pulse_rings.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_16' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/circle_tail_spin.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_17' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/circles.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_18' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/flip_circle.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_19' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/grid.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_20' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/heart.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_21' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/hearts_group.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_22' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <svg id="eru4F62a9ch1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 93.619 50.965" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><g id="eru4F62a9ch2" transform="matrix(1 0 0 1 18125 818)"><path id="eru4F62a9ch3" d="M537.189,513.309L544.689,532.284L537.189,551.26L549.033,543.56L566.361,532.288L549.033,521.017Z" transform="matrix(1 0 0 1 -18654.2 -1324.8)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch4" d="M537.189,513.309L540.27613,521.113566L537.189,528.919L542.06218,525.750079L549.189,521.113566L542.06218,516.477921Z" transform="matrix(1 0 0 1 -18621.2 -1313.81)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch5" d="M537.189,513.309L539.68,519.609L537.189,525.909L541.122,523.351L546.876,519.608L541.122,515.865Z" transform="matrix(1 0 0 1 -18600.2 -1312.13)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch6" d="M537.189,513.309L538.544,516.737L537.189,520.165L539.329,518.773L542.459,516.737L539.329,514.701Z" transform="matrix(1 0 0 1 -18583.2 -1309.25)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch7" d="M537.189,513.309L537.863,515.009L537.189,516.709L538.252,516.017L539.808,515.005L538.253,514Z" transform="matrix(1 0 0 1 -18571.2 -1307.53)" opacity="0" fill="rgb(249,136,94)" fill-rule="evenodd" stroke="none" stroke-width="1"/><g id="eru4F62a9ch8" transform="matrix(1 0 0 1 -18125 -818)"><path id="eru4F62a9ch9" d="M553.056,540.127C550.812967,540.129646,548.589518,539.709654,546.502,538.889L539.217,543.626C545.08114,547.413552,552.241664,548.631361,559.028205,546.995342C565.814745,545.359323,571.633825,541.012544,575.128,534.969L568.562,531.177C565.363478,536.716177,559.452329,540.127687,553.056,540.126" transform="matrix(1 0 0 1 -527.574 -496.743)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch10" d="M553.056,516.726C559.452329,516.724313,565.363478,520.135823,568.562,525.675L575.128,521.883C571.633825,515.839456,565.814745,511.492677,559.028205,509.856658C552.241664,508.220639,545.08114,509.438448,539.217,513.226L546.502,517.963C548.589504,517.1423,550.812963,516.722306,553.056,516.725" transform="matrix(1 0 0 1 -527.574 -509.146)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1"/><path id="eru4F62a9ch11" d="M537.373,547.141L540.847,538.376L543.696,531.194L540.847,524.012L537.373,515.247C529.899964,524.565086,529.899964,537.822914,537.373,547.141" transform="matrix(1 0 0 1 -531.768 -505.711)" fill="rgb(19,19,19)" fill-rule="evenodd" stroke="none" stroke-width="1"/></g></g> </svg>        </div>
    <?php elseif( 'style_23' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/road_cross.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_24' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/round_circle.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_25' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/round_pulse.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_26' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/simple_spainer.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_27' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/spinner.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_28' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/spinning_circles.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php elseif( 'style_29' == $preloader_style ) : ?>
        <div class="cliper-preeloader">
            <img src="<?php echo esc_url( CLIPER_ROOT_IMAGE .'/loader/three_dots.svg'); ?>" alt="<?php echo esc_attr__( 'preloader', 'cliper' ); ?>">
        </div>
    <?php endif; ?>
<?php endif; ?>