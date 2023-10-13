<?php include ACLP_COMPONENTS.'/header.php'; ?>

    <section id="cards">
        <div class="container">
            <h1><?php the_field('cards_heading'); ?></h1>
            <div class="row">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="single-card">
                        <div class="heading">
                            <?php
                            $icon = get_field('cards_card_one_icon');
                            $ext = pathinfo( $icon, PATHINFO_EXTENSION );

                            if ($ext === 'svg') {
                                echo file_get_contents($icon);
                            } else {
                                echo '<img src='.$icon.' alt='.get_field('cards_card_one_heading').'/>';
                            }
                            ?>
                            <h3><?php the_field('cards_card_one_heading'); ?></h3>
                        </div>
                        <div class="content">
                            <p><?php the_field('cards_card_one_text'); ?></p>
                            <a class="cta-button" href="<?php echo get_field('cards_card_one_button')['url'] ?>" target="<?php echo get_field('cards_card_one_button')['target'] ?>"><?php echo get_field('cards_card_one_button')['title'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="single-card">
                        <div class="heading">
                            <?php
                            $icon = get_field('cards_card_two_icon');
                            $ext = pathinfo( $icon, PATHINFO_EXTENSION );

                            if ($ext === 'svg') {
                                echo file_get_contents($icon);
                            } else {
                                echo '<img src='.$icon.' alt='.get_field('cards_card_two_heading').'/>';
                            }
                            ?>
                            <h3><?php the_field('cards_card_two_heading'); ?></h3>
                        </div>
                        <div class="content">
                            <p><?php the_field('cards_card_two_text'); ?></p>
                            <a class="cta-button" href="<?php echo get_field('cards_card_two_button')['url'] ?>" target="<?php echo get_field('cards_card_two_button')['target'] ?>"><?php echo get_field('cards_card_two_button')['title'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="single-card">
                        <div class="heading">
                            <?php
                            $icon = get_field('cards_card_three_icon');
                            $ext = pathinfo( $icon, PATHINFO_EXTENSION );

                            if ($ext === 'svg') {
                                echo file_get_contents($icon);
                            } else {
                                echo '<img src='.$icon.' alt='.get_field('cards_card_three_heading').'/>';
                            }
                            ?>
                            <h3><?php the_field('cards_card_three_heading'); ?></h3>
                        </div>
                        <div class="content">
                            <p><?php the_field('cards_card_three_text'); ?></p>
                            <a class="cta-button" href="<?php echo get_field('cards_card_three_button')['url'] ?>" target="<?php echo get_field('cards_card_three_button')['target'] ?>"><?php echo get_field('cards_card_three_button')['title'] ?></a>
                        </div>
                    </div>
                </div>
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

    <?php if (get_field('testimonial_one_quote') && get_field('testimonial_two_quote') && get_field('testimonial_three_quote') && get_field('testimonial_four_quote')) { ?>
    <section id="testimonials">
        <div class="container">
            <h1><?php the_field('testimonials_heading'); ?></h1>
            <div class="splide" id="testimonials-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php if (get_field('testimonial_one_name') && get_field('testimonial_one_company') && get_field('testimonial_one_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_one_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_one_name') ?></strong>, <?php the_field('testimonial_one_company') ?></p>
                                 </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_two_name') && get_field('testimonial_two_company') && get_field('testimonial_two_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_two_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_two_name') ?></strong>, <?php the_field('testimonial_two_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_three_name') && get_field('testimonial_three_company') && get_field('testimonial_three_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_three_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_three_name') ?></strong>, <?php the_field('testimonial_three_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_four_name') && get_field('testimonial_four_company') && get_field('testimonial_four_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_four_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_four_name') ?></strong>, <?php the_field('testimonial_four_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_five_name') && get_field('testimonial_five_company') && get_field('testimonial_five_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_five_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_five_name') ?></strong>, <?php the_field('testimonial_five_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_six_name') && get_field('testimonial_six_company') && get_field('testimonial_six_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_six_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_six_name') ?></strong>, <?php the_field('testimonial_six_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_seven_name') && get_field('testimonial_seven_company') && get_field('testimonial_seven_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_seven_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_seven_name') ?></strong>, <?php the_field('testimonial_seven_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_eight_name') && get_field('testimonial_eight_company') && get_field('testimonial_eight_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_eight_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_eight_name') ?></strong>, <?php the_field('testimonial_eight_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_nine_name') && get_field('testimonial_nine_company') && get_field('testimonial_nine_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_nine_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_nine_name') ?></strong>, <?php the_field('testimonial_nine_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (get_field('testimonial_ten_name') && get_field('testimonial_ten_company') && get_field('testimonial_ten_quote')) { ?>
                            <li class="splide__slide">
                                <div class="testimonial">
                                    <p>“<?php the_field('testimonial_ten_quote') ?>”</p>
                                    <p><strong><?php the_field('testimonial_ten_name') ?></strong>, <?php the_field('testimonial_ten_company') ?></p>
                                </div>
                            </li>
                        <?php } ?>
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