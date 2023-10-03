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
                    <?php the_field('video_video'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <h1><?php the_field('testimonials_heading'); ?></h1>
            <div class="splide" id="testimonials-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonial">
                                <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed qu”</p>
                                <p><strong>Callum Grey</strong>, Customer</p>
                             </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial">
                                <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed qu”</p>
                                <p><strong>Callum Grey</strong>, Customer</p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial">
                                <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed qu”</p>
                                <p><strong>Callum Grey</strong>, Customer</p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial">
                                <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed qu”</p>
                                <p><strong>Callum Grey</strong>, Customer</p>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial">
                                <p>“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed qu”</p>
                                <p><strong>Callum Grey</strong>, Customer</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="booking">
        <div class="container">
            <h1><?php the_field('booking_heading'); ?></h1>
            <div class="row gx-md-5">
                <div class="col-md-6 mb-5 mb-md-0">
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
                        <a class="cta-button" href="#" onclick="PUM.open(<?php the_field('booking_callback_popup') ?>);"><?php the_field('booking_callback_button') ?></a>
                    </div>
                </div>
                <div class="col-md-6">
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
                        <a class="cta-button" href="#" onclick="PUM.open(<?php the_field('booking_discussion_popup') ?>);"><?php the_field('booking_discussion_button') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ACLP_COMPONENTS.'/footer.php'; ?>