<?php include ACLP_COMPONENTS.'/header.php'; ?>

<section id="cards">
    <div class="container">
        <h1><?php the_field('cards_heading'); ?></h1>
        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            
        </div>
    </section>

<?php include ACLP_COMPONENTS.'/footer.php'; ?>