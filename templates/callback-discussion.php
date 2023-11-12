<?php include ACLP_COMPONENTS.'/header.php'; ?>

    <section id="cards">
        <div class="container">
            <h1><?php the_field('cards_heading'); ?></h1>
            <div class="row justify-content-md-center">
                <?php
                if( have_rows('cards') ):
	                while( have_rows('cards') ) : the_row();
                        ?>
                        <div class="col-md-4 mb-5">
                            <div class="single-card">
                                <div class="heading">
					                <?php
					                $icon = get_sub_field('icon');
					                $ext = pathinfo( $icon, PATHINFO_EXTENSION );

					                if ($ext === 'svg') {
						                echo file_get_contents($icon);
					                } else {
						                echo '<img src='.$icon.' alt='.get_sub_field('heading').'/>';
					                }
					                ?>
                                    <h3><?php the_sub_field('heading'); ?></h3>
                                </div>
                                <div class="content">
                                    <p><?php the_sub_field('text'); ?></p>
                                    <?php if (get_sub_field('button')) { ?>
                                        <a class="cta-button" href="<?php echo get_sub_field('button')['url'] ?>" target="<?php echo get_sub_field('button')['target'] ?>"><?php echo get_sub_field('button')['title'] ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php
	                endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section id="video">
        <div class="container">
            <h1><?php the_field('video_heading'); ?></h1>

            <div class="video-container">
                <div class="embed">
                    <?php
                    $iframe = get_field('video_video');

                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    $params = array(
                        'autoplay' => 1,
                        'muted' => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    echo $iframe;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php if ( get_field('enable_testimonials') ) { ?>
    <section id="testimonials">
        <div class="container">
            <h1><?php the_field('testimonials_heading'); ?></h1>
            <div class="splide" id="testimonials-slider">
                <div class="splide__track">
                    <ul class="splide__list">
	                    <?php
                            while( have_rows('testimonials') ) : the_row();
                                ?>
                                <li class="splide__slide">
                                    <div class="testimonial">
                                        <p>“<?php the_sub_field('quote') ?>”</p>
                                        <p><strong><?php the_sub_field('name') ?></strong>, <?php the_sub_field('company') ?></p>
                                    </div>
                                </li>
                            <?php
                            endwhile;
	                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section id="booking">
        <div class="container">
            <h1><?php the_field('booking_heading'); ?></h1>
            <div class="row gx-md-5">
                <div class="col-md-6 mb-5 mb-md-0 pe-md-5">
                    <div class="callback">
                        <div class="heading">
                            <p><?php the_field('booking_callback_heading'); ?></p>
                            <?php
                            $icon = get_field('booking_callback_icon');
                            $ext = pathinfo( $icon, PATHINFO_EXTENSION );

                            if ($ext === 'svg') {
                                echo file_get_contents($icon);
                            } else {
                                echo '<img src='.$icon.' alt='.get_field('booking_callback_heading').'/>';
                            }
                            ?>
                        </div>
                        <p><?php the_field('booking_callback_text') ?></p>
                        <button class="cta-button" onclick="PUM.open(<?php the_field('booking_callback_popup') ?>);"><?php the_field('booking_callback_button') ?></button>
                    </div>
                </div>
                <div class="col-md-6 ps-md-5">
                    <div class="discussion">
                        <div class="heading">
                            <p><?php the_field('booking_discussion_heading'); ?></p>
                            <?php
                            $icon = get_field('booking_discussion_icon');
                            $ext = pathinfo( $icon, PATHINFO_EXTENSION );

                            if ($ext === 'svg') {
                                echo file_get_contents($icon);
                            } else {
                                echo '<img src='.$icon.' alt='.get_field('booking_discussion_heading').'/>';
                            }
                            ?>
                        </div>
                        <p><?php the_field('booking_discussion_text') ?></p>
                        <button class="cta-button" onclick="PUM.open(<?php the_field('booking_discussion_popup') ?>);"><?php the_field('booking_discussion_button') ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ACLP_COMPONENTS.'/footer.php'; ?>